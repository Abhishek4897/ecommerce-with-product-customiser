<style>
    .checkout-header {
    position: fixed;
    width: 100%;
    background-color: white;
    z-index: 1100;
    height: 67px;
    /*box-shadow: rgba(0, 0, 0, 0.075) 0px 0.125rem 0.25rem !important;*/
}

.header-bg-black,.footer-area{
    visibility:hidden;
}
.chckout-mobile-header{
    position: fixed;
    width: 100%;
    background-color: white;
    z-index: 1100;
    height: 50px;
    margin-bottom:10px;
    top: 0px;
    border-bottom: 1px solid rgb(226, 226, 226);
    padding: 5px 10px;
}
.mobile-bottom-fixed-button{
    /*position: fixed;*/
    /*bottom: 26px;*/
    /*width: 66%;*/
    /*margin:auto;*/
    /*left:13%;*/
    /*line-height: 50px;*/
    /*color: white;*/
    /*border-radius: 25px;*/
    /*font-size: 16px;*/
    /*font-weight: bold;*/
    /*text-align: center; */
    /*background: white;*/
    /*border-top: 1px solid rgba(0, 0, 0, 0.07);*/
    /*padding-top: 24px;*/
    /*height: 100px;*/
    /*padding-left: 20px;*/
}


.checkout-header-wrapper {
    background-color: white;
    width: 80%;
    height: 65px;
    padding: 5px 0px;
    margin: auto;
}
a,a:hover{
    color:rgb(160, 160, 160);
}
.checkout-logo {
    display: inline-flex;
    height: 100%;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    align-items: center;
}
.logo-pic {
    height: 40px;
    cursor: pointer;
}
.checkout-desktop-menu{
    display: inline-flex;
    vertical-align: middle;
    font-size: 16px;
    height: 60px;
    float: right;
    margin-right: 20px;
    padding-top: 15px;
    cursor: pointer;
    position: relative;
}
.chckout-mobile-header {
    /* width: 100%; */
    height: 50px!important;
    padding: 16px 20px!important;
    border-bottom: 1px solid rgba(112, 112, 112, 0.2)!important;

}
@media only screen and (max-width: 600px) {
  .checkout-header {
    display:none;
  }
  .checkout-area{
    margin-top: 0px !important;
}
}
@media only screen and (min-width: 800px) {
.checkout-area{
    margin-top: 65px !important;
}
}
/*.checkout-header:hover{*/
/*       box-shadow: rgba(0, 0, 0, 0.075) 0px 0.125rem 0.25rem !important;*/
/*       cursor:pointer;*/
/*}*/
.cart-sidebar {
    flex: 1.5 1 0%;
    top: 106px;
    right: 0px;
    height: calc(100vh - 65px);
    overflow: scroll;
    overflow-y: hidden;
    padding-left: 20px;
    padding-top: 20px;
    border-left: 1px solid rgb(234, 234, 234);
}
</style>

<div  class="checkout-header"
          style="position:;height: auto;z-index: 9999; border-bottom: 1px solid rgba(112, 112, 112, 0.2)!important;/* box-shadow: none; */">
          <div class="checkout-header-wrapper" style="">
             <div class="checkout-logo">
                 <a href="/">
                        <img srcset="<?= base_url() ?>assets/images/artenologo.png"
                        src="<?= base_url() ?>/assets/images/artenologo.png"
                        class="logo-pic">
                </a>
            </div>
                
                
                
                <div class="checkout-desktop-menu">
                    <a href="<?= base_url()?>payment_method"><span style="color:<?= ($cpage=='payment_method')? 'black':'rgb(160, 160, 160)' ?>">Payment method</span></a>
                </div>
                
                <div class="checkout-desktop-menu">
                    <a href="<?= base_url()?>shipping"><span style="color: <?= ($cpage=='shipping' || $cpage=='payment_method' )? 'black':'rgb(160, 160, 160)' ?>">Shipping details &emsp; <i class="fa fa-chevron-right"></i></span></a>
                </div>
                <div class="checkout-desktop-menu">
                    <a href="<?= base_url()?>checkout"><span style="color: <?= ($cpage=='checkout' || $cpage=='shipping' || $cpage=='payment_method')? 'black':'rgb(160, 160, 160)' ?>">Customer info &emsp; <i class="fa fa-chevron-right"></i></span></a>
                </div>
             
             
          </div>
   
 </div>
 <div style="border-top: 1px solid rgb(234, 234, 234);"></div>