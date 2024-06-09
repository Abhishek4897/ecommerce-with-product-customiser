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
                     <a href="<?= base_url()?>admin/index"> <i class="fa fa-home"></i> </a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?= base_url()?>admin/index">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#!">Manage payout</a>
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
                                 <h4>Remaining Payouts</h4>
                              </div>
                              <div class="col-md-4 col-4 col-xs-4">
                              </div>
                           </div>
                           <?= $this->session->flashdata('message') ?>
                        </div>
                        <div class="card-block">
                            
                           <div class="dt-responsive table-responsive">
                              <table id="order-table" class="table table-striped table-bordered nowrap">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                        <!--<th>Order-Id</th>-->
                                       <th>Designer</th>
                                       <th>Payment type</th>
                                       <th>Payment method</th>
                                      
                                       <th>Price</th>
                                       <th>payment Details</th>
                                       <th>Response</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                    
                                    $i=1; foreach($order as $od):
                                    $pay_value=json_decode($od->p_value);
                                    ?>
                                    
                                    <tr>
                                       <td><?=$i?></td>
                                       <!-- <td>-->
                                       <!--  #ARTENO_IN_<?=$od->order_id;?>-->
                                       <!--</td>-->
                                       <td>
                                           <?php 
                                           $d=$this->Admin_model->list_designers($od->designer_id);
                                           echo $d->user_fullname;
                                           ?>
                                         
                                       </td>
                                        <td><?=$od->p_type;?></td>                                                
                                        <td><?php 
                                        if($od->p_type=="bank"){
                                        $bdata=array('Bank name','Account holder name','IFSC Code','Branch address');
                                        foreach($pay_value as $key=>$pays):
                                        echo "<b>".$bdata[$key]."</b><br/>". $pays ."<br>"; 
                                        endforeach;} else {
                                        foreach($pay_value as $pays):
                                        echo  $pays;
                                        endforeach;
                                         } ?>
                                         </td>                                                
                                       <td>
                                         <?=$od->total;?>
                                       </td>
                                       <td><button class="btn btn-info" data-toggle="modal" data-target="#payment_details<?= $od->id?>"><i class="fa fa-money"></i> Payment Details</button></td>
                                       <td><button class="btn btn-primary" data-toggle="modal" data-target="#payout_response<?= $od->id?>"><i class="fa fa-comment"></i> Response</button></td>
                                    </tr>
                                    <div class="modal fade" id="payment_details<?= $od->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <strong>Payment details</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <?php $list=$this->Designer_model->payment_details($od->designer_id);?>
            <div class="row">
                <div class="col-md-12">
    	            <div class="form-group form-default mt-2">
    	                <label class="-label">Bank Name</label>
                    <input type="text" name="bank_name" class="form-control"  value="<?=$list->bank_name;?>" readonly>
                    <span class="form-bar"></span>
                    
                </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group form-default mt-2">
                        <label class="-label">Account No.</label>
                    <input type="text" name="account_no" class="form-control"  value="<?=$list->account_no?>" readonly>
                    <span class="form-bar"></span>
                    
                </div>  
                </div>
                <div class="col-md-12">
                    <div class="form-group form-default mt-2">
                         <label class="-label">IFSC CODE</label>
                    <input type="text" name="ifsc_code"class="form-control mob_no" data-mask="9999-999-999"  value="<?=$list->ifsc_code?>" readonly>
                    <span class="form-bar"></span>
                   
                </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group form-default mt-2">
                        <label class="-label">Name ON Bank</label>
                    <input type="text" name="name_on_bank" class="form-control"  value="<?=$list->name_on_bank;?>" readonly>
                    <span class="form-bar"></span>
                    
                </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group form-default mt-2">
                        <label class="-label">Branch Address</label>
                    <input type="text" name="branch_address" class="form-control"  value="<?=$list->branch_address?>" readonly>
                    <span class="form-bar"></span>
                    
                </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group form-default mt-2">
                         <label class="-label">UPI ID</label>
                    <input type="text" name="upi_id"class="form-control mob_no" data-mask="9999-999-999"  value="<?=$list->upi_id?>" readonly>
                    <span class="form-bar"></span>
                   
                </div>
                </div>
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
                                    <div class="modal fade" id="payout_response<?= $od->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <strong>Payout response</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <form action="<?=base_url('admin/payout_response')?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <label for="slider"> Payment ScreenShot</span></label>
                        <div class="form-group form-default mt-2">
                            <input type="file"   name="image" id="slider" onchange="preview(this)" required style="height: 29px;">
                            <img src="" alt="" id="image">
                        </div>  
                    </div>
                    <div class="col-md-12">
                        <div class="form-group form-default mt-2">
                                    <label class="float-label">Note</label>
                                    <textarea  name="note"class="form-control" rows="5"></textarea>
                        </div> 
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit" value="<?= $od->id?>">Submit</button>
            </form>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
                                   <?php $i++; endforeach;?>
                                 </tbody>
                                 
                              </table>
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
	function preview_image(){
		
			var total_file=document.getElementById("upload_file").files.length;
			for(var i=0;i<total_file;i++)
			{
			$('#image_preview').append("<img  class='multiple_image' src='"+URL.createObjectURL(event.target.files[i])+"'>");
			}
		}
</script>
<?php
   $this->load->view('admin/includes/footer');
   ?>