<?php 
   $this->load->view('admin/includes/header');
   $this->load->view('admin/includes/sidebar');
   ?>
   <style>
       #ivoice-logo{
           height:100px;
           width:160px;
       }
       .invoice-content{
           /*float:right;*/
           /*direction:rtl;*/
       }
   </style>
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
                            <?= $this->session->flashdata('message') ?>
                        </div>
                        <div class="card-block">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Site Setting</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Invoice Setting</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-profit" role="tab" aria-controls="nav-contact" aria-selected="false">Designer profit</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Product dimension</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><br>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group form-default">
                                            <label class="float-label">Title</label>
                                           <input type="text" name="title" class="form-control" value="<?=$list->title?>" required="">
                                           <span class="form-bar"></span>
                                           
                                        </div>
                                        <div class="form-group form-default">
                                            <label class="float-label">Copyright</label>
                                           <input type="text" name="copyright" class="form-control" value="<?=$list->copyright?>"  required="">
                                           <span class="form-bar"></span>
                                           
                                        </div>
                                        <div class="form-group">
                                            <input type="file"  class="hidden-field" name="image" id="slider" onchange="preview(this)">
                                            <img src="<?=$list->logo?>" alt="" id="image">
                                            <label for="slider"><span class="dashed-border"><i class="fa fa-picture-o"></i> Website Logo</span></label>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="update" value="<?=$list->id?>">Update</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                    </form>
                                    <?php
                                    // echo "<pre>";
                                    // print_r($settings);
                                    // echo "</pre>";
                                    foreach($settings as $setting){
                                        if($setting->key=='about'){
                                            
                                    ?>
                                     <label>Measurement</label>
                                    <textarea  type="text" name="About" class="form-control summernote" cols="3" rows='3'>
                                        <?= $setting->value ?>
                                    </textarea>  
                                    <?php }elseif($setting->key=='helps'){ ?>
                                    <label>Helps</label>
                                    <?php
                                    
                                    foreach(json_decode($setting->value) as $help){
                                        ?>
                                        <label>Title</label>
                                    <input type="text" name="" class="form-control" value="<?= $help->title ?>"><br><br>
                                    <label>Values</label>
                                    <textarea cols="3" rows="3" class="form-control summernote">
                                        <?= $help->content ?>
                                    </textarea><br>
                                   <?php
                                    }
                                    ?>
                                                                      
                                    <?php }} ?>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><br>
                                <?= $this->session->flashdata('invoicemessage') ?><br/>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group form-default">
                                            <label class="float-label">Shipping charge</label>
                                           <input type="text" name="shipping" class="form-control" value="<?= $invoice[0]->shipping ?>" required="">
                                           <span class="form-bar"></span>
                                           
                                        </div>
                                        <div class="form-group form-default">
                                            <label class="float-label">COD Charge</label>
                                           <input type="text" name="cod" class="form-control" value="<?= $invoice[0]->cod ?>"  required="">
                                           <span class="form-bar"></span>
                                           
                                        </div>
                                        <div class="form-group">
                                            GST per product in Percent (%)
                                            <?php
                                            $gstdata=json_decode($invoice[0]->gstp);
                                           
                                            foreach($products as $key=>$product){
                                               $gst=$gstdata[1][$key];
                                              
                                            ?>
                                            <div class="row mt-3">
                                                <div class="col-md-6 col-xs-6 col-6">
                                                    <input type="hidden" name="product[]" value="<?= $product->id ?>">
                                                    <p><?= $product->name ?></p>
                                                </div>
                                                <div class="col-md-6 col-xs-6 col-6">
                                                    <select class="form-control"  name="gst[]" required>
                                                        <option value="">Select GST Slab</option>
                                                        <option <?= ($gst==3)?  'selected':'' ?> value="3">3 %</option>
                                                        <option <?= ($gst==5)?  'selected':'' ?> value="5">5 %</option>
                                                        <option <?= ($gst==12)? 'selected':'' ?> value="12">12 %</option>
                                                        <option <?= ($gst==18)? 'selected':'' ?> value="18">18 %</option>
                                                        <option <?= ($gst==28)? 'selected':'' ?> value="28">28 %</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <?php } ?>
                                        </div>
                                        <div class="card text-white" style="background:black">
                                            <div class="card-header">
                                                <div class="row">
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <img src="<?= $invoice[0]->invoicelogo ?>" id="clogodata">
                                                    </div>
                                                    <div class="col-md-6 col-xs-6 col-6">
                                                        <div class="content" style="float:right;direction:rtl">
                                                            <h4 class="invoice-content" id="cnamedata"><?= $invoice[0]->cname ?></h4>
                                                            <h6 class="invoice-content" id="caddressdata"><?= $invoice[0]->caddress ?></h6>
                                                            <p class="invoice-content" id="cemaildata"><?= $invoice[0]->cemail ?></p>
                                                            <p class="invoice-content" id="cmobiledata"><?= $invoice[0]->cmobile ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label>Company Logo</label>
                                            <input type="file"  onchange="preview(this)" name="clogo" id="clogo">
                                        </div>
                                        <div class="form-group">
                                            <label>Company name</label>
                                            <input type="text" name="cname" value="<?= $invoice[0]->cname ?>"  id="cname" class="form-control" required >
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Company Address</label>
                                            <textarea name="caddress"   class="form-control" required ><?= $invoice[0]->caddress ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Company Email</label>
                                            <input type="text" name="cemail" value="<?= $invoice[0]->cemail ?>" id="cemail" class="form-control" required >
                                        </div>
                                        <div class="form-group">
                                            <label>Company Mobile</label>
                                            <input type="text" name="cmobile" value="<?= $invoice[0]->cmobile ?>" id="cmobile" class="form-control" required >
                                        </div>
                                        <div class="form-group">
                                            <label>Company GST NO</label>
                                            <input type="text" name="gst_no" value="<?= $invoice[0]->gst_no ?>" id="cgst" class="form-control" required >
                                        </div>
                                        <div class="form-group">
                                            <label>Company PAN NO.</label>
                                            <input type="text" name="pan_no" value="<?= $invoice[0]->pan_no ?>" id="cpan" class="form-control" required >
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary" name="uinvoice" value="<?=$list->id?>">Update</button>
                                        <button type="reset" class="btn btn-danger">Cancel</button>
                                    </form>	
                                </div>
                                <div class="tab-pane fade" id="nav-profit" role="tabpanel" aria-labelledby="nav-contact-tab">
                                     <div class="dt-responsive table-responsive">
                                        <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
                                             <thead>
                                                <tr>
                                                   <th>#</th>
                                                   <th>Product name</th>
                                                   <th>Profit Price</th>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 <?php 
                                                   foreach($profilt as $prof){
                                                    if($prof->p_id=='2'){
                                                 ?>
                                                 <tr>
                                                   <td>2</td>
                                                   <td>Premium T-shirt</td>
                                                   <td><?= $prof->price ?></td>
                                                </tr>
                                                <?php } elseif($prof->p_id=='3'){ ?>
                                                <tr>
                                                   <td>1</td>
                                                   <td>Mug</td>
                                                   <td><?= $prof->price ?></td>
                                                </tr>
                                                <?php } elseif($prof->p_id=='12'){ ?>
                                                <tr>
                                                   <td>3</td>
                                                   <td>Face-mask</td>
                                                   <td><?= $prof->price ?></td>
                                                </tr>
                                                <?php } ?>
                                                <?php  } ?>
                                             </tbody>
                                          </table>
                                       </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                    <br>
                                    <?= $this->session->flashdata('message') ?><br/>
                                    <form action="" method="post">
                                        <div class="form-group"><br>
                                            <h4>Product dimension in CMs (Unit) </h4><br>
                                            <?php
                                            $dimention=json_decode($invoice[0]->dimention);
                                           
                                            foreach($products as $key=>$product){
                                               $weight=$dimention[1][$key];
                                               $length=$dimention[2][$key];
                                               $breadth=$dimention[3][$key];
                                               $height=$dimention[4][$key];
                                              
                                            ?>
                                            <div class="row mt-3">
                                                <div class="col-md-2 col-xs-6 col-6">
                                                    <label><?= $product->name ?></label>
                                                    <input type="hidden" name="product[]" value="<?= $product->id ?>">
                                                   
                                                </div>
                                                <div class="col-md-2 col-xs-6 col-6">
                                                    <label>Weight (in kgs)</label>
                                                    <input type="text" class="form-control" name="weight[]" value="<?=$weight?>">
                                                </div>
                                                <div class="col-md-2 col-xs-6 col-6">
                                                    <label>Length</label>
                                                    <input type="text" class="form-control" name="length[]" value="<?=$length?>">
                                                </div>
                                                <div class="col-md-2 col-xs-6 col-6">
                                                    <label>Breadth</label>
                                                    <input type="text" class="form-control" name="breadth[]" value="<?=$breadth?>">
                                                </div>
                                                <div class="col-md-2 col-xs-6 col-6">
                                                    <label>Height</label>
                                                    <input type="text" class="form-control" name="height[]" value="<?=$height?>">
                                                </div>
                                                
                                            </div>
                                            <?php } ?>
                                            <button type="submit" class="btn btn-success" value="hud" name="udimension">Update </button>
                                        </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#cname").keyup(function(){
    $("#cnamedata").html(this.value);
  });
  $("#caddress").keyup(function(){
    $("#caddressdata").html(this.value);
  });
  $("#cemail").keyup(function(){
    $("#cemaildata").html(this.value);
  });
  $("#cmobile").keyup(function(){
    $("#cmobiledata").html(this.value);
  });
  
});
</script>
<script>
    function preview(image){
		if (image.files && image.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e){
					$('#clogodata')
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