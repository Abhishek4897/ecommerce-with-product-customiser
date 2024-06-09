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
                                       <!--<th>Order Id</th>-->
                                       <th>Designer</th>
                                       <!--<th>Template </th>-->
                                       <th>Payout Price</th>
                                      
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
                                       <!--<td>-->
                                       <!--  #ARTENO_IN_<?=$od->order_id;?>-->
                                       <!--</td>-->
                                       <td>
                                       <?php 
                                       if($od->designer_id){
                                           $d=$this->Admin_model->list_designers($od->designer_id);
                                           echo $d->user_fullname;
                                       }
                                       else{
                                           echo 'Admin';
                                       }
                                           ?>
                                           </td>
                                                                                 
                                       
                                       <td> <?php echo $od->total;?></td>
                                       <td>
                                           <?php
                                           if($od->status==1){?>
                                           <label class="badge badge-primary"> Pending </label>
                                               
                                        <?php   }
                                           else if($od->status==2){?>
                                                <label class="badge badge-info"> Requested </label>
                                          <?php }
                                           else if($od->status==3){?>
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
   $this->load->view('admin/includes/footer');
   ?>