<?php include('includes/header.php') ?>

<!--<link  as="style" rel="stylesheet" charset="UTF-8"  href="<?=base_url()?>assets/css/designer.css">-->
<style>
@media only screen and (min-width: 900px){
    .container{
        padding-left:0px;
        padding-right:0px;
    }
}
.container{
    padding-left:0px;
    padding-right:0px;
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
                    <img src="<?= $designer->user_image?>" class="mobile-designer-profile designer_profile">
                    <h3><?= $designer->user_fullname ?></h3>
                    <p>Designed by : <?= $designer->user_fullname?></p>
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
                    <img src="<?= $designer->user_image?>" class="designer_profile">
                    <h3><?= $designer->user_fullname ?></h3>
                    <p>Designed by: <?= $designer->user_fullname ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 ">
                <div class="row" id="store">
                    
                    
                </div>
                
            </div>
          
          
      </div>
   </div>
</section>

<?php include('includes/footer.php')?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
$(document).ready(function(){
    
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
                wishcount();
                         swal("Add to wishlist ",{
                      icon: "success",
                       button: false,
                       timer: 1200,
     });
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
        function counter(baseid)
{
    if(baseid == 2){
        return 4;
    }
    else if(baseid == 3){
        return 2;
    }else{
        return 2;
    }
} 
    var offset = 0;
    var currency = "Rs";
   // var run_ajax = true;
    function storedata(id){
        // alert(id);
        // if(!run_ajax) return false;
        var log_id = "<?= $_SESSION['user_id']?>";
        $.ajax({
            url:"<?= base_url()?>/Home/storedata/",
            dataType:"json",
            method:"POST",
            data:{'Id':id,'offset':offset},
            success:function(r){
                load_sliding_carousel();
                if((Object.keys(r)).length > 0){
                    $.each(r,function( key, res_data ) {
                        if(res_data.user_image!=""){
                            var icon = res_data.user_image;
                        }else{
                            var icon = "https://cdn.toesmith.com/toesmith/designer-profile/2R7weHHKDkorbZUbAKtmi2_tBhIbL7Et.jpg";
                        }

                        var extra = (res_data.extras)?JSON.parse(res_data.extras):"";
                        if(extra!= ""){
                            if($.inArray(res_data.temp_color,extra.color)!==-1){
                                var mrp = res_data.mrp;
                                var price = parseInt(res_data.price)+parseInt(extra.amount)+parseInt(res_data.designerCharge);
                                var discount =Math.floor(parseInt(((mrp-price)/mrp)*100));
                            } else {
                                var mrp = res_data.mrp;
                                var price = parseInt(res_data.price)+parseInt(res_data.designerCharge);
                                var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
                            } 
                        } else{
                            var mrp = res_data.mrp;
                            var price = parseInt(res_data.price)+parseInt(res_data.designerCharge);
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
                                
                            var d = '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6">'+
                                    '<div class="single-product-box product-card">'+
                            '<div class="product-image" onMouseOver="show_slider(\'product_slider'+res_data.id+'\',\'product_image'+res_data.id+'\')" onMouseOut="hide_slider(\'product_slider'+res_data.id+'\',\'product_image'+res_data.id+'\')">'+
                                     '<a href="<?= base_url()?>'+res_data.base +'/'+ res_data.id+'" id="product_image'+res_data.id+'">'+
                                     '<img src="'+res_data.image+'" alt="image">'+
                                    '</a>'+
                                  '<div id="product_slider'+ res_data.id+'" style="display:none">'+
                                  '<div id="carouselExampleIndicators'+ res_data.id+'" class="carousel slide " data-ride="carousel">'+
                                 '<ol class="carousel-indicators">';
                                for(var i=0;i<counter(res_data.pid);i++){
                                     if(i==0){
                    var st = "active";}else{
                        var st = "";
                    }  
                    d= d+ '<li data-target="#carouselExampleIndicators'+ res_data.id+'" data-slide-to="'+i+'" class="'+st+'"></li>';
                                }
                                
                            d= d+  '</ol>'+
                              '<div class="carousel-inner">';
                            for(var i=1; i<counter(res_data.pid);i++){
                                  if(i==1){
                    st = "active";
                  }else{
                      st ="";
                  }

               d   =   d+  '<div class="carousel-item '+st+'">'+
                                   '<img class="d-block w-100" src="<?=base_url()?>uploads/templates/' + res_data.base+'-'+"black"+'-side'+i+'.png" alt="First slide">'+
                                 '</div>';
                            }  
                              d = d+'</div>'+
                              '</div>'+
                            '</div>'+
                            '</div>'+
                         '<span style="position: absolute; top: 0px; left: 0px;">'+
                      ' </span>'+
                     '   </span>'+
                    '<p class="designer_area"> <a href="<?=base_url('Designer/')?>'+res_data.designer_id+'" style="color:#fff;"><img src="'+icon+'" class="designer_image" alt="...">'+
                    '<span class="design_title">Designed By:</span> <span class="three-dot designer-name">'+res_data.user_fullname+'</span></a></p><br>'+
                    '<div class="product-content text-left">'+
                    '<h3 class="mt-2"><a href="<?= base_url()?>'+res_data.base +'/'+ res_data.id+'"  >'+ res_data.name+'</a></h3>'+
                    '<div class="product-price">'+
                  '<span class="new-price" id="actual_price'+ res_data.id+'"> '  +  currency + " "+ price  +  '</span>'+" "+
                    '<span class="old-price" id="oldactual_price'+ res_data.id+'">' + currency +"  "+ mrp  + '</span>'+" "+
                    '<span class="offer-price" id="actual_priceoff'+ res_data.id+'"> (' + discount +"% "  + ' off)</span>'+
                                            '</div>'+
                    '<a href="#" class="btn btn-light btn-edit">Edit Design</a>'+
                    w+
                    '</div>'+
                    '</div>'+
                    '</div>';
                    
                      $("#store").append(d);
                       
                     
                    });
                }else{
                    if(offset==0){
                  $("#store").html("<p>No Product is Available</p>");
                    }
                }
            }
        });
      offset = offset+6;  
    }
     storedata(<?= $designerid ?>); 
     load_sliding_carousel();

});

function load_sliding_carousel() {
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 2000,
                cycle: true,
                pause: "null"
            })
        });
</script>