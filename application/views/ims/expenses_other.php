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
                     <a href="<?=base_url()?>ims"> <i class="fa fa-home"></i> </a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?=base_url()?>ims">Dashboard</a></li>
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
                              <div class="col-8">
                                 <h4>Other Expenses</h4>
                              </div>
                              <div class="col-4 text-right">
                                  <a href="<?= base_url()?>Ims/add_expenses"><button class="btn btn-primary">+ Add</button></a>
                              </div>
                           </div>
                        </div>
                        <div class="card-block">
                           <div class="dt-responsive table-responsive" style="overflow-y:scroll;max-height:400px;">
                              <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Title</th>
                                       <th>Date</th>
                                       <th>Note</th>
                                       <th>Price</th>
                                       <th>Action</th>
                                    
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i=0; foreach ($lists as $l): $i++; 
                                    
                                     ?>
                                     <tr>
                                         <td><?=$i?></td>
                                         <td><?=$l->title;?></td>
                                         <td> <?= date("d-M-Y", strtotime("$l->date")); ?></td>
                                         <td><?=$l->notes;?></td>
                                         
                                          <td>₹<?=$l->price;?></td>
                                          <td>
                                        <button class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom" data-toggle="modal" data-target="#update_stock<?=$l->id?>"><i
															  class="fa fa-pencil b1"></i></button>
													     
													      
                                         </td>
                                      </tr>
<div class="modal fade" id="update_stock<?=$l->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Expenses</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url()?>ims/update_expenses" method="post">
      <div class="modal-body">
          
               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Title</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" value="<?=$l->title?>" class="form-control" name="title" required>
                                                   </div>
                                                </div>
               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Price</label>
                                                   <div class="col-sm-10">
                                                      <input type="number" class="form-control" value="<?=$l->price?>" name="price" required>
                                                   </div>
                                                </div>
               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Note</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" value="<?=$l->notes?>" name="notes" required>
                                                   </div>
                                                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update" value="<?=$l->id?>" class="btn btn-primary" >Update</button>
      </div>
      </form>
    </div>
  </div>
</div>
                                      <?php endforeach;?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="styleSelector"></div>
      </div>
   </div>
</div>
<?php
   $this->load->view('ims/includes/footer');
   ?>