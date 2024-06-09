<?php include('includes/header.php')?>
<!-- =====================================
   ==== Start Header -->
<style>
   .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
   color: #fff;
   /* background-color: #007bff; */
   background-color: #83202d;
   }
   
   .nav-link {
   display: block;
   padding: 0.5rem 20px;
   }
   @media only screen and (max-width: 600px) {
   .blog .item .info .right {
   float: left;
   margin-top:10px;
   margin-left:0px;
   }
   .info .row .col-md-8  input {
   width:100%;
   }
   }
   .blog .item .post-img .img img{
   height:230px;
   }
   @media only screen and (max-width: 600px) {
     .info .row .col-md-8{
         /*display:flex;*/
     }
     .info .row .col-md-8 input{
        width:auto!important;
     }
    }
</style>
<?php $img_url='https://bdemo.anshuwap.com/website/';?>
   <section style="margin-top:60px">
       <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 slider-height" src="<?=base_url()?>assets/img/slider1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 slider-height" src="<?=base_url()?>assets/img/slider2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100 slider-height" src="<?=base_url()?>assets/img/slider3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
       </div>
   </section>
<section class="works section-padding" style="background:#FBFCFC">
   <div class="container">
      <div class="row">
         <div class="section-head text-center col-sm-12" style="margin-bottom: 30px;">
            <h6>Our Portfolio</h6>
            <h4>Latest <span>Creative</span> Work</h4>
         </div>
         <div class="col-md-12">
            <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                <?php  $counter=0;foreach($cat as $c): $counter++;?>
               <li class="nav-item">
                  <a class="nav-link <?=($counter==1)?'active':''?>" id="pills-<?=$c->id;?>-tab" data-toggle="pill" href="#pills-<?=$c->id;?>" role="tab" aria-controls="pills-<?=$c->id;?>" aria-selected="true"><?=$c->name;?></a>
               </li>
               <?php endforeach;?>
            </ul>
         </div>
         <div class="clearfix"></div>
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-12">
                  <div class="tab-content" id="pills-tabContent">
                      <?php  $i=0;foreach($cat as $c):$i++;
                            $check_subcat=$this->Home_model->subcat_check($c->id);
                            if($check_subcat >0){?>
                            <div class="tab-pane fade <?=($i==1)?'show active':''?>" id="pills-<?=$c->id;?>" role="tabpanel" aria-labelledby="pills-<?=$c->id;?>-tab">
                            <div class="col-md-12">
            <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
                 <?php
  $subcat=$this->Home_model->fetch_subcat($c->id);
  
  $counter_main=0; foreach($subcat as $s): $counter_main++;
  ?>
               <li class="nav-item">
                  <a class="nav-link <?=($counter_main==1)?'active':''?>" id="subpills-<?=$s->id;?>-tab" data-toggle="pill" href="#subpills-<?=$s->id;?>" role="tab" aria-controls="pills-<?=$s->id;?>" aria-selected="true"><?=$s->name;?></a>
               </li>
               <?php endforeach;?>
            </ul>
         </div>
         <div class="clearfix"></div>
         <div class="col-md-12">
            <div class="row">
               <div class="col-md-12">
                  <div class="tab-content" id="pills-tabContent">
                       <?php $counter_first=0;  foreach($subcat as $s): $counter_first++;?>
                       <div class="tab-pane fade <?=($counter_first==1)?'show active':''?>" id="subpills-<?=$s->id;?>" role="tabpanel" aria-labelledby="pills-<?=$s->id;?>-tab">
                        <div class="posts blog mb-md50 mb-3">
                            <?php 
		      $glcat=$this->Home_model->portfolio_list($s->id);
		      if($glcat){
		      foreach($glcat as $gl):
		     ?>
                           <div class="item">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="post-img">
                                       <div class="img">
                                          <img src="<?=$img_url.$gl->image?>" alt="">
                                       </div>
                                       <div class="tag">
                                          <a ><span class="icon"><i class="fas fa-tags"></i></span><?=$gl->name;?></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="cont">
                                       <h6><a href="<?=$gl->url;?>" target="_blank"><?=$gl->name;?></a></h6>
                                       <p><?=$gl->description;?></p>
                                       <div class="info">
                                          <div class="row">
                                             <div class="col-md-8">
                                                Share Link: <input type="url" value="<?=$gl->url;?>" class="" id="myInput<?=$gl->id;?>" style="border:0px; width:80%" readonly>
                                             </div>
                                             <div class="col-md-4">
                                                <button onclick="myFunction('<?=$gl->url;?>')" class="right butn butn-bg text-white">
                                                <span>Copy link</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            <?php endforeach; } else {?>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4" style="text-align:center;">
                                    <img src="<?=$img_url?>uploads/not_found.png" alt="" style="height:auto;">
                                </div>
                                <div class="col-md-4"></div>
                                </div>
    <?php }?>
                        </div>
                     </div>
                      <?php endforeach;?>
                     </div>
               </div>
            </div>
         </div>
         </div>
                     <?php } else {?>
                     
                     <div class="tab-pane fade <?=($i==1)?'show active':''?>" id="pills-<?=$c->id;?>" role="tabpanel" aria-labelledby="pills-<?=$c->id;?>-tab">
                        <div class="posts blog mb-md50 mb-3">
                            <?php 
		      $glcat=$this->Home_model->portfolio_list($c->id);
		      if($glcat){
		      foreach($glcat as $gl):
		     ?>
                           <div class="item">
                              <div class="row">
                                 <div class="col-md-4">
                                    <div class="post-img">
                                       <div class="img">
                                          <img src="<?=$img_url.$gl->image?>" alt="">
                                       </div>
                                       <div class="tag">
                                          <a ><span class="icon"><i class="fas fa-tags"></i></span><?=$gl->name;?></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-8">
                                    <div class="cont">
                                       <h6><a href="<?=$gl->url;?>" target="_blank"><?=$gl->name;?></a></h6>
                                       <p><?=$gl->description;?></p>
                                       <div class="info">
                                          <div class="row">
                                             <div class="col-md-8">
                                                Share Link: <input type="url" value="<?=$gl->url;?>" class="" id="myInput<?=$gl->id;?>" style="border:0px; width:80%" readonly>
                                             </div>
                                             <div class="col-md-4">
                                                <button onclick="myFunction('<?=$gl->url;?>')" class="right butn butn-bg text-white">
                                                <span>Copy link</span>
                                                </button>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            <?php endforeach; } else {?>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4" style="text-align:center;">
                                    <img src="<?=$img_url?>uploads/not_found.png" alt="" style="height:auto;">
                                </div>
                                <div class="col-md-4"></div>
                                </div>
    <?php }?>
                        </div>
                     </div>
                     <?php } endforeach; ?>
                  </div>
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
   
      </div>
   </div>
</section>

   
<script>
   function myFunction(url) {
     const elem = document.createElement('textarea');
   elem.value = url;
   document.body.appendChild(elem);
   elem.select();
   document.execCommand('copy');
    "Copied the text: " + url;
   document.body.removeChild(elem);
   }
</script>
<?php include('includes/footer.php')?>