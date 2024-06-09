<?php
    class Editor_model extends CI_Model {
        public function __construct()
        {
            parent::__construct();
        }
        public function get_products_data($product_id="", $temp, $temp_price) {
            $product_stages = json_decode(urldecode(base64_decode($this->db->select("stages")->from("products")->where("id", $product_id)->get()->row()->stages)));
            $stages = array();
            $sides = array();
            $temp_side = "";
            // print_r($temp);
            if($temp->no_of_stages==1 || $temp->temp_type=="part")
                $temp_side = $temp->side;
            if($temp->no_of_stages==2 && $temp->temp_type=="main")
                $temp_side = "both";
            if($temp_side=="both")
                $tmp_ids = json_decode($temp->template_ids);
            foreach($product_stages as $side => $product_stage):
                $stages_side = array();
                if($temp_side==$side || $temp_side=="both") {
                    $tupload = $temp->upload;
                    if($temp_side=="both")
                        $tupload = json_decode($temp->upload)->$side;
                    $temp_idss = (isset($tmp_ids))?$tmp_ids->$side:$temp->id;
                    $temp_stages = json_decode( str_replace('"styles":', '"template":["'.$temp_idss.'",'.$temp_price.'],"styles":', str_replace('"filters":', '"template":["'.$temp_idss.'",'.$temp_price.'],"filters":', urldecode(file_get_contents(base_url('uploads/'.$tupload))))) )->stages->lumise;
                    $stages_side["data"] = (object)$temp_stages->data;
                    $stages_side["screenshot"] = (object)$temp_stages->screenshot;
                    $sides[] = $side;
                } else {
                    $stages_side["data"] = (object)array("objects" => [null,null]); //Added for cart_id issue at 24/02/2021.
                }
                $stages_side["edit_zone"] = (object)$product_stage->edit_zone;
                $stages_side["image"] = base_url("uploads/".$product_stage->url);
                $stages_side["overlay"] = $product_stage->overlay;
                $stages_side["updated"] = time();
                $stages_side["product_width"] = $product_stage->product_width;
                $stages_side["product_height"] = $product_stage->product_height;
                $stages_side["devicePixelRatio"] = 1;
                $stages[$side] = (object)$stages_side;
                // $stages[$side] = $product_stage;
            endforeach;
            $temp_stages = array();
            $temp_price_arr = array();
            foreach($sides as $tside):
                $temp_ids = (isset($tmp_ids))?$tmp_ids->$tside:$temp->id;
                $temp_stages[$tside] = array($temp_ids);
                $temp_price_arr[$tside] = $temp_price;
                // $tside
            endforeach;
            $id = "";
            $sys_ver = "1.7.3";
            $options = (object)array("color" => $temp->color, "color_name" => get_colorname($temp->color));
            $template_data = 
            (object)array(
                "stages" => (object)$temp_stages,
                "price" => (object)$temp_price_arr
            );
            $data = (object)array(
                "created" => time(),
                "stages" => (object)$stages,
                "extra" => "",
                "updated" => time(),
                "name" => $temp->name,
                "id" => $id,
                "system_version" => $sys_ver,
                "options" => $options,
                "printing" => null,
                "product" => $product_id,
                "product_cms" => $product_id,
                "template" => $template_data
            );
            // echo "<pre>";print_r($data);exit;
            return $data;
        }

        public function get_templates_data($temp_id="") {
            if($temp_id=="")
                return false;
            // $sel = "id, product_base, upload, color, no_of_stages, side, temp_type, template_ids";
            $sel = "*";
            $temp = $this->db->select($sel)->from("templates")->where(['id' => $temp_id])->get()->row();
            if(!$temp)
                return false;
            
            $temp_price = $this->db->get_where("designer_charge", ['p_id' => $temp->product_base])->row()->price;
            $data = json_encode($this->get_products_data($temp->product_base, $temp, $temp_price));
            return $data;
            exit;

            /**
                $temps = array();
                if($temp->no_of_stages==2 && $temp->template_ids!="") {
                    foreach(json_decode($temp->template_ids) as $side=>$new_temp_id):
                        $temps[$side] = $this->db->select("id, upload, color, no_of_stages, side, temp_type, template_ids")->from("templates")->where(['id' => $new_temp_id])->get()->row();
                        $temps[$side]->color_name = get_colorname($temps[$side]->color);
                    endforeach;
                } else {
                    $temps[$temp->side] = $temp;
                    $temps[$temp->side]->color_name = get_colorname($temp->color);
                }
                $temp_price = $this->db->get_where("designer_charge", ['p_id' => $temp->product_base])->row()->price;
                // $act_data = json_encode($this->get_products_data($temp->product_base, $temp, $temp_price));
                // return $act_data;
                return json_encode(array("temp" => $temps, "temp_price" => $temp_price));
                exit;
            **/

            /**
                $sides = ["front", "back"];
                if($temp->no_of_stages==1)
                    $side = $temp->side;
                $pre = '{"created":'.time().',';//1611273213218
                // $pre = '{"created":1613341853214,"stages":{';
                $post_extras = '},"extra":{},"updated":1613341853.1340000629425048828125';
                // $template_data = '{"stages":{"front":["70"],"back":["61"]},"price":{"front":30,"back":30}}';
                $template_data = '{"stages":{"front":["70"],"back":["61"]},"price":{"front":30,"back":30}}';
                $post = ',"name":"'.$temp->name.'","id":"KK7IGW7Z","system_version":"1.7.3.997","options":{"size":"S","quantity":"1","color":"'.$temp->color.'"},"printing":null,"product":'.$temp->product_base.',"product_cms":'.$temp->product_base.',"template":{"stages":{"front":["'.$temp_id.'"]},"price":{"front":'.$temp_price.'}}}';
                $data = urldecode(file_get_contents(base_url('uploads/'.$temp->upload)));
                // $data_front = str_replace("lumise", "front", str_replace("arteno.in", "arteno5.anshuwap.com", substr($data, 1, -1)));
                $data_front = explode('},"updated"', str_replace('lumise', 'front', str_replace("arteno.in", "arteno5.anshuwap.com", substr($data, 1, -1))))[0];
                $data_back = str_replace('stages":{"lumise', 'back', str_replace("arteno.in", "arteno5.anshuwap.com", substr($data, 1, -1)));
                $data_merge = $data_front."},".$data_back;
                $data_both = str_replace('"filters":', '"template":["'.$temp_id.'",'.$temp_price.'],"filters":', str_replace(',"colors"', ',"price":0,"colors"', $data_merge ));
                // $data = str_replace(',"colors"', ',"price":0,"colors"', str_replace("lumise", "front", str_replace("arteno.in", "arteno3.anshuwap.com", substr($data, 1, -1))));
                $data = str_replace('"filters":', '"template":["'.$temp_id.'",'.$temp_price.'],"filters":', str_replace(',"colors"', ',"price":0,"colors"', str_replace("lumise", "front", str_replace("arteno.in", "arteno5.anshuwap.com", substr($data, 1, -1)))));
                // return $pre.$data_both.$post;
                return $pre.$data.$post;
                // return file_get_contents(base_url("uploads/share_data/2021/01/vb6KUPPtIk.mytpl"));
            **/
        }
        
        public function get_wishlist_data($wishlist_id="") {
            if($wishlist_id=="")
                return false;
            $wishlist = $this->db->get_where("wishlist", ['id' => $wishlist_id])->row();
            if(!$wishlist)
                return false;
            if($wishlist->type=="designer"){
                $templates=json_decode($wishlist->cart_data)->template_id;
                $temp=json_decode($templates);
                $temp_id=$temp['0'];
                $temp = $this->db->get_where("templates", ['id' => $temp_id])->row();
                if(!$temp)
                    return false;

                $temp_price = $this->db->get_where("designer_charge", ['p_id' => $temp->product_base])->row()->price;
                $data = json_encode($this->get_products_data($temp->product_base, $temp, $temp_price));
            } else {
                $data = file_get_contents(base_url('uploads/cart_data/'.$wishlist->file.'.mytpl'));
            }
            return $data;
        }
        
        public function get_cart_id($cart_id="") {
            if($cart_id=="")
                return false;
        if($this->session->userdata('user_id')) {
            $cart_item = $this->db->get_where("user_cart", ['id' => $cart_id])->row();
            if(!$cart_item)
                return false;
               
            if($cart_item->type=="designer"){
                $templates=json_decode($cart_item->cart_data)->template_id;
                $temp=json_decode($templates);
                $temp_id=$temp['0'];
                $temp = $this->db->get_where("templates", ['id' => $temp_id])->row();
                if(!$temp)
                    return false;

                $temp_price = $this->db->get_where("designer_charge", ['p_id' => $temp->product_base])->row()->price;
                $data = json_encode($this->get_products_data($temp->product_base, $temp, $temp_price));

                // $temp_price = $this->db->get_where("designer_charge", ['p_id' => $temp->product_base])->row()->price;
                // $options = '{"size":"'.$cart_item->size.'","quantity":"'.$cart_item->qty.'","color":"'.$cart_item->color.'"}';
                // $temp_stages = '{"front":["'.$temp_id.'"]}';
                // $temp_price = '{"front":'.$temp_price.'}';
                // $template = '{"stages":'.$temp_stages.',"price":'.$temp_price.'}}';
                // $pre = '{"created":'.time().',';//1611273213218
                // $post = ',"name":"'.$temp->name.'","id":"KK7IGW7Z","system_version":"1.7.3.997","options":'.$options.',"printing":null,"product":'.$temp->product_base.',"product_cms":'.$temp->product_base.',"template":'.$template;
                // $data = urldecode(file_get_contents(base_url('uploads/'.$temp->upload)));
                // $data = str_replace('"filters":', '"template":["'.$temp_id.'",'.$temp_price.'],"filters":', str_replace(',"colors"', ',"price":0,"colors"', str_replace("lumise", "front", str_replace("arteno.in", "arteno3.anshuwap.com", substr($data, 1, -1)))));
                // return $pre.$data.$post;
            } else{
                $cart_file_name = 'uploads/cart_data/'.$cart_item->file.'.mytpl';
                if(!file_exists(__DIR__.'/../../'.$cart_file_name))
                    $cart_file_name = 'uploads/wishlist_data/'.$cart_item->file.'.mytpl';
                $data = file_get_contents(base_url($cart_file_name));
            }
        } else {
            $user_cart=$this->session->userdata('user_cart');
            foreach($user_cart as $key=>$cart_items) {
                if($key==$cart_id){
                    if($cart_items['type']=="designer"){
                        $templates=json_decode($cart_items['cart_data'])->template_id;

                        $temp=json_decode($templates);
                        $temp_id=$temp['0'];
                        $temp = $this->db->get_where("templates", ['id' => $temp_id])->row();
                        if(!$temp)
                            return false;
                        
                        // $temp_price = $this->db->get_where("designer_charge", ['p_id' => $temp->product_base])->row()->price;
                        // $options = '{"size":"'.$cart_items['size'].'","quantity":"'.$cart_items['qty'].'","color":"'.$cart_items['color'].'"}';
                        // $temp_stage = array();
                        // $tmp_price = array();
                        // if($temp->temp_type=="main" && $temp->side=="both" && $temp->template_ids) {
                        //     $tuploads = json_decode($temp->upload);
                        //     foreach(json_decode($temp->template_ids) as $side=>$tid) {
                        //         $temp_stage[$side] = [$tid];
                        //         $tmp_price[$side] = $temp_price;
                        //         $data = json_decode(urldecode(file_get_contents(base_url('uploads/'.$tuploads->$side))));
                        //         // $temp_side_data = str_replace("lumise", $side, str_replace("arteno.in", "arteno6.anshuwap.com", substr($data, 1, -1)));
                        //         $temp_side_data[$side] = $data->stages->lumise;
                        //         $temp_template_data = '["'.$tid.'",'.$temp_price.']';
                        //         // $act_side_data[] = str_replace('"filters":', '"template":'+$temp_template_data+',"filters":', str_replace(',"colors"', ',"price":0,"colors"', $temp_side_data ));
                        //         // $act_side_data[] = str_replace(',"colors"', ',"price":0,"colors"', $temp_side_data );
                        //     }
                        //     $both_side = json_encode($temp_side_data);
                        // } else {
                        //     $temp_stage[$temp->side] = [$temp->id];
                        //     $tmp_price[$temp->side] = $temp_price;
                        //     $data = urldecode(file_get_contents(base_url('uploads/'.$temp->upload)));
                        //     $data = str_replace('"filters":', '"template":["'.$temp_id.'",'.$temp_price.'],"filters":', str_replace(',"colors"', ',"price":0,"colors"', str_replace("lumise", $temp->side, str_replace("arteno.in", "arteno6.anshuwap.com", substr($data, 1, -1)))));
                        // }
                        // $data = $both_side;
                        // $temp_stages = json_encode($temp_stage);
                        // $tmp_prices = json_encode($tmp_price);
                        // // print_r($temp);exit;
                        // $template = '{"stages":'.$temp_stages.',"price":'.$tmp_prices.'}}';
                        // $pre = '{"created":'.time().',"stages":,';//1611273213218
                        // $post = ',"name":"'.$temp->name.'","id":"KK7IGW7Z","system_version":"1.7.3.997","options":'.$options.',"printing":null,"product":'.$temp->product_base.',"product_cms":'.$temp->product_base.',"template":'.$template;
                        // return $pre.$data.$post;

                        $temp_price = $this->db->get_where("designer_charge", ['p_id' => $temp->product_base])->row()->price;
                        $data = json_encode($this->get_products_data($temp->product_base, $temp, $temp_price));
                    } else{
                        $cart_file_name = 'uploads/cart_data/'.$cart_items['file'].'.mytpl';
                        if(!file_exists(__DIR__.'/../../'.$cart_file_name))
                            $cart_file_name = 'uploads/wishlist_data/'.$cart_items['file'].'.mytpl';
                        $data = file_get_contents(base_url($cart_file_name));
                    // $data = file_get_contents(base_url('uploads/cart_data/'.$cart_items['file'].'.mytpl'));
                    }
                }
            }
        }
            return $data;
        }
        
          public function order_design_print($order_id="") {
            if($order_id=="")
                return false;
                
            $order = $this->db->get_where("order_products", ['id' => $order_id])->row();    
            if($order->type=="designer"){
                $temp_id=$order->temp_id;
                $temp = $this->db->get_where("templates", ['id' => $temp_id])->row();
            if(!$temp)
                return false;
                
                $temp_price = $this->db->get_where("designer_charge", ['p_id' => $temp->product_base])->row()->price;
                $data = json_encode($this->get_products_data($temp->product_base, $temp, $temp_price));
            // $pre = '{"created":'.time().',';//1611273213218
            // $post = ',"name":"'.$temp->name.'","id":"KK7IGW7Z","system_version":"1.7.3.997","options":{"size":"S","quantity":"1","color":"'.$temp->color.'"},"printing":null,"product":'.$temp->product_base.',"product_cms":'.$temp->product_base.',"template":{"stages":{"front":["'.$temp_id.'"]},"price":{"front":30}}}';
            // $data = urldecode(file_get_contents(base_url('uploads/'.$temp->upload)));
            // // $data = str_replace(',"colors"', ',"price":0,"colors"', str_replace("lumise", "front", str_replace("arteno.in", "arteno3.anshuwap.com", substr($data, 1, -1))));
            // $data = str_replace('"filters":', '"template":["'.$temp_id.'",'.$temp_price.'],"filters":', str_replace(',"colors"', ',"price":0,"colors"', str_replace("lumise", "front", str_replace("arteno.in", "arteno3.anshuwap.com", substr($data, 1, -1)))));
            // return $pre.$data.$post;
            } else{
                // $data='yes';
                $cart_file_name = 'uploads/cart_data/'.$order->design.'.mytpl';
                if(!file_exists(__DIR__.'/../../'.$cart_file_name))
                    $cart_file_name = 'uploads/wishlist_data/'.$order->design.'.mytpl';
                $data = file_get_contents(base_url($cart_file_name));
                //  $data = file_get_contents(base_url('uploads/cart_data/'.$order->design.'.mytpl'));
            }
            return $data;
        }
        
        public function get_design_cart_id($temp_id="",$cart_id="") {
            if($temp_id=="")
                return false;
            $temp = $this->db->get_where("templates", ['id' => $temp_id])->row();
            if(!$temp)
                return false;
            $pre = '{"created":'.time().',';//1611273213218
            $post = ',"name":"'.$temp->name.'","id":"KK7IGW7Z","system_version":"1.7.3.997","options":{"size":"S","quantity":"1","color":"'.$temp->color.'"},"printing":null,"product":'.$temp->product_base.',"product_cms":'.$temp->product_base.',"template":{"stages":{"front":["'.$temp_id.'"]},"price":{"front":30}}}';
            $data = urldecode(file_get_contents(base_url('uploads/'.$temp->upload)));
            $data = str_replace(',"colors"', ',"price":0,"colors"', str_replace("lumise", "front", str_replace("arteno.in", "arteno3.anshuwap.com", substr($data, 1, -1))));
            return $pre.$data.$post;
            // return file_get_contents(base_url("uploads/share_data/2021/01/vb6KUPPtIk.mytpl"));
        }

        public function is_wishlist($id){
            $query = $this->db->get_where('wishlist', array('id'=>$id));
            return $count = $query->num_rows();
            
        }
        public function count_wishlist($type){
            $user_id=$this->session->userdata('user_id');
            $query = $this->db->get_where('wishlist', array('type'=>$type,'user_id'=>$user_id));
            return $count = $query->num_rows();
        }
        
        public function getBackSideCharge($temp_id="") {
            $backSideCharge = 0;
            $temp = $this->db->select("product_base, no_of_stages")->from("templates")->where(['id' => $temp_id])->get()->row();
            if($temp->product_base==2 && $temp->no_of_stages>1)
                $backSideCharge = 150;
            return $backSideCharge;
        }
        
        public function getSidenCharge($temp_id="") {
            $backSideCharge = 0;
            $temp = $this->db->select("product_base, no_of_stages, template_ids")->from("templates")->where(['id' => $temp_id])->get()->row();
            if($temp->product_base==2 && $temp->no_of_stages>1)
                $backSideCharge = 150;
            return (object)array("side_charge" => $backSideCharge, "no_of_stages" => $temp->no_of_stages, "template_ids" => $temp->template_ids);
        }

        public function getTempIds($temp_id) {
            $temp_ids = array();
            $temp = $this->db->select("temp_type, side, temp_ids")->from("templates")->where(['id' => $temp_id])->get()->row();
            if($temp->temp_type=="main" && $temp->side=="both" && $temp->temp_ids!=NULL) {
                foreach(json_decode($temp->temp_ids) as $temp_idss):
                    $temp_ids[] = $temp_idss;
                endforeach;
            } else {
                $temp_ids[] = $temp_id;
            }
            return $temp_ids;
        }
    }