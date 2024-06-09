<?php  $this->load->view('includes/header');?>
<br><br>
<section  class="video_pad"style="margin:0px !important;padding:0px">
    <div class="desktop-video" style="width: 100%; position: relative; background: rgb(243, 241, 243);" >
        <video autoplay muted loop id="video1" src="<?= base_url('assets/videos/main_video.mp4') ?>" preload="auto" width="100%" style="visibility:visible" type="video/mp4"></video>
            <div class="insta_actions">
                <button class="btn btn-primary  text-uppercase text-center view_more custom-lg">START CUSTOMIZING</button>
            </div>
              <br>
    </div>
    <div  class="mobile-video" style="width: 100%; margin: auto; height: calc(125vw - 37.5px);">
        <video autoplay muted loop id="video2" src="https://pixelapp.s3.ap-south-1.amazonaws.com/toesmith/assets/hero_video_website_83zas733.mp4" preload="auto" width="100%" style="visibility:visible" type="video/mp4"></video>
    </div>
</section>
    <section class="facility-area black-bg hidden-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="facility-box">
                        <div class="icon">
                            <i class="fas fa-plane"></i>
                        </div>
                        <h3>Free Shipping World Wide</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="facility-box">
                        <div class="icon">
                            <i class="fas fa-money-check-alt"></i>
                        </div>
                        <h3>100% money back guarantee</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="facility-box">
                        <div class="icon">
                            <i class="far fa-credit-card"></i>
                        </div>
                        <h3>Many payment gateways</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="facility-box">
                        <div class="icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h3>24/7 online support</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="offer-price-area ptb-60 bg-dark hidden-sm">
         <div class="container-fluid">
             <div class="section-title">
                 <h2 class="text-center heading-title">DESIGNED FOR COMFORT</h2>
            </div>
            <div class="row pt-40">
                <div class="col-lg-2 col-md-6 p-0"></div>
                <div class="col-lg-2 col-md-6 p-0">
                  <div class="text-center">
                     <img src="https://cdn.toesmith.com/toesmith/assets/Sole_2x_fN1ib44viT.png?tr=w-300,h-300" alt="image" class="comfort_image">
                     <p class="pt-10">Light weight TPR sole</p>
                  </div>
               </div>
                <div class="col-lg-2 col-md-6 p-0">
                  <div class="text-center">
                     <img src="https://cdn.toesmith.com/toesmith/assets/Insole_2x_HhG8z_rjHy.png?tr=w-300,h-300" alt="image" class="comfort_image">
                      <p class="pt-10">Memory foam insole - Pillow for your feet</p>
                  </div>
               </div>
                <div class="col-lg-2 col-md-6 p-0">
                  <div class="text-center">
                     <img src="https://cdn.toesmith.com/toesmith/assets/Soleinsole_2x_d42Ai_lq6U.png?tr=w-300,h-300" alt="image" class="comfort_image">
                      <p class="pt-10">Flexible cementing technology for maximum comfort</p>
                  </div>
               </div>
                <div class="col-lg-2 col-md-6 p-0">
                  <div class="text-center">
                     <img src="https://cdn.toesmith.com/toesmith/assets/Texture_2x_T4zSE5Yci.png?tr=w-300,h-300" alt="image" class="comfort_image">
                      <p class="pt-10">Best quality fabric for rough and tough use</p>
                  </div>
               </div>
                <div class="col-lg-2 col-md-6 p-0"></div>
            </div>
         </div>
    </section>
    <section class="testimonials-area ptb-60 jarallax hidden-sm" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="section-title">
                <h2 class="heading-title text-uppercase text-white"> OUR PROMISES</h2>
            </div>
            <br> <br>
            <div class="row ">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                   <div class="text-right promise_right_padding">
                       <img src="https://cdn.toesmith.com/toesmith/assets/ReturnBox_pg-4z5HD1.png" class="promise-img">
                       <br>
                        </div> 
                        <p class="text-white text-center pt-10 promise_heading mb-0">7 days return</p>
                        <p class="text-white text-center">no questions asked</p>
                  
                  
                </div>
                <div class="col-md-4 ">
                     <div class="text-left promise_left_padding">
                       <img src="https://cdn.toesmith.com/toesmith/assets/Return_2x_zIr3AF5_Z.png" class="promise-img">
                        <br>
                        </div>
                        <p class="text-white text-center pt-10 promise_heading mb-0">6 month warranty</p>
                        <p class="text-white text-center">on any manufacturing defect</p>
                    
                </div>
                <div class="col-md-2"></div>
            </div>
            <br> <br> <br>
        </div>
    </section>
       <?php 
       foreach($items as $itemslist): if($itemslist->is_home == 1){?>
    <section class="trending-products-area pb-60 section-bg bg-dark hidden-lg">
        <div class="container responsive">
            <div class="section-title"><br>
         
               <h2 class="heading-title text-uppercase"> <?= $itemslist->name?></h2>
           
            </div> 
            <div class="row" id="mobile<?=$itemslist->id?>">
                   <!--<input type="hidden" value="<?=$itemslist->id?>" class="mobilehiddenid"> -->
         <!--- mobile data--->
                
                
            </div>
        </div>
    </section>
    <?php  } endforeach;?>
     <?php
     $i=0;
     foreach($items as $itemslist): if($itemslist->is_home == 1){?>
    <section class="trending-products-area pb-60 section-bg bg-dark hidden-sm">
        <div class="container responsive">
            <div class="section-title"><br>
            <h2 class="heading-title text-uppercase"> <?= $itemslist->name?></h2>
            </div> 
           <input type="hidden" value="<?=$itemslist->id?>" class="hiddenid">   
           <div class="row" id="products<?=$itemslist->id?>">
              
   <!--- Desktop-->
               
              
            </div>
        </div>
    </section>
    <?php $i++; } endforeach;?>
  
  
      <section class="news-area ptb-60">
         <div class="container">
            <div class="section-title">
               <h2 class="heading-title text-uppercase"> Trending Collections</h2>
            </div> 
            <div class="row hidden-sm">
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                 <div class="single-product-box">
                                    <!--<div class="product-content d-block d-xs-block d-sm-none d-md-none d-lg-none  d-xl-none text-left" style="margin-bottom:20px;">-->
                                    <div class="product-content d-block d-xs-block d-sm-none d-md-none d-lg-none  d-xl-none text-left" style="margin-bottom:20px;">
                                        <h3 class="text-center" style="font-size:25px;"><a href="#">Mugs</a></h3>
                                    </div>
                                    <div class="single-category-boxes">
                                       <a href="#" >
                                        <img src="https://flowerportal.in/wp-content/uploads/2020/02/HD-Printed-Mug.jpg" alt="image" class="trending_img">
                                       </a>
                                    </div>
                                    <div class="product-content d-none d-xs-none d-sm-block d-md-block d-lg-block  d-xl-block text-left">
                                        <h3 class="text-center"><a href="#">Mugs</a></h3>
                                    </div>
                                    <div class="insta_actions">
                                        <button class="btn btn-primary  text-uppercase text-center view_more">SHOP NOW</button>
                                    </div>
                                 </div>
                              </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                 <div class="single-product-box">
                                    <div class="product-content d-block d-xs-block d-sm-none d-md-none d-lg-none  d-xl-none text-left" style="margin-bottom:20px;">
                                        <h3 class="text-center" style="font-size:25px;"><a href="#">Premium T-shirtssss</a></h3>
                                    </div>
                                    <div class="single-category-boxes">
                                       <a href="#" >
                                        <img src="https://4.imimg.com/data4/AA/HC/MY-26596027/men-s-fancy-t-shirt-500x500.jpg" alt="image" class="trending_img">
                                       </a>
                                    </div>
                                    <div class="product-content d-none d-xs-none d-sm-block d-md-block d-lg-block  d-xl-block text-left">
                                        <h3 class="text-center"><a href="#">Premium T-shirtsss</a></h3>
                                    </div>
                                    <div class="insta_actions">
                                        <button class="btn btn-primary  text-uppercase text-center view_more">SHOP NOW</button>
                                    </div>
                                 </div>
                              </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                 <div class="single-product-box">
                                    <div class="product-content d-block d-xs-block d-sm-none d-md-none d-lg-none  d-xl-none text-left" style="margin-bottom:20px;">
                                        <h3 class="text-center" style="font-size:25px;"><a href="#">Face Masks</a></h3>
                                    </div>
                                    <div class="single-category-boxes">
                                       <a href="#" >
                                        <img src="https://raven.contrado.com/resources/images/2020-3/145562/personalised-face-mask-869701_l.jpg?auto=compress,format" alt="image" class="trending_img">
                                       </a>
                                    </div>
                                    <div class="product-content d-none d-xs-none d-sm-block d-md-block d-lg-block  d-xl-block text-left">
                                        <h3 class="text-center"><a href="#">Face Masks</a></h3>
                                    </div>
                                    <div class="insta_actions">
                                        <button class="btn btn-primary  text-uppercase text-center view_more">SHOP NOW</button>
                                    </div>
                                 </div>
                              </div>
                              
                              
                           </div>
            <div class="row d-block d-sm-none">
                <div class="center-instagram-slider loop center owl-carousel owl-theme">
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                 <div class="single-product-box">
                                    <!--<div class="product-content d-block d-xs-block d-sm-none d-md-none d-lg-none  d-xl-none text-left" style="margin-bottom:20px;">-->
                                    <div class="product-content d-block d-xs-block d-sm-none d-md-none d-lg-none  d-xl-none text-left" style="margin-bottom:20px;">
                                        <h3 class="text-center" style="font-size:25px;"><a href="#">Mugs</a></h3>
                                    </div>
                                    <div class="single-category-boxes">
                                       <a href="#" >
                                        <img src="https://flowerportal.in/wp-content/uploads/2020/02/HD-Printed-Mug.jpg" alt="image" class="trending_img">
                                       </a>
                                    </div>
                                    <div class="product-content d-none d-xs-none d-sm-block d-md-block d-lg-block  d-xl-block text-left">
                                        <h3 class="text-center"><a href="#">Mugs</a></h3>
                                    </div>
                                    <div class="insta_actions">
                                        <button class="btn btn-primary  text-uppercase text-center view_more">SHOP NOW</button>
                                    </div>
                                 </div>
                              </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                 <div class="single-product-box">
                                    <div class="product-content d-block d-xs-block d-sm-none d-md-none d-lg-none  d-xl-none text-left" style="margin-bottom:20px;">
                                        <h3 class="text-center" style="font-size:25px;"><a href="#">Premium T-shirts</a></h3>
                                    </div>
                                    <div class="single-category-boxes">
                                       <a href="#" >
                                        <img src="https://4.imimg.com/data4/AA/HC/MY-26596027/men-s-fancy-t-shirt-500x500.jpg" alt="image" class="trending_img">
                                       </a>
                                    </div>
                                    <div class="product-content d-none d-xs-none d-sm-block d-md-block d-lg-block  d-xl-block text-left">
                                        <h3 class="text-center"><a href="#">Premium T-shirts</a></h3>
                                    </div>
                                    <div class="insta_actions">
                                        <button class="btn btn-primary  text-uppercase text-center view_more">SHOP NOW</button>
                                    </div>
                                 </div>
                              </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                 <div class="single-product-box">
                                    <div class="product-content d-block d-xs-block d-sm-none d-md-none d-lg-none  d-xl-none text-left" style="margin-bottom:20px;">
                                        <h3 class="text-center" style="font-size:25px;"><a href="#">Face Masks</a></h3>
                                    </div>
                                    <div class="single-category-boxes">
                                       <a href="#" >
                                        <img src="https://raven.contrado.com/resources/images/2020-3/145562/personalised-face-mask-869701_l.jpg?auto=compress,format" alt="image" class="trending_img">
                                       </a>
                                    </div>
                                    <div class="product-content d-none d-xs-none d-sm-block d-md-block d-lg-block  d-xl-block text-left">
                                        <h3 class="text-center"><a href="#">Face Masks</a></h3>
                                    </div>
                                    <div class="insta_actions">
                                        <button class="btn btn-primary  text-uppercase text-center view_more">SHOP NOW</button>
                                    </div>
                                 </div>
                              </div>
                </div>
            </div>

         </div>
      </section>
      
      <section class="promotion-area ptb-60 jarallax" data-jarallax='{"speed": 0.3}'>
         <div class="container">
        
        <div class="row ">
           
            <div class="col-md-6">
               
            </div>
            <div class="col-md-6 text-center">
                 <p class="text-white text-center  promotion_heading mb-0">CREATIVE AND AMBITIOUS?</p>
                    <p class="text-white text-center">Sell your own custom designs online and start earning TODAY!</p>
                    <a href="<?= base_url()?>customize"><button class="btn btn-primary  text-uppercase text-center text-white">Learn More</button></a>
            </div>
             <div class="col-md-2"></div>
           
        </div>
        <br> <br> <br>
    </div>
      </section>
      <section style="padding:0px !important">
      <?php include('includes/instagram.php') ?>
      <section class="testimonials-area ptb-60 jarallax" data-jarallax='{"speed": 0.3}'>
         <div class="container">
            <div class="testimonials-slides owl-carousel owl-theme">
               <?php foreach($testinomial as $test ) :?>
               <div class="single-testimonials">
                  <div class="client-image">
                     <img src="<?=$test->image?>" alt="image">
                  </div>
                  <p style="color:white"><?= $test->description?></p>
                  <div class="client-info">
                     <h4><?= $test->name?></h4>
                     <span><?= $test->designation?></span>
                  </div>
               </div>
               <?php endforeach;?>
         </div>
         </div>
      </section>
     <section class="subscribe-area ptb-60" style="display:none;">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="newsletter-content">
<h3>Join Our Mailing List</h3>
<p>Keep up to date with latest news, behind the scenes, exclusive offer-prices and more.
We promise to email in good taste.</p>
</div>
</div>
<div class="col-lg-6">
<form class="newsletter-form" data-toggle="validator">
<input type="email" class="form-control radius_input" placeholder="Enter your email address" name="EMAIL" required autocomplete="off">
<button type="submit" class="btn btn-primary">I AM IN</button>
<div id="validator-newsletter" class="form-result"></div>
</form>
</div>
</div>
</div>
</section>
<?php 	$this->load->view('includes/footer');?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
var rs = '<?php echo $currency; ?>';
    function callelement(){
        var arr = document.getElementsByClassName('hiddenid');
            for(var i=0; i<arr.length;i++){
                var item = arr[i].value;
                var id = arr[i].value;
                    productdata(item,id);
            }
    }
callelement();    
function counter(baseid)
{
    if(baseid == 2){
        return 5;
    }
    else if(baseid == 3){
        return 3;
    }else{
        return 2;
    }
}
function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}
function productdata(item_id,id){
  $("#products"+id).html('<div class="justify-content-center" style="margin-left:45%;"><img src=" <?=base_url()?>assets/img/unnamed.gif" style="position:absoulte;left:40%; height:80px; width:80px"/></div>');
   	$("#mobile"+id).html('<div class="justify-content-center" style="margin-left:45%;"><img src=" <?=base_url()?>assets/img/unnamed.gif" style="position:absoulte;left:40%; height:80px; width:80px"/></div>');
   	var pid = item_id;
   	var cid = id;
   	
   	var log_id = "<?= $_SESSION['user_id']?>";
   var d='';
    $.ajax({
        url:"<?= base_url()?>Home/products/",
       method:"POST",
       dataType:"json",
        data:{'Id':item_id},
        success:function(e){
            $("#products"+id).html('');
            $("#mobile"+id).html('');
            var data1 = e;
        
            $.each(data1,function( key, res_data ) {
            if(res_data.user_image!=""){
            var icon = res_data.user_image;
        }else{
            var icon = "https://cdn.toesmith.com/toesmith/designer-profile/2R7weHHKDkorbZUbAKtmi2_tBhIbL7Et.jpg";
        }
         
        var extra = (res_data.extras)?JSON.parse(res_data.extras):"";
         var sides = res_data.side;
         var screenshots  = isJson(res_data.screenshot)?JSON.parse(res_data.screenshot):res_data.screenshot;
         
         if(extra!= ""){
            if($.inArray(res_data.color,extra.color)!==-1){
            var mrp = res_data.mrp;
            var price = parseInt((res_data.price))+parseInt(extra.amount)+parseInt(res_data.designerCharge);
            var discount =Math.floor(parseInt(((mrp-price)/mrp)*100));
            }
            else{
            var mrp = res_data.mrp;
            var price = parseInt((res_data.price))+parseInt(res_data.designerCharge);
            var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
            } 
        }
        else{
            var mrp = res_data.mrp;
            var price = parseInt((res_data.price))+parseInt(res_data.designerCharge);
            var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
            } 
        
      if(log_id!=""){
          if(res_data.wishproduct == res_data.id ){
                var w=' <span class="btn-wish"><button class="btn-wishlist  wished removewish" data-tempid ="'+res_data.id+'" data-base="'+res_data.pid+'" data-id="'+res_data.w_id+'"><i class="far fa-heart"></i></button></span>'; 
                
              }else{
             var w = ' <span class="btn-wish"><button class="btn-wishlist addwish" data-tempid ="'+res_data.id+'" data-base="'+res_data.pid+'" data-id="'+res_data.w_id+'"><i class="far fa-heart"></i></button></span>';
          }
      }else{
         var w = ' <span class="btn-wish"><button class="btn-wishlist"   data-toggle="modal" data-target="#loginotpmodal"><i class="far fa-heart"></i></button></span>';
              
      }
       var d = '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">'+
                    '<div class="single-product-box product-card">'+
                   '<div class="product-image" onMouseOver="show_slider(\'product_slider'+res_data.id+'\',\'product_image'+res_data.id+'\')" onMouseOut="hide_slider(\'product_slider'+res_data.id+'\',\'product_image'+res_data.id+'\')">'+
                      '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.id+'" id="product_image11">'+
                     '<img src="'+res_data.image+'" alt="image" id="product_image'+res_data.id+'">'+
                    '</a>'+
                   '<div id="product_slider'+res_data.id+'" style="display:none">'+
                  '<div id="carouselExampleIndicators'+res_data.id+'" class="carousel slide " data-ride="carousel">'+
                 '<ol class="carousel-indicators">';
                 for( var i=1; i< counter(res_data.pid); i++){
                  if(i==1){
                    var st = "active";}else{
                        var st = "";
                    }
               d   =   d +  '<li data-target="#carouselExampleIndicators'+res_data.id+'" data-slide-to="'+i+'" class="'+st+'"></li>';
             
              } 
                
               
             d = d + '</ol>'+
              '<div class="carousel-inner">';
              var j=1;
              for( j; i< counter(res_data.pid); j++){
                  if(isJson(res_data.screenshot)){
                      
                  }else{
                  if(j==1){
                    st = "";
                     d   =   d+  '<div class="carousel-item active">'+
                                   '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.id+'" id="product_image11"><img class="d-block w-100" src="'+res_data.image+'" alt="First slide"></a>'+
                                 '</div>';
                  }else{
                      st ="";
                        d   =   d+  '<div class="carousel-item '+st+'">'+
                                   '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.id+'" id="product_image11"><img class="d-block w-100" src="<?=base_url()?>uploads/templates/' + res_data.baseslug+'-'+"black"+'-side'+j+'.png" alt="First slide"></a>'+
                                 '</div>';
                  }
             
                  }
              } 
     
           d = d +
              '</div>'+
              '</div>'+
            '</div>'+
            '</div>'+
         '<span style="position: absolute; top: 0px; left: 0px;">'+
      '<!---- <span class="red_label">Top Selling  <span class="label_arrow"></span></span>-->'+
     '   </span>'+
    '<p class="designer_area"> <a href="<?=base_url('Designer/')?>'+res_data.designer_id+'" style="color:#fff;"><img src="'+icon+'" class="designer_image" alt="...">'+
    '<span class="design_title">Designed By:</span> <span class="three-dot designer-name">'+res_data.user_fullname+'</span></a></p>'+
    '<div class="product-content text-left">'+
    '<h3><a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.id+'" >'+ res_data.name+'</a></h3>'+
    '<div class="product-price" >'+
   '<span class="new-price" id="actual_price'+ res_data.id+'"> '  + rs  + "  "+price+  '</span>'+"  "+
    '<span class="old-price" id="oldactual_price'+ res_data.id+'">' + rs + "   "+mrp    + '</span>'+"  "+
    '<span class="offer-price" id="actual_priceoff'+ res_data.id+'"> (' + discount+'%'+' off)</span>'+
                            '</div>'+
    '<a href="<?=base_url('customizer')?>?product='+ res_data.pid +'&template='+res_data.id+'" class="btn btn-primary btn-edit">Edit Design</a>'+
    w+
    '</div>'+
    '</div>'+
    '</div>';
    var m = '<div class="col-xs-6 col-6 mt-mobile">'+
                    '<div class="single-product-box product-card">'+
                     '  <a href="<?= base_url()?>'+res_data.baseslug +'/'+ res_data.id+'" class="mobile-link">'+
                      '<div class="product-image">'+
                                '<img src="'+res_data.image+'" alt="image">'+
                            '</div>'+
                            '<div class="product-content text-left">'+
                               ' <h3 class="mobile-product-title"><a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.id+'" >'+res_data.name+'</a></h3>'+
                                '<div class="product-price" >'+
                                '<span class="mobile-new-price" id="mobileprices'+res_data.id+'"> '+ rs  +"  "+  price+'</span>'+
                                ' <span class="mobile-old-price" id="mobilemrp'+res_data.id+'">'+  rs  +"  "+   mrp+' </span>'+
                                 '</div>'+
                            '</div>'+
                        '</a>'+
                    '</div>'+
                '</div>';
      $("#mobile"+cid).append(m);
   $("#products"+cid).append(d);
    });

        }
    });
}


 $(document).on("click",'.addwish',function(){
        var temp_id = $(this).data("tempid");
        var base_id = $(this).data("base");
           $(this).toggleClass("wished");
           $(this).toggleClass("addwish");
            $(this).toggleClass("removewish");
             $.ajax({
            url:"<?= base_url()?>Front/addwishlist/",
             method:"GET",
            data:{temp_id:temp_id,base_id:base_id},
            success:function(r){
            swal("Add to wishlist ",{
                  icon: "success",
                   button: false,
                   timer: 1200,
     });
                wishcount();
            }
        });
        
   });
    $(document).on("click",".removewish",function(){
            // var id = $(this).data("id");
             var id = $(this).data("tempid");
             var base_id = $(this).data("base");
             $(this).toggleClass("wished");
             $(this).toggleClass("addwish");
             $(this).toggleClass("removewish");
            $.ajax({
            url:"<?= base_url()?>Front/remove_wish/",
            method:"POST",
            data:{Id:id},
            success:function(r){
                 wishcount();
               swal("Remove from wishlist ",{
                      icon: "success",
                       button: false,
                       timer: 1200,
     });
              
      
             }
        });   
            
        });
    
</script>