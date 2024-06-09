<?php include('includes/header.php') ?>

<link  as="style" rel="stylesheet" charset="UTF-8"  href="<?=base_url()?>assets/css/designer.css">
<style>

.single-product-box .designer_area {
	bottom: 123px!important;
}
.btn-wishlist,.btn-wishlist.wished { 
    font-size:20px !important;
}
@media only screen and (max-width: 600px) {
    .btn-wishlist,.btn-wishlist.wished { 
    font-size:18px !important;
}
  .single-product-box .designer_area {
	bottom: 76px!important;
	background:transparent!important;
}
    .product-card .product-content {
		margin-top: 0px;
		padding: 8px;
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
@media screen and (max-width: 600px) {
  .mobile-designer-profile{
      margin-top:-55px;
  }
  .visible-sm{
    display:block;
}
.custum-mb-margin .col-xs-6 {
    padding-left:5px;
    padding-right:5px;
}
.custum-mb-margin {
    margin-right: -5px;
    margin-left: -5px;
}
.mt-40{
    margin-top:0px!important;
}
.visible-lg{
    display:none;
}
.btn-wishlist {
        border-radius: 50%;
        background: 0 0;
        border: 1px solid #d3d3d3;
        padding: 3px 4px 3px!important;
        /*font-size: 16px!important;*/
    }

}
/*css for ipad*/
 @media (min-width: 768px) and (max-width: 1023px){
    .single-product-box .product-image img {
       height: 200px;
    }
 }
 
/*for iPad pro tablet */
@media only screen and (min-width: 992px) {
	 .single-product-box .product-image img {
       height: 200px;
    }
}
/*css for ipad*/
</style>
<div class="main-banner item-bg1 visible-sm " style="height: 50%">
   <div class="d-table">
      <div class="d-table-cell">
         <div class="container">
            <div class="card shadow-sm user_sidebar mb-2 text-center">
                <div class="card-body">
                    <img src=" <?=($designer->user_image)?$designer->user_image:base_url('assets/img/user.png')?>" class="mobile-designer-profile designer_profile">
                   
                    <h3><?= $designer->brand ?></h3>
                    <p>Designed by : <?= $designer->user_fullname?></p>
                </div>
            </div>
         </div>
      </div>
   </div>
</div>
<section class="news-area bg-dark ptb-60  ">
   <div class="container mt-40 " > 
      <div class="row">
            <div class="col-lg-4 col-md-12 visible-lg">
                <div class="card shadow-sm user_sidebar mb-2 text-center">
                    <div class="card-body">
                    <img src=" <?=($designer->user_image)?$designer->user_image:base_url('assets/img/user.png')?>" class="designer_profile">
                    <h3><?= $designer->brand ?></h3>
                    <p>Designed by: <?= $designer->user_fullname ?></p>
                    </div>
                </div>
            </div>
           
            <div class="col-lg-8 col-md-12 ">
                <div class="row custum-mb-margin" id="store">
                </div>
                <div class="justify-content-center" id="product_loader" style="margin-left:40%;display:none;">
                    <img src="<?= get_url('main_spinner') ?>" style="position:absoulte;left:40%; height:80px; width:80px"/>
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
           loader_all('wishLoader'+temp_id, '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',true);
           
           $.ajax({
            url:"<?= base_url()?>Front/addwishlist/",
             method:"GET",
            data:{temp_id:temp_id,base_id:base_id},
            success:function(r){
                loader_all('wishLoader'+temp_id, '<i class="fa fa-heart"></i>',false);
                wishcount();
                         swal("Added to wishlist ",{
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
              loader_all('wishLoader'+id, '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',true);
                
            $.ajax({
            url:"<?= base_url()?>Front/remove_wish/",
            method:"POST",
            data:{Id:id},
            success:function(r){
                  loader_all('wishLoader'+id, '<i class="far fa-heart"></i>',false);
               wishcount();
            swal("Removed from wishlist ",{
                      icon: "success",
                       button: false,
                       timer: 1200,
     });
             }
        });   
            
        });
 
    var offset = 0;
    var currency = "Rs";
   // var run_ajax = true;
     function isJson(str) {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}



function bothdata(key){
var callback_data = "";
  $.ajax({
          url:"<?= base_url()?>Front/bothData/",
          method:"POST",
          dataType:"json",
           async: false,
          data:{'key':key},
          success:function(r){
              callback_data =r.d;
          }
      });
return callback_data;
} 
  function counter(base){
        if(base == 2){
            return 2;//4
        }else if(base == 3){
            return 2;
        }else{
            return 1;
        }
    }
    function sides_array(base){
        
        if(base == 2){
        var side_arrayas = ["front","back","left","right"];    
            return side_arrayas;
        }else if(base == 3){
            var side_arrayas = ["front","back","side"];
            return side_arrayas;
        }else{
            var side_arrayas = ["front","left","right"];
            return side_arrayas;
        }
    }
    var offset = 0;
    function storedata(des_id){
        // alert(id);
        // if(!run_ajax) return false;
        var log_id = "<?= $_SESSION['user_id']?>";
        $("#product_loader").show();
        $.ajax({
            url:"<?= base_url()?>/Home/storedata/",
            dataType:"json",
            method:"POST",
            data:{'Id':des_id,'offset':offset},
            success:function(r){
                $("#product_loader").hide();
                if((Object.keys(r)).length > 0){
                    $.each(r,function( key, res_data ) {
                        var side_array = sides_array(res_data.pid);
                        if((res_data.user_image!="") && (res_data.user_image!=null)){
                            var icon = res_data.user_image;
                        }else{
                            var icon = "<?= default_designer_image() ?>";
                        }

                        var extra = (res_data.extras)?JSON.parse(res_data.extras):"";
                    var sides = res_data.side;
                    var screenshots = isJson(res_data.screenshot)?JSON.parse(res_data.screenshot):res_data.screenshot;
                    var backside_charge = (res_data.no_of_stages > 1)?(res_data.backCharge):0;
                         if(extra!= ""){
                       if($.inArray(res_data.color,extra.color)!==-1){
                           var mrp = parseInt(res_data.mrp)+parseInt(extra.amount)+(parseInt(res_data.designerCharge)*parseInt(res_data.no_of_stages))+parseInt(backside_charge);
                           var price = parseInt((res_data.price))+parseInt(extra.amount)+(parseInt(res_data.designerCharge)*parseInt(res_data.no_of_stages))+parseInt(backside_charge);
                           var discount =Math.floor(parseInt(((mrp-price)/mrp)*100));
                       } else {
                           var mrp = parseInt(res_data.mrp)+(parseInt(res_data.designerCharge)*parseInt(res_data.no_of_stages))+parseInt(backside_charge);
                           var price = parseInt((res_data.price))+(parseInt(res_data.designerCharge)*parseInt(res_data.no_of_stages))+parseInt(backside_charge);
                           var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
                       }
                   } else {
                       var mrp = parseInt(res_data.mrp)+(parseInt(res_data.designerCharge)*parseInt(res_data.no_of_stages))+parseInt(backside_charge);
                       var price = parseInt((res_data.price))+(parseInt(res_data.designerCharge)*parseInt(res_data.no_of_stages))+parseInt(backside_charge);
                       var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
                   }
        
                        if(log_id!=""){
                            if(res_data.wishproduct == res_data.id ){
                                var w=' <span class="btn-wish"><button class="btn-wishlist  wished removewish" data-tempid ="'+res_data.id+'" data-base="'+res_data.pid+'" data-id="'+res_data.w_id+'" id="wishLoader'+res_data.id+'"><i class="fa fa-heart"></i></button></span>'; 
                            }else{
                                var w = ' <span class="btn-wish"><button class="btn-wishlist addwish" data-tempid ="'+res_data.id+'" data-base="'+res_data.pid+'" data-id="'+res_data.w_id+'" id="wishLoader'+res_data.id+'"><i class="far fa-heart"></i></button></span>';
                            }
                        }else{
                            var w = ' <span class="btn-wish"><button class="btn-wishlist"   data-toggle="modal" data-target="#loginotpmodal"><i class="far fa-heart"></i></button></span>';
                        }
                                
                            var d = '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-6 mt-2">'+
                                    '<div class="single-product-box product-card">'+
                            '<div class="product-image" onMouseOver="show_slider(\'product_slider'+res_data.id+'\',\'product_image'+res_data.id+'\')" onMouseOut="hide_slider(\'product_slider'+res_data.id+'\',\'product_image'+res_data.id+'\')">'+
                                     '<a href="<?= base_url()?>'+res_data.base +'/'+ res_data.id+'" id="product_image'+res_data.id+'">'+
                                     '<img src="'+res_data.image+'" alt="image">'+
                                    '</a>'+
                                  '<div id="product_slider'+ res_data.id+'" style="display:none">'+
                                  '<div id="carouselExampleIndicators'+ res_data.id+'" class="carousel slide " data-ride="carousel">'+
                                 '<ol class="carousel-indicators">';
                                if(res_data.pid != 4){
                                 for( var i=0; i< counter(res_data.pid); i++){
                            if(i==0) {
                                var st = "active";
                            } else {
                                var st = "";
                            }
                            d = d + '<li data-target="#carouselExampleIndicators'+res_data.id+'" data-slide-to="'+i+'" class="'+st+'"></li>';
                        }   
                                }
                                
                            d= d+  '</ol>'+
                              '<div class="carousel-inner">';
                              if(res_data.pid!=4){
                            for( var i=1; i< counter(res_data.pid); i++){
               
                
                
                if(isJson(res_data.screenshot)){
                         if(i == 1  &&  sides == "both"){
                            
                            if(res_data.template_ids!=""){
                            var bothData = [res_data.front_screenshot, res_data.back_screenshot];//bothdata(data.template_ids);

                            for(var j =0; j<bothData.length;j++){
                              var both = bothData[j];
                              
                              var ac;
        
                             if(j==0){
                                 ac = "active";
                            }
                                 d   =   d+  '<div class="carousel-item '+ac+'">'+
                                    '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+both+'" alt="Front slide"></a>'+
                                    '</div>';
                                     d   =   d+  '<div class="carousel-item ">'+
                                    '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+bothData[1]+'" alt="Back slide"></a>'+
                                    '</div>';
                             j++;
                            
                             }
                             
                            
                            }else{
                                d   =   d+  '<div class="carousel-item active">'+
                                    '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+screenshots.front+'" alt="Front slide"></a>'+
                                    '</div>';
                                    d   =   d+  '<div class="carousel-item ">'+
                                    '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+screenshots.back+'" alt="Back slide"></a>'+
                                    '</div>';
                                    
                            }
                        }
                        else if(i == 1){
                            if( i==1  && sides == "front"){
                                d   =   d+'<div class="carousel-item active">'+
                                    '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+screenshots.front+'" alt="Front slide"></a>'+
                                    '</div>'; 
                                    
                            }
                            else{
                                   d=   d+'<div class="carousel-item active">'+
                                        '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+res_data.image+'" alt="Front slide"></a>'+
                                        '</div>';
                            }    
                         }
                         else if( i==2 ){
                           if( i == 2 && sides == "back"){
                                 d   =   d+  '<div class="carousel-item ">'+
                                    '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+screenshots.back+'" alt="Back slide"></a>'+
                                    '</div>';
                            
                         }else{
                                     d   =   d+  '<div class="carousel-item">'+
                                      '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.tempSlug+'" id="product_image"><img class="d-block w-100" src="<?=base_url()?>assets/mockups/sides/' + res_data.pid+"/"+side_array[i]+'.png" style="background-color:'+ res_data.color+' " alt="First slide"></a>'+
                                    '</div>';
                         }
                         }
                         else{
                               d   =   d+  '<div class="carousel-item">'+
                                      '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.tempSlug+'" id="product_image"><img class="d-block w-100" src="<?=base_url()?>assets/mockups/sides/' + res_data.pid+"/"+side_array[i]+'.png" style="background-color:'+ res_data.color+' " alt="First slide"></a>'+
                                    '</div>';
                         }
                    }else{
                        var active = "";
                        if(i==1) active = "active";
                          if((i==1 && sides == "front") || (i==2 && sides == "back")){
                                    st = "";
                                    d   =   d+  '<div class="carousel-item '+active+'">'+
                                    '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+res_data.image+'" alt="First slide"></a>'+
                                    '</div>';
                            } else {
                                   d   =   d+  '<div class="carousel-item  '+active+'">'+
                                     '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.tempSlug+'" id="product_image"><img class="d-block w-100" src="<?=base_url()?>assets/mockups/sides/' + res_data.pid+"/"+side_array[i]+'.png" style="background-color:'+ res_data.color+' " alt="First slide"></a>'+
                                    '</div>';
                            }
                     }
             
              } 
                              }else{
                                   d   =   d+  '<div class="carousel-item active">'+
                                    '<a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.tempSlug+'" id="product_image"><img class="d-block w-100" src="'+res_data.image+'" alt="First slide"></a>'+
                                    '</div>'; 
                              }
                              d = d+'</div>'+
                              '</div>'+
                            '</div>'+
                            '</div>'+
                         '<span style="position: absolute; top: 0px; left: 0px;">'+
                      ' </span>'+
                     '   </span>'+
                    '<p class="designer_area" style="margin-bottom:0px;"> <a href="<?=base_url('Designer/')?>'+res_data.Uslug+'" style="color:#fff;"><img src="'+icon+'" class="designer_image" alt="...">'+
                    '<span class="design_title">Designed By:</span> <span class="three-dot designer-name">'+res_data.user_fullname+'</span></a></p>'+
                    '<div class="product-content text-left">'+
                    '<h3 class=""><a href="<?= base_url()?>' + res_data.baseslug + '/'+ res_data.tempSlug+'" >'+ res_data.name+' </a></h3>'+
                    '<div class="product-price">'+
                  '<span class="new-price" id="actual_price'+ res_data.id+'"> '  +  currency + " "+ price  +  '</span>'+" "+
                    '<span class="old-price" id="oldactual_price'+ res_data.id+'">' + currency +"  "+ mrp  + '</span>'+" "+
                    '<span class="offer-price" id="actual_priceoff'+ res_data.id+'"> (' + discount +"% "  + ' off)</span>'+
                                            '</div>'+
                    '<a href="<?=base_url('customizer')?>?product='+ res_data.pid +'&template='+res_data.id+'" class="btn btn-primary btn-edit">Customise</a>'+
                    w+
                    '</div>'+
                    '</div>'+
                    '</div>';
                      $("#store").append(d);
                    });
                    load_sliding_carousel();
                }else{
                    if(offset==0){
                  $("#store").html("<p>No product available.</p>");
                    }
                }
            }
        });
       offset = offset+6;
    }
     storedata(<?= $designerid ?>);  
    $(window).scroll(function () {
    if($(window).scrollTop() == $(document).height() - $(window).height()) {
      storedata(<?= $designerid ?>);  
     }
});
   $('body').on("touchmove", function() { //detact scroll in mobile
	if($('body').scrollTop() == $(document).height() - $('body').height()) {
      storedata(<?= $designerid ?>);  
     }
	});
});

</script>