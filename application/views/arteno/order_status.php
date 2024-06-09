<?php 
// use FacebookAds\Object\CustomConversion;
// use FacebookAds\Object\Fields\CustomConversionFields;

// $custom_conversion = new CustomConversion(null, 'act_162292075860474');
// $custom_conversion->setData(array(
//   CustomConversionFields::NAME => 'Purchase',
//   CustomConversionFields::PIXEL_ID => '391706548949169',
//   CustomConversionFields::PIXEL_RULE => array(
//     'url' => array('i_contains' => 'order_status'),
//   ),
//   CustomConversionFields::CUSTOM_EVENT_TYPE => 'PURCHASE',
// ));
// $custom_conversion->create();
include('includes/header.php')?>
<style>
    .main-content {
    min-height: calc(100vh - 200px);
   
}
 @media only screen and (max-width: 600px) {
       .btn {
        padding: 8px 8px;
        font-size: 10px;
    }
 }
</style>
<section style="background:#f3f3f3">
 <div class="container">
             <div class="row" style="padding-top:35px">
               
				 <!--Main Content-->
				 <div class="col-md-3"></div>
				 <div class=" col-md-6 col-sm-12">
				     <br><br>
                     <div class="border-0 mt-4" style="text-align:center;">
                         <center>
                         <img src="<?= base_url()?>assets/images/gif/Final Order Placed-min.gif" alt="" style="" />
                         </center>
                        <?php 
                             $site_setting=$this->db->where('id',1)->get('invoice-details')->row();?>
                           
                         <h4 style="font-size:25px;">
                             <b>Order Confirmed</b><br/>
                         </h4><br/>
                         <b>Your Order id <?=$site_setting->order_prefix;?><?=$last_order?> of Rs. <?=$order_details->total;?></b>
                         <br>
                        
                        <!--<p class="text-center"><strong>Your booking has been confirmed. Check your email for details.</strong></p>-->
				        <!--<p class="text-center"><strong>No Refund shall be made once goods are purchased.</strong></p>-->
                        <br>
                        <div>
                            <a href="<?=base_url()?>"> <button class="btn btn-primary" style="float:left !important"> Continue Shopping</button></a>
                            <?php if($last_order!=""): ?>
                                <a href="<?=base_url('User/order_details/'.$last_order)?>">
                            <?php endif; ?>
                                <button class="btn btn-primary" style="float:right !important"> Order Details</button>
                            <?php if($last_order!=""): ?></a><?php endif; ?>
                        </div>
                        <br> <br>
                     </div>
                     
                 </div>
                 
              
             </div>
            
             <!--End Main Content-->        
         </div>
</section>
 <br><br>
<?php include('includes/footer.php')?>
<script>
// Send transaction data with a pageview if available
// when the page loads. Otherwise, use an event when the transaction
// data becomes available.
var products=JSON.stringify(<?=$order_items?>);

dataLayer.push({ ecommerce: null });  // Clear the previous ecommerce object.
dataLayer.push({
  'event': 'purchase',
  'ecommerce': {
    'purchase': {
      'actionField': {
        'id': '<?= $last_order ?>',                         // Transaction ID. Required for purchases and refunds.
        'revenue': '<?=$order_details->total;?>',                     // Total transaction value (incl. tax and shipping)
        'tax':'<?=$order_details->total_gst;?>',
        'shipping': '<?=$order_details->shipping_charge;?>'
      }
    },
    products: products
  }
});
fbq('track', 'Purchase', {value: '<?=$order_details->total;?>', currency: 'INR'});
</script>