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
                  <h5 class="m-b-10">Admin Dashboard</h5>
                  <p class="m-b-0">Welcome to Admin Dashboard</p>
               </div>
            </div>
            <div class="col-md-4">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href="<?=base_url()?>admin/index"> <i class="fa fa-home"></i> </a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?=base_url()?>admin/index">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href=""> Add Template Categories</a>
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
                           <div class="row">
                              <div class="col-md-8 col-4 col-xs-8">
                                 <h4> Add Template Categories</h4>
                              </div>
                           </div>
                        </div>
                        <div class="card-block">
                           <form action="" method="post" enctype="multipart/form-data">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-s/om-12 col-form-label">Name</label>
                                    <div class="col-sm-12">
                                       <input type="text" class="form-control" name="name" required>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="col-sm-12 col-form-label">Parent</label>
                                    <div class="col-sm-12">
                                       <select name="parent" class="form-control">
                                            <option value="0">Select category<option>
                                           <?php foreach($list as $l):?>
                                          <option value="<?=$l->id?>"><?=$l->name?><option>
                                              <?php endforeach;?>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group ">
                                    <label class="col-sm-12 col-form-label">Order</label>
                                    <div class="col-sm-12">
                                       <input type="number" min="0" class="form-control" name="order">
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="file"  class="hidden-field" name="image" id="slider" onchange="preview(this)" required>
                                    <img src="" alt="" id="image">
                                    <label for="slider"><span class="dashed-border"><i class="fa fa-picture-o"></i> Add image</span></label>
                                 </div>
                              </div>
                           </div>
                           <input type="hidden" name="type" value="templates">
                           <button type="submit" class="btn btn-primary" name="add" value="1">+ Add</button>
                           <button type="reset" class="btn btn-danger">Cancel</button>
                           </form>
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
<?php
   $this->load->view('admin/includes/footer');
   ?>