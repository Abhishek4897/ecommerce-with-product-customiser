<?php 
   $this->load->view('ims/includes/header');
   $this->load->view('ims/includes/sidebar');
   ?>
<style>

   .steps .step {
   display: block;
   width: 100%;
   margin-bottom: 35px;
   text-align: center
   }
   .steps .step .step-icon-wrap {
   display: block;
   position: relative;
   width: 100%;
   height: 80px;
   text-align: center
   }
   .steps .step .step-icon-wrap::before,
   .steps .step .step-icon-wrap::after {
   display: block;
   position: absolute;
   top: 50%;
   width: 50%;
   height: 3px;
   margin-top: -1px;
   background-color: #e1e7ec;
   content: '';
   z-index: 1
   }
   .steps .step .step-icon-wrap::before {
   left: 0
   }
   .steps .step .step-icon-wrap::after {
   right: 0
   }
   .steps .step .step-icon {
   display: inline-block;
   position: relative;
   width: 80px;
   height: 80px;
   border: 1px solid #e1e7ec;
   border-radius: 50%;
   background-color: #f5f5f5;
   color: #374250;
   font-size: 38px;
   line-height: 81px;
   z-index: 5
   }
   .steps .step .step-title {
   margin-top: 16px;
   margin-bottom: 0;
   color: #606975;
   font-size: 14px;
   font-weight: 500
   }
   .steps .step:first-child .step-icon-wrap::before {
   display: none
   }
   .steps .step:last-child .step-icon-wrap::after {
   display: none
   }
   .steps .step.completed .step-icon-wrap::before,
   .steps .step.completed .step-icon-wrap::after {
   background-color: #0da9ef
   }
   .steps .step.completed .step-icon {
   border-color: #0da9ef;
   background-color: #0da9ef;
   color: #fff
   }
   @media (max-width: 576px) {
   .flex-sm-nowrap .step .step-icon-wrap::before,
   .flex-sm-nowrap .step .step-icon-wrap::after {
   display: none
   }
   }
   @media (max-width: 768px) {
   .flex-md-nowrap .step .step-icon-wrap::before,
   .flex-md-nowrap .step .step-icon-wrap::after {
   display: none
   }
   }
   @media (max-width: 991px) {
   .flex-lg-nowrap .step .step-icon-wrap::before,
   .flex-lg-nowrap .step .step-icon-wrap::after {
   display: none
   }
   }
   @media (max-width: 1200px) {
   .flex-xl-nowrap .step .step-icon-wrap::before,
   .flex-xl-nowrap .step .step-icon-wrap::after {
   display: none
   }
   }
   .bg-faded, .bg-secondary {
   background-color: #f5f5f5 !important;
   }
   .mt-20{
   margin-top: 20px;
   }
</style>
<div class="pcoded-content">
   <div class="page-header">
      <div class="page-block">
         <div class="row align-items-center">
            <div class="col-md-8">
               <div class="page-header-title">
                  <h5 class="m-b-10"> Welcome to Arteno Website</h5>
                  <!--<p class="m-b-0">Welcome to Ims dashboard</p>-->
               </div>
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
                              <div class="col-8">
                                 <h4>Orders</h4>
                              </div>
                              <div class="col-4">
                                 
                              </div>
                           </div>
                        </div>
                        	<?= $this->session->flashdata('message') ?>
                        <div class="card-block">
                           
                            
                           <div class="dt-responsive table-responsive">
                              <table id="order-table" class="table table-striped table-bordered nowrap">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Order Id</th>
                                       <th>Customer name</th>
                                       <th>Address</th>
                                       <th>Customer Phone</th>
                                       <th>Order Date</th>
                                       <th>Order Amount</th>
                                       <th>payment Method</th>
                                       <th>Status</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                     $ocounter=0;
                                     foreach($orderlists as $myorder){
                                         $ocounter++;
                                         $q = $this->db->query("Select * from users where id= '$myorder->user_id'");
                                                 $user= $q->row();
                                                 $ul = $this->db->query("Select * from user_location where id= '$myorder->location_id'");
                                                 $user_location= $ul->row();
                                                                              ?>
                                    <tr>
                                       <td><?= $ocounter ?></td>
                                        <td><?= $invoice_data->order_prefix ?><?= $myorder->id ?></td> 
                                       <td>
                                          <?= $user->user_fullname;?>
                                           </td>
                                           <td><?php if($myorder->is_shipping==1){?><?=$user->house_no; ?>&nbsp;<?= $user->city;?>&nbsp; <?= $user->state;?> &nbsp;<?= $user->pincode;?><?php } else {?><?=$user_location->house_no; ?>&nbsp;<?= $user_location->city;?>&nbsp; <?= $user_location->state;?> &nbsp;<?= $user_location->pincode;?><?php }?></td>
                                           <td><?= $user->user_phone;?></td>
                                            <td><?= date("d-M-Y", strtotime($myorder->created)) ;?></td>
                                             <td> <?= $myorder->currency;?><?= $myorder->total;?></td>
                                           <td> <?= $myorder->payment ?></td>
                                       
                                       <td>
                                           <?php
                if($myorder->status=='confirmed'){
                ?>
                <label  class="badge badge-primary btn-rounded">Confirmed</label></td>
                <?php
                } else if($myorder->status=='dispached'){
                ?>
                <label  class="badge badge-success btn-rounded">Dispached</label><br/>
                <a href="<?=base_url()?>Invoice/generate/<?= $myorder->id?>"><button class="btn btn-info" title="Generate Invoice"><i class="fa fa-file"></i></button>
                </td>
                <?php
                } else if($myorder->status=='completed'){
                ?>
                <label  class="badge badge-success btn-rounded">Completed</label><br/>
                <a href="<?=base_url()?>Invoice/generate/<?= $myorder->id?>"><button class="btn btn-info" title="Generate Invoice"><i class="fa fa-file"></i></button>
                </td>
                <?php
                } else if($myorder->status=='cancelled'){
                ?>
                <label  class="badge badge-danger btn-rounded">Cancelled</label></td>
                <?php } ?>
                                           
                                       <td>
                                          <a href="<?=base_url()?>Ims/order_details/<?= $myorder->id?>"> <button class="btn btn-primary btn-sm" type="button"><i class="fa fa-list"></i> Details</button></a>
                                          
                                       </td>
                                    </tr>
                                    
                                <?php   } ?>
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
<!-- The Modal -->

<?php
   $this->load->view('ims/includes/footer');
   ?>