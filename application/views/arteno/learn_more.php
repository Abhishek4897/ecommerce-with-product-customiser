<?php include('includes/header.php') ?>
<style>
body{
    overflow-x:hidden;
}
@media only screen and (max-width: 600px){
    .img-mobile{
        margin-right: 40px;
            margin-top: 50px!important;
        height: 300px!important;
        width: 100%!important;
        transform: scale(1.5)!important;
    }
    .content-bottom,.content-middle{
        margin-top:0px!important;
    }
    .mobile-banner{
        height: 35%;
        margin-top: 60px;
    }
    .first-section{
        padding-top:0px!important;
    }
    
}

    .person-image{
        height:350px;
        width:350px;
    }
    .content-bottom{
        vertical-align:bottom;
        margin-top:30%;
        text-align:justify;
    }
    .content-middle{
        vertical-align:bottom;
        margin-top:15%;
        text-align:justify;
    }
    .featured-table thead th:first-child(){
        width:15%;
    }
</style>
<?php $data=invoice();?>
<section class="mobile-banner">
    <img src="<?=base_url('assets/start-selling/welcome.gif')?>" alt="" style="height:75%;width: 100%;">
</section>
<section class="bg-dark-customize p-60 first-section">
   <div class="container">
       <div class="section-title bb wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" style="display:none;">
        <h2 class="text-center heading-title1">Welcome to Community</h2>
        </div>
      
      <div class="row">
          <div class="col-md-1"></div>
        <div class="col-md-2 wow fadeInLeft mt-3" data-wow-duration="2s" data-wow-delay="1s">
            <p style="float:">
               <img class="person-image" src="<?= base_url() ?>assets/start-selling/george-louis.png" style="/*margin-right:40px;*/transform:scaleX(-1);height:130px;width:auto;">
            </p>
        </div>
        <div class="col-md-7 wow fadeInLeft mt-3" data-wow-duration="2s" data-wow-delay="1s">
            <div class="quote-content" style="margin-top:30px;">
                <h5 class="second-title">George Louis once said</h5>
                <p><i class="fa fa-quote-left" aria-hidden="true"></i> Creativity can solve almost any problem. The creative act, the defeat of habit by originality, overcomes everything. <i class="fa fa-quote-right" aria-hidden="true"></i></p>
            </div>
        </div>
        
        
        <div class="col-md-6 wow fadeInRight mt-3" data-wow-duration="2s" data-wow-delay="1s">
            <div class="content-bottom">
                <p>Arteno provides a wide platform to help you successfully display your talent through your <b style="color:black;font-weight:900">artistic skills</b> while giving you <b style="color:black;font-weight:900">monetary benefits</b> for your hard work. Through this platform, you can now  portray your creative skills through a portfolio created on <b style="color:black;font-weight:900">your personal e-store.</b> Your portfolio will also attract customers to buy your work which will <b style="color:black;font-weight:900">help you earn.</b></p>
            </div>
        </div>
        <div class="col-md-6 wow fadeInLeft mt-3" data-wow-duration="2s" data-wow-delay="1s">
            <center>
               <img class="person-image" src="<?= base_url() ?>assets/start-selling1/gif 1-min.gif" style="margin-right:40px;">
            </center>
        </div>
      </div>
   </div>
</section>



<section class="bg-dark-customize p-60">
   <div class="container">
        <div class="section-title bb" style="margin-bottom:0px!important">
            <h2 class="text-center heading-title">Create your personal E-store</h2>
        </div><br>
        
      
      <div class="row">
        <div class="col-md-6 wow fadeInLeft mt-3" data-wow-duration="2s" data-wow-delay="1s">
            <center>
               <img class="person-image img-mobile" src="<?= base_url() ?>assets/start-selling1/Click Gif-min.gif">
            </center>
        </div>
        <div class="col-md-6 wow fadeInRight mt-3" data-wow-duration="2s" data-wow-delay="1s">
           
        
           <div class="content-middle" style="margin-top: 0%;">
                <p>To get started, register yourself as a designer to create your personal E-store.<br> First go to the 'Start Selling' page and click '<b style="color:black;font-weight:900">Join now</b>'. Here, you have to fill all the required information to proceed. After successfully completing the registration process, you will be directed to your designer dashboard. When you explore your designer dashboard, you will find that you can:</p>
            <ul class="featur-list">
                <li class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">Manage all the designs uploaded by you and create and customize the products;</li>
                <li class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="1.5s">Gain access to your live e-store and view your final products</li>
                <li class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="2s">Check out total orders placed and the total earnings made through sales</li>
                <li class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="2.5s">Edit personal information any time.</li>
            </ul>
           </div>
        </div>
        
      </div>
   </div>
</section>
<section class="bg-dark-customize p-60">
   <div class="container">
       <div class="section-title bb wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <h2 class="text-center heading-title">Taking e-store live</h2>
        </div>
      <div class="row">
          <div class="col-md-6 wow  fadeInLeft mt-3" data-wow-duration="2s" data-wow-delay="1.5s">
           <div class="content-middle">
                <p>
                   One you are done setting up your e-store by publishing the products with your artwork, you can now market your product to make your first sale. After getting your first order, your design will then be able to <b style="color:black;font-weight:900">get featured on the website product page.</b> The number of times your product has been sold will <b style="color:black;font-weight:900">determine its position on the website.</b> </p>
                  
                <!--<table class="table featured-table table-striped bg-white">-->
                <!--    <thead>-->
                <!--        <tr>-->
                <!--            <th>Sr. No</th>-->
                <!--            <th>Steps</th>-->
                <!--            <th>Description</th>-->
                <!--        </tr>-->
                <!--    </thead>-->
                <!--    <tbody>-->
                <!--        <tr>-->
                <!--            <td>1</td>-->
                <!--            <td>Register as <a href="<?= base_url()?>designer_signup" class="d-inline">designer</a></td>-->
                <!--            <td>For Opening your own store, you have to register as <a class="d-inline" href="<?= base_url()?>designer_signup">designer</a> at Arteno Portal. </td>-->
                <!--        </tr>-->
                <!--    </tbody>-->
                <!--</table>-->
           </div>
        </div>
        <div class="col-md-6 wow fadeInRight mt-3" data-wow-duration="2s" data-wow-delay="1.5s">
            <center>
               <img class="person-image" src="<?= base_url() ?>assets/start-selling/eshop.png" style="margin-right:40px;">
            </center>
        </div>
        
        
        
      </div>
   </div>
</section>
<style>
    #view_less,#featuredview{
        display:none;
    }
</style>
<section class="bg-dark-customize p-60">
   <div class="container">
       <div class="section-title bb wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <h2 class="text-center heading-title">Marketing products and getting featured</h2>
        </div>
      <div class="row">
        
        <div class="col-md-6 wow  fadeInLeft mt-3" data-wow-duration="2s" data-wow-delay="1.5s">
           <div class="content-middle">
                <p>The secret for earning more through your live e-store is by <b style="color:black;font-weight:900">getting traffic and a sustainable sales figure.</b><br> <br> 
The best way to successfully bring your live e-store in the spotlight is by <b style="color:black;font-weight:900">marketing your product through social media.</b> Another way is by spreading the word about your very own venture to your family and friends.<br> Join the arteno community (<b style="color:black;font-weight:900">@arteno_communtity</b>) on Instagram and promote your store thorough it!<br>  <strong id="view_more" onclick="view_more()" style="cursor:pointer;color:#d1a36a">View more</strong>
<p id="featuredview">You can use your live store’s URL to publicize and market your product further to elevate your sales. Generating more sales would uplift your design and make your artwork more visible on the website. Once your product has been ordered <b style="color:black;font-weight:900">3 times</b> it would make its way upto the <b style="color:black;font-weight:900">top 5 pages</b> in its designed category. Once you use that spotlight to advertise your product and get 5 of them sold your product will get featured in top 5 pages in main product category. Once you have sold 10 products of any category, you will get featured into the <b style="color:black;font-weight:900">Hall of Fame and you name and your e-store will get featured in top designers list.</b>
</p>
<strong id="view_less" onclick="view_less()" style="cursor:pointer;color:#d1a36a">View Less</strong>
           </div>
        </div>
        <div class="col-md-6 wow fadeInRight mt-3" data-wow-duration="2s" data-wow-delay="1.5s">
            <center>
               <img class="person-image" src="<?= base_url() ?>assets/start-selling1/Flash Gif-min.gif" style="margin-right:40px;">
            </center>
        </div>
        
      </div>
   </div>
</section>
<section class="bg-dark-customize p-60">
   <div class="container">
       <div class="section-title bb wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
            <h2 class="text-center heading-title">How to earn more?</h2>
        </div>
      <div class="row">
        <div class="col-md-6 wow fadeInLeft mt-3" data-wow-duration="2s" data-wow-delay="1.5s">
            <center>
               <img class="person-image" src="<?= base_url() ?>assets/start-selling1/Money & wallet.gif" style="margin-right:40px;">
            </center>
        </div>
        <div class="col-md-6 wow fadeInRight mt-3" data-wow-duration="2s" data-wow-delay="1.5s">
           <div class="content-middle">
                <p style="display:none;">Having a great sales figure will help you get featured as well as earn more through our  Revenue Multiplication Model. The greater number of sales made by you will overall help you multiply your earnings. See the table below for more information on boosting your earnings.</p>
                <p style="display:none;">The boost will change at the start of every month to provide a fair chance to every designer.<strong onclick="view_more_earn()" style="cursor:pointer;color:#d1a36a;" id="view_more_earn">View more...</strong></p>
                <p id="earn_up" >
                    Here at Arteno Community , we promote designing culture to the fullest, we aim to provide the top most recognition to the art work and designers associated with us. Uplifting and Emphasizing the monitory benefits we provide to our community designers, we would like to introduce our <b style="color:black;font-weight:900">Revenue  multiplication model</b> where the number of products sold would give a boost in there payout. It will go as follow:</p>
<ul style="list-style-type:none;" id="earn_middle">
    <li>5 products sold &emsp; &nbsp;<i class="fa fa-arrow-right"></i>&emsp; 1.5X boost</li>
    <li>10 products sold &emsp;<i class="fa fa-arrow-right"></i>&emsp; 2X boost</li>
    <li>20 products sold &emsp;<i class="fa fa-arrow-right"></i>&emsp; 2.5X boost</li>
    <li>30 products sold &emsp;<i class="fa fa-arrow-right"></i>&emsp; 3X boost</li>
    <li>40 products sold &emsp;<i class="fa fa-arrow-right"></i>&emsp; 4X boost</li>
    <li>50 products sold &emsp;<i class="fa fa-arrow-right"></i>&emsp; 5X boost</li>
</ul>
<p id="earn_down">For example, ‘Miheer ‘ a community designer creates a product and markets it to sell 50 times in a month , his payout would be <b style="color:black;font-weight:900"><?=$data->currency;?> 2500 </b> without the boost. by applying <b style="color:black;font-weight:900">RMP ( Revenue Multiplication Perk)</b> he would be able to get a payout of <b style="color:black;font-weight:900">5X</b> of  the original payout that would be <b style="color:black;font-weight:900"><?=$data->currency;?> 12500.</b><br> To comply with our fair use policy the boost will get reset on <b style="color:black;font-weight:900">first of every month.</b>

               <br/><strong onclick="view_less_earn()" style="cursor:pointer;color:#d1a36a;display:none;">View less</strong> </p>
                
           </div>
        </div>
      </div>
      
   </div><br>
</section>
<script src="<?= base_url()?>assets/css/animate.min.css"></script>
<script src="<?= base_url()?>assets/js/wow.min.js"></script>
<script>
    new WOW().init();
    
</script>
<script>
function view_more(){
        $("#featuredview").slideDown("fast");
        $('#view_more').hide();
        $('#view_less').show();
    }
    function view_less(){
     $("#featuredview").slideUp("fast");
     $('#view_more').show();
     $('#view_less').hide();
    }
    function view_more_earn(){
        $('#earn_up').slideDown("fast");
        $('#earn_middle').slideDown("fast");
        $('#earn_down').slideDown("fast");
        $('#view_more_earn').hide();
    }
    function view_less_earn(){
        $('#earn_up').slideUp('fast');
        $('#earn_middle').slideUp('fast');
        $('#earn_down').slideUp('fast');
     $('#view_more_earn').show();
    }
</script>
<?php include('includes/footer.php') ?>
