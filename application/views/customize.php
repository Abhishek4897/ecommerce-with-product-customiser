<?php include('includes/header.php') ?>
<style>
@media only screen and (max-width: 767px){
.main-banner {
    height: 60%!important;
    padding-top: 110px;
    padding-bottom: 110px;
}
        .single-footer-widget {
    padding-left: 0px !important;
}
}
   .p-60{
   padding-top:80px;
   }
   .second-title{
   font-size: 20px;
   text-align: center;
   font-weight: bold;
   text-transform:uppercase;
   }
   .faq-accordion .accordion .accordion-item .accordion-title{
       font-size:18px!important;
   }
   .col-md-4{
       padding-left:25px;
       padding-right:25px;
   }
   .try-link{
       text-decoration:underline;
       color:red!important;
       font-weight:bold;
   }
   .bg-white{
   background:white!important;
   }
   .news-content{
   background:white!important;
   }
   .work-step{
   width: 150px;
   display: block;
   margin: auto;
   }
   .no-bullet{
   list-style-type:none;
   }
   .no-bullet li {
   color:white;
   }
   .p-20{
   padding:20px;
   }
   .bg-black{
   background:black!important;
   color:white!important;
   }  
   .bg-black p{
   color:white!important;
   }  
   .bullet-padding{
   padding-right:0px;
   }
   .bullet-image{
   width: 77px;
   height:77px;
   float:right;
   }
   .main-banner-text{
       font-size:42px!important;
   }
   .hidden-md{
       display:none;
   }
   @media only screen and (max-width: 600px) {
   .second-title{
   font-size: 17px;
   }
   
   .main-banner-text{
       font-size:27px!important;
   }
   .hidden-md{
       display:block;
   }
   }
</style>
<div class="main-banner item-bg1">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="main-banner-content">
               <h1 class="text-white main-banner-text">LAUNCH YOUR OWN Customize Design</h1>
               <p class="text-white"> Sell your own designed T-shirt, Mask, and Mug. and earn money.</p>
               <button class="btn btn-primary  text-uppercase text-center text-white" data-toggle="modal" data-target="#designerloginotpmodal">Start now</button>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="bg-dark p-60">
   <div class="container">
      <h2 class="text-center heading-title">HOW IT WORKS</h2>
      <br><br>
      <div class="row">
         <div class="col-md-4 col-xs-12 col-12">
            <center>
               <img class="work-step" src="https://cdn.toesmith.com/toesmith/create_test_2x_WXfxbz2Wk.png"><br>
               <h4 class="second-title">Create</h4>
               <p>Use our customization tool and turn yourartwork into designer footwear.</p>
            </center>
            <br>
         </div>
         <div class="col-md-4 col-xs-12 col-12">
            <center>
               <img class="work-step" src="https://cdn.toesmith.com/toesmith/create_test_2x_WXfxbz2Wk.png"><br><br>
               <h4 class="second-title">Create</h4>
               <p>Use our customization tool and turn yourartwork into designer footwear.</p>
            </center>
            <br>
         </div>
         <div class="col-md-4 col-xs-12 col-12">
            <center>
               <img class="work-step" src="https://cdn.toesmith.com/toesmith/create_test_2x_WXfxbz2Wk.png"><br><br>
               <h4 class="second-title">Create</h4>
               <p>Use our customization tool and turn yourartwork into designer footwear.</p>
            </center>
            <br>
         </div>
         
      </div>
       <center><a href="<?=base_url('designer_login')?>"><button class="btn btn-primary  text-uppercase text-center">Register now</button></a></center>
      <!--<div class="row">-->
      <!--    <div class="col-md-6 col-xs-12 col-12">-->
      <!--        <div class="card bg-black p-20">-->
      <!--            <h3>CREATIVE & ENTREPRENEURIAL?</h3>-->
      <!--            <p>Join our platform to unleash your creative & entrepreneurial spirit</p>-->
      <!--            <div class="row">-->
      <!--                <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 col-12 bullet-padding">-->
      <!--                    <img class="bullet-image" src="https://cdn.toesmith.com/toesmith/qwerty_2x_uL5JEHGF3.png">-->
      <!--                </div>-->
      <!--                <div class="col-md-9 col-lg-9 col-xs-12 col-sm-9 col-12 ">-->
      <!--                    <p>Use your artworks to create new and unique designer shoes</p>-->
      <!--                </div>-->
      <!--            </div>-->
      <!--            <div class="row mt-20">-->
      <!--                <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 col-12 bullet-padding">-->
      <!--                    <img class="bullet-image" src="https://cdn.toesmith.com/toesmith/qwerty_2x_uL5JEHGF3.png">-->
      <!--                </div>-->
      <!--                <div class="col-md-9 col-lg-9 col-xs-12 col-sm-9 col-12">-->
      <!--                    <p>Use your artworks to create new and unique designer shoes</p>-->
      <!--                </div>-->
      <!--            </div>-->
      <!--            <div class="row mt-20">-->
      <!--                <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 col-12 bullet-padding">-->
      <!--                    <img class="bullet-image" src="https://cdn.toesmith.com/toesmith/qwerty_2x_uL5JEHGF3.png">-->
      <!--                </div>-->
      <!--                <div class="col-md-9 col-lg-9 col-xs-12 col-sm-9 col-12">-->
      <!--                    <p>Use your artworks to create new and unique designer shoes</p>-->
      <!--                </div>-->
      <!--            </div>-->
      <!--        </div>-->
      <!--    </div>-->
      <!--    <div class="col-md-6 col-xs-12 col-12">-->
      <!--        <div class="card">-->
      <!--        </div>-->
      <!--    </div>-->
      <!--</div>-->
   </div>
</section>
<section class="news-area ptb-60">
   <div class="container bg-dark p-20">
      <div class="section-title">
         <h2 class="text-center heading-title">START YOUR OWN BUSINESS</h2>
         <br><br>
      </div>
      <div class="row">
         <div class="col-md-4 col-xs-12 col-12">
            <div class="single-news-post card bg-white shadow-sm">
               <div class="news-image">
                  <img class="card-img-top" src="<?= base_url() ?>assets/img/blog-img2.jpg" alt="image">
               </div>
               <div class="news-content card-body">
                  <h3>Advanced Design Tool</h3>
                  <p>Our design studio makes it extremely easier to design shoes. Create and customize shoes from a wide range of colors and textures.</p>
                  <a href="" class="try-link">TRY NOW >></a>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-xs-12 col-12">
            <div class="single-news-post card bg-white shadow-sm">
               <div class="news-image">
                  <img class="card-img-top" src="<?= base_url() ?>assets/img/blog-img2.jpg" alt="image">
               </div>
               <div class="news-content card-body">
                  <h3>Advanced Design Tool</h3>
                  <p>Our design studio makes it extremely easier to design shoes. Create and customize shoes from a wide range of colors and textures.</p><br>
                  <a href="" class="try-link hidden-md">START NOW ></a>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-xs-12 col-12">
            <div class="single-news-post card bg-white shadow-sm">
               <div class="news-image">
                  <img class="card-img-top" src="<?= base_url() ?>assets/img/blog-img2.jpg" alt="image">
               </div>
               <div class="news-content card-body">
                  <h3>Advanced Design Tool</h3>
                  <p>Our design studio makes it extremely easier to design shoes. Create and customize shoes from a wide range of colors and textures.</p><br>
                  <a href="" class="try-link hidden-md">START NOW ></a>
               </div>
            </div>
         </div>
      </div>
      <center><button class="btn btn-primary  text-uppercase text-center hidden-sm" data-toggle="modal" data-target="#designerloginotpmodal">Start now</button></center>
   </div>
</section>
<section class="faq">
   <div class="container"><br>
      <h2 class="text-center heading-title">FAQs</h2>
      <br><br>
      <div class="faq-accordion">
         <ul class="accordion">
            <li class="accordion-item">
               <a class="accordion-title" href="javascript:void(0)">What Shipping Methods are Available? <i class="fas fa-plus"></i></a>
               <div class="accordion-content show" style="display: none;">
                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
               </div>
            </li>
            <li class="accordion-item">
               <a class="accordion-title" href="javascript:void(0)">What are shipping times and costs? <i class="fas fa-plus"></i></a>
               <div class="accordion-content" style="display: none;">
                  <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
               </div>
            </li>
            <li class="accordion-item">
               <a class="accordion-title" href="javascript:void(0)">What payment methods can I use? <i class="fas fa-plus"></i></a>
               <div class="accordion-content" style="">
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
   <br>
   <br>
</section>
        <!-- enter mobile number Modal -->
        <div class="modal fade" id="designerloginotpmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-md custum-modal-height" role="document" style="">
                            <div class="modal-content">
                              <!--<div class="modal-header">-->
                                <!--<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>-->
                                
                              <!--</div>-->
                              <div class="modal-body">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                      </button>
                                      <div class="p-3">
                                            <center>
                                                 <img src="<?= base_url()?>assets/images/artenologo.png" style="height:60px;">
                                             </center>
                                             <center><p class="mt-3" style="font-size: 15px; line-height: 19px;"><b>Customize your Premium T-shirts, Mugs & Face-mask, connect with designers and browse designer prints!</b></p></center>
                                             <form  method="post" id="designerget_otp">
                                                 <div class="form-group mt-4 mb-4">
                                                    <label for="mobil">Enter Mobile</label>
                                                    <input type="number" name="mobile" class="form-control custum-input" id="designermobile_number" value="" required>
                                                  </div>
                                                 
                                                  <center><p class="mt-3" style="font-size: 14px; line-height: 18px;">By logging in, you are agreeing to Arteno’s privacy policy and terms of use</p></center>
                                                   <br>
                                                  <button type="submit"  class="btn btn-primary btn-block" style="border-radius:0px; font-size: 16px;">Login</button>
                                                  
                                             </form>
                                      </div>
                                    
                              </div>
                            </div>
                          </div>
                        </div>
        <!-- enter mobile number Modal -->
        <!-- otp verification Modal -->
        <div class="modal fade" id="designerotpverificationmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-md custum-modal-height" role="document" style="">
                            <div class="modal-content">
                              <div class="modal-body">
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                      </button>
                                      <div class="p-3">
                                            <center>
                                                 <img src="<?= base_url()?>assets/images/artenologo.png" style="height:60px;">
                                             </center>
                                             <center><p class="mt-3" style="font-size: 15px; line-height: 19px;"><b>Customize your Premium T-shirts, Mugs & Face-mask, connect with designers and browse designer prints!</b></p></center>
                                             <form method="post" id="designerverify_otp">
                                                 <p class="text-center mt-2 mb-2">Enter OTP sent to <span id="designersent_otp_number"></span></p>
                                                 <div class="form-group mt-4 mb-4">
                                                    <label for="mobil">Enter OTP</label>
                                                    <input type="hidden" id="designermob_otp">
                                                    <input type="number" class="form-control" name="otp" id="designerotp_value" value="">
                                                  </div>
                                                   
                                                    <a style="text-align: center;margin-top: 12px;color: red; text-decoration: underline;cursor: pointer;" onclick="designerresend_otp()">Resend OTP</a>
                                                  <center><p class="mt-3" style="">By logging in, you are agreeing to Arteno’s privacy policy and terms of use</p></center>
                                                   <br>
                                                  <button type="submit" name="submit"   class="btn btn-primary btn-block"  id="designerverify_otp_button" style="border-radius:0px; font-size: 16px;">Login</button>
                                             </form>
                                      </div>
                                    
                              </div>
                            </div>
                          </div>
                        </div>
        <!-- otp verification Modal -->
        
<?php include('includes/footer.php') ?>
<script>
$("#designerget_otp").submit(function(e){
            e.preventDefault();
            var designermobno= $("#designermobile_number").val();
            if(designermobno.length!=10){
                alert('please fill valid Mobile no.');
              return false;
            }
            $('#designerloginotpmodal').modal('hide');
            $('#designerotpverificationmodal').modal({show:true});
            $('#designersent_otp_number').html(designermobno);
                $.ajax({
                url:"<?= base_url()?>home/designerlogin_with_otp",
                method:"POST",
                data:{'designermobile':designermobno},
                success:function(res){
                   if(res==0){
                     alert('Something Went Wrong Try again later');
                   }
                   else{
                    $('#designermob_otp').val(res.trim());
                   }
                }
                });
          });
$("#designerverify_otp").submit(function(e){
            e.preventDefault();
            $('#designerverify_otp_button').attr("disabled", "disabled");
            $("#designerverify_otp_button").css("background-color", "grey");
            var designermobileno= $("#designermob_otp").val();
            var designerotp_value= $("#designerotp_value").val();
                $.ajax({
                url:"<?= base_url()?>home/designerverify_otp",
               method:"POST",
                data:{'designermobile':designermobileno,'designerotp':designerotp_value},
                success:function(res){
                   if(res.trim()=="success"){
                     alert('login Successfully');
                     $('#designerotpverificationmodal').modal('hide');
                     window.location.href = "<?=base_url('account_details')?>"
                   }
                   else{
                   alert('Otp Not Matched');
                   }
                }
                });
          });
function designerresend_otp(){
            var designermobno= $("#designermob_otp").val();
            $('#designersent_otp_number').html(designermobno);
            document.getElementById('designerverify_otp_button').disabled = false;
            $("#designerverify_otp_button").css("background-color", "#111");
                $.ajax({
                url:"<?= base_url()?>home/designerresend_otp",
                method:"POST",
                data:{'designermobile':designermobno},
                success:function(res){
                   if(res==0){
                     alert('Something Went Wrong Try again later');
                   }
                   else{
                    $('#designermob_otp').val(res.trim());
                   }
                }
                });
            }
</script>
