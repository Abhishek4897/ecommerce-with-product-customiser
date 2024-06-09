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
   /*border: 2px solid #bfbebe;*/
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
   .mobile-pt10{
   padding-top: 12px !important;
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
            <div class="card  border-0 mb-3" style="margin-top:60px;">
               <br>
               <center>
                  <h5 class="font-size mt-2" style="font-weight: 600;">SIGN UP AND START DESIGNING</h5>
               </center>
               <div class="card-body">
                  <form class="needs-validation" novalidate action="<?= base_url()?>Home/registration" method="post" >
                     <?= $this->session->flashdata('message') ?>
                     <div class="form-group"> 
                        <label for="email">Email address</label>
                        <input type="email" id="email1"  name="email" class="form-control" placeholder=" Enter email address"  
                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  value="<?= (isset($_SESSION['user_id']))?designer_data()->user_email:" " ?>"  <?= (isset($_SESSION['user_id']))? "readonly":"" ?>  required autofocus> 
                        <span id="lbl_email">Please fill correct email.</span>
                     </div>
                     <label for="mobile">Mobile No</label>
                           <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">+91</div>
                            </div>
                            <input type="text" id="mobile1"  value="<?= (isset($_SESSION['user_id']))?designer_data()->user_phone:'' ?>"  <?= (isset($_SESSION['user_id']))? "readonly":"" ?>  onkeypress="if(this.value.length>9)return false;" max-length="10" name="mobile" pattern="[6-9]{1}[0-9]{9}" class="half-rounded form-control" placeholder="Enter mobile number" required autofocus>
                          </div>
                     
                       
                       
                        <!--<input type="text" pattern="[6-9]{1}[0-9]{10}"  min-length="10" max-length="10" id="mobile"  value="<?= (isset($_SESSION['user_id']))?designer_data()->user_phone:'' ?>"  <?= (isset($_SESSION['user_id']))? "readonly":"" ?>   name="mobile"-->
                        <!--                        class="form-control"    placeholder=" Enter Mobile No." required autofocus> -->
                        <span id="lbl_mobile">Please fill correct mobile no.</span>
                   
                     <!--<div class="form-group"> -->
                     <!--    <div class="input-group-prepend">-->
                     <!--        <div class="input-group-text"></div>-->
                     <!--    </div>-->
                     <!--</div>-->
                     <?php if(!isset($_SESSION['user_id'])) { ?>
                     <div class="form-group mt-2"> 
                        <label for="password1">Create a password</label>
                        <input type="password" id="password1" name="password" pattern=".{6,}" class="form-control"  title="password  should have minimum 6  characters" oninput="validatePass()" placeholder="Create a password" required> 
                        <span id="passwords"></span>
                     </div>
                     <div class="form-group"> 
                        <label for="confirmpassword">Confirm password</label>
                        <input type="password" id="confirmpassword" name="confirmpassword" pattern=".{6,}" oninput="validatePass()" class="form-control" placeholder="Confirm password" required> 
                        <span id="confirmpasswords"> </span>
                     </div>
                     <?php } ?>
                     <div class="form-group"> 
                        <label for="usrname">Name</label>
                        <input type="text" id="usrname" name="name" pattern1="[a-zA-Z0-9]{}" value="<?= (isset($_SESSION['user_id']))?designer_data()->user_fullname:'' ?>"  class="form-control" placeholder="Name" required> 
                     </div>
                     <div class="form-group"> 
                        <label for="brand">E-Shop</label>
                        <input type="text" id="brand" name="brand" class="form-control" placeholder="E-Shop name" required> 
                     </div>
                     <!--<small> This will show on your profile</small>-->
                     <div class="form-group"> 
                        <label for="inputPassword">Date of birth</label>
                        <input type="text" id="inputPassword" name="dob" placeholder="Date of Birth"  class="form-control datapicker"  required readonly> 
                     </div>
               
                     <div class="form-group">
                        <label for="inputPassword">Gender</label>
                        <div class="form-group col-md">
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
                     <button class="btn btn-block  btn-primary  text-uppercase checkout-button" name="register" value="1" id="sbtn" type="submit">Sign Up</button>
                  </form>
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
     function validatePass(){
       var pass1 = $("#password1").val();
       var pass2 = $("#confirmpassword").val();
        if(pass1.length < 6){
           $("#password1").css("border","2px solid red");
        }else{
            $("#password1").css("border","2px solid green");
       if(pass1 == pass2 && pass2.length ){
             $("#confirmpassword").css("border","1px solid green");
           
            document.getElementById("sbtn").disabled = false;
       }else{
          document.getElementById("sbtn").disabled = true;
           $("#confirmpassword").css("border","1px solid red");
    
           
       }
        }
   }
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
   })();
</script>
<script>
  
   
   // function validateForm() {
   //         var phone = document.getElementById("mobile").value;
   //         var email = document.getElementById("email").value;
   //         var password = document.getElementById("password").value;
   //         var confirmpassword = document.getElementById("confirmpassword").value;
   //         var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   //         if (reg.test(email) == false){
             
   //             $('#lbl_email').show();
   //              swal("Please fill correct E-mail address.",{
   //                           icon: "danger",
   //                           button: false,
   //                           timer: 1200,
   //                         });
   //             return false;
   //         } 
   //         else{
   //             $('#lbl_email').hide();
   //         }
   //         if(phone.length==10) {
   //                 $('#lbl_mobile').hide();
   //                 return true;
   //         }
   //         else {
   //           $('#lbl_mobile').show();
   //           swal("Please fill correct Correct Mobile number.",{
   //                           icon: "danger",
   //                           button: false,
   //                           timer: 1200,
   //                         });
   //             return false;
   //         }
   //         if (password.length<6){
   //             alert('fail_password');
   //             $('#lbl_password').show();
   //             swal("Please fill password Minimum six digits.",{
   //                           icon: "danger",
   //                           button: false,
   //                           timer: 1200,
   //                         });
   //               return false;
   //         }
   //         else{
   //             $('#lbl_password').hide();
   //              return true;
   //         }
   //          if (password==confirmpassword){
   //              $('#lbl_confirmpassword').hide();
   //              return true;
              
   //         }
   //         else{
   //             $('#lbl_confirmpassword').show();
   //             swal("password not match.",{
   //                           icon: "danger",
   //                           button: false,
   //                           timer: 1200,
   //                         });
   //               return false;
   //         }
   //         return false; 
   //     }
   $(document).ready(function () {
    //called when key is pressed in textbox
    $("#mobile").keypress(function (e) {
       //if the letter is not digit then display error and don't type anything
       if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          //display error message
          $("#errmsg").html("Digits Only").show().fadeOut("slow");
                 return false;
      }
     });
   });
</script>