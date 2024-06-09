<?php 
$this->load->view('admin/includes/header');
$this->load->view('admin/includes/sidebar');
?>
                 <div class="pcoded-content">
                     <div class="page-header">
                        <div class="page-block">
                           <div class="row align-items-center">
                              <div class="col-md-8">
                                 <div class="page-header-title">
                                    <h5 class="m-b-10"> Admin Dashboard</h5>
                                    <p class="m-b-0">Welcome to Admin dashboard</p>
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
                                             <h5>Add New Products</h5>
                                             <!--<span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>-->
                                          </div>
                                          <div class="card-block">
                                             <div class="row">
                                                <div class="col-lg-12 col-xl-12">
                                                   <!--<div class="sub-title">Default</div>-->
                                                   <ul class="nav nav-tabs  tabs" role="tablist">
                                                      <li class="nav-item">
                                                         <a class="nav-link active" data-toggle="tab" href="#Details" role="tab">Details </a>
                                                      </li>
                                                      <li class="nav-item">
                                                         <a class="nav-link" data-toggle="tab" href="#Design" role="tab">Design</a>
                                                      </li>
                                                      <li class="nav-item">
                                                         <a class="nav-link" data-toggle="tab" href="#Variation" role="tab">Variation</a>
                                                      </li>
                                                      <li class="nav-item">
                                                         <a class="nav-link" data-toggle="tab" href="#Attributes" role="tab">Attributes</a>
                                                      </li>
                                                   </ul>
                                                   <div class="tab-content tabs card-block">
                                                      <div class="tab-pane active" id="Details" role="tabpanel">
                                                         <form action="" method="post" enctype="multipart/form-data">
                                                            <div class="form-group row">
                                                               <label class="col-sm-2 col-form-label">Name</label>
                                                               <div class="col-sm-10"> 
                                                                  <input type="text" class="form-control" name="name">
                                                               </div>
                                                            </div>
                                                            <div class="form-group row">
                                                               <label class="col-sm-2 col-form-label">MRP</label>
                                                               <div class="col-sm-10"> 
                                                                  <input type="text" class="form-control" name="mrp">
                                                               </div>
                                                            </div>
                                                            <div class="form-group row">
                                                               <label class="col-sm-2 col-form-label">Price</label>
                                                               <div class="col-sm-10"> 
                                                                  <input type="text" class="form-control" name="price">
                                                               </div>
                                                            </div>
                                                            <div class="form-group row">
                                                               <label class="col-sm-2 col-form-label">Product thumbnail</label>
                                                               <div class="col-sm-10"> 
                                                                   <div class="form-group">
                                                                        <input type="file"  class="hidden-field" name="image" id="product" onchange="preview(this)">
                                                                        <img src="" alt="" id="image">
                                                                        <label for="product"><span class="dashed-border"><i class="fa fa-picture-o"></i> Add image</span></label>
                                                                    </div>
                                                               </div>
                                                            </div>
                                                            <div class="form-group row">
                                                               <label class="col-sm-2 col-form-label">Description</label>
                                                               <div class="col-sm-10"> 
                                                                  <textarea id="editor1" class="form-control" name="description" id="" required ></textarea>
                                                               </div>
                                                            </div>
                                                          
                                                            <div class="form-group row">
                                                               <label class="col-sm-2 col-form-label">Select Category</label>
                                                               <div class="col-sm-10">
                                                                  <select name="select" class="form-control">
                                                                     <option value="opt1">Select One Value Only</option>
                                                                     <option value="opt2">Category Name</option>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                             <div class="form-group row">
                                                               <label class="col-sm-2 col-form-label">Order</label>
                                                               <div class="col-sm-10"> 
                                                                  <input type="text" class="form-control">
                                                               </div>
                                                            </div>
                                                            <!--<div class="form-group row">-->
                                                            <!--   <label class="col-sm-2 col-form-label">Color</label>-->
                                                            <!--   <div class="col-sm-10">-->
                                                            <!--      <input type="color" class="form-control">-->
                                                            <!--   </div>-->
                                                            <!--</div>-->
                                                             <button type="submit" class="btn btn-primary" name="add" value="1">Save Products </button>
                                                            <button type="reset" class="btn btn-danger">Cancel</button>
                                                         </form>
                                                       </div>
                                                      <div class="tab-pane" id="Design" role="tabpanel">
                                                          <div class="sub-title">Configure designs</div>
                                                           <p class="m-0">Upload your product images, configure stages, edit zones. You can create new stage, change stage's name and arrange stages.</p>
                                                           <br>
                                                           <div class="col-lg-12 col-xl-12">
                                                               <ul class="nav nav-tabs md-tabs tabs-left b-none" role="tablist">
                                                                  <li class="nav-item">
                                                                     <a class="nav-link active" data-toggle="tab" href="#front" role="tab">Front</a>
                                                                     <div class="slide"></div>
                                                                  </li>
                                                                  <li class="nav-item">
                                                                     <a class="nav-link" data-toggle="tab" href="#back" role="tab">Back</a>
                                                                     <div class="slide"></div>
                                                                  </li>
                                                                  
                                                               </ul>
                                                               <div class="tab-content tabs-left-content card-block">
                                                                  <div class="tab-pane active" id="front" role="tabpanel">
                                                                     <center>
                                                                         <img src="<?= base_url()?>uploads/setting/profile-1602092544.jpg">
                                                                     </center>
                                                                  </div>
                                                                  <div class="tab-pane" id="back" role="tabpanel">
                                                                     <center>
                                                                         <img src="<?= base_url()?>uploads/setting/profile-1602092544.jpg">
                                                                     </center>
                                                                  </div>
                                                                 
                                                               </div>
                                                           </div>
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 col-form-label">Size For Printing</label>
                                                               <div class="col-sm-10">
                                                                  <select name="select" class="form-control">
                                                                     <option value="opt1">Xl</option>
                                                                     <option value="opt2">Xll</option>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                           <div class="form-group row">
                                                               <label class="col-sm-2 col-form-label">Print orientation:</label>
                                                               <div class="col-sm-10">
                                                                  <select name="select" class="form-control">
                                                                     <option value="opt1">Portrait</option>
                                                                     <option value="opt2">Landscape</option>
                                                                  </select>
                                                               </div>
                                                            </div>
                                                            <div class="text-center">
                                                                <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Select Product image</button>
                                                                <button class="btn btn-info">Clean</button>
                                                            </div>
                                                            <!-- Modal -->
                                                                    <div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                          <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                              <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Select image for product base</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                  <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                              </div>
                                                                              <div class="modal-body">
                                                                                ...
                                                                              </div>
                                                                              <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                                              </div>
                                                                            </div>
                                                                          </div>
                                                                        </div>
                                                            <!--model-->
                                                             <button type="submit" class="btn btn-primary" name="add" value="1">Save Products </button>
                                                            <button type="reset" class="btn btn-danger">Cancel</button>
                                                      </div>
                                                      <div class="tab-pane" id="Variation" role="tabpanel">
                                                              <form>
                                                                   <div class="form-group row">
                                                                       <label class="col-sm-2 col-form-label">Select Size</label>
                                                                       <div class="col-sm-10">
                                                                          <select name="select" class="form-control">
                                                                             <option value="opt1">Select One Value Only</option>
                                                                             <option value="opt2">L</option>
                                                                             <option value="opt2">XL</option>
                                                                          </select>
                                                                       </div>
                                                                    </div>
                                                                   <div class="form-group row">
                                                                       <label class="col-sm-2 col-form-label">Select Color</label>
                                                                       <div class="col-sm-10">
                                                                          <select name="select" class="form-control">
                                                                             <option value="opt1">Select One Value Only</option>
                                                                             <option value="opt2">Red</option>
                                                                             <option value="opt2">Black</option>
                                                                          </select>
                                                                       </div>
                                                                    </div>
                                                                   <button type="submit" class="btn btn-primary" name="add" value="1">Save </button>
                                                              </form>
                                                      </div>
                                                      <div class="tab-pane" id="Attributes" role="tabpanel">
                                                         <a class="btn btn-info" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">+ Add New Attribute</a>
                                                         </br></br>
                                                            <div class="collapse" id="collapseExample">
                                                              <div class="card">
                                                                  <div class="card-header">Product Size</div>
                                                                     <div class="card-body">
                                                                          <div class="form-group row">
                                                                           <label class="col-sm-2 col-form-label">Size </label>
                                                                           <div class="col-sm-10">
                                                                              <select name="select" class="form-control">
                                                                                 <option value="opt1">Xl</option>
                                                                                 <option value="opt2">Xll</option>
                                                                              </select>
                                                                           </div>
                                                                        </div>
                                                                           <div class="form-group row">
                                                                               <label class="col-sm-2 col-form-label">Color</label>
                                                                               <div class="col-sm-10">
                                                                                  <select name="select" class="form-control">
                                                                                     <option value="opt1">Red</option>
                                                                                     <option value="opt2">yellow</option>
                                                                                  </select>
                                                                               </div>
                                                                            </div>
                                                                     </div>
                                                              </div>
                                                            </div>
                                                          <br>
                                                         <div>
                                                             <button class="btn btn-primary">SUbmit</button>
                                                         </div>
                                                     </div>
                                                   </div>
                                                </div>
                                              </div>
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
$this->load->view('admin/includes/footer');
?>
