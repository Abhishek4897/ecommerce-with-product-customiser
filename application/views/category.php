<?php include('includes/header.php')?>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/categorypage.css">
<style>
        .collapse-widget-title{
            font-size: 16px;
            line-height: 16px;
            font-weight: bold;
        }
        .selected-filters-wrap-list{
            padding-left: 22px;
        }
        .woocommerce-sidebar-area .collapse-widget .brands-list-row {
            padding-left: 18px;
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
            font-size: 16px;
            font-weight: bold;
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
    .category-section ::-webkit-scrollbar-thumb {
            background: white!important;
        }
        .category-section ::-webkit-scrollbar {
        width: 0px;
    }
         @media only screen and (max-width: 600px) {
               .box {
             padding: 5px!important;
            padding-left: 5px!important;
            margin-left: -19px!important;
            margin-bottom: 2px!important;
            margin-top: 5px;
        }
        div.checkRadioContainer > label > input + i {
            z-index:100;
            margin-left: -7px;
        }
        .box {
            z-index:1;
        }
        div.checkRadioContainer > label > input:checked + i {
         font-size: 10px;
        }
       .red_label {
         margin-top: -6px;
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
        .selected-filters-wrap-list{
                padding-left: 10px;
            }
            .woocommerce-sidebar-area .collapse-widget .brands-list-row {
                padding-left: 10px;
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
   input[type=radio]{
      background:black;     
   }
   div.checkRadioContainer > label > input {
    display: none;
}
   input[type="radio"]:checked {
     display:none;
   
}
.checkcontainer input:checked ~ .radiobtn {
    background-color:black;
}
.form-group input:checked {
  background-color: black!important;
}
input[type=checkbox]:checked {
 background:black!important;
} 
  
   /*.category-section input:checked ~ .checkmark {*/
   /*   background-color: #2196F3;*/
   /* }*/
    .category-section .form-check-input {
    position: absolute;
    margin-top: 1px;
    margin-left: -29px;
    height: 20px;
    width: 20px;
    border-radius: 0px!important;
    padding: 16px!important;
}
/*custum radio button css*/
 div.checkRadioContainer > label > input {
    visibility: hidden;
}

div.checkRadioContainer {
    max-width: 100%;
}
div.checkRadioContainer > label {
    display: block;
    margin-bottom: -2px;
    cursor: pointer;
}

div.checkRadioContainer > label > .custum-radio {
    display: inline-block;
    vertical-align: top;
    line-height: 2em;
}

div.checkRadioContainer > label > input + i {
    visibility: hidden;
    color: green;
    margin-left: -0.5em;
    margin-right: 0.2em;
}

div.checkRadioContainer > label > input:checked + i {
    visibility: visible;
    color: white;
    background: black;
    margin-left: 5px;
    padding: 3px;
    margin-left: -12px;
}
.fa-check:after {
   background:red
}
.box {
    border: 1px solid #616A6B;
    position: absolute;
    padding: 9px;
    border-radius: 3px;
    padding-left: 9px;
    margin-left: -27px;
    margin-bottom: 2px;
}
.woocommerce-sidebar-area .collapse-widget .collapse-widget-title::before {
     content:none; 
}
/*custum radio button css*/
</style>
<div id="maincat">
<input type="hidden" id="slug" value="<?= $slug?>">
<section class="d-lg-none d-md-block d-sm-block d-xs-block shadow-sm filter-header" id="catdiv" >
   <div class="container">
      <div clas="row" style="display:flex">
         <div class="col-md-8 col-8 col-sm-8" style="border-right: 1px solid #eee;">
            <span class="category-name"> <b class="name"> </b></span>
         </div>
         <div class="col-md-4 col-4 col-sm-4 text-right">
            <a data-toggle="modal" data-target="#filtersidebarModal"><span><i class="fa fa-filter" aria-hidden="true"></i> Filter <span class="cart-value">1</span></span></a>
         </div>
      </div>
   </div>
 
</section>
  <!--mobile filter sidebar-->
   <div class="modal right fade shoppingCartModal" id="filtersidebarModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document" style="width:250px; overflow-x:hidden;">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" style="font-size:20px; font-weight:bold">Select Product Filter</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="top:0px;">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span-->
            <!--        aria-hidden="true">&times;</span></button>-->
            <div class="modal-body p-0">
               <!--<h3>Arteno</h3>-->
               <div class="product-cart-content mobile-sidebar">
                  <div class="modal-body">
                     <div class="woocommerce-sidebar-area">
                        <div class="collapse-widget filter-list-widget">
                           <h3 class="collapse-widget-title">
                              All Categorysssssss
                              <i class="fas fa-angle-up"></i>
                           </h3>
                           <div class="selected-filters-wrap-list">
                              <form>
                                   <div class="checkRadioContainer mt-3 pl-2">
                                    <?php $i=1; foreach($category as $cat):?>
                                        <label>
                                            <input type="radio" id="mcat<?=$cat->slug?>"  onclick="category_data(this.value,scroll='inactive',offset=0) " class="category" name=" category"type="radio" value="<?= $cat->slug?>"/>
                                            <i class="fa fa-check"></i>
                                            <span class="box"></span>
                                            <span class="custum-radio" for="mcat<?= $cat->slug?>"><?= $cat->name;?></span>
                                        </label>
                                     <?php $i++; endforeach;?>
                                </div>
                                 <!--<ul>-->
                                 <!--    <?php $i=1; foreach($category as $cat):?>-->
                                 <!--      <li>-->
                                 <!--         <div class="form-group">-->
                                 <!--               <input class="category"  id="mcat<?=$cat->slug?>" onclick="category_data(this.value,scroll='inactive',offset=0)" name=" category"type="radio" value="<?= $cat->slug?>">-->
                                 <!--               <label class="" for="mcat<?= $cat->slug?>"><?= $cat->name;?></label>-->
                                 <!--           </div>-->
                                 <!--      </li>-->
                                 <!--     <?php $i++; endforeach;?>-->
                                  
                                 <!--</ul>-->
                              </form>
                           </div>
                        </div>
                      <!-- for mobile view-->
                        <div class="collapse-widget brands-list-widget">
                           <h3 class="collapse-widget-title">
                              Select By Designer
                              <i class="fas fa-angle-up"></i>
                           </h3>
                           <ul class="brands-list-row">
                            <?php  $i = 1; foreach($designer as $design):?>
                     <li>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input designer " class="designer" onclick ="category_data(this.value,scroll='inactive',offset=0)" type="checkbox" id="mdesigner<?= $i?>" value="<?= $design->id?>">
                              <label class="form-check-label" for="mdesigner<?= $i?>"><?= $design->user_fullname?></label>
                           </div>
                        </div>
                     </li> 
                     <?php $i++; endforeach;?>
                           
                           </ul>
                        </div>
                        <br><br>
                      
                     </div>
                  </div>
               </div>
            
            </div>
         </div>
      </div>
   </div>
   <!--mobile filter sidebar-->
<section class="products-collections-area ptb-60">
   <div class="container-fluid custum-section category-section">
   
      <div class="row">
         <div class="col-lg-3 col-md-12 p-0 sidebar-section d-none d-lg-block" style="border-right: 1px solid #eee;">
            <div class="heading-section ml-5">
               <h4><b>FILTER BY</b></h4>
            </div>
            <hr>
            <div class="woocommerce-sidebar-area p-4">
               <div class="collapse-widget filter-list-widget">
                  <h3 class="collapse-widget-title">
                     All Category
                     <i class="fas fa-angle-up"></i>
                  </h3>
                  <div class="selected-filters-wrap-list">
                     <form>
                           <div class="checkRadioContainer mt-3">
                                <?php $i=1; foreach($category as $cat):?>
                                    <label>
                                        <input type="radio" id="desktopcat<?=$cat->slug?>"  class="category" onclick=" category_data('<?=$cat->slug?>',scroll='inactive',offset=0) " name=" dcategory"type="radio" value="<?= $cat->slug?>"/>
                                        <i class="fa fa-check"></i>
                                        <span class="box"></span>
                                        <span class="custum-radio" for="desktopcat<?= $cat->slug?>"><?= $cat->name;?></span>
                                    </label>
                                 <?php $i++; endforeach;?>
                               
                            </div>
                        <ul>
              
                        </ul>
                     </form>
                  </div>
               </div>
        
               <div class="collapse-widget brands-list-widget">
                  <h3 class="collapse-widget-title">
                     Select By Designer
                     <i class="fas fa-angle-up"></i>
                  </h3>
                  <ul class="brands-list-row">
                      <?php  $i = 1; foreach($designer as $design):?>
                     <li>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input designer " onclick = "category_data(this.value,scroll='inactive',offset=0)" type="checkbox" id="ddesigner<?= $i?>" value="<?= $design->id?>">
                              <label class="form-check-label" for="ddesigner<?= $i?>"><?= $design->user_fullname?></label>
                           </div>
                        </div>
                     </li> 
                     <?php $i++; endforeach;?>
               
                  </ul>
               </div>
               <br>
        
            </div>
         </div>
         <div class="col-lg-10 col-md-12 p-0 product-section divcat"   onscroll="get_more()">
        
            <div class="d-none d-lg-block d-md-block  divcat"  >
                 <div class="row">
                    <div class="col-md-8">
                        <div class="heading-section ml-3">
                           <h4><b class="name"></b></h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                      
                        <div class="btn-group float-right show" style="margin-top:10px; margin-right: 20px;">
                           <button type="button" class="btn  btn-sm dropdown-toggle chevron-down "  data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" style="border:1px solid grey;padding: 8px 20px;width:100%">
                           <span style="float:left"><b style="float:left">Sort By:</b> &nbsp;  Price</span>
                           </button>
                           <div class="dropdown-menu dropdown-menu-left sortmenu" style="width:100%; position: absolute; will-change: transform; top: 7px; left: 0px; transform: translate3d(0px, 35px, 0px);" x-placement="bottom-start">
                              <button class="dropdown-item prices" onclick ="category_data(this.value,scroll='inactive',offset=0,'desc')" type="button" value="desc">Price: High to Low</button>
                              <button class="dropdown-item prices" onclick ="category_data(this.value,scroll='inactive',offset=0,'asc')" type="button" value="asc">Price: Low to High </button>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
      
            <hr class="mobile-top-padding-0">
         <div id="products-filter" class="products-collections-listing custum-category-padding category-product-section row  catedata" style="padding-bottom:100px!important;"   >

            </div>
            <div class="justify-content-center" id="product_loader" style="margin-left:40%;display:none;"><img src=" <?=base_url()?>assets/img/unnamed.gif" style="position:absoulte;left:40%; height:80px; width:80px"/></div>
            <div id="products_filter_more"  >&nbsp;</div>
            <br>
        
         </div>
      </div>
   </div>
  
</section>
</div>
<?php include('includes/footer.php')?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

// alert(<?= $currency?>);
var currency = "Rs";
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
    '<span class="offer-price" id="actual_priceoff'+data.id+'"> (' + discount + "%" +"off" +')</span>'+
                            '</div>'+
    '<a href="<?=base_url('customizer')?>?product='+ data.pid +'&template='+data.id+'" class="btn btn-primary btn-edit">Edit Design</a>'+
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
        //condition scrolling///
     
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
                 for( var i=1; i< counter(data.pid); i++){
                  if(i==1){
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
    '<span class="offer-price" id="actual_priceoff'+data.id+'"> (' + discount + "%" +"off" +')</span>'+
                            '</div>'+
    '<a href="<?=base_url('customizer')?>?product='+ data.pid +'&template='+data.id+'" class="btn btn-primary btn-edit">Edit Design</a>'+
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

    //   function get_more(){
    //       offset = offset+8;
    //         var scroll = 'active';
    //       category_data('<?= $slug?>',scroll,offset); 
    //   }

      
    
</script>