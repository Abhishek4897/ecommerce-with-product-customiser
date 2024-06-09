<section class="" data-jarallax='{"speed": 0.3}'>
         <div class="container">
            <div class="testimonials-slides owl-carousel owl-theme">
                
                <?php
                
                foreach($testinomial as $test ) {?>
               <div class="single-testimonials">  
                   <div class="d-justify" >
                       <img src="<?= base_url()?>/assets/quote.png" style="height:25px;width:25px; margin-right:4px;">
                       <?= $test->description?> 
                       </div>
                     
                       <img src="<?= base_url()?>/assets/quote.png" style="height:25px;width:25px; margin-left:4px; transform: rotateZ(180deg);float:right;">
                       
                      
                       
                  <div class="client-image mt-3">
                     <!--<img src="<?= str_replace('https://arteno.in', 'https://www.arteno.in', $test->image); ?>" alt="image">-->
                  </div>
                  
                  <div class="client-info">
                     <h4 class="ff" style="font-weight:600"> - <?=$test->name ?></h4>
                     <span class="ff mb-2" style=""><?=$test->designation ?></span>
                  </div>
               </div>
               <?php } ?>
            </div>
         </div>
      </section>