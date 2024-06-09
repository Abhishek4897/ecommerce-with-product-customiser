<?php 
   $this->load->view('ims/includes/header');
   $this->load->view('ims/includes/sidebar');
   ?>
<div class="pcoded-content">
   <div class="page-header">
      <div class="page-block">
         <div class="row align-items-center">
            <div class="col-md-8">
               <div class="page-header-title">
                  <h5 class="m-b-10"> Ims Dashboard</h5>
                  <p class="m-b-0">Welcome to Ims dashboard</p>
               </div>
            </div>
            <div class="col-md-4">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href="<?=base_url()?>admin"> <i class="fa fa-home"></i> </a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?=base_url()?>admin">Dashboard</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>
   <div class="pcoded-inner-content">
      <div class="main-body">
         <div class="page-wrapper">
            <div class="page-body">
               <div class="row">
                   <div class="col-sm-12">
                                       <div class="card">
                                          <div class="card-header">
                                             <h5>Add Expenses</h5>
                                          </div>
                                          <form action="" method="post">
                                          <div class="card-block">
                                             <!--<h4 class="sub-title">Basic Inputs</h4>-->
                                             
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Title</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="title" required>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label"> Price</label>
                                                   <div class="col-sm-10">
                                                      <input type="number" class="form-control" name="price" required>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Note</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="notes" required>
                                                   </div>
                                                </div>
                                               
                                            
                                          </div>
                                          <div class="card-footer">
                                              <button class="btn btn-primary" type="submit" name="submit" value="1">Submit </button>
                                              <button class="btn btn-danger">Cancel</button>
                                          </div>
                                          </form>
                                       </div>
                                      
                 </div>
               </div>
            </div>
         </div>
         <div id="styleSelector"></div>
      </div>
   </div>
</div>
<script>
function getsize() {
   var pro = document.getElementById("product_id").value; 
    if(pro==2){
        $('#size_div').show();
    }
    else{
        $('#size_div').hide();
    }
}
</script>
<?php
   $this->load->view('ims/includes/footer');
   ?>