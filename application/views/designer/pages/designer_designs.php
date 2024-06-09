<div class="row">
    <?php 
    $design=design($d_id);
    if(count($design)>0){
    foreach($design as $d):
    ?>
               <div class="col-lg-4 col-md-4 col-6 col-sm-6  products-col-item product_listing_pattern">
                      <div class="single-product-box product-card">
                         <div class="product-image" onMouseOver="show_slider('product_slider<?= $d->id?>','product_image<?= $d->id?>')" onMouseOut="hide_slider('product_slider<?= $d->id?>','product_image<?= $d->id?>')">
                            <a href="#" id="product_image<?= $d->id?>">
                            <img src="<?= $d->image?>" alt="image">
                            </a>
                            <div id="product_slider<?= $d->id?>" style="display:none">
                               <div id="carouselExampleIndicators<?= $d->id?>" class="carousel slide " data-ride="carousel">
                                  <ol class="carousel-indicators">
                                     <li data-target="#carouselExampleIndicators<?= $d->id?>" data-slide-to="0" class="active"></li>
                                     <li data-target="#carouselExampleIndicators<?= $d->id?>" data-slide-to="1"></li>
                                     <li data-target="#carouselExampleIndicators<?= $d->id?>" data-slide-to="2"></li>
                                  </ol>
                                  <div class="carousel-inner">
                                     <div class="carousel-item active">
                                        <img class="d-block w-100 " src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="First slide">
                                     </div>
                                     <div class="carousel-item">
                                        <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="Second slide">
                                     </div>
                                     <div class="carousel-item">
                                        <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="Third slide">
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         
                         <span style="position: absolute; top: 0px; right: 0px;">
                           <a class="detail-modal d-lg-none d-md-none d-sm-block d-xs-block" data-toggle="modal" data-target="#productQuickView"><img src="<?= base_url()?>assets/img/mpdetail.webp" style="height:22px;"></a>
                         </span>
                         
                         <div class="product-content text-left">
                            <h3><a href=""><?= $d->name?></a></h3>
                            <div class="">
                               <span class="shipping_name"><strong class="color-small">ORDERS:</strong> <?= get_ordersBytemplates($d->id);?></span>
                            </div>
                            <?php if($d->active == 0){?>
                            <a href="<?= base_url()?>/Designer/active/<?= $d->id?>" onclick="return confirm('Are sure you want to publish design')" class="btn btn-success btn-edit">PUBLISH</a>
                            <?php }else{?>
                            <a href="<?= base_url()?>/Designer/deactive/<?= $d->id?>" onclick="return confirm('Are sure you want to unpublish design')" class="btn btn-light btn-edit">UNPUBLISH</a>
                            <?php }?>
                         </div>
                      </div>
               </div>
               <?php endforeach; }?>
      </div>