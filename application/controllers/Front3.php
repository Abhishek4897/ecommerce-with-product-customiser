<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include_once APPPATH . 'third_party/instagram/instagram.php';
class Front extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper('slug_helper');
        $this->load->helper('color_helper');
        // $this->load->library('cart');
        
    }
    
    // public function test() {
    //     $opts = [
    //         "http" => [
    //             "method" => "GET"
                
    //         ]
    //     ];
    //     $context = stream_context_create($opts);
    //     $q =  file_get_contents('https://www.instagram.com/anshuwap', false, $context);
    //     // $instagram = new InstagramController();
    //     // $inst_check = $instagram->check(['name' => "anshuwap", 'data' => null]);
    //     print_r($q);
    // }
    public function page_404($s) {
        $this->load->view('page_404');
    }
  
    public function products($slug) {
        $q = "SELECT slug, name FROM categories where active ='1' AND  type='templates'" ;
        $q1 = "SELECT slug, name FROM products where active ='1'" ;
        $data['category'] = $this->Front_model->arraydata($q);
        $data['category1'] = $this->Front_model->arraydata($q1);
        $data['designer'] = $this->Front_model->product_designer_list($this->input->post("search_designer"));
        $data['slug'] = $slug ;
        $data['search_designer'] = $this->input->post("search_designer");
        $this->load->view('arteno/product', $data);
    }
    function designerList(){
        $designer = $this->Front_model->product_designer_list($this->input->post("search_designer"));
        $i = 1;
        if(count($designer)>0){
        foreach($designer as $d){
           $out =  $out.'<div class="form-group mb-0">
                       
                        <div class="form-check">
                            <label class="custom-checkbox-designer" for="desktop'.$d->id.'">'.$d->user_fullname.'
                             <input class="designer-search-checkbox"  onclick ="category_data(cat_slug,scroll=\'inactive\',offset=0)" type="checkbox" id="desktop'.$d->id.'" value="'.$d->id.'"/>
                            <span class="checkmark"></span>
                            </label>
                            </div>
                        </div>';
                        
                        
                           $out1 =  $out1.'<div class="form-group mb-0">
                            <div class="form-check">
                            <label class="custom-checkbox-designer" for="mdesigner'.$d->id.'">'.$d->user_fullname.'
                              <input class="designer-search-checkbox"  onclick ="category_data(cat_slug,scroll=\'inactive\',offset=0)" type="checkbox" id="mdesigner'.$d->id.'" value="'.$d->id.'"/>
                            <span class="checkmark"></span>
                            </label>
                            </div>
                        </div>';
        $i++;
            
        }
        }else{
            $out = '<center>No data found</center>';
            $out1 = '<center>No data found</center>';
        }
        echo json_encode(['data'=>$out,'mdata'=>$out1]);
   }
    public function category_data(){
        $slug = $this->input->post("Slug");
        $pslug = $this->input->post("product_slug");
        $designer = $this->input->post("Design");
        $price = $this->input->post("price");
        $offset = $this->input->post("offset");
        $id =  getid($pslug);
        $catid = get_id($slug);
        if($catid==0)
            $catid = "";
        $data['data'] = $this->Front_model->productdatacat($id,$designer,$price,$offset,$catid);
        $data['query'] = $this->db->last_query();
        echo json_encode($data); 
    }
    ///Product Details/.//
    public function product_details($slug="", $temp_id=""){
        $data['templete'] = $this->Front_model->product_details($temp_id);
        if(!is_object($data['templete']) || count((array)$data['templete'])==0)
            redirect(base_url());
                $catid = getid($slug);
        $data['related_product'] = $this->Front_model->related_products($data['templete']->designed_by,$temp_id, $catid);
        // $data['related_product'] = $this->Front_model->related_products($data['templete']->designed_by,$temp_id);
        $data['currency'] = currency();
        $this->load->view('arteno/product_detail',$data);
    }

    public function product_details1($slug="", $temp_id=""){
        $data['templete'] = $this->Front_model->product_details($temp_id);
        if(!is_object($data['templete']) || count((array)$data['templete'])==0)
            redirect(base_url());
        $catid = getid($slug);
        $data['related_product'] = $this->Front_model->related_products($data['templete']->designed_by,$temp_id, $catid);
        $data['currency'] = currency();
        $this->load->view('arteno/product_detail',$data);
    }
    //product cart //
    public function add_cart()
    {
        $user_id=$this->session->userdata('user_id');
        // $qty =   $this->input->post('Qty');
        $color =  $this->input->post('color');
        $pid =  $this->input->post('base');
        $size = ($pid==2)?$this->input->post('Size'):"";
        $colorname =   get_colorname($color);
        $product_price=$this->input->post('base_price');
        $base_price=$this->input->post('Price');
        $temp_id = $this->input->post('Id');
        $qty = $this->input->post('Qty');
        $stockqty =  $this->Stock_model->calculate_stock($pid, $colorname, $size);
        if($stockqty > $qty){
            $getSidenCharge = getSidenCharge($temp_id, $pid);
            $backSideCharge = $getSidenCharge->side_charge;
            if($pid==2){
                $designer_charge =  $this->Admin_model->profit($pid)*$getSidenCharge->no_of_stages;
            }else{
                $designer_charge =  $this->Admin_model->profit($pid);
            }
            $total_price = $base_price; //+ $backSideCharge + $designer_charge;
            $price = array(
                'total'=>$total_price*$qty,
                'resource'=>0,
                'template'=>$designer_charge,//*$qty
                'side_charge' => ($backSideCharge)?$backSideCharge:0,
                'base'=>$product_price,
            );
            $totalprice = json_encode($price);
            if($user_id) {
                $update_cart= cart_update($temp_id,$qty,$size);
                if($update_cart['status']=='success') {
                    $total_qty = $update_cart['qty'];
                    $cart_id   = $update_cart['cart_id'];
                    $price = array(
                        'total'=>$base_price* $total_qty,
                        'resource'=>0,
                        'template'=>$designer_charge, //*$total_qty
                        'side_charge' => ($backSideCharge)?$backSideCharge:0,
                        'base'=>$product_price
                    );
                    $data['qty'] = $total_qty;
                    $data['price'] = json_encode($price);
                    $this->db->where(array('id'=>$cart_id,'user_id'=>$_SESSION['user_id']));
                    $this->db->update('user_cart', $data);
                    echo '1';
                } else {
                    $data =array(
                        'user_id'=>($user_id)?$user_id:'0',
                        'color' => $this->input->post('color'),
                        'file'=>null,
                        'type'=>"designer",
                        'price'=>$totalprice,
                        'size'=>($size)?$size:null,
                        'qty'=>$qty,
                        'temp_id'=>$temp_id,
                    );
                    $product_image=array(
                        'front'=>$this->input->post('image')
                    );
                    // $temp_ids = getTempIds($temp_id);
                    $temp_ids = array($temp_id);
                    $cart_details = array(
                        'id'=> $this->input->post('base'),
                        'cart_id'=>null,
                        'product_name'=>$this->input->post('Name'),
                        'design'=>null,
                        'template_id'=>json_encode($temp_ids),
                        'screenshots'=>$product_image
                    );
                    $cart_data = json_encode($cart_details);
                    $data["cart_data"] = $cart_data;
                    if($this->Front_model->insert_data($data,"user_cart")){
                        echo '1';
                    } else {
                        echo '0';
                    }
                }
            } else {
                $base_id = $pid;
                $prod_name = $this->input->post('Name');
                $tmp_cart_key = trim("T".$temp_id."P".$base_id."S".$size."C".$color);
                $old_data = $this->session->userdata("user_cart");
                $update_cart_st = -1; //updated for proper conunting and diff from 0 and false.
                if(is_array($old_data)) {
                    foreach($old_data as $key => $old_cart):
                        if($old_cart[$tmp_cart_key]==true)
                            $update_cart_st = $key;
                    endforeach;
                }
                if($update_cart_st==-1) {
                    $data =array(
                        'user_id'=>($user_id)?$user_id:'0',
                        'color' => $color,
                        'file'=>null,
                        'type'=>"designer",
                        'price'=>$totalprice,
                        'size'=>($size)?$size:null,
                        'qty'=>$qty,
                        'temp_id'=>$temp_id,
                        $tmp_cart_key => true
                    );
                    $product_image=array(
                        'front'=>$this->input->post('image')
                    );
                    $cart_details = array(
                        'id'=> $base_id,
                        'cart_id'=>null,
                        'product_name'=>$prod_name,
                        // 'design'=>null,
                        'template_id'=>json_encode(array($temp_id)),
                        'screenshots'=>$product_image
                    );
                    $data["cart_data"] = json_encode($cart_details);
    
                    if(is_array($old_data))
                        $updated_data = array_merge($old_data, array($data));
                    else
                        $updated_data[] = $data;
                } else {
                    $old_data[$update_cart_st]['qty'] += $qty;
                    $price = array(
                        'total'=>$total_price*$old_data[$update_cart_st]['qty'],
                        'resource'=>0,
                        'template'=>$designer_charge,//*$qty
                        'side_charge' => $backSideCharge,
                        'base'=>$product_price,
                    );
                    $totalprice = json_encode($price);
                    $old_data[$update_cart_st]['price'] = $totalprice;
                    $updated_data = $old_data;
                }
                $this->session->set_userdata("user_cart", $updated_data);
                echo '1';
            }
        } else {
            echo '0';
        }
    }
    public function remove_cart(){
        $id =   $this->input->post('Id');
        $cart_id =   $this->input->post('cart_id');
        $q = "DELETE FROM user_cart WHERE id= '$cart_id'";
        $this->Front_model->remove_cart($q);
        if($this->Front_model->remove_cart($q)){
            $this->cart->remove($id);
            echo cart_count() ;
        }
    }
    ///move to cart ///
    function movecart(){
        // print_r($this->input->post());exit;
        $backSideCharge = 0;
        $wish_id = $this->input->post("wishid");
        $user_id=$this->session->userdata('user_id');
        $wishdetails =  $this->Front_model->get_wishitem($wish_id);
        $qty =   $this->input->post('qty');
        $size = $this->input->post('size');
        $pid =  $this->input->post('base_id');
        $colorname =   get_colorname($wishdetails->color);
        $temp_id = $this->input->post('temp_id');
        $stockqty =  $this->Stock_model->calculate_stock($pid, $colorname, $size);
        if( $stockqty > $qty) {
            $backSideCharge = getBackSideCharge($temp_id, $pid);
            $pricedetail=json_decode($wishdetails->price);
            $total_price=$pricedetail->base + $pricedetail->template + $backSideCharge;
                $price =array(
                      'total'=>($total_price) * $qty, // + $pricedetail->template + $backSideCharge
                      'resource'=>0,
                      'template'=>$pricedetail->template,
                      'side_charge' => $backSideCharge,
                      'base'=>$pricedetail->base,
                      );
                 $totalprice = json_encode($price);
                 $data =array(
                    'user_id'=>($user_id)?$user_id:'0',
                    'color' => $wishdetails->color,
                    'file'=>$wishdetails->file,
                    'type'=>$wishdetails->type,
                    'price'=>$totalprice,
                    'size'=>($size)?$size:null,
                    'qty'=>$qty,
                    'cart_data'=>$wishdetails->cart_data,
                    );
            if($this->Front_model->insert_data($data,"user_cart")){
               $this->Front_model->removewishlist($wish_id);
                echo 1;
            } else{
                echo 0;
                }    
        } else {
            echo 0;
        }
    }
    public function cart_item() {
        echo cart_count();
        // if(isset($_SESSION['user_id'])) {
        //     $id = $_SESSION['user_id'];
        //     $q = "select * from user_cart where user_id = '$id' ";
        //     $data =   $this->Front_model->arraydata($q);
        //     echo trim(count($data));
        // } else {
        //     $data = $_SESSION['user_cart'];
        //     echo trim(count($data));
        // }
    }
    
    //Cart Total Price//
    public function cart_totalprice() {
        echo cart_total();
    }

public function cart_list_item(){
     if(isset($_SESSION['user_id'])){
       $id = $_SESSION['user_id'];
       $q = "select * from user_cart  where user_id = '$id' ORDER BY id DESC  ";
    $data =  $this->Front_model->arraydata($q);
   $r = currency();
        if(count($data)>0){
     $out = '';
     $mout ='';
     $cartitems = array();
     foreach ($data  as $items): 
        
                  $price = $items->price;
                  $p = json_decode($price);
                  $cart_data = $items->cart_data;
                  $cart = json_decode($cart_data);
                  $product = related_base($cart->id);
                  $slug = $product->slug;
                  $t_id = json_decode($cart->template_id);
                
                 
            //   $img = related_product($items->temp_id);
               $img ='';
               if($t_id[0]!="" && $t_id[0]!=null){
                     $key = related_product($t_id[0])->template_ids;
                     $data = json_decode($key);
                     $ids = [$data->front,$data->back];
                     $ds = $this->db->select('image')->from("templates")->where_in('templates.id',$ids)->get()->result();
                     if($key!="" && $key != null ){
                         foreach($ds as $image){
                          $img = $img .'<img src="'.$image->image.'" alt="item" >';
                          }    
                    }else{
                      foreach($cart->screenshots as $image){
                         $img = $img .'<img src="'.$image.'" alt="item" >';
                          }
                    }
                    
               }else{
               foreach($cart->screenshots as $image){
                    $img = $img .'<img src="'.$image.'" alt="item" >';
               }
        }
               if($items->size!="" && $cart->id==2){
                    $size = '<div class="variation-name">SIZE</div><div class="variation-value" style="margin-left: 47px;">'. $items->size.'</div>';
                    $msize ='<div class="cart-variation" style="margin-left: 47px;">Size: '. $items->size.'</div>'  ;
               }else{
                   $size='';
                   $msize='';
               }
             $out  = $out.'
            <div class="mb-4" id="cart'.$items->id.'">
            <div class="card">
                  <div class="card-body" >
                     <div class="row">
                       
                           <div class="col-md-10 col-sm-8 col-8">
                          
                           <div class="product-name">
                              <h5>'.$cart->product_name.' </h5>
                              <span> Rs. '.$p->total.'/-</span>
                              <div style="">
                                 <div class="size" style="display:flex">
                              
                                  '.$size.'
                                
                                 </div>
                                 
                                 <div style="display:flex">
                                     <div class="variation-name">QUANTITY</div>
                                    <div class="variation-value" style="margin-left: 44px;">'.$items->qty.'</div>
                                 </div>
                                
                        </div>
                        <a href="'.base_url().'customizer?product='.$cart->id.'&cart_id='.$items->id.'" style="color:green"><span class="cart-control" style="padding-right: 12px;color:green"><i class="fas fa-pencil-alt"></i> UPDATE</span></a>
                        </div>
                        
                         
                           </div>
                          
                        
                        <div class="col-md-2 col-sm-4 col-4">
                        
                         <div class="product-thumbnail">
                          '.$img.'
                           </div>
                           
                              </div>
                              </div>
                     </div>
                             
                              <div class="card-footer">
                     <div class="row">
                     <div class="col-md-6 col-sm-6 col-6 b-right">
                    <span class="cart-primary float-left removecart" data-cart_id ="'.$items->id.'" data-rowid="'. $t_id[0].'" >REMOVE</span>
                   </div>
                       <div class="col-md-6 col-sm-6 col-6">
                          <span class="cart-primary float-right movewish" data-tempid ="'.$t_id[0].'" data-base="'.$cart->id.'" data-cart_id="'.$items->id.'" data-wtype="'.$items->type.'" >MOVE TO WISHLIST</span>
                       </div>
                   </div>
                </div> 
                              <div class="card-footer" style="display:none;>
                              <div class="mt-2">
                                  <span class="cart-primary float-left movewish" data-tempid ="'.$t_id[0].'" data-base="'.$cart->id.'" data-cart_id="'.$items->id.'" data-wtype="'.$items->type.'" >Move  to wishlist</span>
                                 <span class="cart-primary  float-right removecart" data-cart_id ="'.$items->id.'" data-rowid="'. $t_id[0].'" ><span class="close-button">&times;</span> Remove from cart</span>
                                <a href="'.base_url().'customizer?product='.$cart->id.'&cart_id='.$items->id.'" class="cart-control  float-right"><span class="cart-control text-success float-right"><i class="fas fa-pencil-alt"></i> UPDATE</span></a>
                              </div>
                              </div>
                             
                        </div>
                     </div>
                          
                           
                        
                            
                  
               </div>
               ';
                 $mout  = $mout.'
           <div class="cart mt-2">
                  <div style="display: flex;">
                     <div style="flex: 2.4 1 0%;">
                       
                           <div style="cart-image">
                            '.$img.'
                           </div>
                    
                     </div>
                     <div class="cart-body">
                        <span class="cart-control text-primary float-right removecart" data-cart_id ="'.$items->id.'" data-rowid="'. $t_id[0].'" >&times;</span>
                        <div class="cart-content">
                        
                              <div class="cart-wrapper">
                                 <div class="cart-name">
                                <a href="'. base_url().''.$slug.'/'.$t_id[0].'">
                                 '.$cart->product_name.'
                                 </a>
                                 </div>
                                 '.$msize.'
                                <div class="cart-variation">Quantity: '. $items->qty.'</div>   
                                 <div class="cart-price" style="font-weight:bold"> '. $r ." ". $p->total.'/- <del style="color: lightgrey;">'.$r." ".$product->mrp.'/-</del></div>
                              </div>
                              <input type="hidden" class="temp_id" value="'.$t_id[0].'">
                           <div class="wishbutton movewish" data-base="'.$cart->id.'" data-cart_id="'.$items->id.'" data-wtype="'.$items->type.'">Move to Wishlist</div>
                        </div>
                     </div>
                  </div>
               </div>
               ';
              endforeach;
        } else {
            $out = '  <div>
            <center>
            <img class="mt-4" src="'. base_url().'assets/images/gif/empty-cart.jpeg" style="height:auto;width:40%" ><br>
            <a href="'. base_url().'/Home "class="btn btn-primary">Add Products</a>
            </center>
            </div>';
              $mout = ' <div>
            <center>
            <img class="mt-4" src="'. base_url().'assets/images/gif/empty-cart.jpeg" style="height:auto;width:40%" ><br>
            <a href="'. base_url().'/Home "class="btn btn-primary">Add Products</a>
            </center>
            </div>';
        }
        $cartitems = array(
            'desktop' => $out,
            'mobile'=>$mout
            );
        echo json_encode($cartitems);
    
    }else{ 
        $cart = $this->session->userdata("user_cart");
         $r = currency();
        if(count($cart)>0){
     $out = '';
     $mout = '';
      $i = 0;
      foreach ($cart as $items): 
        // print_r($items);
            // print_r($_SESSION);
                $price = $items["price"];
                  $p = json_decode($price);
                  $cart_data = $items["cart_data"];
                  $cart = json_decode($cart_data);
                  $product = related_base($cart->id);
                  $slug = $product->slug;
                  $t_id = json_decode($cart->template_id);
            //   $img = related_product($items->temp_id);
               $img ='';
               foreach($cart->screenshots as $image){
                   
                    $img = $img .'<img src="'.$image.'" alt="item" >';
               }
               if($items["size"]!="" && $cart->id==2){
                   $size = '<div class="variation-name">SIZE</div><div class="variation-value" style="float:right;">'. $items["size"].'</div>';
                   $msize = '<div class="summery-product-variation">Size:'. $items["size"].'</div>';
               } else {
                   $msize = "";
                   $size = "";
               }
               if($_SESSION['user_id']){
                   $w = '   <span class="cart-primary float-right movewish" data-tempid = "'.$t_id[0].'" data-base="'.$cart->id.'" data-cart_id ="'.$items["id"].'">MOVE TO WISHLIST</span>';
               }else{
                   $w= '   <span class="cart-primary float-right " data-toggle="modal" data-target="#loginotpmodal">MOVE TO WISHLIST</span>';
               }
             $out  = $out.'
            <div class="mb-4" id="cart'.$items["id"].'">
                <div class="card">
                  <div class="card-body" >
                     <div class="row">
                        <div class="col-md-10 col-sm-8 col-8">
                           <div class="product-name">
                               <a href="'.base_url().''.$slug.'/'.$t_id[0].'">  
                                  <h6 class="text-black">'.$cart->product_name.' </h6>
                               </a>
                              
                              <span> Rs. '.$p->total.'/-</span>
                              <div class="variation-data" style="display: none !important; ">
                           <span class="variation-value">Size:</span>
                               <div style="display:flex;margin-left: 27px;">
                              <div class="form-group">
                             <input type="radio" name="size" value="S" id="sizes">
                                  <label class="sizes" for="sizes">S</label>
                            </div>
                        <div class="form-group">
                         <input type="radio" name="size" value="M" id="sizem">
                                    <label class="sizes" for="sizem">M</label>
                            </div>
                         <div class="form-group">
                      <input type="radio" name="size" value="L" id="sizel">
                        <label class="sizes" for="sizel">L</label>
                       </div>
                          <div class="form-group">
                            <input type="radio" name="size" value="XL" id="sizexl">
                             <label class="sizes" for="sizexl">Xl</label>
                             </div>
                              <div class="form-group">
                                <input type="radio" name="size" value="XXL" id="sizexxl">
                                  <label class="sizes" for="sizexxl" style="font-size:10px;padding-top: 7px;">XXL</label>
                                     </div>
                                   </div>
                                      </div>
                                      
                                      <div class="variation-data" style="display: none !important; ">
                               <span class="variation-value">Quanity:</span>
                         <div class="input-counter" style="display:flex">
                           <span class="minus-btn counter-btn"><i class="fas fa-minus"></i></span>
                              <input type="text" name="quantity" value="1" min="1">
                              <span class="plus-btn counter-btn"><i class="fas fa-plus"></i></span>
                          </div>
                       </div>
                              <div >
                                 <div class="size"  style=" display:flex;"> 
                              
                                  '.$size.'
                                </div>
                                    <div style="display:flex !important; ">                            
                                    <div class="variation-name">QUANTITY</div>
                                    <div class="variation-value" style="float:right;margin-left: 47px;">'.$items["qty"].'</div>
                                 </div>
                              </div>
                              
                         
                              
                             <a href="'.base_url().'customizer?product='.$cart->id.'&cart_id='.$i.'"><span class="cart-control text-success" style="padding-right: 12px;"><i class="fas fa-pencil-alt"></i> UPDATE</span></a>
                           </div>
                        </div>
                        
                             <div class="col-md-2 col-sm-4 col-4">
                           <div class="product-thumbnail">
                           '.$img.'
                           </div>
                        </div>
                    <br>
                     </div>
                  </div>
                  <div class="card-footer">
                     <div class="row">
                     <div class="col-md-6 col-sm-6 col-6 b-right">
                   <span class="cart-primary float-left removecartsession"  data-id="'.$i.'">REMOVE</span>
                   </div>
                       <div class="col-md-6 col-sm-6 col-6">
                      '.$w.'
                       </div>
                   </div>
                </div>
                   <div class="card-footer" style="display:none;>
                    <div class="mt-2">
                           <!---   <a href="'.base_url().'customizer?product='.$cart->id.'&cart_id='.$i.'"><span class="cart-control text-success" style="padding-right: 12px;"><i class="fas fa-pencil-alt"></i> UPDATE</span></a>-->
                                <!--- <span class="cart-control text-danger movewish" data-tempid = "'.$t_id[0].'" data-base="'.$cart->id.'" data-cart_id ="'.$items["id"].'">Move  to wishlist</span>-->
                              <!---   <span class="cart-control text-primary float-right removecartsession" data-id ="'.$i.'"><span class="close-button">&times;</span> Remove from cart</span>-->
                              </div>
                              </div>
                   </div>
                </div>  
               </div>
               ';
                    $mout  = $mout.'
           <div class="cart mt-2">
                  <div style="display: flex;">
                     <div style="flex: 2.4 1 0%;">
                        <div style="cart-image">
                              '.$img.'
                           </div>
                      </div>
                     <div class="cart-body">
                        <span class="cart-control text-primary float-right removecartsession"   data-id = "'.$i.'">&times;</span>
                        <div class="cart-content">
                        
                              <div class="cart-wrapper">
                               <a href="'.base_url().'/'.$slug.'/'.$t_id[0].'"> 
                                 <div class="cart-name">'.$cart->product_name.'</div>
                                 </a>
                                 '.$msize.'
                                    <div class="cart-variation">Quantity: '. $items["qty"].'</div> 
                                 <div class="cart-price" style="font-weight:bold"> '.$r." ".$p->total.'/- <del style="color: lightgrey;">'.$r." ".$product->mrp.'/-</del></div>
                              </div>
                           
                          <!--- <div class="wishbutton movewish" data-tempid = "'.$t_id[0].'" data-base="'.$cart->id.'" data-cart_id ="'.$items->id.'">Move to Wishlist</div>-->
                        </div>
                     </div>
                  </div>
               </div>
               ';
               
              $i++;
              endforeach;
        }else{
            $out = ' <div>
            <center>
            <img class="mt-4" src="'. base_url().'assets/images/gif/empty-cart.jpeg" style="height:auto;width:40%" ><br>
            <a href="'. base_url().'/Home "class="btn btn-primary">Add Products</a>
            </center>
            </div>';
              $mout = ' <div>
            <center>
            <img class="mt-4" src="'. base_url().'assets/images/gif/empty-cart.jpeg" style="height:auto;width:40%" ><br>
            <a href="'. base_url().'/Home "class="btn btn-primary">Add Products</a>
            </center>
            </div>';
        }
          $cartitems = array(
            'desktop' => $out,
            'mobile'=>$mout
            );
        echo json_encode($cartitems);
    }
    }
//public function cart_list_mobileitem(){
//          if(isset($_SESSION['user_id'])){
//       $id = $_SESSION['user_id'];
//       $q = "select * from user_cart where user_id = '$id' ";
//     $data =   $this->Front_model->arraydata($q);
//   $r = currency();
//         if(count($data)>0){
//      $out = '';
//      foreach ($data  as $items): 
//                   $price = $items->price;
//                   $p = json_decode($price);
//                   $cart_data = $items->cart_data;
//                   $cart = json_decode($cart_data);
//                   $product = related_base($cart->id);
//                   $slug = $product->slug;
//                     $t_id = json_decode($cart->template_id);
//             //   $img = related_product($items->temp_id);
//               $img ='';
//               foreach($cart->screenshots as $image){
                   
//                     $img = $img .'<img src="'.$image.'" alt="item" >';
//               }
//               if($items->size!=""){
//                   $size = '<div class="cart-variation">Size: '. $items->size.'</div>'  ;
//               }
//              $out  = $out.'
//           <div class="cart mt-2">
//                   <div style="display: flex;">
//                      <div style="flex: 2.4 1 0%;">
                       
//                           <div style="cart-image">
//                             <a href="'.base_url().''.$slug.'/'.$t_id[0].'"> 
//                               '.$img.'
//                                   </a>
//                           </div>
                    
//                      </div>
//                      <div class="cart-body">
//                         <span class="cart-control text-primary float-right removecart" data-cart_id ="'.$items->id.'" data-rowid="'. $t_id[0].'">&times;</span>
//                         <div class="cart-content">
                        
//                               <div class="cart-wrapper">
//                                  <div class="cart-name">
//                                 <a href="'. base_url().''.$slug.'/'.$t_id[0].'">
//                                  '.$cart->product_name.'
//                                  </a>
//                                  </div>
//                                  '.$size.'
//                                  <div class="cart-price" style="font-weight:bold"> '. $r . $p->total.'/- <del style="color: lightgrey;">'.$r.$product->mrp.'/-</del></div>
//                               </div>
                           
//                           <div class="wishbutton mmovewish" data-mtempid ="'.$t_id[0].'" data-mbase="'.$cart->id.'" data-mcart_id="'.$items->id.'" data-mwtype="'.$items->type.'">Move to Wishlist</div>
//                         </div>
//                      </div>
//                   </div>
//               </div>
//               ';
               
//               endforeach;
//         }else{
//             $out =  '<div>
//             <center>
//             <img class="mt-4" src="'. base_url().'assets/img/icn_no_cart.png" style="height:auto;width:40%" ><br>
//             <a href="'. base_url().'/Home "class="btn btn-primary">Add Products</a>
//             </center>
//             </div>';
//         }
//         echo $out;
//     }else{ 
//         $cart = $this->session->userdata("user_cart");
      
//       $r = currency();
//         if(count($cart)>0){
//      $out = '';
//      $j = 0;
    
//      foreach ($cart as $items): 
    
//             // print_r($_SESSION);
//                 $price = $items["price"];
//                   $p = json_decode($price);
//                   $cart_data = $items["cart_data"];
//                   $cart = json_decode($cart_data);
//                   $product = related_base($cart->id);
//                   $slug = $product->slug;
//                   $t_id = json_decode($cart->template_id);
//             //   $img = related_product($items->temp_id);
//               $img ='';
//               foreach($cart->screenshots as $image){
                   
//                     $img = $img .'<img src="'.$image.'" alt="item" >';
//               }
//               if($items["size"]!=""){
//                   $size = '<div class="summery-product-variation">Size:'. $items["size"].'</div>';
//               }
//              $out  = $out.'
//           <div class="cart mt-2">
//                   <div style="display: flex;">
//                      <div style="flex: 2.4 1 0%;">
//                         <div style="cart-image">
//                           <a href="'.base_url().'/'.$slug.'/'.$t_id[0].'">
//                               '.$img.'
//                               </a>
//                           </div>
//                       </div>
//                      <div class="cart-body">
//                         <span class="cart-control text-primary float-right removecartsession"   data-id = "'.$j.'">&times;</span>
//                         <div class="cart-content">
                        
//                               <div class="cart-wrapper">
//                               <a href="'.base_url().'/'.$slug.'/'.$t_id[0].'"> 
//                                  <div class="cart-name">'.$cart->product_name.'</div>
//                                  </a>
//                                  '.$size.'
//                                  <div class="cart-price" style="font-weight:bold"> '.$r.$p->total.'/- <del style="color: lightgrey;">'.$r.$product->mrp.'/-</del></div>
//                               </div>
                           
//                           <!--- <div class="wishbutton movewish" data-tempid = "'.$t_id[0].'" data-base="'.$cart->id.'" data-cart_id ="'.$items->id.'">Move to Wishlist</div>-->
//                         </div>
//                      </div>
//                   </div>
//               </div>
//               ';
//               $j++;
//               endforeach;
//         }else{
//             $out = ' <div>
//             <center>
//             <img class="mt-4" src="'. base_url().'assets/img/icn_no_cart.png" style="height:auto;width:40%" ><br>
//             <a href="'. base_url().'/Home "class="btn btn-primary">Add Products</a>
//             </center>
//             </div>';
//         }
//         echo $out; 
//     }
//     }
// public function wishlistdata(){
    //     $id = $_SESSION['user_id'];
    //   $q = $this->db->select("wishlist.id,wishlist.user_id,wishlist.temp_id,wishlist.base_id,wishlist.type,products.slug As baseslug,products.mrp,products.price,templates.name,templates.image")
    //   ->from('wishlist')
    //   ->join('templates','wishlist.temp_id = templates.id')
    //   ->join('products','wishlist.base_id = products.id')
    //     ->where('wishlist.user_id',$id)
    //     ->get();
    //     $data = $q->result();
        
    // }
    function remove_wish(){
        $id = $this->input->post('Id');
        
      if($this->db->where('temp_id',$id)->delete("wishlist")){
          echo  $id;
      }else{
          echo 0;
      }
    }
    function movewish(){
        $uid =  $_SESSION['user_id'];
        $cartid = $this->input->post('cart_id');
        $base =  $this->input->post('base_id');
        $cartimage = $this->db->where('id',$cartid)->get("user_cart")->row();
        $cartdata = json_decode($cartimage->cart_data);
        if($cartimage->type=='designer'){
            $temp = json_decode($cartdata->template_id);
            $template_id=$temp[0];
            }
            else{
               $template_id =0;
            }
        $data = array(
            'type'=>$cartimage->type,
            'user_id'=>$uid,
            'temp_id'=>$template_id,
            'base_id'=>$base,
            'file'=>$cartimage->file,
            'color'=>$cartimage->color,
            'size'=>$cartimage->size,
            'qty'=>$cartimage->qty,
            'price'=>$cartimage->price,
            'cart_data'=>$cartimage->cart_data,
            'wishlist_url'=>$base,
             );
              if($this->Front_model->insert_data($data,'wishlist')){
              echo cart_count() ;
              $q = "DELETE FROM user_cart WHERE id = '$cartid'";
             $this->Front_model->remove_cart($q);
         }
            
           
         
    }
    function wish_count(){
        $id =  $_SESSION['user_id'];
        $q = " SELECT id from wishlist WHERE wishlist.user_id = '$id' ";
        $data =   $this->Front_model->arraydata($q);
        echo json_encode($data); 
    }
    function addwishlist(){
        $id =  $_SESSION['user_id'];
        $tempid= $this->input->get('temp_id');
        $base = $this->input->get('base_id');
        $temp_data = related_product($this->input->get('temp_id'));
        $color = $temp_data->color;
        $base_data = related_product($tempid);
        $d =  json_decode(t_shirt_price($color,$base,$tempid));
        $price = array("total"=>$d->actual_price,
                        "resource"=>0,
                        "template"=>$d->designer_charge,
                        "side_charge"=>$d->side_charge,
                        "base"=>$d->product_price);
        $data = array(
             'user_id'=>$id,
             'temp_id'=>$this->input->get('temp_id'),
             'base_id'=>$this->input->get('base_id'),
             'price'=>json_encode($price),
             'color'=>$color
            );
             $cart_details = array(
                            'id'=> $temp_data->product_base,
                            'cart_id'=>null,
                            'product_name'=>$temp_data->name,
                            'template_id'=>json_encode(array($temp_data->id)),
                            'screenshots'=>array("front"=>$temp_data->image)
                            );
                            $data["cart_data"] = json_encode($cart_details);
                if($this->Front_model->insert_data($data,'wishlist')){
             echo 1;
         }else{
             echo 0;
         }
         
    }

   ///coupon List//
   function counpons(){
        $q = " SELECT * from coupon_list  ";
        $data =   $this->Front_model->arraydata($q);
        // print_r($data);
        // die();
        echo json_encode($data); 
   }
   ///varify coupon//
   
   function varify(){
       $code = $this->input->post("code");
       $cart_amount = $this->input->post("cart_total");
       $out = array();
       if(!varify_code($code)){
        $out = array('info' => '<p>Have a coupon code or a gift card? See available offers.</p>
                                <button type="button" class="btn btn-primary  text-uppercase text-center view_more"  data-toggle="modal" data-target="#coupon_code_sidebar" style="padding: 7px 20px;  margin-bottom: 10px;">APPLY</button><br>
                                 <br><p style="font-size:15px; color:red;">Please enter valid coupon code.</p>',
                        'price'=>$cart_amount,
                        'discount'=>"",
                        'r'=>'error1'
                        );
        }else{
        $r = varify_code($code);
          $limitVarify = varify_coupon_usage($r->usage_limit,$r->maximum_user_limit,$r->id);
          if($limitVarify){
              if(varify_coupon_price($cart_amount,$r->maximum_cart_price,$r->minimum_cart_price)){
                $price = cart_discount($r->type, $cart_amount, $r->discount);
                $discount = cart_discountprice($r->type, $cart_amount, $r->discount);
                $this->session->set_userdata('discount_price',$price);
                $this->session->set_userdata('coupon_name',$r->name);
                $this->session->set_userdata('discount',$discount);
                $this->session->set_userdata('coupon_id',$r->id);

                $out = array(
                    'discount'=>'<div class="mt-3">Discount <span style="font-size: 10px; color: rgb(214, 20, 20);">
                    </span> <span style="float: right;">Rs. '.$_SESSION["discount"].'</span></div>',
                    'price'=>$price,
                    'info' => '<p style="color:green; font-size:21px;"> '.$_SESSION["coupon_name"].' is applied successfully! <button class="btn btn-warning btn-sm  text-uppercase text-center  remove ml-1 rounded-pill" style="padding: 7px 20px;  margin-bottom: 10px;" type="button">Remove</button><span style="float: left; color:green;"> Discount :  Rs. '.$_SESSION["discount"].'</span></p>'
                    // 'coupondiscount' => "<input type='hidden' name='discount' value='.$r->discount.'>"
                    );
              }else{
                  $out = array(
                                'price'=>$cart_amount,
                                'info'=>'<p>Have a coupon code or a gift card? See available offers.</p>
                         <button  type="button" class="btn btn-primary text-uppercase text-center view_more"  data-toggle="modal" data-target="#coupon_code_sidebar" style="padding: 7px 20px;  margin-bottom: 10px;">APPLY</button><br>
                         <p style="font-size:15px; color:red;">Please add more products to use this coupon code.</p>
                         ',
                         'discount'=>"",
                         'r'=>'error2'
                         
                                );
              }
            
          }else{
               $out = array(
                     'price'=>$cart_amount,
                     'info'=>'<p>Have a coupon code or a gift card? See available offers.</p>
                         <button class="btn btn-primary  text-uppercase text-center view_more"  data-toggle="modal" data-target="#coupon_code_sidebar" style="padding: 7px 20px;  margin-bottom: 10px;" type="button" >APPLY</button><br>
                         <p style="font-size:15px; color:red;">  please enter valid coupon name from limit</p>
                         ',
                         'discount'=>"",
                         'r'=>'error3',
                     );
            
          }
           
       }
       echo json_encode($out);
       
   }
   ///remove coupon//
   function remove_coupon(){
        $this->session->unset_userdata('coupon_id');
        $this->session->unset_userdata('discount');
        $this->session->unset_userdata('coupon_name');
        $this->session->unset_userdata('discount_price');
        echo 1;
   }
   /// check stock//
   function check_stock(){
       $size = $this->input->post('size');
       $id = $this->input->post('id');
       $color = $this->input->post('color');
       $qty = $this->input->post('qty');
      $stockqty =  $this->Stock_model->calculate_stock($id, $color, $size);
      if($stockqty > $qty ){
          echo 1;
      }else{
          echo 0;
      }
   }
   function removesessioncart(){
       $id = $this->input->post("index");
       unset($_SESSION['user_cart'][$id]);
       $_SESSION["user_cart"] = array_values($_SESSION["user_cart"]);
       echo cart_count() ;
       
   }
   ///get_price/
  function get_price(){
      $tid = $this->input->get('tid');
      $base = $this->input->get('base');
      $color = $this->input->get('color');
      $data = t_shirt_price($color,$base,$tid);
      echo $data;
      
  }
  function get_pricemobile(){
      $tid = $this->input->get('tid');
      $base = $this->input->get('base');
      $color = $this->input->get('color');
      $data = t_shirt_pricemobile($color,$base,$tid);
      echo $data;
      
  }
    function bothData(){
         $key = $this->input->post('key');
         $data = json_decode($key);
         $ids = [$data->front,$data->back];
         $data = $this->db->select('image AS screenshot')->from("templates")->where_in('templates.id',$ids)->get()->result();
         echo json_encode(['d'=>$data]);    
    }
    function test($id){
        $this->db->select("templates.id")
            ->from("templates")
            ->join('users','users.id = templates.designed_by')
            ->join('order_products','order_products.temp_id = templates.id')
            ->where('order_products.status', 'completed')
            ->like('order_products.design_by',$id);
        $q = $this->db->get()->result();
        print_r($this->db->last_query());
	}
}