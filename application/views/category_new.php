<?php include('includes/header_new.php'); ?>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/categorypage.css">
<style>
        section{
            overflow:hidden !important;
            padding-left: 50px!important;
            padding-right: 50px!important;
        }
        
        .collapse-widget-title{
            font-size: 16px!important;
        }
        .woocommerce-sidebar-area .collapse-widget .collapse-widget-title i {
           float: right;
        }
        .dropdown-item.active, .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color: black;
        }
        .woocommerce-sidebar-area .collapse-widget .collapse-widget-title {
            font-size: 14px;
            font-weight: 500;
        }
        .custum-category-padding {
            margin:20px;
            padding-left: 25px!important;
            padding-right: 25px!important;
        }
        .nice-select .option {
            cursor: pointer;
            width: 153px;
        }
        .woocommerce-sidebar-area .collapse-widget .selected-filters-wrap-list ul li {
            display:block;
        }
        .dropdown-toggle::after {
          margin-top: 7px;
        }
        .red_label {
          font-size: 10px;
        }
        .collapse-widget .selected-filters-wrap-list ul li {
         display: block;
        }
        .designer{
        visibility: hidden;
        height: 0px;
        width: 0px;
        }
        .category{
            visibility: hidden;
        height: 0px;
        width: 0px;
        }
        .designer_area {
                bottom: 93px;
            }
        .product-section {
            position: fixed;
            width: 79%;
            left: 20%;
            height: 100%;
            overflow-y: scroll;
            overflow-x: hidden;
        }
        @media screen and (max-width: 992px){
        .product-section {
        position: fixed;
        width:100%;
        left: 0%;
        height: 100%;
        overflow-y: scroll;
    }
   }
        .custum-category-padding {
            padding: 20px;
            /* padding-right: 0px!important; */
        }
        /*.product-section {*/
        /*    position: fixed;*/
        /*    width: 80%;*/
        /*    left: 20%;*/
        /*    height: 100%;*/
        /*    overflow-y: scroll;*/
        /*}*/
        .carousel-indicators {
            bottom: 11px;
        }
        .sidebar-section {
            position: fixed;
            width: 20%;
            height: 100%;
            overflow-y: scroll;
            overflow-x: hidden;
        }
        .designer-group{
            list-style-type:none;
        }
         .list-item{
            color:black!important;
            padding-top:15px;
            padding-bottom:21px;
            padding-left:0px;
            padding-right:0px;
            /*border-bottom:1px dashed lightgrey;*/
            border-bottom: 1px solid #eeeeee;
            font-size: 14px;
              font-weight: 700;
              font-style: normal;
           letter-spacing: 1.4px;
             line-height: normal;
         border-bottom: 1px solid #eeeeee;
          margin-bottom: 10px;
          /*padding-bottom: 15px;*/
          margin-top: 10px
        }
        
        
    .product-custum-slider{
        margin-left: 10px;
        margin-bottom: 10px;
      margin-top: 23px;
    }
    .btn-wishlist {
        border-radius: 50%;
        background: 0 0;
        border: 1px solid #d3d3d3;
        padding: 5px 5px 3px;
    }
    .btn-wishlist {
        height: 27px;
        width: 27px;
    }
    .product-card .btn {
        padding: 5px 15px;
        font-size: 12px;
        border-radius: 20px!important;
    }
    .heading-section h4{
        font-size:18px;
    }
    .data-content {
        background: #F6F6F6!important;
        /*padding: 20px;*/
        /*margin-top:20px;*/
    }
   .product-section .form-control {
           background-color: #f5f5f5;
        /*width: 34%;*/
        margin-top: 20px;
        height: 30px;
        padding: 5 15px;
        border-radius: 50%;
        font-size: 14px;
        line-height: initial;
        color: #222;
        border: none;
        border-radius: 12px;
        -webkit-transition: .5s;
        transition: .5s;
        }
        .btn-primary{
            border-radius:0px!important;
        }
    .category-section ::-webkit-scrollbar-thumb {
            background: white!important;
        }
        .category-section ::-webkit-scrollbar {
        width: 0px;
    }
    .btngroup button{
        margin-right:30px;
        width:100%;
    }
         @media only screen and (max-width: 600px) {
             .border-left{
                 border-left:1px solid #F6F6F6;
                 border-bottom:1px solid #F6F6F6;
             }
             .border-right{
                 border-right:1px solid #F6F6F6;
                 border-bottom:1px solid #F6F6F6;
             }
       .red_label {
         margin-top: -6px;
        }
        .btngroup button{
        margin-right:0px;
         width:auto;
    }
        .custum-category-padding {
            margin:0px;
            }
         .product-card .btn {
        padding: 5px 10px!important;
        border-radius: 20px!important;
    }
    .btn-wish .btn-wishlist{
        height:26px;
    }
    .single-product-box .product-image{
      margin-top: 10px;
    }
    .detail-modal img{
        height:22px;
    }
        .custum-category-padding {
        padding-left: 8px!important;
        padding-right: 4px!important;
    }
    .single-product-box .product-content .product-price {
            margin-top: 4px;
            margin-bottom: 5px;
        }
        .new-price {
            font-size: 14px!important;
        }
        .old-price, .offer {
            font-size: 11px!important;
        }
   }
    @media only screen and (max-width: 1199px) and (min-width: 992px){
           .designer_area {
                bottom: 106px;
            }
            .custum-category-padding {
            margin:10px;
            }
   }
   
   #search{
    position: absolute;
    top: 4px;
    right: 0;
    left: 4px;
    font-size: 20px;
   }
   .category-name{
       padding: 8px;
    margin-left: 10px;
    margin-right: 10px;
    width: 26%;
    background: black;
    color: white;
   }
   body{
       background:#F6F6F6!important;
   }
   .fa-search{
       transform: rotateZ(79deg);
    /*font-size: 16px;*/
   }
   .btn-secondary {
    color: #fff;
    background-color: #6c757d !important;
    border-color: #6c757d !important;
    border-radius:0px;
}

.data-content {
    background: #F6F6F6!important;
    /* padding: 20px; */
    /* margin-top: 20px; */
}

.data-content {
    background: #F6F6F6!important;
     padding-top: 0px; 
     padding-left: 20px; 
     padding-right: 10px; 
     padding-bottom: 0px; 
}
.btn{
    padding:10px 12px !important;
}
.fa-plus{
    color:grey;
}
.list-item {
   font-weight: 600;
   width:100%;
}
@media only screen and (max-width: 600px){
.mobil-padding-0 {
    padding: 10px !important;
}
section{
    overflow:hidden !important;
    padding-left: 0px !important;
    padding-right: 0px !important;
}
}
@media only screen and (min-width: 1100px){
.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 7px;
    padding-left: 7px;
}
}
.product-card {
     background: transparent !important; 
}

.btn-secondary {
    color: #fff;
    background-color: black!important;
    border-color: black !important;
    border-radius: 0px;
}

.collapse-widget-title {
    /*padding: 40px 5px;*/
    margin: 0;
    display: block;
    /*font-size: 20px;*/
    font-weight: 700;
    font-style: normal;
    letter-spacing: 2.6px;
    line-height: normal;
    /*text-align: center;*/
    text-transform: uppercase;
    text-align: left;
    font-size: 19px !important;
}
</style>
<input type="hidden" id="slug" value="<?= $slug?>">
<section class="products-collections-area ptb-60" style="padding-top:60px!important;padding-bottom:30px!important;">
    <div class="container">
        <center><h4 class="mt-4"><b>SHOP</b></h4>
            <div class="btngroup">
                <?php $i=1; foreach($category as $cat): ?>
                    <input type="radio" id="mcat<?=$cat->slug?>"  onchange="category_data(this.value,scroll='inactive',offset=0) " class="category" name=" category"type="radio" value="<?= $cat->slug?>"/>
                    <label for="mcat<?= $cat->slug?>" class="btn btn-primary"><?= $cat->name;?></label>
                <?php $i++; endforeach;?>
            </div>
        </center>
    </div>
</section>
<hr>
<section>
    <div class="container-fluid">
        
        <div class="row">
            
            <div class="col-md-3 col-lg-3 d-none d-sm-block">
                <div class="card bg-dark border-0 ">
                      <!--<div class="card-header"><h3 class="collapse-widget-title d-none d-md-block">SEARCH BY DESIGNER</h3></div>-->
                     <div class="card-body">
                         <form action="">
                            <div class="input-group input-sm">
                                <div class="input-group-prepend" style="height:34px;">
                                    <button class="btn btn-secondary btn-sm"><i class="fa fa-search"></i></button>
                                  <!--<span class="input-group-text" id="inputGroupPrepend2">@</span>-->
                                </div>
                                <input type="name" class="form-control shadow-sm" id="validationDefaultUsername" placeholder="" aria-describedby="inputGroupPrepend2" style="height:34px; background:#eee; border:0px; border-radius: 5px;" required>
                            </div>
                        </form>
                        <?php  $i = 1; foreach($designer as $design):?>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input designer"  onclick ="category_data(this.value,scroll='inactive',offset=0)" type="checkbox" id="mdesigner<?= $i?>" value="<?= $design->id?>"/>
                              <label class="form-check-label list-item" for="mdesigner<?= $i?>"><?= $design->user_fullname?> <span class="float-right"><i class="fa fa-plus"></i></sapn></label>
                           </div>
                        </div>
                        <?php $i++; endforeach;?>
                      </div>
                 </div>
            </div>
            <div class="col-md-9 col-lg-9 mobil-padding-0">
                <div class="data-content">
                    <div class="row" id="products-filter">
                </div>
                <div class="justify-content-center" id="product_loader" style="margin-left:40%;display:none;"><img src=" <?=base_url()?>assets/img/unnamed.gif" style="position:absoulte;left:40%; height:80px; width:80px"/></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('includes/footer_new.php')?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

// alert(<?= $currency?>);
var currency = "Rs";
$("#product_loader").scroll(function(){
    get_more();
});
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
        var offset;
var scroll = 'inactive';
 function price_data(price)
    {   
        $("#products-filter").html('<div class="justify-content-center" style="position:absoulte;left:40%;"><img src=" <?=base_url()?>assets/img/unnamed.gif" style="position:absoulte;left:40%; height:80px; width:80px"/></div>');
        $(".cat" + slug).attr('checked', true);
        var slug = get_slug("category");
        var designer = get_filter("designer");
         var log_id = "<?= $_SESSION['user_id']?>";
         $.ajax({
        url:"<?= base_url()?>Front/category_data/",
        method:"POST",
        data:{'Slug':slug,'Design':designer,'Price':price},
        dataType:"json",
        success:function(e){
            $("#product_loader").hide();
            var data1 = e;
            var num = data1.length;
            if(num > 0){
             $.each(data1,function( key, data ) {
          if(data.user_image!=""){
            var icon = data.user_image;
        }else{
            var icon = "https://cdn.toesmith.com/toesmith/designer-profile/2R7weHHKDkorbZUbAKtmi2_tBhIbL7Et.jpg";
        }
     var extra = (data.extras)?JSON.parse(data.extras):"";
        if(extra!= ""){
            if($.inArray(data.color,extra.color)!==-1){
                
            var mrp = data.mrp;
            var price = parseInt(data.price)+parseInt(extra.amount)+parseInt(data.designerCharge);
            var discount =Math.floor(parseInt(((mrp-price)/mrp)*100));
            }
            else{
            var mrp = data.mrp;
            var price = parseInt(data.price)+parseInt(data.designerCharge);;
            var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
            } 
        }
        else{
            var mrp = data.mrp;
            var price = parseInt(data.price)+parseInt(data.designerCharge);;
            var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
            } 
                
              if(log_id!=""){
          if(data.wishproduct == data.id ){
                var w=' <span class="btn-wish"><button class="btn-wishlist  wished removewish" data-tempid ="'+data.id+'" data-base="'+data.pid+'" data-id="'+data.w_id+'"><i class="far fa-heart"></i></button></span>'; 
                
              }else{
             var w = ' <span class="btn-wish"><button class="btn-wishlist addwish" data-tempid ="'+data.id+'" data-base="'+data.pid+'" data-id="'+data.w_id+'"><i class="far fa-heart"></i></button></span>';
          }
      }else{
         var w = ' <span class="btn-wish"><button class="btn-wishlist"   data-toggle="modal" data-target="#loginotpmodal"><i class="far fa-heart"></i></button></span>';
              
      } 

          var d = '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">'+
                    '<div class="single-product-box product-card">'+
                  '<div class="product-image" onMouseOver="show_slider(\'product_slider'+data.id+'\',\'product_image'+data.id+'\')" onMouseOut="hide_slider(\'product_slider'+data.id+'\',\'product_image'+data.id+'\')">'+
                      '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.id+'" id="product_image'+data.id+'">'+
                     '<img src="'+data.image+'" alt="image" >'+
                    '</a>'+
                  '<div id="product_slider'+data.id+'" style="display:none">'+
                  '<div id="carouselExampleIndicators'+data.id+'" class="carousel slide " data-ride="carousel">'+
                 '<ol class="carousel-indicators">';
                 for( var i=0; i< counter(data.pid); i++){
                  if(i==0){
                    var st = "active";}else{
                        var st = "";
                    }
              d   =   d +  '<li data-target="#carouselExampleIndicators'+data.id+'" data-slide-to="'+i+'" class="'+st+'"></li>';
             
              } 
                
               
             d = d + '</ol>'+
              '<div class="carousel-inner">';
              for( var i=1; i< counter(data.pid); i++){
                  if(i==1){
                    st = "active";
                  }else{
                      st ="";
                  }
              d   =   d+  '<div class="carousel-item '+st+'">'+
                                  '<img class="d-block w-100" src="<?=base_url()?>uploads/templates/' + data.baseslug+'-'+"black"+'-side'+i+'.png" alt="First slide">'+
                                 '</div>';
             
              } 
             
          d = d +
              '</div>'+
              '</div>'+
            '</div>'+
            '</div>'+
         '<span style="position: absolute; top: 0px; left: 0px;">'+
      ' </span>'+
     '   </span>'+
    '<p class="designer_area"><a href ="<?= base_url()?>Designer/'+data.designer_id+'" style="color:white"> <img src="'+ icon +'" class="designer_image" alt="...">'+
    '<span class="design_title">Designed By:</span> <span class="three-dot designer-name">'+data.user_fullname+'</span></a></p>'+
    '<div class="product-content text-left">'+
    '<h3><a href="<?= base_url()?>'+ data.baseslug+'/'+data.id+'" id="product_image11">'+ data.name+'</a></h3>'+
    '<div class="product-price" >'+
  '<span class="new-price" id="actual_price'+data.id+'">'+ currency +" " +   price   +  '</span>'+" "+
    '<span class="old-price" id="oldactual_price'+data.id+'">'+ currency+ " " +  mrp  + '</span>'+" "+
    '<span class="offer-price" id="actual_priceoff'+data.id+'"> (' + discount + "%" +" off" +')</span>'+
                            '</div>'+
    '<a href="<?=base_url('customizer')?>?product='+ data.pid +'&template='+data.id+'" class="btn btn-light btn-edit">Edit Design</a>'+
    w+
    '</div>'+
    '</div>'+
    '</div>';
    
      $(".name").html(data.catname +"("+ num +")");
      if(offset == 0)
         $("#products-filter").html('');
      else
        $("#products-filter").append(d);
        
    });

        } else {
            $(".name").html("");
           $("#products-filter").html('<h1>No Result Found</h1>');

        }
    }     
    });
    } 
    function get_filter(class_name)
    {
        var filter = [];
        $('.'+class_name+':checked').each(function(){
            filter.push($(this).val());
        });
        return filter;
    } 
    
    function get_slug(class_name)
    {
        var slug = '';
        $('.'+class_name+':checked').each(function(){
            slug = $(this).val();
        });
        return slug;
    } 
    function counter(base){
        if(base == 2){
            return 4;
        }else if(base == 3){
            return 3;
        }else{
            return 2;
        }
    }
  
    function category_data(slug,scroll,offset,price){
        //condition scrolling
        if(offset == 0 && scroll != 'active' )
            $("#products-filter").html('');
        $("#product_loader").show();
        $("#desktopcat"+slug).attr('checked', true);
        $("#mcat"+slug).attr('checked', true);
        var slug = get_slug("category");
        var designer = get_filter("designer");
        var log_id = "<?= $_SESSION['user_id']?>";
        $.ajax({
            url:"<?= base_url()?>Front/category_data/",
            method:"POST",
            data:{'Slug':slug,'Design':designer,'offset':offset,'price':price},
            dataType:"json",
            success:function(e) {
                $("#product_loader").hide();
                var data1 = e;
                var num = data1.length;
                if(num > 0) {
                    $.each(data1,function( key, data ) {
                        if(data.user_image!="") {
                            var icon = data.user_image;
                        } else {
                            var icon = "https://cdn.toesmith.com/toesmith/designer-profile/2R7weHHKDkorbZUbAKtmi2_tBhIbL7Et.jpg";
                        }
                        var extra = (data.extras)?JSON.parse(data.extras):"";
                        if(extra != "") {
                            if($.inArray(data.color,extra.color)!==-1) {
                                var mrp = data.mrp;
                                var price = parseInt(data.price)+parseInt(extra.amount)+parseInt(data.designerCharge);
                                var discount =Math.floor(parseInt(((mrp-price)/mrp)*100));
                            } else {
                                var mrp = data.mrp;
                                var price = parseInt(data.price)+parseInt(data.designerCharge);
                                var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
                            }
                        } else {
                            var mrp = data.mrp;
                            var price = parseInt(data.price)+parseInt(data.designerCharge);
                            var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
                        }
                        if(log_id!="") {
                            if(data.wishproduct == data.id) {
                                var w = '<span class="btn-wish"><button class="btn-wishlist  wished removewish" data-tempid ="'+data.id+'" data-base="'+data.pid+'" data-id="'+data.w_id+'"><i class="far fa-heart"></i></button></span>';
                            } else {
                                var w = '<span class="btn-wish"><button class="btn-wishlist addwish" data-tempid ="'+data.id+'" data-base="'+data.pid+'" data-id="'+data.w_id+'"><i class="far fa-heart"></i></button></span>';
                            }
                        } else {
                            var w = '<span class="btn-wish"><button class="btn-wishlist" data-toggle="modal" data-target="#loginotpmodal"><i class="far fa-heart"></i></button></span>';
                        }

                        var d = '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 col-6">'+
                            '<div class="single-product-box product-card">'+
                            '<div class="product-image" onMouseOver="show_slider(\'product_slider'+data.id+'\',\'product_image'+data.id+'\')" onMouseOut="hide_slider(\'product_slider'+data.id+'\',\'product_image'+data.id+'\')">'+
                            '<a href="<?= base_url()?>' + data.baseslug + '/'+ data.id+'" id="product_image'+data.id+'">'+
                            '<img src="'+data.image+'" alt="image" >'+
                            '</a>'+
                            '<div id="product_slider'+data.id+'" style="display:none">'+
                            '<div id="carouselExampleIndicators'+data.id+'" class="carousel slide " data-ride="carousel">'+
                            '<ol class="carousel-indicators">';
                        for( var i=0; i< counter(data.pid); i++){
                            if(i==0) {
                                var st = "active";
                            } else {
                                var st = "";
                            }
                            d = d + '<li data-target="#carouselExampleIndicators'+data.id+'" data-slide-to="'+i+'" class="'+st+'"></li>';
                        }

             d = d + '</ol>'+
              '<div class="carousel-inner">';
              for( var i=1; i< counter(data.pid); i++){
                  if(i==1){
                    st = "active";
                  }else{
                      st ="";
                  }
              d   =   d+  '<div class="carousel-item '+st+'">'+
                    '<img class="d-block w-100" src="<?=base_url()?>uploads/templates/' + data.baseslug+'-'+"black"+'-side'+i+'.png" alt="First slide">'+
                    '</div>';
             
              } 
             
          d = d +
              '</div>'+
              '</div>'+
            '</div>'+
            '</div>'+
         '<span style="position: absolute; top: 0px; left: 0px;">'+
      ' </span>'+
     '   </span>'+
    '<p class="designer_area"><a href ="<?= base_url()?>Designer/'+data.designer_id+'" style="color:white"> <img src="'+ icon +'" class="designer_image" alt="...">'+
    '<span class="design_title">Designed By:</span> <span class="three-dot designer-name">'+data.user_fullname+'</span></a></p>'+
    '<div class="product-content text-left">'+
    '<h3><a href="<?= base_url()?>'+ data.baseslug+'/'+data.id+'" id="product_image11">'+ data.name+'</a></h3>'+
    '<div class="product-price" >'+
  '<span class="new-price" id="actual_price'+data.id+'">'+ currency +" " +   price   +  '</span>'+" "+
    '<span class="old-price" id="oldactual_price'+data.id+'">'+ currency+ " " +  mrp  + '</span>'+" "+
    '<span class="offer-price" id="actual_priceoff'+data.id+'"> (' + discount + "%" +" off" +')</span>'+
                            '</div>'+
    '<a href="<?=base_url('customizer')?>?product='+ data.pid +'&template='+data.id+'" class="btn btn-light btn-edit">Edit Design</a>'+
    w+
    '</div>'+
    '</div>'+
    '</div>';
                        $(".name").html(data.catname +"("+ num +")");
                        $("#products-filter").append(d);
                    });
                } else {
                    $(".name").html("");
                    $("#products-filter").html('<h1>No Result Found</h1>');
                }
            }
        });
    }
    category_data('<?= $slug?>');
    function get_more(){
        offset = offset+8;
        var scroll = 'active';
        category_data('<?= $slug?>',scroll,offset); 
    }
</script>