<?php include(__DIR__.'../../includes/header.php')?>
<?php $this->load->view('arteno/includes/designer_header.php') ?>
<style>
p, span, ul, li, body {
    /* font-family: 'Noto Sans JP', sans-serif !important; */
        font-family: ProximaNova, sans-serif!important;
}

@media only screen and (max-width: 600px){
.offer-price {
    color: red!important;
    font-size: 8px!important;
}
}

.btn-edit{
    text-align:center;
}
.product-card .product-content {
    margin-top: 0px;
    padding: 5px 10px;
}
.single-product-box .designer_area {
  bottom: 98px!important;   
}
.single-product-box .product-content .btn-edit {
    padding:3px 15px !important;
    text-transform:uppercase;
    font-size:12px;
}
@media only screen and (min-width: 768px){
.btn-wishlist, .btn-wishlist,.wished,.addwish{
    font-size:21px !important;
}
}
@media only screen and (max-width: 600px){
    .btn-wishlist {
    font-size:18px!important;
    padding: 1px 4px 5px!important;
    }
    .single-product-box .product-content .btn-edit {
    padding:2px 15px !important;
    text-transform:uppercase;
    font-size:10px;
}
    .products-col-item{
        padding-right: 5px;
        padding-left: 5px;
    }
    .single-product-box .designer_area {
      bottom: 60px!important;   
    }
    .row-margin{
     margin-left: 25px !important;
     margin-right: 25px !important;
    }
}

@media only screen and (max-width:600px){

.product-card .product-content {
    margin-top: 0px;
    padding: 10px 10px!important;
}

/*.single-product-box .product-content .product-price {*/
/*    margin-top: 8px;*/
/*    margin-bottom: 2px;*/
/*}*/
}
    .product-card ,.data-content{
    background:transparent !important;
}

/*    .single-product-box .product-content h3 {*/
/*    font-size: 18px;*/
/*    margin-bottom: 0;*/
/*    font-weight: 600;*/
/*}*/
.no-data-image{
    height:200px;
}
.mb-three-dots{
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
@media only screen and (max-width: 600px) {
  .product-card .product-content {
       padding-top: 0px;
    }
    .mb-three-dots{
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
}


</style>

<section class="second mt-50">
    <div class="container">
        <div class="row" id="store">
          <div class="col-md-12 col-lg-12 mobil-padding-0">
               
                <div class="data-content">
                    <div class="row row-margin">
                        
                        <?php
                        if(count($store)>0){
                        foreach($store as $r):
                         $d=  json_decode(t_shirt_price($r->color,$r->pid,$r->id)); 
                        ?>
                  
                   <div class="col-lg-3 col-md-3 col-6 col-sm-6  products-col-item">
                  <div class="single-product-box product-card">
                    <div class="product-image" onMouseOver='show_slider("product_slider<?= $r->id?>","product_image<?= $r->id?>")' onMouseOut="hide_slider('product_slider<?= $r->id?>','product_image<?= $r->id?>')">
                      <a href="<?= base_url()?><?= $r->baseslug?>/<?= ($r->slug!="")?$r->slug:$r->id ?>">
                        <img src="<?= $r->image?>" alt="image" id="product_image<?= $r->id?>">
                        </a>
                        
                        
                        <div id="product_slider<?= $r->id?>" style="display:none">
                           <div id="carouselExampleIndicators<?= $r->id?>" class="carousel slide " data-ride="carousel">
                              <ol class="carousel-indicators">
                                <?php
                                  $counter = 0;
                                  $i=0;
                                  if($r->pid == 2){
                                      $counter = 4;
                                  }
                                  else if($r->pid == 2){
                                      $counter = 2;
                                  }else{
                                      $counter = 1;
                                  }
                                  if($r->pid != 4){
                                  for($i=0;$i<$counter;$i++){
                                      
                                      $st = ($i == "0")?"active":"";
                                      echo '<li data-target="#carouselExampleIndicators'.$r->id.'" data-slide-to="'.$i.'" class="'.$st.'"></li>';
                                  }
                                  }
                                  ?>
                              </ol>
                              <div class="carousel-inner">
                               <?php 
                                  $i=0;
                                  if($r->pid != 4){
                                  foreach(product_slider($r->id) as $img){
                                      $slug = ($r->slug!="")?$r->slug:$r->id;
                                      $st = ($i==0)?"active":"";
                                      echo '   <div class="carousel-item '.$st.'">
                                    <a href="'. base_url().$r->baseslug.'/'.$slug.'">
                                    <img class="d-block w-100" src="'.$img.'" alt="Second slide">
                                    </a>
                                 </div>';
                                  
                                      $i++;
                                  }
                                  }else{
                                       $img = product_slider($r->id)[0] ;
                         echo '<a href="'. base_url().$r->baseslug.'/'.$slug.'"><div class="item"><img src="'.$img.'" alt="image"></div></a> ';  
                                  }
                                  ?>
                                 
                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     
                        <p class="designer_area">
                            <a href="<?= base_url()?>Designer/<?= $r->Uslug?>" class="text-white">
                                 <?php if($r->user_image ==""){?>
                                  <img src="<?= default_designer_image() ?>" class="designer_image" alt="...">
                                  <?php }else{?>
                                   <img src="<?= $r->user_image ?>" class="designer_image" alt="...">
                                  <?php }?>
                                <span class="design_title">Designed By:</span> <span class="three-dot designer-name"><?= $r->user_fullname?></span>
                            </a>
                        </p>
                     <!--</br>-->
                     <div class="product-content text-left">
                        <h3 class="mb-three-dots"> <a href="<?= base_url()?><?= $r->baseslug?>/<?= ($r->slug!="")?$r->slug:$r->id ?>"><?= $r->name?></a></h3>
                                        <?php $d=  json_decode(t_shirt_price($r->color,$r->pid,$r->id)); ?>
                                    <div class="product-price">
                                    <span class="new-price"><?= $d->price?></span>
                                    <span class="old-price"><?= $d->mrp?></span>
                                    <span class="offer-price"><?=$d->off?></span>
                                    </div>
                        <a href="<?=base_url()?>customizer?product=<?=$r->pid?>&template=<?=$r->id;?>" class="btn-primary btn-edit" style="border:1px solid black !important;" >Customise</a>
                        <?php if(isset($_SESSION['user_id'])){ 
                         $wish = check_wish($r->id,$_SESSION['user_id']);
                         if($wish->temp_id == $r->id){?>
                       <span class="btn-wish"><button class="btn-wishlist wished removewish" data-tempid ="<?= $r->id?>" data-base="<?= $r->pid?>" data-id="<?= $wish->id?>" id="wishLoader<?= $r->id?>"><i class="fa fa-heart"></i></button></span>
                         <?php }else{ ?>
                    <span class="btn-wish"><button class="btn-wishlist addwish" data-tempid ="<?= $r->id?>" data-base="<?= $r->pid?>" data-id="<?= $wish->id?>" id="wishLoader<?= $r->id?>"><i class="far fa-heart"></i></button></span>  
                         <?php }
                         }else{?>
                         <span class="btn-wish"><button class="btn-wishlist" data-toggle="modal" data-target="#loginotpmodal"><i class="far fa-heart"></i></button></span>
              
                       <?php }?>
                        </div>
                  </div>
               </div>
                <!--<?//php endforeach;?>-->
                <?php endforeach; } else {?>
               <div class="col-md-12">
                        <center><img class="no-data-image" src='<?= base_url()?>assets/images/ndf_03.gif'><h5 class="mt-2">No Designs Found</h5></center>
               </div>
               <?php }?>
                
                </div>
               </div>
            </div>
        </div>    
    </div>
</section>




<?php include(__DIR__.'../../includes/footer.php')?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script>
         
 $(document).on("click",'.addwish',function(){
           var temp_id = $(this).data("tempid");
           var base_id = $(this).data("base");
            loader_all('wishLoader'+temp_id, '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>',true);
            $(this).toggleClass("wished");
              $(this).toggleClass("addwish");
               $(this).toggleClass("removewish");
                $.ajax({
               url:"<?= base_url()?>Front/addwishlist/",
                method:"GET",
               data:{temp_id:temp_id,base_id:base_id},
               success:function(r){
               loader_all('wishLoader'+temp_id, '<i class="fa fa-heart"></i>',false);
               swal("Added to wishlist ",{
                     icon: "success",
                      button: false,
                      timer: 1200,
        });
                   wishcount();
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
        
   </script>