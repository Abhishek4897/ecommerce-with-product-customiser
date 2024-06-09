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
                     <a href="<?= base_url()?>ims/index"> <i class="fa fa-home"></i> </a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?= base_url()?>ims/index">Dashboard</a>
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
                                       <th>Designer</th>
                                       <th>order-details </th>
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
                                       <td>
                                           <?php 
                                           $d=$this->Admin_model->list_designers($od->designer_id);
                                           echo $d->user_fullname;
                                           ?>
                                         
                                       </td>
                                       <td>
                                          <?php  
	       $order_id= json_decode($od->order_id);
	       foreach($order_id as $key=>$o_id){
	       $payoutlst=$this->Admin_model->payout_details($o_id);
	     echo $payoutlst->design;
	     echo '('.$payoutlst->product_name.')';?><br/>
	   <?php    }
	    ?>
                                           </td>
                                       </td>                                                 
                                       <td>
                                         ₹ <?=$od->payout;?>
                                       </td>
                                       <td><a href="<?=base_url()?>ims/designer_payment_details/<?=$od->designer_id?>"><button class="btn btn-info"><i class="fa fa-money"></i> Payment Details</button></td>
                                       <td><a href="<?=base_url()?>ims/payout_response/<?=$od->id?>"><button class="btn btn-primary"><i class="fa fa-comment"></i> Response</button></td>
                                    </tr>
                                   
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
   $this->load->view('ims/includes/footer');
   ?>