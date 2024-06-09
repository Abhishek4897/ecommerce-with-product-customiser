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
                     <a href=""> <i class="fa fa-home"></i> </a>
                  </li>
                  <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#!">General Setting</a>
                  </li>
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
                           <h4>Website setting</h4>
                        </div>
                        <div class="card-block">
                           <div class="row">
                              <div class="col-md-12 mt-2">
                                 <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group form-default">
                                       <input type="text" name="title" class="form-control" value="<?=$list->title?>" required="">
                                       <span class="form-bar"></span>
                                       <label class="float-label">Title</label>
                                    </div>
                                    <div class="form-group form-default">
                                       <input type="text" name="copyright" class="form-control" value="<?=$list->copyright?>"  required="">
                                       <span class="form-bar"></span>
                                       <label class="float-label">Copyright</label>
                                    </div>
                                    <div class="form-group">
                                            <input type="file"  class="hidden-field" name="image" id="slider" onchange="preview(this)">
                                            <img src="<?=$list->logo?>" alt="" id="image">
                                            <label for="slider"><span class="dashed-border"><i class="fa fa-picture-o"></i> Website Logo</span></label>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="update" value="<?=$list->id?>">Update</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                              
                                </form>	
                           </div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="styleSelector">
         </div>
      </div>
   </div>
</div>
<?php
   $this->load->view('admin/includes/footer');
   ?>