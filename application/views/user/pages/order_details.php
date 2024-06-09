<?php  $invoice = invoice();?>
<div class="col-lg-8 col-md-12">
  <div class="login-content">
      <!--<div class="stepper">-->
      <!--   <span class="navigate text-black d-block d-xs-block d-sm-none d-md-none d-lg-none d-xl-none"><a href="<?=base_url('user/user_panel')?>" class="text-black"><i class="fas fa-home"></i> Dashboard <i class="fas fa-chevron-right"></i></a></span><span class="navigate">#ARTENO-IN-195 </span>-->
      <!-- </div>-->
    
      
      <div class="row d-block d-xs-block d-sm-none d-md-none d-lg-none d-xl-none">
            <div class="col-md-12 text-center">
                <span class="navigate_header"> <a href="<?=base_url('user/user_panel')?>" class="text-black"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp; #ARTENO-IN-<?= $orderId?> </a> </span>
            </div>
        </div>
    
    
        <div class="card  shadow-sm mt-2">
            <div class="card-header bg-white" style="border-top-left-radius: 20px;border-top-right-radius: 20px;">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Order ID: <?=$invoice->order_prefix;?><?= $order->id?></h3>
                    </div>   
            <div class="col-md-6 mt-4">
                <span class="shipping_address"><strong>Total Amount:</strong> <?= $invoice->currency ."  ". $order->total;?></span></br>
                
                <span class="shipping_address"><strong>Total GST :</strong> <?= $invoice->currency ."  ". $order->total_gst;?></span> </br>
             </div>
            <div class="col-md-6 mt-4">
                 <span class="shipping_address"><strong>Shipping Charge :</strong> <?= $invoice->currency ."  ". $order->shipping_charge;?></span> </br>
                <span class="shipping_address"><strong>Cod Charge :</strong> <?= $invoice->currency ."  ". $order->cod_charge;?></span> </br>
            </div>
            </div>
                </div>
                <?php foreach($order_details as $o){ 
    $vari = json_decode($o->variations);
    $image = json_decode($o->screenshots);
    ?>
            <div class="card-body">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-6">
                <div class="product-thumbnail">
                    <a href="#">
                        <?php foreach($image as $img):?>
                    <img src="<?=base_url('uploads/orders/'.$img)?>" alt="item" style="height:110px;">
                    <?php endforeach;?>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-6">
                <div class="product-name">
                    <a href="#" class="shipping_name"><?= $o->product_name?></a>
                        <ul class="p-0">
                        <li>Color: <strong><?= get_colorname($vari[0])?></strong></li>
                        <li>Size: <strong><?= $vari[1]?></strong></li>
                        
                        </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-6 col-6">
                 <span class="shipping_address"><strong>QTY:</strong> <?= $o->qty?></span>
              </div>
            <div class="col-md-3 col-sm-6 col-6">
                 <span class="shipping_address"><strong>Price:</strong><?= $invoice->currency ."  ". $o->total_price;?></span>
            </div>
        </div>
            </div>
            <hr/>
             <?php } ?> 
            </div>
      
        
    
  </div>
</div>
