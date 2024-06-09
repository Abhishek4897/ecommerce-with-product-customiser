<?php

    function wish_count()
     {
        $CI = &get_instance();
        if(isset($_SESSION['user_id'])){
        $wish = $CI->db->where('user_id',$_SESSION['user_id'])->get("wishlist")->num_rows();
        return $wish;
        }else{
            return 0;
        }
    }

    function cart_count_qty()
    {
        $CI = &get_instance();
        if(isset($_SESSION['user_id'])) {
            // $wish = $CI->db->where('user_id', $_SESSION['user_id'])->get("user_cart")->num_rows();
            $wish = $CI->db->select("SUM(qty) as total")->where('user_id', $_SESSION['user_id'])->get("user_cart")->row()->total;
            return ($wish)??0;
        } else {
            $data = $_SESSION['user_cart'];
            $total= 0;
            foreach($data as $d) {
                // print_r($d);exit;
                $total += $d['qty'];
                // $total++;
            }
            return $total;
        }
    }

    function cart_count()
    {
        return cart_count_qty();
        // $CI = &get_instance();
        // if(isset($_SESSION['user_id'])){
        // $wish = $CI->db->where('user_id',$_SESSION['user_id'])->get("user_cart")->num_rows();
        // return $wish;
        // }else{
        //     $data = $_SESSION['user_cart'];
        //      $total= 0;
        //      foreach($data as $d){
        //       $total++;
        //      }
        //       return $total;
        // }
    }

    function cart_total(){
        $CI = &get_instance();
        if(isset($_SESSION['user_id'])){
               $total=0;
             $id = $_SESSION['user_id'];
             $t = $CI->Front_model->cart_total();
           foreach($t as $d){
                 $price = json_decode($d->price);
                  $price = $price->total;
                  $total = $total+$price;
             }
              return $total;
         }else{
             $data = $_SESSION['user_cart'];
             $total= 0;
             foreach($data as $d){
                 $price = $d["price"];
                 $price = json_decode($price);
                 $price = $price->total;
                 $total = $total+$price;
             }
              return $total;
         }
    }
    ///black t shirt price//
    function t_shirt_price($color, $base, $temp_id){
              $t = &get_instance();
              $rs = currency();
              $data = $t->db->select("products.extras,products.price,products.mrp,templates.no_of_stages,products.backSideCharge,designer_charge.price as designerCharge")
                         ->from("products")
                         ->join("templates",'products.id = templates.product_base')
                         ->join("designer_charge",'products.id = designer_charge.p_id')
                         ->where(['templates.id'=>$temp_id,'products.id'=>$base])
                         ->get()
                         ->row();
                $extra = json_decode($data->extras);
                
                $designer_charge=0;
                $stage = $data->no_of_stages;
                
                $backCharge = ($stage>1)?$data->backSideCharge:0;
                               
                $designer_charge = $data->designerCharge*$stage;

                if(in_array($color,$extra->color)){
                    $mrp =  $data->mrp + $extra->amount + $designer_charge +$backCharge;
                    $product_price = $data->price + $extra->amount; // + $designer_charge +$backCharge;
                    $price = $data->price + $extra->amount + $designer_charge +$backCharge;
                }else{
                    $mrp =  $data->mrp + $designer_charge +$backCharge;
                    $product_price = $data->price; //+ $designer_charge +$backCharge;
                    $price = $data->price + $designer_charge +$backCharge;
                }
                $discount = floor((($mrp - $price)/$mrp)*100);
                $data =  array(
                    'price' =>"$rs  $price",
                    'mrp' =>" $rs  $mrp",
                    'off' =>  "(". $discount.'%'." off".")",
                    'actual_price'=> $price,
                    'side_charge'=> $backCharge,
                    'designer_charge'=> $designer_charge,
                    'product_price'=> $product_price
                );
                         
        return  json_encode($data);
    }
    function t_shirt_pricemobile($color , $base, $temp_id){
        $data = t_shirt_price($color, $base, $temp_id);
        return $data;
        //       $t = &get_instance();
        //       $rs = currency();
        //       $data = $t->db->select("products.extras,products.price,products.mrp,designer_charge.price as designerCharge")
        //                  ->from("products")
        //                  ->join("templates",'products.id = templates.product_base')
        //                  ->join("designer_charge",'products.id = designer_charge.p_id')
        //                  ->where(['templates.id'=>$temp_id,'products.id'=>$base])
        //                  ->get()
        //                  ->row();
        //         $extra = json_decode($data->extras);
        //         $mrp = $data->mrp;
        //         $designer_charge=0;
                
        //         if($base == 2){
        //             $designer_charge = 30;
        //         }else{
        //             $designer_charge =20;
        //         }
        //         if(in_array($color,$extra->color)){
        //             $price = $data->price + $extra->amount + $designer_charge ;
        //         }else{
        //             $price = $data->price+$designer_charge;
        //         }
        //         $discount = floor((($mrp - $price)/$mrp)*100);
        //          $data =  array(
        //                       'price' =>"$rs  $price ",
        //                       'mrp' =>" $rs  $mrp ",
        //                       'off' =>  "(". $discount."%"." off ".")",
                             
        //                  );
        // return json_encode($data);
                    
               
    }
    
    function isJSON($string){
  return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
}
    function product_slider($id){
        $CI  = &get_instance();
        $data = $CI->Front_model->sliderData($id);
        $side = $data->side;
        $screenshot =  isJSON($data->screenshot)?json_decode($data->screenshot):$data->screenshot;
        $temIds = ($data->template_ids!="")?json_decode($data->template_ids):"";
        $baseId = $data->pid;
        $color = $data->color;
        $count = 0;
        $i=0;
        $out = array();
        if($baseId == 2){
            $count = 2; //4
        }else if($baseId == 3){
              $count = 2;
        }else{
             $count = 2;
        }
        // if($baseId != 4){
        for($i=1; $i<=$count; $i++){
            if($i==1) $cside = "front";
            
            if($i==2 && $baseId!=4) $cside = "back";
            if($i==2 && $baseId==4) $cside = "left";
            
            if($i==3 && $baseId==2) $cside = "left";
            if($i==3 && $baseId==3) $cside = "side";
            if($i==3 && $baseId==4) $cside = "right";
            
            if($i==4 && $baseId==2) $cside = "right";
            
            if($i==1 || $i==2):
                if(isJSON($data->screenshot)) {
                    if($i==1) {
                        if($temIds!=""){
                            if($i == '1' && $side == "both"){
                                $data1 = $CI->Front_model->bothData1($temIds);
                                $both = $data1;
                                foreach($both as $b){
                                    $out[] = $b->image;
                                }
                                $i=2;
                            }
                        } else if($i=="1" && $side == "front") {
                            $out[] = $screenshot->front;
                            $i=2;
                        } else {
                            // $out[] = base_url().'uploads/templates/'.$data->baseslug.'-'."black".'-side'. $i .'.png" alt="First slide' ;
                            $out[] = getProductExtraImages($baseId, "front").'" style="background-color: '.$color;
                        }
                    } else if($i == '2') {
                        if($i == '2' &&  $side == "back") {
                            $out[] =$screenshot->back;
                            $i=3;
                        } else {
                            // $out[] = base_url().'uploads/templates/'.$data->baseslug.'-'."black".'-side'. $i .'.png" alt="First slide';
                            $out[] = getProductExtraImages($baseId, "back").'" style="background-color: '.$color;
                        }
                    }
                    // $out[] = base_url().'uploads/templates/'.$data->baseslug.'-'."black".'-side'. $i .'.png" alt="First slide';
                } else {
                    if(($i == '1' && $side=="front") || ($i == '2' && $side=="back")) {
                        $out[] = $data->image;
                    } else {
                        $out[] = getProductExtraImages($baseId, $cside).'" style="background-color: '.$color;
                    }
                //   $out[] = base_url().'uploads/templates/'.$data->baseslug.'-'."black".'-side'. $i .'.png" alt="First slide' ; 
                    // $out[] = getProductExtraImages($baseId, "right").'" style="background-color: '.$color;
                }
            else:
                $out[] = getProductExtraImages($baseId, $cside).'" style="background-color: '.$color;
            endif;
        }    
        // }else{
            // $out[] = $data->image;
        // }
        return $out;
    }

    function designer_data() {
        $CI = &get_instance();
        $data = $CI->db->where('id',$_SESSION['user_id'])->get("users")->row();
        return $data;
    }
    function calculate_sales_payout($payout_qty, $designer_charge) {
        $bonus_per = 100;
        if($payout_qty>=5)
            $bonus_per = 150;
        if($payout_qty>=10)
            $bonus_per = 200;
        if($payout_qty>=20)
            $bonus_per = 250;
        if($payout_qty>=30)
            $bonus_per = 300;
        if($payout_qty>=40)
            $bonus_per = 400;
        if($payout_qty>=50)
            $bonus_per = 500;
        $total_sales_payout = ($designer_charge*$payout_qty*$bonus_per)/100;
        return $total_sales_payout;
    }

    function calculate_extra_payouts($payout_qty, $total_payout) {
        $bonus_per = 100;
        if($payout_qty>=5)
            $bonus_per = 150;
        if($payout_qty>=10)
            $bonus_per = 200;
        if($payout_qty>=20)
            $bonus_per = 250;
        if($payout_qty>=30)
            $bonus_per = 300;
        if($payout_qty>=40)
            $bonus_per = 400;
        if($payout_qty>=50)
            $bonus_per = 500;
        $total_sales_payout = (($total_payout*$bonus_per)/100) - $total_payout;
        return $total_sales_payout;
    }
    function calculate_payout_extras($payout_qty, $template_id) {
        $extras = 0;
        $CI = &get_instance();
        $designer_charge = $CI->db->select("designer_charge.price")->join("designer_charge", "designer_charge.p_id=templates.product_base")->where(['templates.id' => $template_id])->get("templates")->row()->price;
        $calculate_sales_payout = calculate_sales_payout($payout_qty, $designer_charge);
        $extras = $calculate_sales_payout - ($payout_qty*$designer_charge);
        return $extras;
    }
    function check_cancel_order($order_id)
        {
        $CI = &get_instance();
        $order = $CI->db->where('order_id',$order_id)->get("cancel_order")->row();
        return $order;
    } 
?>