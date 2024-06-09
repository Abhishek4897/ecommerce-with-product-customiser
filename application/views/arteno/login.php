<?php include('includes/header.php')?>
           
           <style>
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
    border: 1px solid #bfbebe !important;
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
           

           
           <section>
              <div class="container">
 
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <div style="text-align:center !important">
                   <img src="<?= base_url()?>assets/arteno1.png" alt="logo" style="height: 60px; margin-top: -4px; text-align:center;">
                   </div>
                   <br>
                    <form class="form-signin" >
                        <div style="padding-left:30px; padding-right:30px;">
                         <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit" style="color:white !important;border-radius:5px;"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
                         <button class="btn btn-lg  btn-block text-uppercase border" type="submit" style="border-radius:5px;" ><i class="fab fa-google mr-2"></i> Sign in with Google</button>
                        <button class="btn btn-lg btn-block text-uppercase border" type="submit" style="border-radius:5px;">Continue With phone number</button>
                         </div>
                         <hr class="my-4"> 
                        <div class="form-group"> 
                        <label for="inputEmail">Email address or username</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address or username" required autofocus> 
                         
                        </div>
                        <div class="form-group"> 
                        <label for="inputPassword">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> 
                         </div>
                         <div style="display:flex !important;">
                             <a style="font-size:10px;">Forgot your Password ?</a>
                        <div class="custom-control custom-checkbox mb-3 padding-left" style="float:right !important; font-size:10px;"> 
                        <input type="checkbox" class="custom-control-input" id="customCheck1"> <label class="custom-control-label" for="customCheck1">Remember password?</label> 
                        </div>
                        </div>
                        <center> <button class="btn btn-md btn-primary  text-uppercase checkout-button" type="submit">login</button></center>
                        <hr>
                        
                        <center>Don't have account? <br>
                        <button class="btn btn-md btn-primary text-uppercase checkout-button" type="submit" style="margin-top:10px;">Signup for Arteno</button>
                       </center>
                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
           </section>
<?php include('includes/footer.php')?>