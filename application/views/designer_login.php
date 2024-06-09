<?php include('includes/header.php')?>
<style>
.required-image{
   position: absolute;
    right: 23px;
    height:25px;
    top: 30%;
}
.form-control {
    background-color: white;
    padding: 12px;
}
.desktop-border-right{
    border-right:1px solid #f5f5f5;

}
.custum-input {
    background: white;
    border: 1px solid #f5f5f5;
    border-radius: 6px;
}
.custum-select-radio {
    margin-left: 10px;
    border: 1px solid #f5f5f5;
    padding: 11px 30px;
    font-size: 14px;
    margin-bottom: 10px;
}
.custum-radio input[type='radio']:checked+label{
    background:black;
    color:white;
    /*padding:20px;*/
}
.custum-radio input[type='radio']{
    display:none;
}
.custum-select-radio1{
   margin-left:0px;
    border: 1px solid #f5f5f5;
    padding: 11px 20px;
    font-size: 14px;
}
.custum-radio1 input[type='radio']:checked+label{
    background:black;
    color:white;
    /*padding:20px;*/
}
.custum-radio1 input[type='radio']{
    display:none;
}
@media only screen and (max-width: 600px) {
 .desktop-border-right{
    border-right:0px;
}
.mobil-padding-0{
    padding:0px!important;
}
.custum-select-radio1 {
    padding: 5px 10px;
    font-size: 12px;
}
/*.required-image{*/
/*   top: 25%;*/
/*}*/
}

</style>
// <script type="text/javascript">
//     $(window).on('load', function() {
//         $('#designerregistermodal').modal('show');
//     });
// </script>
<!-- register modal if user not register modal -->
                        <!--<div class="modal fade" id="designerregistermodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="overflow-y: scroll;">-->
                        <!--  <div class="modal-dialog modal-dialog-centered modal-md custum-modal-height" role="document" style="">-->
                        <!--    <div class="modal-content" role="document">-->
                        <!--      <div class="modal-body">-->
                        <!--              <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
                        <!--              <span aria-hidden="true">&times;</span>-->
                        <!--              </button>-->
                        <!--              <div class="p-3">-->
                        <!--                    <center>-->
                        <!--                         <img src="<?= base_url()?>assets/images/artenologo.png" style="height:60px;">-->
                        <!--                     </center>-->
                        <!--                     <center><p class="mt-3" style="font-size: 15px; line-height: 19px;"><b>Customize your T-shirt Cup Mask, connect with designers and browse designer prints!</b></p></center>-->
                        <!--                     <form>-->
                        <!--                         <div class="mt-4 mb-4">-->
                        <!--                              <div class="form-group">-->
                        <!--                                <label for="name">Enter Name</label>-->
                        <!--                                <input type="text" class="form-control custum-input" id="name" value="" required>-->
                        <!--                              </div>-->
                        <!--                              <div class="form-group">-->
                        <!--                                <label for="email">Enter Email</label>-->
                        <!--                                <input type="email" class="form-control custum-input" id="email" value="" required>-->
                        <!--                              </div>-->
                        <!--                              <div class="form-group">-->
                        <!--                                <label for="mobile">Enter Mobile</label>-->
                        <!--                                <input type="number" class="form-control custum-input" id="mobile" value="" readonly>-->
                        <!--                              </div>-->
                        <!--                              <div class="form-group">-->
                        <!--                                <label for="mobile">Referral Code <small>(optional)</small></label>-->
                        <!--                                <input type="number" class="form-control custum-input" id="mobile" value="" required>-->
                        <!--                              </div>-->
                        <!--                         </div>-->
                        <!--                         <center><p class="mt-3" style="font-size: 14px; line-height: 18px;">By logging in, you are agreeing to Arteno’s privacy policy and terms of use</p></center>-->
                        <!--                           <br>-->
                        <!--                          <button type="submit"  class="btn btn-primary btn-block" style="border-radius:0px; font-size: 16px;">Submit</button>-->
                        <!--                     </form>-->
                        <!--              </div>-->
                                    
                        <!--      </div>-->
                        <!--    </div>-->
                        <!--  </div>-->
                        <!--</div>-->
<!-- register modal if user not register modal-->
 <section class="login-area ptb-60" style="background: rgb(234, 234, 234);">
     <br><br>
        <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12">
                   <div class="login-content card card-body shadow-sm">
                       <div class="row">
                           <div class="col-lg-2"></div>
                           <div class="col-lg-8">
                                    <center>
                                        <div><?= $this->session->flashdata('info')?></div>
                                         <h5 class="pt-4">Let’s get your business started!</b></h5>
                                         <p class="pl-5 pr-5 mobil-padding-0">You are just few steps away from launching your own store line. Please fill in your details to create your e-shop page:</p>
                                     </center>
                                   <form class="needs-validation" method="post" action="<?= base_url()?>Designer/registration1"  novalidate>
                                       <div class="row mt-4">
                                           <div class="col-md-6 col-lg-6 desktop-border-right">
                                                <div class="form-group">
                                                    <label>User Name <span style="color: rgb(214, 20, 20);">*</span></label>
                                                    <input type="text" class="form-control custum-input" value="" placeholder="Enter User Name" id="name" name="name" required>
                                                    <!--<img src="<?= base_url()?>assets/img/requred.webp" class="required-image">-->
                                                </div>
                                                <div class="form-group">
                                                    <label>Email <span style="color: rgb(214, 20, 20);">*</span></label>
                                                    <input type="email" class="form-control custum-input" value="" placeholder="Enter Email" id="email" name="email" required>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                         <div class="form-group">
                                                            <label>Mobile <span style="color: rgb(214, 20, 20);">*</span></label>
                                                            <input type="number" class="form-control custum-input" value="" pattern="[6789][0-9]{9}" placeholder="Enter Mobile Number" id="mobile" name="mobile" required>
                                                        </div>  
                                                    </div>
                                                    <!--<div class="col-6 pl-0">-->
                                                    <!--     <div class="form-group">-->
                                                    <!--        <label>DOB <span style="color: rgb(214, 20, 20);">*</span></label>-->
                                                    <!--        <input type="date" class="form-control custum-input" value="" placeholder="" id="" name="" required>-->
                                                    <!--    </div>  -->
                                                    <!--</div>-->
                                                     <div class="col-6">
                                                          <div class="form-group">
                                                                <label for="address">Address</label>
                                                            <input type="text" name="address" id="address" class="form-control"  value="" placeholder="Enter Address" required>
                                                          </div>
                                                    </div>
                                                    <div class="col-6">
                                                          <div class="form-group">
                                                                <label for="city">City</label>
                                                            <input type="text" name="city" id="city" class="form-control"  value="" placeholder="Enter City" required>
                                                          </div>
                                                    </div>
                                                     <div class="col-6">
                                                          <div class="form-group">
                                                                <label for="state">State</label>
                                                            <select class="form-control" id="state" name="state" required>
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
                                                    <div class="col-6 pl-0">
                                                         <div class="form-group">
                                                                    <label for="state">Select Gender</label>
                                                                     <div class="form-check custum-radio form-check-inline1 pl-0">
                                                                          <input class="form-check-input" checked type="radio" name="gender" id="male" value="male" required>
                                                                          <label class="form-check-label custum-select-radio1" for="male" style="margin-left:0px">
                                                                             Male
                                                                          </label>
                                                                          <input class="form-check-input" type="radio" name="gender" id="female" value="female" style="margin-left:0px" required>
                                                                          <label class="form-check-label custum-select-radio1" for="female">
                                                                            Female
                                                                          </label>
                                                                    </div>   
                                                        </div>
                                                    </div>
                                                    
                                                </div> 
                                           </div>
                                           <div class="col-md-6 col-lg-6">
                                               <div class="form-group">
                                                    <label>Brand Name <span style="color: rgb(214, 20, 20);">*</span></label>
                                                    <p>Your brand name is visible to your customers on your e-shop, page URL etc. You can edit this later from your page.</p>
                                                    <input type="text" class="form-control custum-input" value="" placeholder="Enter Brand Name" id="brand" name="brand" required>
                                                    <!--<img class="d-none d-lg-block d-md-block" src="<?= base_url()?>assets/img/requred.webp" class="required-image">-->
                                                </div>
                                                       <!--<p>Select a field that best tell usabout you :</p>-->
                                                       <!-- <div class="form-check custum-radio pl-0">-->
                                                       <!--       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">-->
                                                       <!--       <label class="form-check-label custum-select-radio" for="inlineRadio1">-->
                                                       <!--          Artist-->
                                                       <!--       </label>-->
                                                       <!--       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">-->
                                                       <!--       <label class="form-check-label custum-select-radio" for="inlineRadio2">-->
                                                       <!--          Designer-->
                                                       <!--       </label>-->
                                                       <!--       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">-->
                                                       <!--       <label class="form-check-label custum-select-radio" for="inlineRadio3">-->
                                                       <!--          Entrebneur-->
                                                       <!--       </label>-->
                                                       <!--       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option1">-->
                                                       <!--       <label class="form-check-label custum-select-radio" for="inlineRadio3">-->
                                                       <!--          Other-->
                                                       <!--       </label>-->
                                                       <!-- </div>-->
                                                      
                                           </div>
                                           <div class="col-md-12 mt-5 mb-5 text-center">
                                                <button type="submit" class="btn btn-primary" style="width:200px;">SETUP NOW</button>
                                                 <!--<a href="#" class="forgot-password">Lost your password?</a>-->
                                           </div>
                                       </div>
                                      
                                    </form>
                           </div>
                           <div class="col-lg-2"></div>
                       </div>
                        
                    </div>
                </div>
             </div>
        </div>
    </section>
<?php include('includes/footer.php')?>