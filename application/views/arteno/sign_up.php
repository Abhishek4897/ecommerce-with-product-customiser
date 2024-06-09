<?php include('includes/header.php')?>
<style>
.pt-20{
    padding-top:20px;
}
:root {
    --input-padding-x: 1.5rem;
    --input-padding-y: .75rem
}

body {
    background: linear-gradient(to right, #0a346d, #1598ef)
}
.section-title h2, h4, h1, h3, h6 ,span,p ,body{
    font-family:Montserrat, sans-serif !important;
}
.card-signup {
    border: 0;
    border-radius: 0rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1)
}

.card-signup .card-title {
    margin-bottom: 2rem;
    font-weight: 300;
    font-size: 1.5rem
}

.card-signup .card-body {
    padding: 2rem
}

.form-signin {
    width: 100%
}

.form-signin .btn {
    font-size: 91%;
    border-radius: 0rem;
    letter-spacing: .1rem;
    font-weight: bold;
    padding: 1rem;
    transition: all 0.2s
}

.form-label-group {
    position: relative;
    margin-bottom: 1rem
}

.form-label-group input {
    height: auto
}

.form-label-group>input,
.form-label-group>label {
    padding: var(--input-padding-y) var(--input-padding-x)
}

.form-label-group>label {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    margin-bottom: 0;
    line-height: 1.5;
    color: #495057;
    border: 1px solid transparent;
    border-radius: .25rem;
    transition: all .1s ease-in-out
    font-size:20px;
}

.form-control{
    background:white !important;
    border: 1px solid #bfbebe !important;
    border-radius:5px;
}

.form-control:focus {
    box-shadow: 10px 0px 0px 0px #ffffff !important
}

.btn-google {
    color: white;
    background-color: #ea4335
}

.btn-facebook {
    color: white;
    background-color: #3b5998
}

.border{
    border:1px solid black;
}
label {
    display: inline-block;
    margin-bottom: .5rem;
    font-weight: 600;
}

@media only screen and (min-width: 900px) {
 .padding-left{
        padding-left:11.5rem;
    }
    .font-size{
        font-size:1.7rem;
    }
}

@media only screen and (max-width: 600px) {
    .padding-left{
        padding-left:4.5rem;
    }
    
    .form-signin .btn {
        font-size:86% !important;
    }
    
    .custom-control-inline {
    margin-right: 0.2rem !important;
}
    
}

.checkout-button{
      border-radius: 0px !important;
    color: b78b2a !important;
    font-size: 17px;
    font-weight: 700;
    color: black;
    background-color: #111 !important;
}
</style>
           
<section class="pt-20" style="padding-top:20px!important;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7 col-lg-7 mx-auto">
                <div class="card  mb-3 mt-3 border-0" style="margin-top: 60px!important;"><br>
                    <center><h5 class="font-size mt-2" style="font-weight: 600;">SIGN UP<!-- AND START DESIGNING --></h5></center>
                    <div class="card-body">
                        
                        
                        <form class="form-signin needs-validation" novalidate action="" method="post" onsubmit="return validateForm()">
                            <?= $this->session->flashdata('message') ?>
                            <span id="error"></span>
                            <div class="form-group"> 
                                <label for="email">Email address</label>
                                <input type="email" id="email1" name="email" value="<?= $this->session->flashdata('social_email'); ?>" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder=" Enter email address" required autofocus> 
                                <span id="lbl_email">Please enter valid email address.</span>
                            </div>
                            <label for="mobile">Mobile number</label>
                             <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">+91</div>
                            </div>
                            <input type="text" id="mobile" name="mobile" pattern="[6-9]{1}[0-9]{9}" value="<?= $this->session->flashdata('social_mobile'); ?>"  maxlength="10" minlength="10" class="half-rounded form-control" placeholder=" Enter mobile number" required autofocus>
                          </div>
                           
                                <span id="lbl_mobile">Please enter valid mobile no.</span>
                            
                            <div class="form-group"> <br>
                                <label for="password">Create a password</label>
                                <input type="password" id="password1" name="password" pattern=".{6,}" autocomplete="off" class="form-control" placeholder="Create a password" required> 
                                <span id="lbl_password">Please enter minimum six alphanumeric password.</span>
                            </div>
                            <div class="form-group"> 
                                <label for="confirmpassword">Confirm password</label>
                                <input type="password" id="confirmpassword" name="confirmpassword" autocomplete="off"  class="form-control" placeholder="Confirm password" required> 
                                <span id="lbl_confirmpassword">Password not matched.</span>
                            </div>
                            <div class="form-group"> 
                                <label for="usrname">Name</label>
                                <input type="text" id="usrname" name="name"  value="<?= $this->session->flashdata('social_name'); ?>" class="form-control" placeholder="Name" required> 
                            </div>
                            <!--<small> This will show on your profile</small>-->
                            <div class="form-group"> 
                                <label for="dob">Date of Birth</label>
                                <input type="text" id="dob" name="dob" placeholder="Date of Birth" class="form-control datapicker" readonly required> 
                            </div>
                            <div class="form-group"> 
                                <label for="inputPassword">Gender</label>
                                <div class="form-group ">
    			                    <div class="mt-1" style="display:flex;">
                                        <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="gender" value="Male" checked="" class="custom-control-input">
                                        <div class="custom-control-label">Male</div>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="gender" value="Female" class="custom-control-input">
                                        <div class="custom-control-label">Female</div>
                                        </label>
                                        <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" name="gender" value="Non-binary" class="custom-control-input">
                                        <div class="custom-control-label">Non-binary</div>
                                        </label>
                                    </div> 
                                </div>
                            </div> 
                            
                            <input type="hidden" name="ref" value="login"/>
                            <br>
                            <button class="btn btn-block  btn-primary  text-uppercase checkout-button" name="register" value="1" type="submit">Sign Up</button>
                        </form>
                        <div class="" style="text-align:center;">
                    Already registered ?<a class="mr-2 " style="display:inline" data-toggle="modal" data-target="#loginotpmodal"> Login</a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/validate.php')?>
<?php include('includes/footer.php')?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
function validateForm() {
        var phone = document.getElementById("mobile").value;
        var email = document.getElementById("email1").value;
        var password = document.getElementById("password1").value;
        var confirmpassword = document.getElementById("confirmpassword").value;
        var name = document.getElementById("usrname").value;
        var dob = document.getElementById("dob").value;
        var gender = $('[name="gender"]:checked').val();
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        var phonr_reg = /[6-9]{1}[0-9]{9}/;
        var pass_reg = /.{6,}/;
        if (reg.test(email) == false){
           
            // $('#lbl_email').show();
             swal("Please enter valid email address.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        });
          
        } 
        
     else if(phonr_reg.test(phone) == false ) {
        //  $('#lbl_mobile').show();
        
                  swal("Please enter valid mobile number.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        });
            return false;
        }
    else if (pass_reg.test(password) == false){
            // $('#lbl_password').show();
            swal("Please enter minimum six alphanumeric password.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        });
            
              return false;
        }
    else if(password.trim() != confirmpassword.trim() ){
        swal(" Password is not matched.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        });
           
                  return false;
    }
    //  else if(gender=""){
    //           swal("", " Please select gender.", "warning");
    //               return false;
    // }
     else if(name==undefined){
         swal("Please enter name.",{
                          icon: "warning",
                          button: false,
                          timer: 1200,
                        });
        
                  return false;
    }
    }
   // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
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
})()
</script>
