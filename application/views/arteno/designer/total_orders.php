<?php 
include(__DIR__.'../../includes/header.php');
$this->load->view('arteno/includes/designer_header.php');
?>
<style>
    .mb-height{
        width:100%;
    }
    .t-shirt-img{
        height:235px;
    }
    .mug-img{
        height:230px;
    }
    .btn {
        box-shadow: none;
    }
    .order-value{
        font-size:20px;
    }
    .order-value{
      margin-top:10px;
    }
    .desktop-ml{
        margin-left:25px;
    }
    .desktop-img-height{
        height: 231px;
    }
    @media only screen and (max-width: 600px) {
   .mb-height{
        width:auto;
        height:180px;
    }
    .desktop-ml{
        margin-left:0px;
    }
    .desktop-img-height{
        height:auto;
    }
}
</style>
<?php
    $d_id = $this->session->userdata('designer_id');
?>
<section class="second mt-50">
    <div class="container">
        <!--<button class="btn btn-primary btn-block">TOTAL ORDERS</button>-->
         <center> <h5 class="navigate" style="font-weight: 500;font-size: 30px;">TOTAL ORDERS</h5> </center>
        <div class="row mt-2 desktop-ml" style="text-align:center !important;">
            <!--<div class="col-lg-1 col-md-1 col-12 mt-3" ></div>-->
            <div class="col-lg-3 col-md-3 col-12 mt-3" style="text-align:center !important;" >
                <h5>T-SHIRT</h5>
                
                <div class="" style="text-align:center !important;">
                    <div class="border-0" style="max-width: 100%;">
                        <img class="mb-height t-shirt-img" src="<?= base_url()?>assets/mockups/t-shirt.png" alt="">
                    </div>
                </div>
                   <h5 class="order-value"><span>Total Orders</span> : <?= count_order($d_id, 2); ?></h5>

                <!--<div class="btn mt-4" style="padding: 10px 10px;">-->
                <!--    <a href="<?=base_url()?>my_customizer?product=2" class="button-customise"> Start Customization</a>-->
                <!--</div>-->
            </div>
           
            <div class="col-lg-1 col-md-1 col-12 mt-3" ></div>
           
            <div class="col-lg-3 col-md-3 col-12 mt-3" style="text-align:center !important; float:right;">
                <h5>MUG</h5>
               
                <div class="" style="text-align:center !important;">
                    <div class="border-0" st zyle="max-width: 100%;">
                        <img class="mb-height mug-img" src="<?= base_url()?>assets/mockups/mug-front1.png" style="margin-left: 25px;" alt="">
                    </div>
                </div>
                   <h5 class="order-value"><span>Total Orders</span> : <?= count_order($d_id, 3); ?></h5>
            </div>
          
           <div class="col-lg-1 col-md-1 col-12 mt-3" ></div>
            <div class="col-lg-3 col-md-3 col-12 mt-3" style="text-align:center !important;">
                <h5>MASKS</h5>
                
                <div class="desktop-img-height" style="text-align:center !important;">
                    <div class="border-0" style="max-width: 100%;">
                        <img class="mb-height" src="<?= base_url()?>assets/mockups/mask.png" style="margin-bottom:20px;" alt="">
                    </div>
                </div>
                 <h5 class="order-value"><span>Total Orders</span> : <?= count_order($d_id, 4); ?></h5>
            </div>
        </div>
    </div>
    <br>
</section>



<?php include(__DIR__.'../../includes/footer.php')?>