<?php include('includes/header.php') ?>
<style>
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
   background:#f0f0f0;  
   }
   .customize-product{
   width:65%;
   height: 405px; 
   }
   .second-title{
   font-size: 20px;
   text-align: center;
   font-weight: bold;
   text-transform:uppercase;
   }
   @media only screen and (max-width: 600px) {
   .second-title{
   font-size: 17px;
   }
    .customize-product{
       height: 105px;
       object-fit: cover;
       margin: auto auto auto -25px; 
    }
   }
</style>
<section class="bg-dark-customize p-60">
   <div class="container">
      <h2 class="text-center heading-title">Select your product and start customizing</h2>
      <br><br>
      <div class="row">
         <div class="col-md-12 no-padding first-border">
            <h4 class="second-title">Customize t-shirt</h4>
            <center>
               <img class="customize-product" src="<?= base_url() ?>assets/images/upload_CzF16RvRhxX.webp">
               <a href="<?=base_url('customizer?product=2')?>"><button class="btn btn-primary  text-uppercase text-center view_more">Customize</button></a>
            </center>
            <br>
         </div>
         <div class="col-md-6 col-xs-6 col-sm-6 col-6 no-padding second-border">
            <br>
            <h4 class="second-title">Customize Mug</h4>
            <center>
               <img class="customize-product" src="<?= base_url() ?>assets/images/upload_CzF16RvRhxX.webp">
               <a href="<?=base_url('customizer?product=3')?>"><button class="btn btn-primary  text-uppercase text-center view_more">Customize</button></a>
            </center><br>
         </div>
         <div class="col-md-6 col-xs-6 col-sm-6 col-6 no-padding">
            <br>
            <h4 class="second-title">Customize Mask</h4>
            <center>
               <img class="customize-product" src="<?= base_url() ?>assets/images/upload_CzF16RvRhxX.webp">
               <a href="<?=base_url('customizer?product=12')?>"><button class="btn btn-primary  text-uppercase text-center view_more">Customize</button></a>
            </center><br>
         </div>
      </div>
   </div>
</section>
<section class="faq">
   <div class="container"><br><br>
      <h2 class="text-center heading-title">FAQs</h2>
      <br><br>
      <div class="faq-accordion">
         <ul class="accordion">
            <li class="accordion-item mt-2">
               <a class="accordion-title bg-dark-customize p-2" href="javascript:void(0)">What Shipping Methods are Available? <i class="fas fa-plus"></i></a>
               <div class="accordion-content p-2 show">
                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
               </div>
            </li>
            <li class="accordion-item mt-2">
               <a class="accordion-title bg-dark-customize p-2" href="javascript:void(0)">What are shipping times and costs? <i class="fas fa-plus"></i></a>
               <div class="accordion-content p-2" style="display: none;">
                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
               </div>
            </li>
            <li class="accordion-item mt-2">
               <a class="accordion-title bg-dark-customize p-2" href="javascript:void(0)">What payment methods can I use? <i class="fas fa-plus"></i></a>
               <div class="accordion-content p-2" style="">
                  <ul>
                     <li>Credit Card: Visa, MasterCard, Discover, American Express, JCB, Visa Electron. The total will be charged to your card when the order is shipped.</li>
                     <li>Comero features a Fast Checkout option, allowing you to securely save your credit card details so that you don't have to re-enter them for future purchases.</li>
                     <li>PayPal: Shop easily online without having to enter your credit card details on the website.Your account will be charged once the order is completed. To register for a PayPal account, visit the website paypal.com.</li>
                     <li>Credit Card: Visa, MasterCard, Discover, American Express, JCB, Visa Electron. The total will be charged to your card when the order is shipped.</li>
                  </ul>
               </div>
            </li>
         </ul>
      </div>
   </div>
</section>
<section class="news-area ptb-60">
   <div class="container">
      <div class="section-title"><br>
         <h2 class="text-center heading-title">CUSTOMERS LOVE US</h2>
         <br><br>
      </div>
      <div class="row">
         <div class="news-slides owl-carousel owl-theme">
            <div class="col-lg-12 col-md-12">
               <div class="single-news-post">
                  <div class="news-image">
                     <a href="#"><img src="<?= base_url() ?>assets/img/blog-img1.jpg" alt="image"></a>
                  </div>
                  <div class="news-content">
                     <h3><a href="#">Styling White Jeans after Labor Day</a></h3>
                     
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-md-12">
               <div class="single-news-post">
                  <div class="news-image">
                     <a href="#"><img src="<?= base_url() ?>assets/img/blog-img2.jpg" alt="image"></a>
                  </div>
                  <div class="news-content">
                     <h3><a href="#">The Best Ecommerce Platform for Growing Sales</a></h3>
                     
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-md-12">
               <div class="single-news-post">
                  <div class="news-image">
                     <a href="#"><img src="<?= base_url() ?>assets/img/blog-img3.jpg" alt="image"></a>
                  </div>
                  <div class="news-content">
                     <h3><a href="#">The Evolution of the B2B Buying Process</a></h3>
                    
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-md-12">
               <div class="single-news-post">
                  <div class="news-image">
                     <a href="#"><img src="<?= base_url() ?>assets/img/blog-img4.jpg" alt="image"></a>
                  </div>
                  <div class="news-content">
                     <h3><a href="#">The Best eCommerce Blogs for Online Retailers</a></h3>
                     
                  </div>
               </div>
            </div>
            <div class="col-lg-12 col-md-12">
               <div class="single-news-post">
                  <div class="news-image">
                     <a href="#"><img src="<?= base_url() ?>assets/img/blog-img5.jpg" alt="image"></a>
                  </div>
                  <div class="news-content">
                     <h3><a href="#">How to Do Social Media Customer Service</a></h3>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div><br>
</section>
<?php include('includes/footer.php') ?>
