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
                                             <h5>Add Stock</h5>
                                          </div>
                                          <div class="card-block">
                                             <!--<h4 class="sub-title">Basic Inputs</h4>-->
                                             <form>
                                           
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Select Product</label>
                                                   <div class="col-sm-10">
                                                      <select name="select" class="form-control">
                                                         <option value="opt1">Select One Value Only</option>
                                                         <option value="opt2">Type 2</option>
                                                         <option value="opt3">Type 3</option>
                                                         
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Select Variation</label>
                                                   <div class="col-sm-10">
                                                      <select name="select" class="form-control">
                                                         <option value="opt1">Select color</option>
                                                         <option value="opt2">Type 2</option>
                                                         <option value="opt3">Type 3</option>
                                                         
                                                      </select>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Select Size</label>
                                                   <div class="col-sm-10">
                                                      <select name="select" class="form-control">
                                                         <option value="opt1">Select One Value Only</option>
                                                         <option value="opt2">Type 2</option>
                                                         <option value="opt3">Type 3</option>
                                                         
                                                      </select>
                                                   </div>
                                                </div>
                                               
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Color</label>
                                                   <div class="col-sm-10">
                                                      <input type="color" class="form-control">
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Upload File</label>
                                                   <div class="col-sm-10">
                                                      <input type="file" class="form-control">
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Textarea</label>
                                                   <div class="col-sm-10">
                                                      <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
                                                   </div>
                                                </div>
                                             </form>
                                            
                                          </div>
                                          <div class="card-footer">
                                              <button class="btn btn-primary">Update</button>
                                              <button class="btn btn-danger">Cancel</button>
                                          </div>
                                       </div>
                                      
                 </div>
               </div>
            </div>
         </div>
         <div id="styleSelector"></div>
      </div>
   </div>
</div>
<?php
   $this->load->view('ims/includes/footer');
   ?>