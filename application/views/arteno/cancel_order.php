<?php include('includes/header.php')?>
<style>
     @media (min-width: 768px) and (max-width: 1023px){
         .main-content {
         min-height: 85%;
        }
     }
      /*css for ipad*/
    /*for iPad pro tablet */
    @media only screen and (min-width: 992px) {
     .main-content {
         min-height: 85%;
        }
    }
</style>
<section style="">
 <div class="container">
             <div class="row" style="padding-top:100px">
                
				 <!--Main Content-->
				 <div class="col-md-2"></div>
				 <div class=" col-md-8 col-sm-12 mb-3">
				     
                     <div class="card border-0" style="text-align:center;background: transparent;">
                         <center style="padding-top: 60px;">
                         <img src="https://meetanshi.com/media/catalog/product/cache/1/image/925f46717e92fbc24a8e2d03b22927e1/m/a/magento-2-cancel-order-354x.png" alt="" />
                         </center>
                        
                         <h4 class="mt-2" style="font-size:25px;">
                             Order Cancelled!
                         </h4>
                         <br>

                        <center>
                            <a href="<?=base_url()?>Home"> <button class="btn btn-primary"> Continue Shopping</button></a>
                        </center>
                        <br>
                     </div>
                     
                 </div>
                 
             </div>
            
             <!--End Main Content-->        
         </div>
</section>
<?php include('includes/footer.php')?>

