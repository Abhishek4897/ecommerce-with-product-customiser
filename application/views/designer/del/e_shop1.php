<?php include(__DIR__.'../../includes/header.php')?>

<link  as="style" rel="stylesheet" charset="UTF-8"  href="<?=base_url()?>assets/css/designer.css">
<style>
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
@media screen and (max-width: 600px) {
  .mobile-designer-profile{
      margin-top:-55px;
  }
  .visible-sm{
    display:block;
}
.mt-40{
    margin-top:0px!important;
}
.visible-lg{
    display:none;
}
}
</style>
<div class="main-banner item-bg1 visible-sm" style="height: 80%">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="card shadow-sm user_sidebar mb-2 text-center">
                <div class="card-body">
                    <img src="https://admin.anshuwap.com/demo_arteno/assets/img/user.png" class="mobile-designer-profile designer_profile">
                    <h3>Richa</h3>
                    <p>Designed by Richa</p>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="news-area bg-dark ptb-60 ">
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
          <?php 
          
          
          include('pages/my_store.php');
          
          ?>
      </div>
   </div>
</section>

<?php include(__DIR__.'../../includes/footer.php')?>
