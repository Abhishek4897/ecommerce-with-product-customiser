<?php include(__DIR__.'../../arteno/includes/header.php')?>
<style>
.form-control{
    background: #f5f5f5!important;
    border: 2px solid #bfbebe!important;
    border-radius: 5px;
    font-size: 16px;
    font-weight: 500;
}
   .designer_image{
   width: 100%;
   height: 100%;
   object-fit: cover;
   z-index: 2;
   }
   .visible-sm{
   display:none;
   }
   .mobile-bottom-fixed-button-cart{
   position: fixed;
   bottom: 0;
   width: 100%;
   margin: auto;
   /* left: 13%; */
   line-height: 50px;
   color: white;
   /* border-radius: 25px; */
   font-size: 16px;
   font-weight: bold;
   text-align: center;
   z-index: 99;
   background: white;
   padding: 20px;
   left: 0;
   right: 0;
   }
   @media only screen and (max-width: 600px) {
   .unvisible-sm{
   visibility:hidden!important; 
   }
   .footer-area{
    display:none;
   }
   .custom-container{
   width:96%!important;
   padding-left:2px;
   padding-right:2px;
   }
   .visible-sm{
   display:block;
   }
   .cart-pic{
   height:115px!important;
   }
   }
   .sizeclass{
   border: 1px solid grey;
   padding: 5px 5px 5px 12px;
   border-radius: 4px;
   width: 50px;
   display:inline;
   }
   .variation{
   font-size:13px;
   }
   .variation-value{
   padding: 0px 10px;
   width: 60px; 
   border: 1px solid rgb(144, 161, 181);
   border-radius: 4px; line-height: 30px;
   text-align:center;
   }
   .variation-name{
   font-size: 9px; color: rgb(144, 161, 181);
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
   .close-button{
   /*font-size:18px;*/
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
   .custom-lg {
   width: 90%!important;
   margin:auto;
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
   .cart-control{
   font-size: 14px; color: rgb(214, 20, 20); cursor: pointer;
   }
   .color-small{
   color:rgb(148, 148, 148)!important;
   }
   .shipping_address{
   font-size: 16px;
   text-transform: capitalize;
   line-height: 30px;
   }
   .stick-mobile-footer{
   }
   .mb-25{
   margin-bottom:25px!important;
   }
   .custom-container{
   width:80%;
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
   .variation-data{
   display:inline;
   }
   a,a:hover{
   color:black;
   }
   .mt-5{
   margin-top:5px!important;
   }
   /*mobile view cart card css*/
   .cart{
   border-radius: 12px!important; box-shadow: rgba(0, 0, 0, 0.04) 0px 3px 6px 0px!important; background-color: rgb(255, 255, 255)!important; padding: 5px!important; margin-bottom: 10px!important;
   }
   .cart .cart-image{
   overflow: hidden; position: relative; border-radius: 12px;
   }
   .mobile-cart-text{
   text-align: center;
   font-size: 18px;
   font-weight: bold;
   line-height: 20px;
   }
   .cart .cart-image .cart-pic{
   width: 100%; transform: scale(1.3); object-fit: cover;
   }
   .cart .cart-body{
   flex: 3 1 0%; padding: 0px 15px; position: relative;
   }
   .cart .cart-body .cart-close{
   height: 35px; width: 35px; position: absolute;
   top: -18px;
   right: -5px; padding: 12px;
   font-size:20px;
   }
   .cart-total-counter{
   font-size: 16px; text-align: center; color: rgb(131, 131, 131); line-height: 20px;
   }
   .cart .cart-body .cart-content{
   display: flex; flex-direction: column; height: 100%;
   }
   .cart .cart-body .cart-content .cart-wrapper{
   height:84px!important;
   flex: 1 1 0%; display: flex; flex-direction: column; justify-content: center;
   }
   .cart .cart-body .cart-content .cart-wrapper .cart-price{
   font-size: 14px; line-height: 20px; margin-top: 5px; padding-left: 4px;
   }
   .cart .cart-body .cart-content .cart-wrapper .cart-variation{
   font-size: 14px; line-height: 20px; padding-left: 4px;
   }
   .cart .cart-body .cart-content .cart-wrapper .cart-name{
   font-size: 15px; font-weight: bold!important; line-height: 20px; padding-left: 4px;
   }
   .cart-pic{
   width: 100%; transform:object-fit: cover;
   height:90px;
   }
   .view_more{
   font-size:13px!important;
   }
   .wishbutton{
   height: 35px; border-top: 1px solid rgba(0, 0, 0, 0.07); text-align: center; color: rgb(212, 23, 22); font-size: 12px; line-height: 38px;
   }
  
   /*copun css*/
   .modal-width{
       width:500px!important;
   }
   .coupon-card{
       box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 6px 0px; 
       padding: 25px 25px 25px 50px;
       background: white; width: 100%;
       margin: auto auto 10px;
       position: relative;
       border-radius: 8px;
       overflow: hidden;
   }
   .pt-30{
       padding-top:30px;
   }
   .section-bg{
       background:white;
       padding-bottom:0px;
   }
   .card-total-detail{
       font-size: 14px;
        color: rgba(0, 0, 0, 0.6);
        font-weight: 400;
   }
    .modal-width{
           width:500px;
       }
       .coupon-header-padding{
          padding:40px; 
       }
   @media only screen and (max-width: 600px) {
       .section-bg{
      background:#f5f5f5!important;
       padding-bottom:15px;
      }
         .modal-width{
           width:80%!important;
       }
       .coupon-header-padding{
          padding:20px 10px; 
       }
    }
  
</style>
<?php 
$d_id=$this->session->userdata('designer_id');
$cart_data=$this->session->userdata('designer_cart');?>
    <section class="news-area bg-dark ptb-60">
        <div class="container mt-40">
            <div class="login-content">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img  src="<?php echo $cart_data['items'];?>" />
                                            
                                        </div>
                                        <div class="col-md-8">
                                            <span class="navigate">Design Details <i class="fas fa-chevron-right"></i></span>
                                            <div class="row mt-15">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="label_details">Name</label>
                                                        <input type="text" class="form-control"   name="name" required>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                				                    <div class="form-group">
                                                        <label class="label_details">Category</label>
                                                        <select class="form-control" name="category_id" required>
                                                            <?php foreach($categories as $category):?>
                                                            <option value="<?= $category->id ?>" <?= ($category->product_base==$product_base)?'selected':''?> style="text-transform:capitalize;"><?= $category->name ?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
            					                </div>
                    					        <div class="col-md-12">
                    					             <label class="label_details">Description</label>
                    					            <textarea class="form-control" name="description" rows='4' cols="2"></textarea>
                    					        </div>
                                                <div class="col-md-6 mt-10">
                                                    <button type="submit" name="publish_template" value="1" class="btn btn-primary checkout-button">PUBLISH</button>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>    
                                </form>
                            </div>
                        </div>
                    </div>
        </div>
    </section>  
<?php include(__DIR__.'../../includes/footer.php')?>
