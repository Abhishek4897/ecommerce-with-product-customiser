<?php include('includes/header.php')?>
<style>
   .form-control {
   background-color: transparent; 
   border: 1px solid rgb(221, 227, 232);
   padding:15px;
   }
   .ml-30{
   margin-left:30px;
   }
   @media only screen and (min-width: 900px) {
   #row{
   margin-left:8px !important;
   margin-right:8px !important;
   }
   .desktop-padding{
   padding:20px 40px;
   }
   .address{
   font-size: 14px;
   font-weight: 500;
   padding: 40px 10px !important;
   color: rgb(74, 74, 74);
   }
   }
   .nice-select .list {
   width: 100%;
   }
   .sizeGuideModal .modal-content button.close:hover {
   background-color: black;
   color: #fff;
   }
   .modal {
   z-index: 99999;
   }
   ul li.active{
   background:black !important;
   color:white !important;
   border-radius:30px;
   padding:10px;
   }
   ul li.active a{
   color:white !important;
   }
   .mt-20{
   margin-top:20px;
   }
   .variation{
   font-size:13px;
   }
   .variation-value{
   padding: 0px 10px;
   width: 60px; 
   border: 1px solid rgb(144, 161, 181);
   border-radius: 4px; line-height: 30px;
   text-align:center;
   }
   .variation-name{
   font-size: 9px; color: rgb(144, 161, 181);
   }
   .mt-5{
   margin-top:5px!important;
   }
   .visible-xs{
       display:none;
   }
   @media only screen and (max-width: 600px) {
   .address{
   font-size: 11px;
   font-weight: 300;
   padding: 5px;
   color: rgb(74, 74, 74);
   overflow-y:scroll!important;
   }
   .hidden-xs{
       display:none;
   }
   .visible-xs{
       display:block;
   }
   .modal-content {
    background-color: #fff;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 2.3rem;
    padding: 14px;
   }
   .checkout-input-label1 {
    font-size: 11px;
    line-height: 11px;
    color: rgb(144, 161, 181);
     padding: 0px 0px 0px !important; 
     min-height: auto !important; 
    font-weight: 500;
}

.model-fixed {
    width: 100%;
    position: fixed;
    height: calc(100% - 70px);
    overflow: scroll;
    bottom: 0px;
    margin: -9px;
    border-top-right-radius: 30px;
    border-top-left-radius: 30px;
    padding-top: 15px;
    padding-bottom: 100px;
}
   }
</style>
<style>
   .mobile-checkout{
   display: flex;
   width: 100%;
   flex-direction: column;
   -webkit-box-pack: center;
   justify-content: center;
   padding:20px;
   }
   .mobile-title {
   font-size: 16px;
   line-height: 20px;
   padding: 10px 0px 0px;
   color: rgb(27, 33, 37);
   font-weight: bold;
   }
   .checkout-page {
   width: 80%;
   margin: auto;
   }
   .checkout-title {
   display: flex;
   width: 100%;
   }
   .xFzRD {
   font-size: 16px;
   font-weight: bold;
   line-height: 50px;
   border-bottom: 1px solid rgb(234, 234, 234);
   }
   .checkout-title-img {
   height: 14px;
   margin: -3px 0px 0px 5px;
   }
   .checkout-input {
   display: flex;
   }
   .eUMvxR {
   flex: 1 1 0%;
   }
   .checkout-input-label {
   font-size: 11px;
   line-height: 11px;
   color: rgb(144, 161, 181);
   padding: 30px 0px 10px;
   min-height: 51px;
   font-weight:500;
   }
   .checkout-inputype {
   width: 100%;
   padding: 10px;
   font-size: 16px;
   line-height: 20px;
   background-color: white;
   border: 1px solid rgb(221, 227, 232);
   border-radius: 3px;
   }
   button, input {
   overflow: visible;
   }
   .checkout-input {
   display: flex;
   }
   .header-bg-black, .footer-area {
        display: none;
        visibility: hidden;
    }
   .cart-sidebar {
   flex: 1.5 1 0%;
   top: 106px;
   right: 0px;
   height: calc(100vh - 65px);
   overflow: scroll;
   overflow-y:hidden;
   padding-left: 20px;
   padding-top: 20px;
   border-left: 1px solid rgb(234, 234, 234);
   }
   .cart-sidebar-box {
   margin: auto;
   }
   .cart-box {
   padding: 10px 0px;
   margin-bottom: 20px;
   }
   .cart-title {
   color: rgb(27, 33, 37);
   font-size: 14px;
   line-height: 14px;
   cursor: pointer;
   position: relative;
   z-index: 150;
   font-weight: bold;
   margin-bottom: 15px;
   }
   .cart-item {
   overflow: scroll hidden;
   white-space: nowrap;
   padding: 10px 0px;
   margin: 0px 10px;
   }
   .cart-box-start{
   background-color: white;
   width: 80%;
   display: inline-block;
   margin-right: 10px;
   padding: 5px;
   }
   .cart-box-img {
   position: relative;
   height: 75px;
   width: 75px;
   }
   .cart-img {
   position: absolute;
   width: 100%;
   height: 100%;
   top: 0px;
   left: 0px;
   object-fit: cover;
   }
   .cart-itembox {
   background-color: white;
   width: 80%;
   display: inline-block;
   margin-right: 10px;
   padding: 5px;
   }
   .item-name {
   font-size: 12px;
   font-weight: bold;
   white-space: pre-wrap;
   }
   .item-size {
   color: rgb(120, 137, 149);
   font-size: 11px;
   width: calc(100% - 10px);
   top: 5px;
   left: 10px;
   line-height: 1.71;
   }
   .item-price {
   color: rgb(120, 137, 149);
   font-size: 11px;
   position: absolute;
   width: calc(100% - 10px);
   bottom: 5px;
   left: 10px;
   line-height: 1.71;
   }
   .price {
   color: rgba(0, 0, 0, 0.6);
   padding-top: 10px;
   font-size: 14px;
   z-index: 50;
   }
   .total-item-price {
   color: rgb(0, 0, 0);
   padding-top: 15px;
   }
   /* width */
   ::-webkit-scrollbar {
   height:4px;
   }
   ::-webkit-scrollbar-track {
   background:  rgba(206, 206, 206, 0.6);
   }
   ::-webkit-scrollbar-corner {
   background: lightgrey;
   }
   ::-webkit-scrollbar-thumb {
   background: lightgrey;
   }
   ::-webkit-scrollbar-thumb:hover {
   background: lightgrey;
   }
   
      .footer-area {
     /*visibility: hidden; */
    display: none;
}

.nice-select .list {
    z-index:9999999 !important;
}

  .checkout-input-label1 {
    font-size: 11px;
    line-height: 11px;
    color: rgb(144, 161, 181);
     padding: 0px 0px 0px !important; 
     min-height: auto !important; 
    font-weight: 500;
}
</style>
<?php  
$cpage='shipping';
include('includes/checkout_header.php');
?>
<section class="checkout-area" style="padding:0px">
            <!--<---------------- MOBILE VIEW STEPER ------------->
        <div class="d-block d-md-none">
            <div class="chckout-mobile-header">
                <div class="row">
                    <div class="col-sm-7 col-7">
                       <h6 style="display:flex;">  <a href="<?= base_url()?>checkout" style="color:black;"><i class="fas fa-chevron-left"></i> </a> <span class="ml-30">Shipping Details </span> </h6>
                    </div>
                    <div class="col-sm-5 col-5">
                       <span class="text-muted text-right" style="float:right !important;">Step 2/4</span>
                    </div>
                </div>
            </div>
        </div>
   <!--<hr>-->
   <div class="container">
      <!--<---------------- DESTOP VIEW STEPER ------------->
      

      <!--<---------------- CODE ------------->
      <div class="row">
         <div class="col-md-8">
            <!--<h4 class="d-none d-md-block mt-20" style=""><span style="display:flex !important;"> <a href="<?= base_url()?>checkout" style="color:black; margin-right:10px; "><i class="fas fa-chevron-left"></i> </a> SHIPPING ADDRESS <span></h4>-->
            <!--<---------------- DESTOP VIEW TITLE ------------->
            <div class=" d-none d-md-block xFzRD" style="padding: 0px 40px; font-weight: normal;">
               <span style="cursor: pointer; font-weight: bold; display: flex; align-items: center;">
                  <a href="<?= base_url()?>checkout">
                  <img src="<?= base_url()?>assets/images/left-arrow.png" style="height: 19px; margin-right: 10px;">
                  </a>
                  SHIPPING ADDRESS
                  <!--<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC4AAAAuCAMAAABgZ9sFAAAAOVBMVEVHcEx+1CGA5jOA2SaB1iJ+1CF/1SF+1CF+0yJ/1SGA0yJ+0yH////8/vqj4GCs42+z5Xzx+ubo99cFEEQCAAAAC3RSTlMA3AUUQ+5X0rWLpPPJ3vMAAAEMSURBVEjHldbbsoMgDAXQgNx3FO3/f+x5aD3DXbPfOrO0JRBSoibaxKAsYFWIRtMy2iWLIja5xRNOoYtyE2w8hvFmpCOmiR3eAhYJW6M9lvGbRDc+4DHh1SoH6zV4lbue/h33v73EyzgiIq3ecqWfX35c11G+Pi113pmv+0Mi0napmQtu9bqKmZl5z0Uto0Ajrva/0wg0L+PZaSiyAg1LVY0/n2OlgYpfzPtR6qP9yurHXP9kom211HyjiYaqC/ljM43QbNMXzjRiewhO/maoYbojdi601f0BPqcaadQeuWiIvvuEzSdsbenFIb2WhJee9EqVXtj6yat6fGjZsJGOMvGglI5h8ZB//gvxB6jfSCbZ5sgXAAAAAElFTkSuQmCC" class=" checkout-title-img">-->
               </span>
            </div>
            <!--<---------------- MOBILE VIEW TITLE ------------->
            <div class=" mobile-checkout d-block d-md-none"><br><br>
               <div class="mobile-title">CHOOSE SHIPPING ADDRESS</div>
            </div>
            <!--<---------------- CODE ------------->
            <div class="desktop-padding">
                <?php if(count($location) > 0){
                foreach($location as $l):
                ?>
                
               <div class="card shadow-sm mt-2">
                  <div class="card-body">
                     <span class="address">
                        <?= $l->Name; ?>
                        <span style="float:right !important" class="btn btn-primary" data-toggle="modal" data-target="#editaddress<?= $l->Name; ?>" ><i class="fas fa-edit" style="margin-right:10px;"></i>Edit</span>
                     </span>
                     <br>
                     <span class="address"><?= $l->house_no." , ".$l->city." , ".$l->state." , ".$l->pincode?></span><br>
                     <span class="address">Tel:<?= $l->Phone?></span>
                     <div class="form-check custum-radio form-check-inline1 pl-0 mt-10">
                        <!--<input class="form-check-input" checked type="radio" name="inlineRadioOptions" id="deliver_address" value="deliver_address">-->
                        <!--<label class="form-check-label custum-select-radio1" for="deliver_address" style="margin-left:0px;border-radius:30px;">-->
                        <!--DELIVER TO THIS ADDRESS-->
                        <!--</label>-->
                        
                        <!--mobile link-->
                         <a href="<?= base_url()?>payment_method/<?= $l->Id?>"  class="form-check-label custum-select-radio1 hidden-xs" style="margin-left:0px;border-radius:30px;">DELIVER TO THIS ADDRESS</a>
                    <!--mobile link-->
                        
                        <a href="<?= base_url()?>order_summery/<?= $l->Id?>"  class=" visible-xs  form-check-label custum-select-radio1" style="margin-left:0px;border-radius:30px;">DELIVER TO THIS ADDRESS</a>
                     </div>
                  </div>
                 </div>
                <!--edit Model-->
    <div class="modal fade sizeGuideModal" id="editaddress<?= $l->Name?>" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true"><i class="fas fa-times"></i></span>
         </button>
         <div class="modal-sizeguide">
            <form action="<?= base_url()?>Checkout/shipping/" method="post" class="needs-validation" novalidate>
               <div class="row" id="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <label> NAME <span class="required"></span></label>
                        <input type="text" name="name" value="<?= $l->Name?>" class="form-control" readonly required>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <label> CONTACT NUMBER <span class="required"></span></label>
                        <input type="number"  name="contact_number" value="<?= $l->Phone?>" class="form-control" readonly required>
                     </div>
                  </div>
                  <!--<div class="col-lg-6 col-md-6">-->
                  <!--   <div class="form-group">-->
                  <!--      <label> HOUSE/FLAT NUMBER<span class="required"></span></label>-->
                  <!--      <input type="text"  name="house_number" value="name" class="form-control">-->
                  <!--   </div>-->
                  <!--</div>-->
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <center>
                           <button class="btn btn-primary" style="margin-top:29px;"><i class="fa fa-crosshairs" aria-hidden="true" style="margin-right:15px;"></i>DETECT LOCATION</button>
                        </center>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <label> ADDRESS <span class="required"></span></label>
                        <input type="text"  name="address" value="<?= $l->house_no?>" class="form-control" required>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <label> CITY <span class="required"></span></label>
                        <input type="text"  name="city" value="<?= $l->city?>" class="form-control" required>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <label> PIN CODE <span class="required"></span></label>
                        <input type="text" max-length="6" min-length="6" pattern="[0-9]{1}[0-9]{5}"  name="pincode" value="<?= $l->pincode?>" class="form-control" required>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <label> STATE <span class="required"></span></label >
                        <div class="select-box">
                            <!--<input type="text" name="state"  class="form-control"value=" <?= $l->state?>">-->
                          <select name="state" id="state" class="form-control" required>
                              <option value="<?= $l->state?> "><?= $l->state?></option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
</select>
                        </div>
                     </div>
                  </div>
                  <button  type =" submit"class="btn btn-primary view_more" name="update" value="<?= $l->Id?>" style="margin-top:29px;">UPDATE ADDRESS</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
                <!--edit model  end-->
                 
                 
                 
                  <?php endforeach;?>
                   <br>
               <a href="" data-toggle="modal" data-target="#addaddress" >
               <!--<a href="<?= base_url()?>payment_method">-->
                   <button class="btn btn-primary"><i class="fas fa-plus-square" style="margin-right:10px;"></i> ADD  ADDRESS</button>
                   </a>
                  <?php }else{?>
               <form action="<?= base_url()?>Checkout/shipping/" method="post" class="needs-validation" novalidate>
               <div class="row" id="row">
                  <!--<div class="col-lg-12 col-md-12">-->
                  <!--   <div class="form-group">-->
                  <!--      <label class="checkout-input-label checkout-input-label1"> NAME <span class="required"></span></label>-->
                  <!--      <input type="text" name="name" class=" form-control checkout-inputype" required>-->
                  <!--   </div>-->
                  <!--</div>-->
                 
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="checkout-input-label checkout-input-label1"> ADDRESS <span class="required"></span></label>
                        <input type="text"  name="address" class="form-control checkout-inputype" required>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="checkout-input-label checkout-input-label1"> CITY <span class="required"></span></label>
                        <input type="text"  name="city" class="form-control checkout-inputype" required>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="checkout-input-label checkout-input-label1"> PIN CODE <span class="required"></span></label>
                        <input type="text" pattern="[0-9]{1}[0-9]{5}" min-length="6" max-length="6" name="pincode" class="form-control checkout-inputype" required>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class=" checkout-input-label checkout-input-label1"> STATE <span class="required"></span></label>
                      
                           <select class="form-control " name="state" required>
                               <option value="">Select State</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                     
                     </div>
                  </div>
                  
                   <div class="col-lg-12">
                  <button type="submit" value="1"  name="save"class="btn btn-primary btn-block" style="margin-top:30px;">SAVE ADDRESS</button>
                  </div>
               </div>
            </form>
            <?php }?>
               <!--</div>-->
              
            
            </div>
         </div>
         <div class="col-md-4 d-none d-md-block">
            <?php include('includes/checkout_sidebar.php'); ?>
         </div>
      </div>
   </div>
</section>


 <script> 
    var x =document.getElementById('output'); 
    function getLocation(){
        if(navigator.geolocation){ 
            navigator.geolocation.getCurrentPosition(showPosition);
        }
      x.innerHTML="Browser not Supporting"; 
    } 

    function showPosition(position){
        
         x.innerHTML+ "latitude= " + position.coords.latitude; 
         x.innerHTML+ "Longitude"+ position.coords.longitude ;

    var locAPI ="http://maps.googleapis.com/maps/api/geocode/json?latlng="+ position.coords.latitude+","+ position.coords.longitude+"&sensor=true" 
    } 
</script>
<?php include('includes/footer.php')?>
<!--<---------------- MOBILE VIEW BUTTON ------------->
<div class="wishlist-compare-btn d-block  d-md-none" style="position: sticky; top:0; left:0; right:0; bottom:0; padding:20px;background:white; z-index:99999!important; ">
   <center>
      <!--<a href="<?= base_url()?>order_summery/" class="btn btn-light btn-rounded btn-block view_more" style="background:black !important;color:white !important;padding:14px;font-size:21px;  "> SAVE AND PROCEED</a>-->
   </center>
</div>
<!--<---------------- ADD ADDRESS MODEL ------------->
<div class="modal fade" id="addaddress" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered  " role="document">
      <div class="modal-content model-fixed">
         <h5 style="padding:10px; border-bottom:1px solid rgb(144, 161, 181)" >ADD NEW ADDRESS <span style="float:right !important;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fas fa-times"></i></span>
            </button>
            </span>
         </h5>
         <div class="modal-sizeguide" style="padding:10px;">
            <form action="<?= base_url()?>Checkout/shipping/" method="post" class="needs-validation" novalidate>
               <div class="row" id="row">
                  <!--<div class="col-lg-12 col-md-12">-->
                  <!--   <div class="form-group">-->
                  <!--      <label class="checkout-input-label checkout-input-label1"> NAME <span class="required"></span></label>-->
                  <!--      <input type="text" name="name" class=" form-control checkout-inputype" required>-->
                  <!--   </div>-->
                  <!--</div>-->
                 
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="checkout-input-label checkout-input-label1"> ADDRESS <span class="required"></span></label>
                        <input type="text"  name="address" class="form-control checkout-inputype" required>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="checkout-input-label checkout-input-label1"> CITY <span class="required"></span></label>
                        <input type="text"  name="city" class="form-control checkout-inputype" required>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class="checkout-input-label checkout-input-label1"> PIN CODE <span class="required"></span></label>
                        <input type="text" pattern="[0-9]{1}[0-9]{5}" min-length="6" max-length="6" name="pincode" class="form-control checkout-inputype" required>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label class=" checkout-input-label checkout-input-label1"> STATE <span class="required"></span></label>
                      
                           <select class="form-control " name="state" required>
                               <option value="">Select State</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                <option value="Daman and Diu">Daman and Diu</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Lakshadweep">Lakshadweep</option>
                                <option value="Puducherry">Puducherry</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                     
                     </div>
                  </div>
                  
                   <div class="col-lg-12">
                  <button type="submit" value="1"  name="save"class="btn btn-primary btn-block" style="margin-top:30px;">SAVE ADDRESS</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>



</div>
       <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/js/popper.min.js"></script>
        <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
        <script src="<?=base_url()?>assets/js/parallax.min.js"></script>
        <script src="<?=base_url()?>assets/js/slick.js"></script>
        <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.nice-select.min.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.meanmenu.js"></script>
        <script src="<?=base_url()?>assets/js/ion.rangeSlider.min.js"></script>
        <script src="<?=base_url()?>assets/js/form-validator.min.js"></script>
        <script src="<?=base_url()?>assets/js/contact-form-script.js"></script>
        <script src="<?=base_url()?>assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="<?=base_url()?>assets/js/comero-map.js"></script>
        <script src="<?=base_url()?>assets/js/main.js"></script>
  <script>
    (function () {
  'use strict'
 var forms = document.querySelectorAll('.needs-validation')
 Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})();

</script>