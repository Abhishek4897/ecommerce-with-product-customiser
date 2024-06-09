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
                                 <h4>Payouts</h4>
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
                                       <th>Design</th>
                                       <th>Designer</th>
                                       <th>orders </th>
                                       <th>Payout Price</th>
                                       <th>Total price</th>
                                       <th>Status</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php 
                                    $price="50";
                                    
                                    $i=1; foreach($order as $od):
                                    
                                    ?>
                                    
                                    <tr>
                                       <td><?=$i?></td>
                                       <td>
                                         <?=$od->design;?>
                                       </td>
                                       <td>
                                       <?php 
                                       if($od->design_by){
                                           $d=$this->Ims_model->list_designers($od->design_by);
                                           echo $d->user_fullname;
                                       }
                                       else{
                                           echo 'Ims';
                                       }
                                           ?>
                                           </td>
                                       <td><?=$od->qty;?></td>
                                       </td>                                                 
                                       <td>
                                         ₹ <?=$price;?>
                                       </td>
                                       <td> ₹<?php echo $t=$od->qty * $price;?></td>
                                       <td>
                                           <?php
                                           if($od->payout_status==0){?>
                                           <label class="badge badge-primary"> Pending </label>
                                               
                                        <?php   }
                                           else if($od->payout_status==1){?>
                                                <label class="badge badge-info"> Pending In Ims </label>
                                          <?php }
                                           else if($od->payout_status==2){?>
                                               <label class="badge badge-success"> Completed </label>
                                        <?php   }
                                           ?>
                                       </td>
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