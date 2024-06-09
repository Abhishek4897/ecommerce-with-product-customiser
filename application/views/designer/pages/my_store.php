<style>
@media screen and (max-width: 600px) {
   .news-area{
     padding-top:0px;
   }
   .ptb-60{
       padding:12px;
   }
}
</style>
<div class="col-lg-8 col-md-12 mobile-padding">
   <div class="login-content">
      <div class="row" id="store">
               <!--<div class="col-lg-4 col-md-4 col-6 col-sm-6  products-col-item product_listing_pattern">-->
               <!--       <div class="single-product-box product-card">-->
               <!--          <div class="product-image" onMouseOver="show_slider('product_slider11','product_image11')" onMouseOut="hide_slider('product_slider11','product_image11')">-->
               <!--             <a href="#" id="product_image11">-->
               <!--             <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">-->
               <!--             </a>-->
               <!--             <div id="product_slider11" style="display:none">-->
               <!--                <div id="carouselExampleIndicators11" class="carousel slide " data-ride="carousel">-->
               <!--                   <ol class="carousel-indicators">-->
               <!--                      <li data-target="#carouselExampleIndicators11" data-slide-to="0" class="active"></li>-->
               <!--                      <li data-target="#carouselExampleIndicators11" data-slide-to="1"></li>-->
               <!--                      <li data-target="#carouselExampleIndicators11" data-slide-to="2"></li>-->
               <!--                   </ol>-->
               <!--                   <div class="carousel-inner">-->
               <!--                      <div class="carousel-item active">-->
               <!--                         <img class="d-block w-100 " src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="First slide">-->
               <!--                      </div>-->
               <!--                      <div class="carousel-item">-->
               <!--                         <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="Second slide">-->
               <!--                      </div>-->
               <!--                      <div class="carousel-item">-->
               <!--                         <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="Third slide">-->
               <!--                      </div>-->
               <!--                   </div>-->
               <!--                </div>-->
               <!--             </div>-->
               <!--          </div>-->
                         
               <!--          <span style="position: absolute; top: 0px; right: 0px;">-->
               <!--            <a class="detail-modal d-lg-none d-md-none d-sm-block d-xs-block" data-toggle="modal" data-target="#productQuickView"><img src="<?= base_url()?>assets/img/mpdetail.webp" style="height:22px;"></a>-->
               <!--          </span>-->
               <!--          <span style="position: absolute; top: 0px; left: 0px;">-->
               <!--                         <span class="red_label">Top Selling  <span class="label_arrow"></span></span>-->
               <!--                         </span>-->
               <!--          <div class="product-content text-left">-->
               <!--             <h3><a href="#">Cool crystal</a></h3>-->
               <!--             <div class="product-price">-->
               <!--                <span class="new-price">₹ 299.00</span>-->
               <!--                <span class="old-price">₹ 300.00</span>-->
               <!--                <span class="offer-price"> (25% off)</span>-->
               <!--             </div>-->
               <!--             <a href="#" class="btn btn-light btn-edit">Edit Design</a>-->
               <!--             <span class="btn-wish"><button class="btn-wishlist wished"><i class="fa fa-heart" aria-hidden="true"></i></button></span>-->
               <!--          </div>-->
               <!--       </div>-->
               <!--</div>-->
               
             
          
      </div>
   </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
<script>
        function counter(baseid)
{
    if(baseid == 2){
        return 4;
    }
    else if(baseid == 3){
        return 2;
    }else{
        return 1;
    }
} 
    var offset = 0;
    var currency = "Rs";
   // var run_ajax = true;
    function storedata(){
        // alert(id);
        // if(!run_ajax) return false;
        var log_id = "<?= $_SESSION['designer_id']?>";
        $.ajax({
            url:"<?= base_url()?>Designer/storedata/",
            dataType:"json",
            method:"POST",
            data:{'offset':offset},
            success:function(r){
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
                                var price = (res_data.price)+parseInt(extra.amount);
                                var discount =Math.floor(parseInt(((mrp-price)/mrp)*100));
                            } else {
                                var mrp = res_data.mrp;
                                var price = res_data.price;
                                var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
                            } 
                        } else{
                            var mrp = res_data.mrp;
                            var price = res_data.price;
                            var discount = Math.floor(parseInt(((mrp-price)/mrp)*100));
                        } 
        
                        // if(log_id!=""){
                        //     if(res_data.wishproduct == res_data.id ){
                        //         var w=' <span class="btn-wish"><button class="btn-wishlist  wished removewish" data-tempid ="'+res_data.id+'" data-base="'+res_data.pid+'" data-id="'+res_data.w_id+'"><i class="far fa-heart"></i></button></span>'; 
                        //     }else{
                        //         var w = ' <span class="btn-wish"><button class="btn-wishlist addwish" data-tempid ="'+res_data.id+'" data-base="'+res_data.pid+'" data-id="'+res_data.w_id+'"><i class="far fa-heart"></i></button></span>';
                        //     }
                        // }else{
                        //     var w = ' <span class="btn-wish"><button class="btn-wishlist"   data-toggle="modal" data-target="#loginotpmodal"><i class="far fa-heart"></i></button></span>';
                        // }
                                
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
                  get_dynamic_price(res_data.id,res_data.pid,res_data.color);
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
                   '<br>'+
                    '<div class="product-content text-left">'+
                    '<h3 class="mt-2"><a href="<?= base_url()?>'+res_data.base +'/'+ res_data.id+'"  >'+ res_data.name+'</a></h3>'+
                    '<div class="product-price">'+
                  '<span class="new-price" id="actual_price'+ res_data.id+'"> '  +  currency   +" "+   price  +  '</span>'+
                    '<span class="old-price" id="oldactual_price'+ res_data.id+'">' + currency +" "+  mrp  + '</span>'+
                    '<span class="offer-price" id="actual_priceoff'+ res_data.id+'"> (' + discount +'%off)</span>'+
                                            '</div>'+
                    '<a href="#" class="btn btn-light btn-edit">Edit Design</a>'+
                  
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
     storedata();  
//   window.onscroll = function() {storedata()};

 function get_dynamic_price(tid,base,color){
            var price;
           
              $.ajax({
                  url:"<?= base_url()?>Front/get_price/",
                  method:"GET",
                  data:{'tid':tid,'base':base,'color':color},
                  dataType:"json",
                  success:function(r){
                   $("#actual_price"+tid).html(r.price);
                   $("#oldactual_price"+tid).html(r.mrp);
                   $("#actual_priceoff"+tid).html(r.off);
                  }
              });
            //   return price;
        }

</script>
</script>