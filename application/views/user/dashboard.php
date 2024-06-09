<?php include('includes/header.php')?>
<?php include('includes/user-header.php')?>
<link rel="preload" as="style" onload='this.onload=null,this.rel="stylesheet"' charset="UTF-8"  href="<?=base_url()?>assets/css/user.css">
<style>
.stepper{
    display: flex!important;
}
.text-black{
    color:#111!important;
}
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
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);;
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
.navigate_header{
   font-size: 20px;
    line-height: 20px;
    font-weight: bold;
    text-align: center;
    padding: 40px 0px;
    display: flex;
    text-transform: uppercase;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
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

.mb-25{
    margin-bottom:25px!important;
}
.card{
    border-radius: 20px;
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
.order_date{
   font-size: 16px;
    text-transform: capitalize;
    font-weight: 600;
    line-height: 36px; 
}
@media only screen and (min-width: 978px) {
 .order_date{
   font-size: 16px;
   float:right;
    text-transform: capitalize;
    font-weight: 600;
    line-height: 36px; 
}
}
@media only screen and (max-width: 600px) {
 .navigate {
    font-size: 16px;
}
}


</style>
<section class="news-area  ptb-60">
   <div class="container mt-40" style="min-height:400px;">
      <div class="row">
          <?php //include('pages/sidebar.php')?>
          <?php 
          if($page=='user_details')
          include('pages/user_details1.php');
          if($page=='shipping_details')
          include('pages/shipping_details.php');
          if($page=='my_orders')
          include('pages/my_orders.php');
          if($page=='order_details')
          include('pages/order_details.php');
          ?>
      </div>
   </div>
</section>

<?php include(__DIR__.'../../includes/footer.php')?>