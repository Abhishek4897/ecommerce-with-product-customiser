<?php include(__DIR__.'../../includes/header.php')?>
<?php $this->load->view('arteno/includes/designer_header.php') ?>
<style>
 .section-title h1, h2, h3, h4, h5, h6, p, span, ul, li, body {
    /* font-family: 'Noto Sans JP', sans-serif !important; */
        font-family: ProximaNova, sans-serif!important;
}
.mobile-three-dots{
        white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
   }

   @media screen and (max-width: 992px) {
   .single-product-box .product-content .btn {
   display: inline-block;
   width: 100%;
   padding: 2px !important;
   text-transform: capitalize;
   }
   .button-background {
   background-image: url('<?=base_url()?>/assets/black-marble.jpg') !important;
   color: white !important;
   background-size: cover;
   font-weight: 600;
   /*width: 120px !important;*/
   width: 131%!important;
   font-size: 9px;
   padding: 8px !important;
   }
   .cool-link {
   transition: width .3s;
   }
   .cool-link:hover{
   width: 131%;
   background: #111!important;
   transition: width .3s;
   }
   .shop-button{
   width: 160px !important;
   line-height: 30px!important;
   font-size: 9px!important;
   padding: 8px !important;
   }
   .tab-padding{
   padding-right: 37px;
   padding-left: 14px;
   }
   .carousel-item img{
   /*height:140px !important;*/
   } 
   }
   @media screen and (min-width: 991px) {
   .button-background {
   background-image: url('<?=base_url()?>assets/black-marble.jpg') !important;
   color: white !important;
   background-size: cover;
   font-weight: 600;
   width: 160px;
   padding: 7px 5px !important;
   }
   .cool-link {
   transition: width .3s;
   }
   .cool-link:hover{
   width: 160px;
   background: #111!important;
   transition: width .3s;
   }
   .shop-button{
   width: 160px!important;
   line-height: 30px!important;
   font-weight: 600;
   padding: 7px 5px !important;
   }
   .carousel-item img{
   height:230px !important;
   } 
   }
   .single-product-box .product-content h3 {
   font-size: 18px;
   margin-bottom: 0;
   font-weight: 600;
   }
   .form-control{
   background:#111 !important;
   border: 1px solid #111!important;
   border-radius:0px!important;
   }
   .search_colomn{
   padding:0px!important;
   }
   .category{
   visibility: hidden;
   }
   @media only screen and (max-width: 600px){
   .button-background {
   padding: 5px !important;
   }
   .row-margin{
       margin-left: 20px !important;
     margin-right: 20px !important;
   }
   .mobile-three-dots{
        white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
   }
   .product-card .btn {
   padding: 5px 8px;
   font-size: 12px;
   }
   .single-product-box .product-content h3 a {
   font-size: 13px!important;
   }
   }
   .no-data-image{
   height:200px;
   }
   button:focus {
   outline: 1px dotted;
   outline: 0px auto -webkit-focus-ring-color;
   }
   }
</style>
<section class="second mt-50">
   <div class="container">
      <div class="card border-0" style="background:transparent;">
         <div class="row">
            <div class="col-md-12">
               <center>
                  <h5 class="navigate" style="font-weight: 600;font-size: 30px;">MY DESIGNS</h5>
                  <div class="d-none d-xs-none d-sm-block d-md-block d-lg-block">
                     <div class="row  btngroup " style="display:flex">
                        <div class="col-md-3"></div>
                        <?php foreach($products as $p): ?>
                        <div class="col-md-2">
                           <form action="" method="post">
                              <button type="submit" name="search" value="<?= $p->id;?>" class=" button-background"><?= $p->name;?></button>
                           </form>
                        </div>
                        <?php endforeach;?>
                        <div class="col-md-3"></div>
                     </div>
                  </div>
                  <div class="d-block d-xs-block d-sm-none d-md-none d-lg-none">
                     <div class="row  btngroup tab-padding" style="display:flex;">
                        <?php foreach($products as $p): ?>
                        <div class="col-xs-4 col-4">
                           <form action="" method="post">
                              <button type="submit" name="search" value="<?= $p->id;?>" class=" button-background"><?= $p->name;?></button>
                           </form>
                        </div>
                        <?php endforeach;?>
                     </div>
                  </div>
               </center>
            </div>
         </div>
      </div>
      <div class="row row-margin">
         <?php 
            if(count($design)>0){
                $i=0;
                foreach($design as $d):
            ?>
         <div class="col-lg-3 col-md-3 col-6 col-sm-6  products-col-item product_listing_pattern">
            <div class="single-product-box product-card">
               <!--<div class="product-image">-->
               <!--    <a href="#" id="product_image<?= $d->id?>">-->
               <!--        <img src="<?= $d->image ?>" alt="image">-->
               <!--    </a>-->
               <!--</div>-->
               <!--<div class="wishlist-close float-right text-danger"><a href="<?= base_url('Designer/delete_design')?>/<?= $d->id?>" onclick="return confirm('Are you sure you want to delete')"><span class="cart-close"><i class="fa fa-trash" aria-hidden="true"></i></span></a></div>    -->
               <div class="product-image" onMouseOver='show_slider("product_slider<?= $d->id?>","product_image<?= $d->id?>")' onMouseOut="hide_slider('product_slider<?= $d->id?>','product_image<?= $d->id?>')">
                  <img src="<?= $d->image?>" alt="image" id="product_image<?= $d->id?>">
                  <div id="product_slider<?= $d->id?>" style="display:none">
                     <div id="carouselExampleIndicators<?= $r->id?>" class="carousel slide " data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#prod_design<?= $i?>" data-slide-to="0" class="active"></li>
                           <?php if($d->no_of_stages>1): ?>
                           <li data-target="#prod_design<?= $i?>" data-slide-to="1"></li>
                           <?php endif; ?>
                        </ol>
                        <div class="carousel-inner">
                           <?php if($d->no_of_stages>1): ?>
                           <div class="carousel-item active">
                              <img class="d-block w-100" src="<?= $d->front_screenshot; ?>" alt="Front Side" style="height:230px;">
                           </div>
                           <div class="carousel-item">
                              <img class="d-block w-100" src="<?= $d->back_screenshot; ?>" alt="Back Side" style="height:230px;">
                           </div>
                           <?php else: ?>
                           <div class="carousel-item active">
                              <img class="d-block w-100" src="<?= $d->image; ?>" alt="Single Side" style="height:230px;">
                           </div>
                           <?php endif; ?>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="product-content ">
                   <div class="row">
                       <div class="col-10 pr-0">
                            <h3 class="text-left mobile-three-dots"><a href="<?= ($d->active == 1)?base_url($d->baseslug."/".$d->slug):"" ?>" style="font-weight:500;"><?= ucwords(strtolower($d->name))?></a></h3>
                       </div>
                       <div class="col-2 pl-0">
                            <i class="fa fa-pencil-alt" data-toggle="modal" data-target="#update_name<?= $d->id?>" style="float:right;"></i>
                       </div>
                   </div>
                  <div class="text-left">
                     <span class="shipping_name"><strong class="color-small">ORDERS:</strong> <?= get_ordersBytemplates($d->id);?></span>
                  </div>
                  <?php if($d->active == 0) { ?>
                  <a href="<?= base_url()?>/Designer/active/<?= $d->id?>" onclick="return confirm('Are you sure to publish design?')" class="btn btn-primary">PUBLISH</a>
                  <?php } else { ?>
                  <a href="<?= base_url()?>/Designer/deactive/<?= $d->id?>" onclick="return confirm('Are you sure to unpublish design?')" class="btn btn-primary">UNPUBLISH</a>
                  <?php } ?>
               </div>
            </div>
         </div>
         <div class="modal fade" id="update_name<?= $d->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Update Design name</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <form action="<?=base_url('update_design')?>" method="post">
                     <div class="modal-body">
                        <input type="hidden" name="template_id" value="<?= $d->id?>">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Design Name</label>
                           <input type="text" class="form-control" value="<?= $d->name?>" name="name" required>
                        </div>
                     </div>
                     <div class="modal-footer">
                        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                        <button type="submit" name="submitbtn" value="1" class="btn btn-primary">Save</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <?php 
            $i++;
            endforeach; 
            } else { ?>
         <div class="col-md-12">
            <center>
               <img class="no-data-image" src='<?= base_url()?>assets/images/ndf_03.gif'>
               <h5 class="mt-2">No Designs Found</h5>
            </center>
         </div>
         <?php } ?>
      </div>
      <br>
   </div>
   </div>
</section>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?= $this->session->flashdata('design')?>
<?php include(__DIR__.'../../includes/footer.php')?>