<?php include('includes/header.php')?>
<style>
.main-content {
    min-height: calc(100vh - 200px);
   
}

@media only screen and (max-width: 600px) {
 .main-content {
    min-height: 60%;
  }
}

.bg-back{
    background:#F6F6F6!important;
    padding-top:60px;
}

.card-signin {
    border: 0;
    border-radius: 0rem;
    /*box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1)*/
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
                    <div class="card-body" style="padding: 1.5rem !important;">
                        
                        <h5 style="text-align:center; font-weight:600;">Forgot Password</h5>
                        <br>
                        <form class="form-signin" action="" method="post">
                            <?= $this->session->flashdata('message')?>
                           <div class="form-group"> 
                                <label for="inputEmail">Email address </label>
                                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address " required autofocus> 
                                <span class="float-right mt-1" data-toggle="modal" data-target="#loginotpmodal" style="cursor:pointer"><i class="fas fa-angle-double-left"></i> Back to login</span>
                            </div><br>
                            <center> <button class="btn btn-md btn-primary  text-uppercase checkout-button" name="forgot" value="1" type="submit">RESET MY PASSWORD </button></center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('includes/footer.php')?>