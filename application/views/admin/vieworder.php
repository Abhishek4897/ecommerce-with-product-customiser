<?php 
   $this->load->view('admin/includes/header');
   $this->load->view('admin/includes/sidebar');
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
                  <!--<p class="m-b-0">Welcome to Admin dashboard</p>-->
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
                                 <h4> View Orders</h4>
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
                                       <th>Order-Id</th>
                                       <th>Product</th>
                                       <th>Product name</th>
                                       <th>Quantity</th>
                                       <th>Price</th>
                                       <th>Status</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                     $ocounter=0;
                                     foreach($myorders as $myorder1){
                                         // print_r($myorder1);
                                          
                                     foreach($myorder1 as $myorder){
                                          // print_r($myorder);
                                         $ocounter++;
                                        $images= json_decode($myorder->screenshots);
                                        
                                                 $q = $this->db->query("Select * from orders where id= '$myorder->order_id'");
                                                 $status= $q->row();
                                     ?>
                                    <tr>
                                       <td><?= $ocounter ?></td>
                                       <td><?=$invoice_data->order_prefix;?><?= $myorder->order_id?></td>
                                       <td>
                                           <?php
                                           foreach($images as $image){
                                            
                                           ?>
                                           <img class="img-fluid img-circle user-thumbnail" src="<?php echo base_url() ?>uploads/orders/<?= $image ?>" alt="" style="height:80px;width:80px;border-radius:0%">
                                           <?php }?>
                                           </td>
                                           <td><?= $myorder->product_name?></td>
                                           <td><?= $myorder->qty ?></td>
                                           <td>&#8377; <?= $myorder->product_price ?></td>
                                       
                                       <td>
                                           <?php
                if($status->status=='confirmed'){
                ?>
                <label  class="badge badge-primary btn-rounded">Confirmed</label></td>
                <?php
                } else if($status->status=='dispached'){
                ?>
                <label  class="badge badge-success btn-rounded">Dispached</label><br/>
                <a href="<?=base_url()?>admin/invoices/<?= $myorder->order_id?>"><button class="btn btn-info" title="Generate Invoice"><i class="fa fa-file"></i></button>
                </td>
                <?php
                } else if($status->status=='completed'){
                ?>
                <label  class="badge badge-success btn-rounded">Completed</label><br/>
                <a href="<?=base_url()?>admin/invoices/<?= $myorder->order_id?>"><button class="btn btn-info" title="Generate Invoice"><i class="fa fa-file"></i></button>
                </td>
                <?php
                } else if($status->status=='cancelled'){
                ?>
                <label  class="badge badge-danger btn-rounded">Cancelled</label></td>
                <?php } ?>
                                           
                                       
                                    </tr>
                                   
                                <?php }  } ?>
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
   $this->load->view('admin/includes/footer');
   ?>