<?php $userdata = $this->User_model->userdata(); ?>
<style>
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
.update-password lable{
    font-family: ProximaNova, sans-serif!important;
}
@media only screen and (max-width: 600px) {
#container{
    padding-right:0px;
    padding-left:0px;
    overflow:hidden !important;
}
}
</style>
<section class="second mt-50">
    <div class="container" id="container">
       <div class="card border-0 mb-3" >
           <div class="card-body update-password">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="login-content">
                            <form action="" method="post" onsubmit="return check_password()">
                                <h5 class="navigate ff">Reset password </h5>
                                <div style="position:;left:20%"><?= $this->session->flashdata('message');?></div>
                                <div class="row mt-15">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="label_details">Old Password</label>
                                            <input type="password" class="form-control" placeholder="Enter your old password"  name="password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="label_details">New Password</label>
                                            <input type="password" class="form-control" placeholder="Enter your new password" id="new_password"  name="new_password" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="label_details">Confirm Password</label>
                                            <input type="password" class="form-control" placeholder="Enter your confirm password" id="confirm_password"  name="confirm_password" required>
                                            <span id="lbl_error" style="color:red;"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button  type="submit" name="update" value="1"class="btn btn-primary checkout-button">Update</button>
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
<script>
   function check_password(){
      var new_password = document.getElementById("new_password").value;
      var confirm_password = document.getElementById("confirm_password").value;
      if(new_password==confirm_password){
           return true;
      }
      else{
         $('#lbl_error').html('Password not match');
          $('#lbl_error').show();
          return false;
      }
      
   }
</script>