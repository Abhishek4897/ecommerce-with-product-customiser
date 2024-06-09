<?php include('includes/header.php') ?>
<style>
 @media (min-width: 768px) and (max-width: 1023px){
     .tablet-ipad-mt{
         margin-top:50px;
     }
 }

@media (min-width: 992px) and (max-width: 1300px){
     .section-title.bb {
       margin-top: 55px;
    }   
}

.border-bottom1{
    border-bottom: 2px solid lightgrey;
}
.heading-title1 {
    font-size: 2rem!important;
}
.border-left1{
        border-left: 2px solid lightgrey;
}
.customize-product{
    height:200px!important;
}
.faq-accordion .accordion .accordion-item .accordion-title {
    position: relative;
    color: #222;
    font-size: 17px;
    padding-right: 20px;
    font-weight:600;
}
.accordion-item{
    padding-bottom:0px!important;
    margin-bottom:0px!important;
}
.accordion-content{
        margin-top: 0px!important;
}
.p-3{
    border:1px solid lightgrey;
    padding:10px;
}
.faq-accordion .accordion .accordion-item {
    display: block;
    margin-bottom: 15px;
    border: 1px solid lightgrey;
    padding-bottom: 15px;
}
.faq-accordion .accordion .accordion-item .accordion-title .fa-plus{
   padding-right:10px;
}
   .p-60{
   padding-top:80px;
   }
   .first-border{
   border-bottom: 1px solid lightgrey;
   }
   .second-border{
   border-right: 1px solid lightgrey;
   }
   .no-padding{
   padding-left:0px!important;
   padding-right:0px!important;
   }
   .customize-product{
   }
   .bg-dark-customize{
   background:#ebeced!important;  
   }
   .main-bg{
   background:#f5f5f5!important;  
   }
   
   .second-title{
   font-size: 20px;
   text-align: center;
   margin-bottom:30px;
   font-weight: bold;
   text-transform:uppercase;
   }
   .view_more{
       margin-top:20px;
   }
   .shirt-img{
       height:270px!important;
   }
 
   @media only screen and (max-width: 600px) {
   .second-title{
   font-size: 17px;
   }
   .border-bottom-mobile{
    border-bottom: 2px solid lightgrey;
}
.shirt-img{
       height:230px!important;
   }
   .insta_actions {
    text-align: center;
    padding: 0px 0px 0px 0px;
}
    .customize-product{
       height: 105px;
       object-fit: cover;
       margin: auto; 
    }
   }
   .view_more{
       border-radius: 24px !important;
   }
     .checkout-button {
    border-radius: 24px !important;
   }
 
  
.section-bg, .product-card, .bg-main {
    background: #f0f0f0!important;
}
</style>
<section class="bg-main p-60">
   <div class="container">
       <div class="section-title bb ">
        <h2 class="text-center heading-title1 tablet-ipad-mt">Select your product and start customizing</h2>
        </div>
      
      <div class="row">
         <div class="col-md-12 no-padding border-bottom1">
              <br>
            <h4 class="second-title">Customize t-shirt</h4>
            <center>
               <!--<img class="customize-product shirt-img" src="<?= base_url() ?>assets/mockups/t-shirt.png">-->
               <img class="customize-product shirt-img hidden-xs hidden-sm visible-md visible-lg" src="<?= base_url() ?>assets/mockups/gif/customize_tshirt.gif" />
               <img class="customize-product shirt-img visible-xs visible-sm hidden-md hidden-lg" src="<?= base_url() ?>assets/mockups/gif/customize_tshirt_2.gif" />
               <div class="insta_actions">
               <a href="<?= base_url('customizer?product=2') ?>"><button class="btn btn-primary  text-uppercase text-center view_more" style="border-radius:30px!important">Customize</button></a>
              </div>
            </center>
            <br>
         </div>
         <div class="col-md-6  no-padding border-bottom-mobile">
            <br>
            <h4 class="second-title">Customize Mug</h4>
            <center>
               <!--<img class="customize-product" src="<?= base_url() ?>assets/mockups/mug.png" style="margin-right:40px;">-->
               <img class="customize-product hidden-xs hidden-sm visible-md visible-lg" src="<?= base_url() ?>assets/mockups/gif/customize_mug.gif" />
               <img class="customize-product visible-xs visible-sm hidden-md hidden-lg" src="<?= base_url() ?>assets/mockups/gif/customize_mug_2.gif" />
               <a href="<?= base_url('customizer?product=3') ?>"><button class="btn btn-primary text-uppercase text-center view_more"  style="border-radius:30px!important">Customize</button></a>
            </center><br>
         </div>
         <div class="col-md-6 no-padding border-left1">
            <br>
            <h4 class="second-title">Customize Mask</h4>
            <center>
               <!--<img class="customize-product" src="<?= base_url() ?>assets/mockups/mask.png">-->
               <img class="customize-product hidden-xs hidden-sm visible-md visible-lg" src="<?= base_url() ?>assets/mockups/gif/customize_mask.gif" />
               <img class="customize-product visible-xs visible-sm hidden-md hidden-lg" src="<?= base_url() ?>assets/mockups/gif/customize_mask_2.gif" />
               <a href="<?= base_url('customizer?product=4') ?>"><button class="btn btn-primary text-uppercase text-center view_more"  style="border-radius:30px!important">Customize</button></a>
            </center><br>
         </div>
      </div>
   </div>
  
</section>
<section class="faq bg-main"><br>
   <div class="container">
       <div class="section-title bb">
            <h2 class="text-center heading-title1">FAQs</h2>
        </div>
      
      <div class="faq-accordion">
         <ul class="accordion">
            <li class="accordion-item mt-2">
<a class="accordion-title bg-dark-customize p-2 active" href="javascript:void(0)">How do I get paid?<i class="fas fa-plus"></i></a>
<div class="accordion-content   p-3 " style="border-bottom: 0px; display: block;">
<p>You can withdraw money from the Arteno wallet under the payout section on the ‘My Store’ page.</p>
</div>
</li>
            <li class="accordion-item mt-2">
               <a class="accordion-title bg-dark-customize p-2" href="javascript:void(0)">How long will it take to get my earnings to my bank account?<i class="fas fa-plus"></i></a>
               <div class="accordion-content  p-3" style="display: none; border-bottom: 0px;">
                  <p>It will take about 5-7 business days.</p>
               </div>
            </li>
            <li class="accordion-item mt-2">
               <a class="accordion-title bg-dark-customize p-2" href="javascript:void(0)">When will my earnings reflect in my designer wallet?<i class="fas fa-plus"></i></a>
               <div class="accordion-content  p-3" style="display: none; border-bottom: 0px;">
                  <p>As soon as the order is delivered to the respective customer and the transaction is complete.</p>
               </div>
            </li>
            <li class="accordion-item mt-2">
               <a class="accordion-title bg-dark-customize p-2" href="javascript:void(0)">How do I compress my designs?<i class="fas fa-plus"></i></a>
               <div class="accordion-content  p-3" style="">
                   <p>You can use third-party websites to compress your designs such as:</p>
                  <ul>
                     <li class="d-none d-sm-none d-md-block"><a class="d-none d-sm-none d-md-block" href="https://www.websiteplanet.com/webtools/imagecompressor/" target="blank">https://www.websiteplanet.com/webtools/imagecompressor/</a></li>
                      <li class="d-block d-sm-block d-md-none"><a class="d-block d-sm-block d-md-none" href="https://www.websiteplanet.com/webtools/imagecompressor/" target="blank">https://www.websiteplanet.com/webtools/<br>imagecompressor/</a></li>
                     <li><a href="https://smallpdf.com/compress-pdf" target="blank">https://smallpdf.com/compress-pdf</a></li>
                  </ul>
               </div>
            </li>
            <li class="accordion-item mt-2">
               <a class="accordion-title bg-dark-customize p-2" href="javascript:void(0)">How to report copyright infringement?<i class="fas fa-plus"></i></a>
               <div class="accordion-content  p-3" style="display: none; border-bottom: 0px;">
                  <p>If you feel one of your original designs has been used by another designer on our platform then immediately mail us at <a href="mailto:help@arteno.in">help@arteno.in.</a> For more information please refer to the copyright infringement policies.</p>
               </div>
            </li>
            <li class="accordion-item mt-2">
               <a class="accordion-title bg-dark-customize p-2" href="javascript:void(0)">How to share my store link/ designs?<i class="fas fa-plus"></i></a>
               <div class="accordion-content  p-3" style="display: none; border-bottom: 1px solid lightgrey;">
                  <p>There are two ways to share your designs:</p>
                  <ol>
                     <li>By going to the ‘My Designs’ section under the ‘My Store’ page.</li>
                     <li>By directly sharing it from the designer panel.</li>
                  </ol>
               </div>
            </li>
         </ul><br>
      </div><br>
   </div>
</section>
<!--<section class="news-area ptb-60">-->
<!--   <div class="container">-->
<!--        <div class="section-title bb">-->
<!--        <h2 class="text-center heading-title1">Select your product and start customizing</h2>-->
<!--        </div>-->
      
<!--      <div class="row">-->
<!--         <div class="news-slides owl-carousel owl-theme">-->
<!--            <div class="col-lg-12 col-md-12">-->
<!--               <div class="single-news-post">-->
<!--                  <div class="news-image">-->
<!--                     <a href="#"><img src="<?= base_url() ?>assets/img/blog-img1.jpg" alt="image"></a>-->
<!--                  </div>-->
<!--                  <div class="news-content">-->
<!--                     <h3><a href="#">Styling White Jeans after Labor Day</a></h3>-->
                     
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="col-lg-12 col-md-12">-->
<!--               <div class="single-news-post">-->
<!--                  <div class="news-image">-->
<!--                     <a href="#"><img src="<?= base_url() ?>assets/img/blog-img2.jpg" alt="image"></a>-->
<!--                  </div>-->
<!--                  <div class="news-content">-->
<!--                     <h3><a href="#">The Best Ecommerce Platform for Growing Sales</a></h3>-->
                     
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="col-lg-12 col-md-12">-->
<!--               <div class="single-news-post">-->
<!--                  <div class="news-image">-->
<!--                     <a href="#"><img src="<?= base_url() ?>assets/img/blog-img3.jpg" alt="image"></a>-->
<!--                  </div>-->
<!--                  <div class="news-content">-->
<!--                     <h3><a href="#">The Evolution of the B2B Buying Process</a></h3>-->
                    
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="col-lg-12 col-md-12">-->
<!--               <div class="single-news-post">-->
<!--                  <div class="news-image">-->
<!--                     <a href="#"><img src="<?= base_url() ?>assets/img/blog-img4.jpg" alt="image"></a>-->
<!--                  </div>-->
<!--                  <div class="news-content">-->
<!--                     <h3><a href="#">The Best eCommerce Blogs for Online Retailers</a></h3>-->
                     
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--            <div class="col-lg-12 col-md-12">-->
<!--               <div class="single-news-post">-->
<!--                  <div class="news-image">-->
<!--                     <a href="#"><img src="<?= base_url() ?>assets/img/blog-img5.jpg" alt="image"></a>-->
<!--                  </div>-->
<!--                  <div class="news-content">-->
<!--                     <h3><a href="#">How to Do Social Media Customer Service</a></h3>-->
                     
<!--                  </div>-->
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--      </div>-->
<!--   </div><br>-->
<!--</section>-->
<?php include('includes/footer.php') ?>
