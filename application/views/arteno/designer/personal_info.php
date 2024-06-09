<?php include(__DIR__.'../../includes/header.php')?>
<?php $this->load->view('arteno/includes/designer_header.php') ?>
<style>
.section-title h1, h2, h3, h4, h5, h6, p, span, ul, li, body ,label, input{
    /* font-family: 'Noto Sans JP', sans-serif !important; */
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
</style>


<section class="second mt-5" >
    <div class="container">
       <div class="card border-0" >
<div class="card-body">
   
                 <form action="<?= base_url()?>account_details/" method="post"class="needs-validation" novalidate>
                      <div><?= $this->session->flashdata('message');?></div>
                        <h5 class="navigate">Designer Info </h5>
                        <div class="row mt-15">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">Name <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" value="<?=$designer->user_fullname;?>"  name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">Mobile <span style="color: red;">*</span></label>
                                    <input type="text" readonly class="form-control" value="<?=$designer->user_phone;?>" pattern="[6-9]{1}[0-9]{9}"   name="mob_no" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">Email <span style="color: red;">*</span></label>
                                    <input type="email" readonly  class="form-control" value="<?=$designer->user_email;?>"  name="email" required>
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">E-Shop <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" value="<?=$designer->brand;?>"  name="brand" required>
                                </div>
                            </div>
                            
                        </div>
                        <br>
                        <hr style="border:1px solid #eee;">
                        <br>
                        <h5 class="navigate mt-3">Bank Details </h5>
                        <!--<i class="fas fa-chevron-right"></i>-->
                        <div class="row mt-15">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">Bank Name <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" value="<?=$payment->bank_name;?>"  name="bank_name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">Account No <span style="color: red;">*</span></label>
                                    <input type="number" class="form-control" value="<?=$payment->account_no;?>"   name="account_no" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">IFSC Code <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" pattern="[A-Z|a-z]{4}[0][a-zA-Z0-9]{6}"  value="<?=$payment->ifsc_code;?>" maxlength="11"  name="ifsc_code" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="label_details">Account Holder Name <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control"  value="<?=$payment->name_on_bank;?>"  name="name_on_bank" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="label_details">Branch Address <span style="color: red;">*</span></label>
                                    <input type="text" class="form-control" value="<?=$payment->branch_address;?>"   name="branch_address" required>
                                </div>
                            </div>
                            
                             
                            <div class="col-md-6">
                                <button type="submit" name="update" value="<?=$designer->id?>" class="btn btn-primary checkout-button">Update</button>
                            </div>
                            
                        </div>
                    </form></div>
</div>
    </div>
</section>

<br>

<?php include(__DIR__.'../../includes/footer.php')?>
<script>
    (function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation');
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