<div class="d-block d-sm-none table-love-customer" style="padding-top:10px;">
    <div class="section-title bb">
        <h2 class="text-center heading-title1">WHY CUSTOMERS LOVE THIS</h2>
        </div>
   <!--<h4 class="" style="text-align: center;font-weight: 600;padding-top: 10px;">WHY CUSTOMERS LOVE THIS</h4>-->
   <!--Grid View With Image-->
    <?php
        $pid = $templete->product_base;
        $why_this = array(
            "2" => array(
                "1" => "Create Your Own Merch",
                "2" => "Flawless Fit, Feel and Comfort",
                "3" => "Exclusive Cotton Lycra Blend",
                "4" => "Refined Lavish Experience"
            ),
            "3" => array(
                "1" => "Customise Your Mug",
                "2" => "Maintains the temperature",
                "3" => "Mirror Finish Ceramic Mugs",
                "4" => "Refined Lavish Experience"
            ),
            "4" => array(
                "1" => "Customise Your Mask",
                "2" => "Anti-Bacterial Fabric",
                "3" => "Enhanced Breathability",
                "4" => "Face Fit To Perfection"
            )
        );
    ?>
    <div class="row mobile-right-no">
        <?php foreach($why_this[$pid] as $why_pos => $why_this_single): ?>
            <div class="col-md-3 col-xs-6 col-6 mt-3">
                <div class="luxury-design-card text-center">
                    <img  class="luxury-img" src="<?= base_url('assets/images/why-love/'.$pid.'/'.$why_pos.'.gif')?>">
                    <p class="luxury-design-text"><?= $why_this_single ?></p>
                </div>
            </div>
        <?php endforeach; ?>
        <!--<div class="col-md-3 col-xs-6 col-6 mt-3">-->
        <!--    <div class="luxury-design-card text-center">-->
        <!--       <img  class="luxury-img" src="<?= base_url()?>assets/images/why-love/1.gif">-->
        <!--       <p class="luxury-design-text">Create Your Own Merch</p>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="col-md-3 col-xs-6 col-6 mt-3">-->
        <!--    <div class="text-center">-->
        <!--       <img  class="luxury-img" src="<?= base_url()?>assets/images/why-love/2.gif">-->
        <!--       <p class="luxury-design-text">Flawless Fit, Feel and Comfort</p>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="col-md-3 col-xs-6 col-6 mt-3">-->
        <!--    <div class="text-center">-->
        <!--       <img  class="luxury-img" src="<?= base_url()?>assets/images/why-love/3.gif">-->
        <!--       <p class="luxury-design-text">Exclusive Cotton Lycra Blend</p>-->
        <!--    </div>-->
        <!--</div>-->
        <!--<div class="col-md-3 col-xs-6 col-6 mt-3">-->
        <!--    <div class="text-center">-->
        <!--       <img  class="luxury-img" src="<?= base_url()?>assets/images/why-love/4.gif">-->
        <!--       <p class="luxury-design-text">Refined Lavish Experience</p>-->
        <!--    </div>-->
        <!--</div>-->

    </div>
</div>