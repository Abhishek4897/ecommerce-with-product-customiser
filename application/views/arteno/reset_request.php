<?php include('includes/header.php')?>
<style>
:root {
    --input-padding-x: 1.5rem;
    --input-padding-y: .75rem
}
.bg-back{
    background:#F6F6F6!important;
    padding-top:60px;
}
.section-title h2, h4, h1, h3, h6 ,span,p ,body{
    font-family:Montserrat, sans-serif !important;
}
.card-signin {
    border: 0;
    border-radius: 0rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1)
}

.card-signin .card-title {
    margin-bottom: 2rem;
    font-weight: 300;
    font-size: 1.5rem
}

.card-signin .card-body {
    padding: .5rem !important;
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
    border: 2px solid #eee;
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
.checkout-button{
      border-radius: 0px !important;
    color: b78b2a !important;
    font-size: 17px;
    font-weight: 700;
    color: black;
    background-color: #111 !important;
}
.form-control{
    background:white !important;
    border: 2px solid #bfbebe;
    border-radius:5px;
}
@media only screen and (min-width: 900px) {
 .padding-left{
        padding-left:11.5rem;
    }
}

@media only screen and (max-width: 600px) {
    .padding-left{
        padding-left:4.5rem;
    }
    
    .form-signin .btn {
        font-size:86% !important;
    }
}
           </style>
<section class="bg-back">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <!--<div style="text-align:center !important">-->
                        <!--    <img src="<?= base_url()?>assets/arteno1.png" alt="logo" style="height: 60px; margin-top: -4px; text-align:center;">-->
                        <!--</div>-->
                        <h5 style="text-align:center; font-weight:600;">Reset Password</h5>
                        <br>
                        <form class="form-signin" action="" method="post" onsubmit="return check_password()">
                            <?= $this->session->flashdata('resetmessage')?>
                           <div class="form-group"> 
                                <label for="new_password">New Password </label>
                               <input type="password" class="form-control" placeholder="Enter your new password" id="new_password"  name="new_password" required>
                            </div>
                            <div class="form-group"> 
                                <label for="confirm_password">Confirm Password </label>
                                <input type="password" class="form-control" placeholder="Enter your confirm password" id="confirm_password"  name="confirm_password" required>
                        <span id="lbl_error" style="color:red;"></span> 
                            </div>
                            <center> <button class="btn btn-md btn-primary  text-uppercase checkout-button" name="update" value="1" type="submit">Submit</button></center>
                        </form>
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
<?php include('includes/footer.php')?>