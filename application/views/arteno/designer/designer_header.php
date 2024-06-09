<style>
.section-title h1, h2, h3, h4, h5, h6, p, span, ul, li, body ,label, input{
    /* font-family: 'Noto Sans JP', sans-serif !important; */
        font-family: ProximaNova, sans-serif!important;
}
body{
    background:#eee !important;
}
    .product-card ,.data-content{
    background:transparent !important;
}
.top{
    background-color: #111;
    border-bottom-left-radius: 30px;
    border-bottom-right-radius: 30px;
    border: none;
    margin-top: 1rem;
}

.card-body p {
 color: #fff;
 font-size: 12px;
}

.card-body h4 {
    color: #fff;
}

.card-body h3 {
    color: #fff;
}

.btn a{
    text-decoration: none;
    border: none;
    padding: 5px 10px;
    background-color: #000;
    color: b78b2a;
    border-radius: 30px;
    font-weight: bold;
    font-size: 18px;
    font-variant: all-small-caps;
}


.main{
    background-color: #000;
  
    border: none;
     border-radius: 8px;
     padding:10px; 
     margin-top:-48px;
     position:absolute !important;
    width: 70%;
    margin-left:7%;
}

.text h3{
    font-size: 20px;
    margin-top: 10px;
    color: b78b2a;
    font-weight: bold;
}

.box-content{
    box-shadow: 0px 0 5px 0 rgba(0, 0, 0, 0.3);
    /*padding: 15px 20px;*/
    transition: all ease-in-out 0.4s;
    background: #fff;
    width:60%;
}

h5{
    margin-bottom: 1rem;
    font-weight: bold;
}
@media only screen and (max-width: 600px) {
.box-content{
    box-shadow: 0px 0 5px 0 rgba(0, 0, 0, 0.3);
    /*padding: 15px 20px;*/
    transition: all ease-in-out 0.4s;
    background: #fff;
    width:100% !important;
}
.text h3{
    font-size: 10px !important;
}
.main{
    width:90% !important;
    margin-left:0% !important;
}
 .second .btn-group .btn{
        padding: 6px 8px;
    }
}

</style>



</head>
<body>
    

<!--<header >-->

    <div class="container-fluid top" id="top" style="margin-top:50px; position:relative !important">
        <div class="box">
           <div class="row">
              <div class="col-md-4"></div>
              <div class="col-md-8">
                   <center>
                <div class="card" style=" background-color: transparent; border: none; height:13rem;">
                    <div class="row no-gutters">
                        <br> <br>
                      <div class="col-md-8 col-12 mt-4" style="display:flex;color:white !important;">
                          <div style="float:left">
                        <img src="https://admin.anshuwap.com/demo_arteno/assets/img/img2.jpg" class="card-img" style="width:100px; height:100px; border-radius: 50%;" alt="...">
                      
                      </div>
                      <div style="float:right">
                          <h4 style="color:white !important;">SANCHIT</h4>
                          <div style="display:flex;">
                          <p style="color:white !important; margin-left:10px;">
                              Total Views <br>0
                          </p>
                           <p style="color:white !important;margin-left:30px;">
                              Total Earns<br>0
                          </p>
                          </div>
                         
                         <div class="btn">
                        <a href="#">SHARE NOW</a>
                        </div>
                      </div>
                      <br>  <br>
                      
                      </div>
                      <div class="col-md-8 col-6">
                        <!--<div class="card-body">-->

                        <!--  <div class="row text-center mb-3">-->
                        <!--      <div class="col-12">-->
                        <!--            <h4 style="padding:5px;">SANCHIT</h4>-->
                        <!--      </div>-->
                              <!--<div class="col-4">-->
                              <!--  <p>Total Pageviews</p>-->
                              <!--  <h3>0</h3>-->
                              <!--</div>-->

                        <!--      <div class="col-4">-->
                        <!--            <p>Total Orders</p>-->
                        <!--            <h3>0</h3>-->
                        <!--      </div>-->

                        <!--      <div class="col-4">-->
                        <!--            <p>Total Earning</p>-->
                        <!--            <h3>0</h3>-->
                        <!--      </div>-->
                        <!--  </div>-->

                        <!--  <div class="row text-left">-->
                        <!--      <div class="col-12">-->
                        <!--            <div class="btn">-->
                        <!--                <a href="#">SHARE NOW</a>-->
                        <!--            </div>-->
                        <!--      </div>-->
                        <!--  </div>-->

                        <!--</div>-->
                      </div>
                    </div>
                  </div>
            </center>
              </div>
           </div>
        </div>
    </div>
<!--</header>-->



<section class="first">
    <center>
        <div class="container">
            <div class="main">
                <div class="card mb-3" style="max-width: 100%; background-color: transparent; border: none;">
                    <div class="row no-gutters text-center">
    
                        <div class="col-3">
                            
                            <div class="text">
                                <a href="<?= base_url()?>home/designer_dashboard">
                                <h3>CREATE DESIGNS</h3>
                                </a>
                            </div>
                        </div>
    
                        <div class="col-3">
                            <div class="text">
                                <a href="<?= base_url()?>home/liveshop">
                                <h3>LIVE E-SHOP</h3>
                                </a>
                            </div>
                        </div>
    
                        <div class="col-3">
                            <div class="text">
                                <a href="<?= base_url()?>home/mydesigns">
                                <h3>MY DESIGNS</h3>
                                </a>
                            </div>
                        </div>
    
                        <div class="col-3">
                            <div class="text">
                                <a href="<?= base_url()?>home/personal_info">
                                <h3>PERSONAL INFO</h3>
                                </a>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </center>
</section>