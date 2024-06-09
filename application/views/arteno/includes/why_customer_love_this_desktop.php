<section class="d-none d-sm-none d-md-block customer-love custom-customer-love" >
   <br> 
   <div class="container">
        <div class="section-title bb">
            <h2 class="text-center heading-title1">WHY CUSTOMERS LOVE THIS</h2>
        </div>

    <div class="row ">
        <?php foreach($why_this[$pid] as $why_pos => $why_this_single): ?>
            <div class="col-md-3 mt-3">
                <div class="luxury-design-card text-center">
                    <img  class="luxury-img" src="<?= base_url('assets/images/why-love/'.$pid.'/'.$why_pos.'.gif')?>">
                    <p class="luxury-design-text"><?= $why_this_single ?></p>
                </div>
            </div>
        <?php endforeach; ?>

         <!--<div class="col-md-3 mt-3">-->
         <!--   <div class="luxury-design-card text-center">-->
         <!--      <img  class="luxury-img" src="<?= base_url()?>assets/images/why-love/1.gif">-->
         <!--      <p class="luxury-design-text">Create Your Own Merch</p>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-md-3 mt-3">-->
         <!--   <div class="text-center">-->
         <!--      <img  class="luxury-img" src="<?= base_url()?>assets/images/why-love/2.gif">-->
         <!--      <p class="luxury-design-text">Flawless Fit, Feel and Comfort</p>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-md-3 mt-3">-->
         <!--   <div class="text-center">-->
         <!--      <img  class="luxury-img" src="<?= base_url()?>assets/images/why-love/3.gif">-->
         <!--      <p class="luxury-design-text">Exclusive Cotton Lycra Blend</p>-->
         <!--   </div>-->
         <!--</div>-->
         <!--<div class="col-md-3 mt-3">-->
         <!--   <div class="text-center">-->
         <!--      <img  class="luxury-img" src="<?= base_url()?>assets/images/why-love/4.gif">-->
         <!--      <p class="luxury-design-text">Refined Lavish Experience</p>-->
         <!--   </div>-->
         <!--</div>-->

      </div>
      <br>
   </div>
</section>