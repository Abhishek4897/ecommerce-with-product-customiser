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
                  <h5 class="m-b-10">Admin Profile</h5>
                  <p class="m-b-0">View and change your profile</p>
               </div>
            </div>
            <div class="col-md-4">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href="<?= base_url()?>admin/index"> <i class="fa fa-home"></i> </a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Admin Profile</a></li>
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
                  <div class="col-lg-12">
                     <div class="cover-profile">
                        <div class="profile-bg-img">
                           <img class="profile-bg-img img-fluid" src="<?php echo base_url()?>/assets1/images/user-profile/bg-img1.jpg" alt="bg-img">
                            <div class="card-block user-info">
                              <div class="col-md-12">
                                 <div class="media-left">
                                    <a href="#" class="profile-image">
                                    <img class="user-img img-radius" src="<?=$list->image?>" alt="user-img" style="height:105px;">
                                    </a>
                                 </div>
                                 <div class="media-body row">
                                    <div class="col-lg-12">
                                       <div class="user-title">
                                          <h2><?=$list->name?></h2>
                                          <span class="text-white"><?=$list->designation?></span>
                                       </div>
                                    </div>
                                    <div>
                                       <!-- <div class="pull-right cover-btn">
                                          <button type="button" class="btn btn-primary m-r-10 m-b-10"><i class="icofont icofont-plus"></i> Follow</button>
                                          <button type="button" class="btn btn-primary m-b-10"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                          </div> -->
                                    </div>
                                 </div>
                              </div>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?= $this->session->flashdata('message') ?>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tab-header card">
                        <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                           <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Personal Info</a>
                              <div class="slide"></div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">Edit Personal Info</a>
                              <div class="slide"></div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">Profile</a>
                              <div class="slide"></div>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#review" role="tab">Change password</a>
                              <div class="slide"></div>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content">
                        <div class="tab-pane active" id="personal" role="tabpanel">
                           <div class="card">
                              <div class="card-header">
                                 <h5 class="card-header-text">About Me</h5>
                                
                              </div>
                              <div class="card-block">
                                 <div class="edit-info">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="general-info form-material">
                                             <div class="row">
                                                <div class="col-lg-6 ">
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-user"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="name" class="form-control" value="<?=$list->name?>" required="" readonly>
                                                         <span class="form-bar"></span>
                                                         
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-mobile-phone"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="" class="form-control" value="<?=$list->designation?>" required="" readonly>
                                                         <span class="form-bar"></span>
                                                         
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-mobile-phone"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="number" value="<?=$list->mobile?>" class="form-control" required="" readonly>
                                                         <span class="form-bar"></span>
                                                        
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-mobile-phone"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="eamil" name="" value="<?=$list->email?>" class="form-control" required="" readonly>
                                                         <span class="form-bar"></span>
                                                         
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-12">
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-mobile-phone"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="" class="form-control" value="<?=$list->address?>" required="" readonly>
                                                         <span class="form-bar"></span>
                                                        
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
                        <div class="tab-pane" id="binfo" role="tabpanel">
                           <div class="card">
                              <div class="card-header">
                                 <h5 class="card-header-text">About Me</h5>
                              </div>
                               <form method="post" action="" class="form-material" enctype="multipart/form-data">
                              <div class="card-block">
                                 <div class="edit-info">
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="general-info form-material">
                                             <div class="row">
                                                <div class="col-lg-6 ">
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-user"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="name" value="<?=$list->name?>" class="form-control" required="">
                                                         <span class="form-bar"></span>
                                                         <label class="float-label"> Name</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-mobile-phone"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="designation" value="<?=$list->designation?>" class="form-control" required="" >
                                                         <span class="form-bar"></span>
                                                         <label class="float-label">Designation</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-lg-6">
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-mobile-phone"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="mobile" value="<?=$list->mobile?>"  class="form-control" required="">
                                                         <span class="form-bar"></span>
                                                         <label class="float-label">Mobile Number</label>
                                                      </div>
                                                   </div>
                                                </div>
                                                
                                                <div class="col-lg-12">
                                                   <div class="material-group">
                                                      <div class="material-addone">
                                                         <i class="icofont icofont-mobile-phone"></i>
                                                      </div>
                                                      <div class="form-group form-primary">
                                                         <input type="text" name="address" value="<?=$list->address?>" class="form-control" required="" >
                                                         <span class="form-bar"></span>
                                                         <label class="float-label">Address</label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-footer">
                                 <div class="text-center">
                                    <button type="submit" name="update" value="<?=$list->id?>" class="btn btn-primary waves-effect waves-light m-r-20">Submit</button>
                                    <button type="reset" class="btn btn-danger waves-effect">Cancel</button>
                                 </div>
                              </div>
                              </form>
                           </div>
                         </div>  
                           <div class="tab-pane" id="contacts" role="tabpanel">
                               <div class="card">
                                    <div class="card-block">
                                        <form method="post" action="" class="form-material" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-md-12 mt-2">
                                                    <center><img class="card-img-top profile"  id="image" src="<?=$list->image?>" alt="">
                                                    <input type="file" class="hidden-field" onchange="preview(this)" name="image" id="pselect">
                                                    <label for="pselect"><h4><i class="fa fa-picture-o"></i></h4></label>
                                                    </center>
                                                </div>
                                                
                                            </div>
                                            
                                            <div style="float:right;">
                                                <button type="submit" class="btn btn-primary" value="<?=$list->id?>" name="update_profile">Update</button> 
                                                <button type="reset" class="btn btn-danger">Cancel</button> 
                                            </div>
                                        </form>
                                    </div>
                                </div>
                           </div>`
                           <div class="tab-pane" id="review" role="tabpanel">
                              <div class="card">
                                 <div class="card-header">
                                    <h5 class="card-header-text">Change Password</h5>
                                    <!-- <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light f-right">
                                       <i class="fa fa-pencil" aria-hidden="true"></i>
                                       </button> -->
                                 </div>
                                 <form action="" method="post" onSubmit = "return checkPassword(this)">
                                 <div class="card-block">
                                    <div class="edit-info">
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <div class="general-info form-material">
                                                <div class="row">
                                                   <div class="col-lg-6 ">
                                                      <div class="material-group">
                                                         <div class="material-addone">
                                                            <i class="icofont icofont-user"></i>
                                                         </div>
                                                         <div class="form-group form-primary">
                                                            <input type="password" name="password" class="form-control" required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Current Password</label>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-lg-6">
                                                      <div class="material-group">
                                                         <div class="material-addone">
                                                            <i class="icofont icofont-mobile-phone"></i>
                                                         </div>
                                                         <div class="form-group form-primary">
                                                            <input type="password" name="password1" class="form-control" required="" >
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">New Password</label>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-lg-12">
                                                      <div class="material-group">
                                                         <div class="material-addone">
                                                            <i class="icofont icofont-mobile-phone"></i>
                                                         </div>
                                                         <div class="form-group form-primary">
                                                            <input type="password" name="password2" class="form-control" required="">
                                                            <span class="form-bar"></span>
                                                            <label class="float-label">Confirm Password</label>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="card-footer">
                                    <div class="text-center">
                                       <button  type="submit" name="update_password" value="<?=$list->id?>" class="btn btn-primary waves-effect waves-light m-r-20">Submit</button>
                                        <button type="reset"  class="btn btn-danger waves-effect">Cancel</button> 
                                    </div>
                                 </div>
                                 </form>
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
<script>
    function preview(image){
		if (image.files && image.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e){
					$('#image')
						.attr('src', e.target.result)
						.width(200)
						.height(120);
				};
				reader.readAsDataURL(image.files[0]);
		}
	}
</script>
 <script> 
          
            // Function to check Whether both passwords 
            // is same or not. 
            function checkPassword(form) { 
                password1 = form.password1.value; 
                password2 = form.password2.value; 
  
                // If password not entered 
                if (password1 == '') 
                    alert ("Please enter New Password"); 
                      
                // If confirm password not entered 
                else if (password2 == '') 
                    alert ("Please enter confirm password"); 
                      
                // If Not same return False.     
                else if (password1 != password2) { 
                    alert ("\nPassword did not match: Please try again...") 
                    return false; 
                } 
  
                // If same return True. 
                // else{ 
                //     alert("Password Match!") 
                //     return true; 
                // } 
            } 
        </script>
<?php
   $this->load->view('admin/includes/footer');
   ?>