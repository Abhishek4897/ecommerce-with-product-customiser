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
                                 <h4>Complete Payouts</h4>
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
                                       <th>Template </th>
                                       <th>Price</th>
                                       <th>payment Details</th>
                                       <th>Response</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                    
                                    $i=1; foreach($order as $od):
                                    
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
                                       <td>
                                         <?php 
                                       if($od->template_id){
                                           $temp=$this->Admin_model->templatebyid($od->template_id);?>
                                          <img  src="<?=$temp->screenshot?>" style="height:100px;"> 
                                    <?php   }
                                       
                                           ?>
                                           </td>
                                       </td>                                                 
                                       <td>
                                         <?=$od->payout;?>
                                       </td>
                                       <td><button class="btn btn-info" data-toggle="modal" data-target="#payment_details<?= $od->id?>"><i class="fa fa-money"></i> Payment Details</button></td>
                                       <td><a href="<?=base_url()?>admin/payout_response/<?=$od->id?>"><button class="btn btn-primary"><i class="fa fa-comment"></i> Response</button></td>
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
<?php
   $this->load->view('admin/includes/footer');
   ?>