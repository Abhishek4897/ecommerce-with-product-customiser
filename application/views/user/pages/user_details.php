<?php $userdata = $this->User_model->userdata(); ?>

<div class="col-lg-8 col-md-12">
    <div class="login-content">
        <div class="row d-block d-xs-block d-sm-none d-md-none d-lg-none d-xl-none">
            <div class="col-md-12 text-center">
                <span class="navigate_header"> <a href="<?=base_url('user/user_panel')?>" class="text-black"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp; User Details </a> </span>
            </div>
        </div>
    <div class="card shadow-sm ">
            <div class="card-body">
                <div style="position:absolute;left:20%"><?= $this->session->flashdata('user');?></div>
                    <form action="<?=base_url()?>User/dashboard/" class="needs-validation"method="post" novalidate>
        <span class="navigate">User Info <i class="fas fa-chevron-right"></i></span>
        <div class="row mt-15">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label_details">Name</label>
                    <input type="text" class="form-control" placeholder="Enter your name" id="name" value="<?php if(isset($userdata->user_fullname)){ echo  $userdata->user_fullname;} ?>" name="name" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label_details">Mobile</label>
                    <input type="text" class="form-control" pattern="[6-9]{1}[0-9]{9}" max-length="10" 
       title="please enter valid Mobile Number" placeholder="Enter your Mobile" id="mobile" value="<?php if(isset($userdata->user_phone)){ echo  $userdata->user_phone;} ?>" name="mobile" readonly required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label_details">Email</label>
                    <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="Enter your Email" id="email" value="<?php if(isset($userdata->user_email)){ echo  $userdata->user_email;} ?>" name="email" required>
                </div>
            </div>
            
        </div>
        <hr/>
        <span class="navigate">Billing Details <i class="fas fa-chevron-right"></i></span>
        <div class="row mt-15">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label_details">Address</label>
                    <input type="text" class="form-control" placeholder="Enter your Address" value="<?php if(isset($userdata->house_no)){ echo  $userdata->house_no;} ?>" id="address" name="address" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label_details">City</label>
                    <input type="text" class="form-control" placeholder="Enter your City"  value="<?php if(isset($userdata->city)){ echo  $userdata->city;} ?>"id="city" name="city"  required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="label_details">State</label>
                  
                            <select class="form-control"  id="state"  name="state" required>
                               <option value="<?php if(isset($userdata->state)){ echo  $userdata->state;} ?>"><?php if(isset($userdata->state)){ echo  $userdata->state;} ?></option>
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
                    <input type="text" class="form-control" max-length="6" min-length="6" pattern="[0-9]{1}[0-9]{5}"  placeholder="Enter  Pincode" value="<?php if(isset($userdata->pincode)){ echo  $userdata->pincode;} ?>" id="pin" name="pincode" required>
                </div>
            </div>
            <div class="col-md-6">
                <button  type="submit" name="user_details" value="1"class="btn btn-primary">Update</button>
            </div>
            
        </div>
    </form>
                  </div>
                </div>
  </div>
</div>
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