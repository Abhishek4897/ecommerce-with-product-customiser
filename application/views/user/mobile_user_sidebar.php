<?php include(__DIR__.'../../includes/header.php')?>
<style>

.sidebar_top_title_mobile{
    font-size:20px;
    font-weight: 400;
    line-height: 20px;
}
.sidebar_top_title_mobile_number{
    font-size:14px;
    font-weight: 400;
    line-height: 20px;
}
.pt-10{
    padding-top:10px!important;
}
.right_align{
    float:right!important;
}

</style>
<style>
.user_sidebar {
  z-index: 1;
  margin-bottom:40px!important;
}
.sidebar_top_title{
    font-size:25px!important;
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
    border-bottom: 2px solid #eee;
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
    text-transform: capitalize!important;
}
.navigate{
    font-size: 20px;
    font-weight: 500;
}
ul{
    list-style-type:none!important;
}
.mt-15{
    margin-top: 15px;
}
.shipping_name{
    font-size: 16px;
    text-transform: capitalize;
    font-weight: 600;
    color:#111;
    line-height: 36px;
}
.shipping_address{
    font-size: 16px;
    text-transform: capitalize;
    line-height: 30px;
}
.order_amount{
    font-size: 18px;
    text-transform: capitalize;
    line-height: 30px;
}
.order_date{
   font-size: 16px;
   float:right;
    text-transform: capitalize;
    font-weight: 600;
    line-height: 36px; 
}
.mb-25{
    margin-bottom:25px!important;
}
.card{
    /*border-radius: 20px;*/
    background:rgb(244, 244, 244);
    border: none;
}
.trash_button{
    font-size: 20px;
   float:right;
   color:red;
    text-transform: capitalize;
    font-weight: 600;
    line-height: 36px; 
}
.image_upload_area{
    width: 100%;
    height: 25%;
    bottom: 0px;
    right: 0px;
    position: relative;
    background: rgba(0, 0, 0, 0.4);
    display: flex;
    align-items: center;
    justify-content: center;
}
.user_profile{
    width: 102px;
    height: 102px;
    position: relative;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    overflow: hidden;
    margin: 30px auto;
}
.link_area{
    text-decoration: none;
    color: inherit;
}
.navbar_area{
    display: flex; 
    padding: 17px 0px; 
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.icon_image{
    width: 45px; 
    display: flex; 
    align-items: center; 
    justify-content: center;
}
.icon_data{
    width: 16px;
}
.nav_heading{
    flex: 1 1 0%;
    display: flex; 
    justify-content: center; 
    flex-direction: column;
}
.nav_title{
    font-size: 15px;
    font-weight: bold; 
    color: #111;
    line-height: 15px;
}
.nav_subtitle{
    font-size: 13px; 
    color: rgba(0, 0, 0, 0.5); 
    line-height: 13px;
    margin-top: 2px;
}
.nav_navigation{
    width: 45px;
    display: flex; 
    align-items: center;
    justify-content: center;
}
.navigation_height{
    height:12px;
}
.widget-area .widget_recent_comments ul li{
    border-bottom: none!important;
}
.widget-area .widget .widget-title {
    border-bottom:none!important;
}
</style>
<!--d-block d-xs-block d-sm-block d-md-none d-lg-none-->
<section class="news-area bg-dark ptb-60 d-block d-xs-block d-sm-block d-md-none d-lg-none">
    <div class="container mt-40" style="min-height:400px;">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-body">
                    <aside class="widget-area" id="secondary">
                        <section class="widget widget_recent_comments">
                            <?php 
                        $user =  $this->User_model->userdata();
                        
                            
                            ?>
                            <div class="user_profile text-center">
                               
                                <?php if($user->user_image!==""){?>
                               <label for="updloadImageProfilePic" class="image_upload_area">
                               <img src="<?= $user->user_image ?>" style="width: 20px; height: 16px;">
                               </label>
                                <?php }else{?>
                                 <label for="updloadImageProfilePic" class="image_upload_area">
                                <img src="https://shaunolver.com/public/images/app/shaun-avatar.png" alt="" style="height:70px;">
                            </label>
                                <?php }?>
                               
                              
                            </div>
                            <input type="file" id="updloadImageProfilePic" accept="image/x-png,image/jpeg" hidden="">
                            <div class="widget-title">
                               <div class="sidebar_top_title_mobile text-center"><?= $user->user_fullname ?></div>
                               <div class="sidebar_top_title_mobile_number text-center"><?= $user->user_phone?></div>
                            </div>
                            <a href="<?=base_url('user_details')?>" class="link_area">
                                <div class="navbar_area">
                                    <div class="icon_image">
                                         <img src="<?=base_url('assets/images/icons/user.png')?>" class="icon_data">
                                    </div>
                                    <div class="nav_heading">
                                        <div class="nav_title">User Details</div>
                                        <div class="nav_subtitle">Add your personal details here</div>
                                    </div>
                                    <div class="nav_navigation"><img src="<?=base_url('assets/images/icons/right_arrow.png')?>" class="navigation_height"></div>
                                </div>
                            </a>
                            <a href="<?=base_url('shipping_details')?>" class="link_area">
                                <div class="navbar_area">
                                    <div class="icon_image">
                                         <img src="<?=base_url('assets/images/icons/location.png')?>" class="icon_data">
                                    </div>
                                    <div class="nav_heading">
                                        <div class="nav_title">Addresses</div>
                                        <div class="nav_subtitle">Save addressess for faster checkout</div>
                                    </div>
                                    <div class="nav_navigation"><img src="<?=base_url('assets/images/icons/right_arrow.png')?>" class="navigation_height"></div>
                                </div>
                            </a>
                            <a href="<?=base_url('my_orders')?>" class="link_area">
                                <div class="navbar_area">
                                    <div class="icon_image">
                                         <img src="<?=base_url('assets/images/icons/orders.png')?>" class="icon_data">
                                    </div>
                                    <div class="nav_heading">
                                        <div class="nav_title">My Orders</div>
                                        <div class="nav_subtitle">Track new orders and view previous</div>
                                    </div>
                                    <div class="nav_navigation"><img src="<?=base_url('assets/images/icons/right_arrow.png')?>" class="navigation_height"></div>
                                </div>
                            </a>
                            <a href="<?=base_url('user_logout')?>" class="link_area">
                                <div class="navbar_area">
                                    <div class="icon_image">
                                         <img src="<?=base_url('assets/images/icons/power.png')?>" class="icon_data">
                                    </div>
                                    <div class="nav_heading">
                                        <div class="nav_title">Logout</div>
                                        
                                    </div>
                                    <div class="nav_navigation"><img src="<?=base_url('assets/images/icons/right_arrow.png')?>" class="navigation_height"></div>
                                </div>
                            </a>
                        </section>
                    </aside>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include(__DIR__.'../../includes/footer.php')?>