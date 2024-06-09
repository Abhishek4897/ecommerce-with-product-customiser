<?php $userdata = $this->User_model->userdata(); ?>
<style>

p, span, ul, li, body,h5{
   font-family: ProximaNova, sans-serif!important;
}

    .form-control{
    background:white !important;
    border: 2px solid #bfbebe;
    border-radius:5px;
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
@media only screen and (max-width: 600px) {
  .mobile-padding{
    padding-left:0px !important;
    padding-right:0px !important;
    overflow:hidden !important;
   }   
}
</style>
<section class="second mt-50">
    <div class="container mobile-padding">
       <div class="card border-0 mb-3" >
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="login-content">
                            <!--<div class="row d-block d-xs-block d-sm-none d-md-none d-lg-none d-xl-none">-->
                            <!--    <div class="col-md-12 text-center">-->
                            <!--        <span class="navigate_header"> <a href="<?//=base_url('user/user_panel')?>" class="text-black"><i class="fas fa-chevron-left"></i>&nbsp;&nbsp; User Details </a> </span>-->
                            <!--    </div>-->
                            <!--</div>-->
                            <div style=""><?= $this->session->flashdata('user');?></div>
                             <form action="<?=base_url()?>User/dashboard/" class="needs-validation"method="post" novalidate>
                            <h5 class="navigate">User Info </h5>
                            <!--<i class="fas fa-chevron-right"></i>-->
                            <div class="row mt-15">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label_details">Name</label>
                                        <input type="text" class="form-control"  placeholder="Enter your name" id="name" value="<?php if(isset($userdata->user_fullname)){ echo  $userdata->user_fullname;} ?>" name="name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label_details">Mobile</label>
                                        <input type="text" <?= ($userdata->user_phone!="")?'readonly=""':"" ?> class="form-control" pattern="[6-9]{1}[0-9]{9}" minlength="10" maxlength="10" 
                                          title="Please enter valid mobile number." placeholder="Enter your Mobile" id="mobile" value="<?php if(isset($userdata->user_phone)){ echo  $userdata->user_phone;} ?>" name="mobile"  required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label_details">Email</label>
                                        <input type="email" readonly pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" placeholder="Enter your Email" id="email" value="<?php if(isset($userdata->user_email)){ echo  $userdata->user_email;} ?>" name="email" required>
                                    </div>
                                </div>
                                
                            </div>
                            <br>
                            <hr style="border:1px solid #eee !important;">
                            <br>
                            <h5 class="navigate">Billing Details </h5>
                            <!--<i class="fas fa-chevron-right"></i>-->
                            <div class="row mt-15">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label_details">Address</label>
                                        <input type="text" class="form-control" placeholder="Enter your Address" value="<?php if(isset($userdata->house_no)){ echo  $userdata->house_no;} ?>" id="address" name="address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="label_details">Pincode</label>
                                        <input type="text" class="form-control" maxlength="6"  minlength="6" pattern="[0-9]{1}[0-9]{5}"  placeholder="Enter  Pincode" value="<?php if(isset($userdata->pincode)){ echo  $userdata->pincode;} ?>" id="pin" name="pincode" onkeyup="fetchdata_bypincode(this.value)" required>
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
                                        <?php foreach(getListOfStates() as $state): ?>
                                            <option value="<?= $state ?>" <?= (isset($userdata->state) && ($userdata->state==$state))?"selected":"" ?>><?= $state ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>

                                <br>
                                <div class="col-md-6">
                                    <button  type="submit" name="user_details" value="1"class="btn btn-primary checkout-button">Update</button>
                                </div>
                                
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="d5fcf1ef4e7f5f889c940c30-text/javascript"></script>


<script>

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
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
