<meta name="format-detection" content="telephone=no">
<style>
   .edit_icon:hover, .edit_icon:focus {
   color: green;
   border: 0px solid !important;
   outline: -webkit-focus-ring-color auto 0px !important;
   outline:none !important;
   /*-webkit-border: 0px solid;*/
   }
   a:-webkit-any-link:focus-visible {
   outline-offset: 0px !important;
   }
   a:visited{
   border:none!important;
   }
   a:visited{
   border:none!important;
   }
   a:focus-visible {
   outline: -webkit-focus-ring-color auto 0px !important;
   }
   a:focus {
   outline: -webkit-focus-ring-color auto 0px !important;
   }
   a:focus { outline: 0; }
   a {outline : none;}
   a:active, a:focus {
   outline: 0;
   border: none;
   -moz-outline-style: none;
   }
   a:visited { outline: none; }
   .no-order {
   height: 50%;
   margin:auto;
   }
   @media only screen and (max-width: 600px) {
   .shipping_name{
   font-weight:600;
   font-size:15px;
   }
   .sizeGuideModal .modal-dialog {
   padding: 10px;
   }
   .shipping_email{
   font-weight:600;
   font-size:15px;
   }
   .shipping_address{
    font-size:14px;
   } 
   .mobile-padding{
   padding-left:0px !important;
   padding-right:0px !important;
   overflow:hidden !important;
   }
   .ml-36{
   /*margin-left:7%;*/
   height:260px;
   }
   }
   @media only screen and (min-width: 900px) {
   .ml-36{
   /*margin-left:38%;*/
   height:450px;
   }
   .shipping_name{
   font-weight:600;
   font-size:19px;
   }
   .shipping_email{
   font-weight:600;
   }
   }
   .edit_icon{
   color:#111;
   }
   .delete_icon{
   color:#111;
   margin-left: 10px;
   }
   .edit_icon:hover{
   color:green;
   }
   .delete_icon:hover{
   color:red;
   }
   .sizeGuideModal .modal-content .modal-sizeguide{
   text-align:left;
   }
   .modal-sizeguide label{
   color: black;
   font-size: 11px;
   line-height: 2px;
   padding: 20px 0px 10px;
   }
   .header-title{
   color: black;
   font-weight: bold;
   font-size: 16px;
   margin: 0px 30px 10px;
   padding-top: 50px;
   }
   .sizeGuideModal .modal-content{
   padding:20px!important;
   }
   .sizeGuideModal .modal-content button.close:hover {
   color:white !important;
   }
   .nice-select{
   padding-top:10px;
   }
   .checkout-button{
   border-radius: 30px !important;
   color: b78b2a !important;
   font-size: 17px;
   font-weight: 700;
   color: black;
   background-color: #111 !important;
   }
   label {
   display: inline-block;
   margin-bottom: .5rem;
   font-size: 14px;
   font-weight: 600;
   }
   .form-control{
   background:white !important;
   border: 2px solid #bfbebe;
   border-radius:5px;
   }
   span{
   font-weight:500;
   }
   #addaddress .form-group {
   margin-bottom: 0px;
   }
   .shipping_name {
   color: black!important;
   }
   #addaddress{
       font-family: ProximaNova, sans-serif!important;
   }
   .editaddress{
       font-family: ProximaNova, sans-serif!important;
   }
   .editaddress lable{
       text-transform: uppercase;
       font-size: 11px;
   }
</style>
<?php $loaction = $this->User_model->userlocation(); ?>
<section class="second mt-50">
   <div class="container">
      <div class="row">
           <div class="col-md-12">
               <?= $this->session->flashdata('location')?>
           </div>
            <?php  if(count($location)>0){
               $i = 1;foreach($location as $l):?>
                <div class="col-md-6">
                    <div class="card shadow-sm border-0 mt-10">
                       <div class="card-body pt-2 pb-2">
                          <div class="row" id="shipping_address">
                             <div class="col-md-12 p-2">
                                <span class="shipping_name ff"><?= $l->Name?> <br class="d-xs-block d-sm-block d-lg-none d-md-none"> (Ph- <?= $l->Phone?>)</span> 
                                <span class="trash_button" style="float:right !important;display:flex; position:absolute!important; top:0; bottom:0;right:20px;">
                                <a href="javascript:void(0);" class="edit_icon editaddress1" data-toggle="modal" data-target="#editaddress<?= $i?>" ><i class="fa fa-pencil-alt" style="font-size:18px;"></i></a>
                                <a href="<?= base_url()?>User/deleteloaction/<?= $l->Id?>"  class="delete_icon" onclick="return confirm('Are you sure you want to delete this ?');"><i class="fa fa-trash-alt" style="font-size:18px;"></i></a></span><br>
                                 <span class="shipping_email onlyff"><?= $l->Email?></span>
                                 <br>
                                <span class="shipping_address onlyff" style="line-height:30px;"><?= $l->house_no ." ".$l->city." ".$l->state." ".$l->pincode." "  ?></span></br>
                              </div>
                          </div>
                       </div>
                    </div>
                </div>
            <?php $i++; endforeach;
               }else{?>
            <!--<div> <img class="ml-36"  src="<?= base_url()?>assets/images/no-shiiping-address.png" style="height:220px; width:280px; text-align:center;" >-->
            <!--<br>-->
            <!--<center>-->
            <!--    <p style="text-align: center;font-size: 14px;margin: 0px 0px;font-weight: bold;color:black">Please Add Shipping Address.</p>-->
            <!--</center>-->
            <!--</div>-->
                <div class="col-md-12">
                     <center>
                       <!--<img src="<?= base_url()?>assets/images/no-shiiping-address.png" class="ml-36" style="margin-top:0px !important;">-->
                       <p style="text-align: center;font-size: 18px;margin: 0px 0px;font-weight: bold;color:black">Please Add Shipping Address</p>
                       <!--<a href="<?= base_url()?>"> <button class="btn btn-primary"></button></a>-->
                    </center>
                </div>
           <?php }?>
            <div class="row ">
               <div class="col-md-12">
                  <!--<button class="btn btn-primary btn-block checkout-button" type="button" data-toggle="modal" data-target="#addaddress" aria-expanded="false" aria-controls="collapseExample" style="padding: 12px 10px;">-->
                  <!--          + Add New Address-->
                  <!--    </button>-->
               </div>
            </div>
         
         <div class="col-md-12" style="margin-top:20px; margin-bottom:20px;">
            <center><button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#addaddress" aria-expanded="false" aria-controls="collapseExample" style="padding: 12px 10px;">
               + Add New Address
               </button>
            </center>
         </div>
      </div>
   </div>
</section>
<div class="modal fade sizeGuideModal" id="addaddress" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content" style="padding:0px!important">
         <div class="modal-header">
            <h5 class="modal-title ff">NEW SHIPPING ADDRESS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-sizeguide p-3" style="text-align:none">
            <form action="<?= base_url()?>User/shipping_details" method="post" class="needs-validation" novalidate>
               <div class="row" id="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <label> ADDRESS <span class="required"></span></label>
                        <input type="text"  name="address"  class="form-control" required>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <label> PIN CODE <span class="required"></span></label>
                        <input type="text"  name="pincode" maxlength="6" minlength="6" pattern="[0-9]{1}[0-9]{5}"  class="form-control" onkeyup="fetchdata_bypincode(this.value)" required>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <label> CITY <span class="required"></span></label>
                        <input type="text"  name="city"  id="city" class="form-control" required>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <label> STATE <span class="required"></span></label>
                        <div class="select-box">
                           <select class="form-control" id="state" name="state" required>
                              <option value="">Select State</option>
                              <?php foreach(getListOfStates() as $state): ?>
                              <option value="<?= $state ?>"><?= $state ?></option>
                              <?php endforeach; ?>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                     <button class="btn btn-primary checkout-button view_more" name="save" value="1" style="margin-top:29px;">SAVE ADDRESS</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<!--Model-->
<?php $i = 1;foreach($location as $l):?>
<div class="modal fade sizeGuideModal" id="editaddress<?= $i?>" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-dialog">
         <div class="modal-content p-2" style="padding: 0px!important;">
            <div class="modal-header">
               <h5 class="modal-title ff" id="exampleModalLabel">UPDATE LOCATION </h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form method="post" action="<?= base_url()?>/User/shipping_details" class="needs-validation" novalidate>
                  <div class="row" >
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="label_details">Address</label>
                           <input type="text" class="form-control" placeholder="Enter your Address" value="<?= $l->house_no?>"  name="address" required>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="label_details">Pincode</label>
                           <input type="text" max-length="6" min-length="6" pattern="[0-9]{1}[0-9]{5}" class="form-control" placeholder="Enter your Pincode" name="pincode" onkeyup="fetchdata_bypincode(this.value,<?= $i?>)"  value="<?= $l->pincode?>" required>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="label_details">City</label>
                           <input type="text" class="form-control" placeholder="Enter your City" id="city_<?= $i?>"   name="city" value="<?= $l->city?>" required>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label class="label_details">State</label>
                           <select name="state" id="state_<?= $i?>" class="form-control" required>
                              <?php foreach(getListOfStates() as $state): ?>
                              <option value="<?= $state ?>" <?= (isset($l->state) && ($l->state==$state))?"selected":"" ?>><?= $state ?></option>
                              <?php endforeach; ?>
                           </select>
                        </div>
                     </div>
                     <br>
                     <div class="col-md-12">
                        <button  type=" submit"value="<?= $l->Id?>" name="update" class="btn btn-primary checkout-button">Update</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<?php  $i++; endforeach; ?>
<!--model End-->
<script>
   function update1(id){
   $("#update_address"+id).show();
   $("#shipping_address"+id).hide();
   
   }
</script>
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