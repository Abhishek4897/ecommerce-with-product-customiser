
<style>
    .sizeGuideModal .modal-content .modal-sizeguide{
        text-align:left;
    }
    .modal-sizeguide label{
            color: rgb(144, 161, 181);
            font-size: 11px;
            line-height: 14px;
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
    .nice-select{
        padding-top:10px;
    }
</style>
<?php $loaction = $this->User_model->userlocation(); ?>
<div class="col-lg-8 col-md-12">
   <div class="login-content">
      <div class="row d-block d-xs-block d-sm-none d-md-none d-lg-none d-xl-none">
            <div class="col-md-12 text-center">
                <span class="navigate_header"> <a href="<?=base_url('user/user_panel')?>" class="text-black"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp; Addresses </a> </span>
            </div>
        </div>
          
         
      
      <div class="card shadow-sm">
          
         <div class="card-body">
             <?= $this->session->flashdata('location')?>
             <?php  if(count($location)>0){
             $i = 1;foreach($location as $l):?>
             <div class="row" id="shipping_address<?= $i?>">
               <div class="col-md-12">
                  <span class="shipping_name"><?= $l->Name?></span> <span class="trash_button" ><a href ="<?= base_url()?>User/deleteloaction/<?= $l->Id?>"class="delete" style="color:red"><i class="fa fa-trash-alt"></i></a></span><br>
                  <span class="shipping_address"><?= $l->house_no ." ".$l->city." ".$l->state." ".$l->pincode." "  ?></span></br>
                  <span class="shipping_address">Tel- <?= $l->Phone?></span>
               </div>
               <div class="col-md-6 mt-15">
      <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#editaddress<?= $i?>"   aria-expanded="false" aria-controls="collapseExample" style="padding: 12px 10px;">
                       Update
                  </button>
               </div>
            </div>
            
        <?php $i++; endforeach;?>
        <?php }else{?>
        <div> <img src="<?= base_url()?>uploads/no address.png" style="height:auto;width:50%;margin-left:20%">
        <br>
        <center>
            <p>Please Add Shipping Address.</p>
        </center>
        </div>
        <?php }?>
         </div>
        </div>
      <div class="row mt-15 ">
          <div class="col-md-12">
              
              <button class="btn btn-primary btn-block" type="button" data-toggle="modal" data-target="#editaddress" aria-expanded="false" aria-controls="collapseExample" style="padding: 12px 10px;">
                        + Add New Address
                  </button>
          </div>
          </div>
          <div class="collapse" id="collapseExample">
              <div class="card card-body mt-3">
                <form action="<?base_url()?>/User/shipping_details/" >
                   <div class="row">
                      <div class="col-md-6">
                         <div class="form-group">
                            <label class="label_details">Address</label>
                            <input type="text" class="form-control" placeholder="Enter your Address"  name="address">
                         </div>
                      </div>
                      <div class="col-md-6">
                         <div class="form-group">
                            <label class="label_details">City</label>
                            <input type="text" class="form-control" placeholder="Enter your City"  name="city">
                         </div>
                      </div>
                      <div class="col-md-6">
                         <div class="form-group">
                            <label class="label_details">State</label>
                            <input type="text" class="form-control" placeholder="Enter your State "  name="state">
                         </div>
                      </div>
                      <div class="col-md-6">
                         <div class="form-group">
                            <label class="label_details">Pincode</label>
                            <input type="text" class="form-control"  max-length="6" min-length="6" pattern="[0-9]{1}[0-9]{5}"  placeholder="Enter your pincode"  name="pincode">
                         </div>
                      </div>
                      <div class="col-md-6">
                         <button class="btn btn-primary" value="2" name="addlocation">Submit</button>
                      </div>
                   </div>
                </form>
              </div>
         </div>
   </div>
</div>
<div class="modal fade sizeGuideModal" id="editaddress" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
        <h5 class="modal-title">NEW SHIPPING ADDRESS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
         
         <div class="modal-sizeguide" style="text-align:none">
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
                        <label> CITY <span class="required"></span></label>
                        <input type="text"  name="city"  class="form-control" required>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <label> PIN CODE <span class="required"></span></label>
                        <input type="text"  name="pincode" max-length="6" min-length="6" pattern="[0-9]{1}[0-9]{5}"  class="form-control" required>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                     <div class="form-group">
                        <label> STATE <span class="required"></span></label>
                         
                        <div class="select-box">
                           <select class="form-control"  name="state" required>
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
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <button class="btn btn-primary view_more" name="save" value="1" style="margin-top:29px;">SAVE ADDRESS</button>
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
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Location</h5>
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
                        <label class="label_details">City</label>
                        <input type="text" class="form-control" placeholder="Enter your City"   name="city" value="<?= $l->city?>" required>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="label_details">State</label>
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
                  <div class="col-md-6">
                     <div class="form-group">
                        <label class="label_details">Pincode</label>
                        <input type="text" max-length="6" min-length="6" pattern="[0-9]{1}[0-9]{5}" class="form-control" placeholder="Enter your Pincode" name="pincode"  value="<?= $l->pincode?>" required>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <button  type=" submit"value="<?= $l->Id?>" name="update" class="btn btn-primary">Update</button>
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