<?php  $invoice = invoice();?>
<style>
  
    .checkout-button{
      border-radius: 30px !important;
    color: b78b2a !important;
    font-size: 17px;
    font-weight: 700;
    color: black;
    background-color: #111 !important;
}
.shipping_name{
    font-size: 18px !important;
    color: black !important;
    line-height: 15px !important;
    text-overflow: ellipsis !important;
    overflow: hidden !important;
    height: 20px !important;
    text-transform: capitalize !important;
    font-weight: 600 !important;
    margin: 0px !important;
    font-family: ProximaNova, sans-serif !important;
}
}
label {
    display: inline-block;
    margin-bottom: .5rem;
    font-size: 14px;
    font-weight: 600;
}
    .form-control{
    background:white !important;
    border: 2px solid #bfbebe;
    border-radius:5px;
}

span,.shipping_address{
        font-weight:500;
    }
    .shipping_name{
      font-weight:500;
      font-size:16px;
      color:black;
    }
    
@media only screen and (max-width: 600px) {
  .mobile-padding{
    padding-left:0px !important;
    padding-right:0px !important;
    overflow:hidden !important;
   } 
   .ml-14{
    margin-left:0px;
   }
}
</style>
<section class="second mt-50">
    <div class="container">
        <div class="card border-0">
            <div class="card-header bg-white" style="border-top-left-radius: 20px;border-top-right-radius: 20px;">
                <div class="row">
                    <div class="col-md-9">
                       <h3>Order ID: <?=$invoice->order_prefix;?><?= $order->id?></h3>
                    </div>
                    <div class="col-md-3">
                        <?php if($order->status!='confirmed' && $order->status=='dispached' || $order->status=='completed') { ?>
                            <!--<a href="<?=base_url()?>Invoice/generate/<?= $order->id ?>"><button class="btn btn-info download" ><i class="fa fa-file"></i> Download Invoice</button></a>-->
                        <?php } ?>
                    </div>
                    <div class="col-md-3 mt-10">
                        <span class="shipping_address"><strong>Total Amount:</strong> <?= $invoice->currency ."  ". $order->total;?></span>
                    </div>
                    <div class="col-md-3 mt-10">
                        <span class="shipping_address"><strong>Total GST :</strong> <?= $invoice->currency ."  ". $order->total_gst;?></span> 
                    </div>
                    <div class="col-md-3 mt-10">
                        <?php if($order->shipping_charge>0): ?>
                        <span class="shipping_address"><strong>Shipping Charge :</strong> <?= $invoice->currency ."  ". $order->shipping_charge;?></span>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-3 mt-10">
                        <?php if($order->cod_charge>0): ?>
                            <span class="shipping_address"><strong>Cod Charge :</strong> <?= $invoice->currency ."  ". $order->cod_charge;?></span>
                        <?php endif; ?>
                    </div>
        </div>
            </div>
             <?php foreach($order_details as $o){ 
                    $vari = json_decode($o->variations);
                     $img ='';
                       if($o->temp_id!="" && $o->temp_id!=null){
                     $key = related_product($o->temp_id)->template_ids;
                     $data = json_decode($key);
                     $ids = [$data->front,$data->back];
                     $ds = $this->db->select('image')->from("templates")->where_in('templates.id',$ids)->get()->result();
                     if($key!="" && $key != null ){
                         foreach($ds as $image){
                          $img = $img .'<img src="'.$image->image.'" alt="item" style="height:70px;">';
                          }    
                    }else{ 
                        $imagess = json_decode($o->screenshots);
                      foreach($imagess as $image){
                         $img = $img .'<img src="'.base_url().'uploads/orders/'.$image.'" alt="item" style="height:70px;" >';
                          }
                         
                    }
                    
               }else{
                   $image = json_decode($o->screenshots);
                  
                   foreach($image as $img1){
                    $img = $img .'<img src="'.base_url().'uploads/orders/'.$img1.'" alt="item" style="height:70px;" >';
               }
        }
                    ?>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-4">
                        <div class="product-thumbnail">
                            <?= $img ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-8 col-8">
                        <div class="product-name">
                            <a  class="shipping_name"><?= strtolower($o->product_name) ?></a>
                            <ul class="p-0" style="list-style-type:none;">
                                <li><strong>Colour:</strong> <?= get_colorname($vari[0])?></li>
                                <?php if($vari[1]) {?>
                                    <li><strong>Size:</strong> <?= $vari[1]?></li>
                                    <?php }?>
                                    <li> <span class="shipping_address"><strong>Qty:</strong> <?= $o->qty?></span></li>
                                    <li> <span class="shipping_address"><strong class="ml-14">Price:</strong> <?= $invoice->currency ."  ". $o->total_price;?></span></li>
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <hr/>
             <?php } ?> 
        </div>  
    </div>
</section>
<br>