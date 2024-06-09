<?php include(__DIR__.'../../includes/header.php')?>
<link  as="style" rel="stylesheet" charset="UTF-8"  href="<?=base_url()?>assets/css/designer.css">
<style>
.cover_image{
    position: absolute;
    top: 120px;
    right: 5px;
    background: rgba(0, 0, 0, 0.6);
    padding: 5px;
    color: white;
    z-index: 10000;
    font-size: 9px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
}
#cover_pic{
   visibility: hidden;
}
.card {
    border-radius: 0px!important;
}
.designer_image{
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 2;
}
.image_area{
    width: 80px;
    height: 80px;
    border-radius: 50%;
    overflow: hidden;
    position: relative;
}
#profile_pic{
    visibility: hidden;
    height: 0px;
    width: 0px;
}
.pro_pic{
    position: absolute;
    bottom: 0px;
    width: 100%;
    height: 50%;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    background: rgba(0, 0, 0, 0.6);
    flex-direction: column;
    cursor: pointer;
    right: 0px;
    z-index: 3;
    margin-bottom:0px!important;
}
.f-16{
    font-size:16px!important;
}
.ml-15{
    margin-left: 15px!important;
}
.mock-up-image{
    padding: 10px;
    height: 230px;
}
.border_single{
    border:1px solid #eee!important;
}
.border_none{
    border:none!important;
}
.sidebar_top_title{
    font-size:25px!important;
}
.border-radius{
    border-top-left-radius:20px!important;
    border-top-right-radius:20px!important;
}
.mt-35{
    margin-top:35px!important;
}
.mt-40{
    margin-top:40px!important;
}
.widget-area .widget_recent_comments ul li::before {
	background: #222;
	height: 7px;
	width: 7px;
	content: '';
	left: 0;
	display:none!important;
	top: 50%;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	position: absolute
}
.widget-area .widget_recent_comments ul li:active,
.widget-area .widget_recent_comments ul li:focus,
.widget-area .widget_recent_comments ul li:hover{
   border-left:4px solid #d1a36a;
}
.sidebar_active{
   border-left:4px solid #d1a36a;
}

.widget-area .widget_recent_comments ul li{
    border-bottom: 2px dashed #eee;
}

.sidebar_title{
    font-size: 18px;
    color:#111;
    font-weight: 500;
}
.p-7{
    padding: 7px;
}
.label_details{
    font-size: 16px;
    font-weight: 600;
    text-transform:capitalize!important;
}
.navigate{
    font-size: 20px;
    font-weight: 500;
}
.mt-15{
    margin-top: 15px;
}
.shipping_name{
    font-size: 14px;
    text-transform: Uppercase;
    color:#111;
    line-height: 36px;
}
.color-small{
    color:rgb(148, 148, 148)!important;
}
.shipping_address{
    font-size: 16px;
    text-transform: capitalize;
    line-height: 30px;
}
.mb-25{
    margin-bottom:25px!important;
}
.card{
    border-radius: 20px;
    border: none;
}
.order_id{
    font-size: 16px;
    text-transform: capitalize;
    font-weight: 600;
    color:#111;
    line-height: 36px;
}
.mt-5{
    margin-top:5px!important;
}
.visible-desktop{
    display:block;
}
.visible-mobile{
    display:none;
}
.inline-mobile-menu{
        display: flex;
        width: 100%;
        background-color: white;
        padding: 0px 10px;
}

/*.mobile-menu{*/
/*    border-bottom: 1px solid lightgrey;*/
/*    background: white;*/
/*    padding: 5px 2px 10px 2px;*/
/*    text-align: center;*/
/*}*/
 .mobile-menu {
    border-bottom: 1px solid lightgrey;
    background: white;
    padding: 5px 2px 0px 2px;
    text-align: center;
    display: flex;
}

/*.mobile-menu span {*/
/*    padding: 12px;*/
/*    font-size: 17px;*/
/*    font-weight: 500;*/
/*}*/
.mobile-menu span {
    width: 50%;
    padding: 10px;
    font-size: 15px;
    font-weight: bold;
}
.second-mobile{
    flex: 1 1 0%;
    text-align: center;
    padding-left: 0px;
    border-bottom: 5px solid rgb(214, 20, 20);
}
@media only screen and (max-width: 600px) {
  .visible-mobile{
    display:block;
}
.news-area{
    padding-top:60px !important;
}
.visible-desktop{
    display:none;
}
.pt-60{
    padding-top:60px;
}
.mobile-menu-active{
    border-bottom:2px solid red;
}
.mobile-menu-item{
    text-decoration:none;
    color:black;
    display:inline;
}
}
.pro_pic{
    position: absolute;
    bottom: 0px;
    width: 100%;
    height: 50%;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    background: rgba(0, 0, 0, 0.6);
    flex-direction: column;
    cursor: pointer;
    right: 0px;
    z-index: 3;
}
.f-16{
    font-size:16px!important;
}
.ml-15{
    margin-left: 15px!important;
}
.mock-up-image{
    padding: 10px;
    height: 230px;
}
.border_single{
    border:1px solid #eee!important;
}
.border_none{
    border:none!important;
}
.designer_profile{
    height:120px;
    width:120px;
    border-radius:50%;
    object-fit: cover;
}
.sidebar_top_title{
    font-size:25px!important;
}
.border-radius{
    border-top-left-radius:20px!important;
    border-top-right-radius:20px!important;
}
.mt-35{
    margin-top:35px!important;
}
.mt-40{
    margin-top:40px!important;
}
.widget-area .widget_recent_comments ul li::before {
	background: #222;
	height: 7px;
	width: 7px;
	content: '';
	left: 0;
	display:none!important;
	top: 50%;
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	position: absolute
}
.widget-area .widget_recent_comments ul li:active,
.widget-area .widget_recent_comments ul li:focus,
.widget-area .widget_recent_comments ul li:hover{
   border-left:4px solid #d1a36a;
}
.sidebar_active{
   border-left:4px solid #d1a36a;
}

.widget-area .widget_recent_comments ul li{
    border-bottom: 2px dashed #eee;
}

.sidebar_title{
    font-size: 18px;
    color:#111;
    font-weight: 500;
}
.p-7{
    padding: 7px;
}
.label_details{
    font-size: 16px;
    font-weight: 600;
    text-transform:capitalize!important;
}
.navigate{
    font-size: 20px;
    font-weight: 500;
}
.mt-15{
    margin-top: 15px;
}
.shipping_name{
    font-size: 14px;
    text-transform: Uppercase;
    color:#111;
    line-height: 36px;
}
.color-small{
    color:rgb(148, 148, 148)!important;
}
.shipping_address{
    font-size: 16px;
    text-transform: capitalize;
    line-height: 30px;
}
.mb-25{
    margin-bottom:25px!important;
}
.card{
    border-radius: 20px;
    border: none;
}
.visible-sm{
    display:none;
}
.visible-lg{
    display:block;
}
#eshopshow{
    display:none;
}
.active-menu{
    border-bottom:2px solid red;
}
#dashboard_area{
    padding-left:30px;
    padding-right:30px;
    margin-top:10px;
}
.designer_name{
    font-weight:bold;
    font-size: 18px;
}
@media screen and (max-width: 600px) {
  .mobile-designer-profile{
      margin-top:-55px;
  }
  .mobile-25{
      padding-left:25px!important;
      padding-right:25px!important;
      margin-top:10px;
  }
  .visible-sm{
    display:block;
}
.custum-table th,.custum-table td {
    font-size: 15px!important;
}
#dashboard_area{
    padding-left:30px;
    padding-right:30px;
    margin-top:10px;
}
.mt-40{
    margin-top:0px!important;
}
.visible-lg{
    display:none;
}
}
</style>
<?php 
$d_id=$this->session->userdata('designer_id');
$designer=designer_profile($d_id);
?>
<section class="news-area bg-dark ptb-60 visible-desktop">
   <div class="container mt-40">
      <div class="row">
          <?php include('pages/sidebar.php')?>
          <?php 
          
          if($page=='start_design')
          include('pages/start_design.php');
          if($page=='my_store')
          include('pages/my_store.php');
          if($page=='account_details')
          include('pages/designer_details.php');
          if($page=='payouts')
          include('pages/payouts.php');
          if($page=='my_design')
          include('pages/my_design.php');
          ?>
      </div>
   </div>
</section>

<!--this is for mobile view -->

<section class="news-area bg-dark pt-60 visible-mobile">
    <div class="mobile-menu">
        <span id="mobile-menu-dashboard" onclick="showDashboard()">DASHBOARD</span></a>
        <span id="mobile-menu-eshop" onclick="showEshop()">E-SHOP LIVE</span>
    </div>    
   
    <div class="container" id="dashboard_area" class="bg-dark">
        <div class="row">
             <div class="col-md-12 col-sm-12 col-12 pt-20 p-25">
                  <div class="row">
                 <?php include('pages/mobile_sidebar.php')?>
                 <?php include('pages/mobile_dashboard.php')?>
                 </div>
             </div>
            
             
        </div>
    </div>
   <div id="eshopshow" style="display:none;">
    <div class="main-banner visible-sm" style="height: 80%;background-image: url(<?=($designer->cover_image)?$designer->cover_image:'https://arteno.in/uploads/sliders/newslider5.jpg'?>);">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="card shadow-sm user_sidebar mb-2 text-center">
                <div class="card-body">
                    <img src="<?=($designer->user_image)?$designer->user_image:base_url('assets/img/user.png')?>" class="mobile-designer-profile designer_profile">
                    <h3><?=$designer->user_fullname;?></h3>
                    <p>Designed by <?=$designer->user_fullname;?></p>
                    <form method="post" id="upload_cover_pic" action="<?= base_url()?>Designer/update_cover" enctype="multipart/form-data"> 
                <input type="file" name="cover" id="cover_pic">
                  <button type="submit" class='input_submit' style="display:none"></button>
                </form>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
<label for="cover_pic" class="cover_image"><span ><i class="fa fa-camera cam_size"></i> Upload</span></label>
<section class="bg-dark ptb-60 ">
   <div class="container mt-40">
      <div class="row">
            <div class="col-lg-4 col-md-12 visible-lg">
                <div class="card shadow-sm user_sidebar mb-2 text-center">
                    <div class="card-body">
                    <img src="<?=($designer->user_image)?$designer->user_image:base_url('assets/img/user.png')?>" class="designer_profile">
                    <h3><?=$designer->user_fullname;?></h3>
                    <p>Designed by <?=$designer->user_fullname;?></p>
                    </div>
                </div>
            </div>
          <?php include('pages/my_store.php');?>
      </div>
   </div>
</section>
</div>
</section>

<!--share modal-->
                        <div class="modal fade" id="share_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="overflow-x:scroll">
                              <div class="modal-dialog modal-dialog-centered modal-md" role="document" style="">
                                <div class="modal-content">
                                  <div class="modal-body">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                          </button>
                                          <div class="p-3">
                                                <center>
                                                    <h4 class="mt-3" style="">Let the world know!</h4>
                                                    <p>Time to let everyone know about your <br>very own footwear brand.</p>
                                                 </center>
                                                <center>
                                                     <img src="<?=($designer->user_image)?$designer->user_image:base_url('assets/img/user.png')?>" style="height:200px; width:200px; border-radius:50%">
                                                 </center>
                                                
                                                 <form>
                                                      <center><p class="mt-3" style="font-size: 14px; line-height: 0px;"><?=$designer->user_fullname;?></p>
                                                         <p>Designed by <?=$designer->user_fullname;?></p>
                                                         <ul class="social social-share" style="list-style: none; display: inline-flex;">
                                                            <li class="fb"><a href="https://www.facebook.com/Arteno-100223201838813" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                                            <li class="instra"><a href="https://instagram.com/arteno_official?igshid=1d6y4qxyagwjf"><i class="fab fa-instagram" target="_blank"></i></a></li>
                                                            <li class="mail"><a href="mailto:Customersupport@arteno.in"><i class="fa fa-envelope"></i></a></li>
                                                            <li class="twitter"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                                            <li class="linked"><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                                          </ul>
                                                      </center>
                                                       <br>
                                                       <div class="row">
                                                               <div class="col-md-9 col-9 pr-0">
                                                                   <div class="form-group mb-2">
                                                                       <input type="text" class="form-control custum-input" id="myInput" value="<?= base_url($designer->brand)?>" style="background-color: white; height: 41px; border: 1px solid black;border-radius: 0px;">
                                                                    </div>
                                                               </div>
                                                               <div class="col-md-3 col-3 pl-0">
                                                                   <button type="button" onclick="myFunction()" class="btn btn-primary mb-2" style="border-radius:0px;">Copy</button>
                                                               </div>
                                                           </div>
                                                              
                                                          
                                                             <!--<button type="submit" data-toggle="modal" data-target="#otpverificationmodal" data-dismiss="modal" class="btn btn-primary btn-block" style="border-radius:0px; font-size: 16px;">Login</button>-->
                                                 </form>
                                          </div>
                                        
                                  </div>
                                </div>
                              </div>
                            </div>
                       <!--share modal-->

<script>
    var dashboard=document.getElementById('dashboard_area');
    var eshopshow=document.getElementById('eshopshow');
    var activemenu= document.getElementsByClassName("mobile-menu-active");
    document.getElementById("mobile-menu-dashboard").style.borderBottom = "thick solid red";


    
    function showDashboard(){
        dashboard.style.display="block";
        eshopshow.style.display="none";
        document.getElementById("mobile-menu-dashboard").style.borderBottom = "thick solid red";
        document.getElementById("mobile-menu-eshop").style.borderBottom = "none";
        
        
        
    }
    function showEshop(){
        dashboard.style.display="none";
        eshopshow.style.display="block";
        document.getElementById("mobile-menu-dashboard").style.borderBottom = "none";
        document.getElementById("mobile-menu-eshop").style.borderBottom = "thick solid red";
        
    }
    function myFunction() {
      var copyText = document.getElementById("myInput");
      copyText.select();
      copyText.setSelectionRange(0, 99999)
      document.execCommand("copy");
      "Copied the text: " + copyText.value;
    }
 document.getElementById("cover_pic").onchange = function() {
    document.getElementById("upload_cover_pic").submit();
}
 </script>
</script>

<?php include(__DIR__.'../../includes/footer.php')?>

