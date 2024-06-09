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
                                 <h4>Manage Stock</h4>
                              </div>
                              <div class="col-4 text-right">
                                  <a href="<?= base_url()?>Ims/add_stock"><button class="btn btn-primary">+ Add</button></a>
                              </div>
                           </div>
                            <?= $this->session->flashdata('message') ?>
                        </div>
                        <div class="card-block">
                           <div class="dt-responsive table-responsive" style="overflow-y:scroll;max-height:400px;">
                              <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
                                 <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Products</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Total Quantity</th>
                                        <th>Available Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Selling Price</th>
                                        <th> Update date</th>
                                        <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i=0; foreach ($lists as $l): $i++; 
                                     $result = $this->db->where('id',$l->product)->get('products')->row();
                                     if($l->size){
                                         $col = $this->Color_model->getColor($l->color);
                                         $available = $this->Stock_model->calculate_stock($l->product,$col->color,$l->size);
                                     }
                                     else{
                                         $available = $this->Stock_model->calculate_stock($l->product);
                                     }
                                     ?>
                                     <tr>
                                        <td><?=$i?></td>
                                        <td><?=$result->name;?></td>
                                        <td><button class="badge badge-default" style="background-color:<?=$l->color;?>;border-color:<?=$l->color;?>;"><?=$l->color;?></button></td>
                                        <td><?php if($l->size){echo $l->size;} else{echo '____';}?></td>
                                        <td><?=$l->qty;?></td>
                                        <td><?=$available;?></td>
                                        <td>₹<?=$l->unit_price;?></td>
                                        <td> ₹<?=$l->selling_price;?></td>
                                        <td> <?= date("d-M-Y", strtotime("$l->date")); ?></td>
                                        <td>
                                        <button class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom" data-toggle="modal" data-target="#update_stock<?=$l->id?>">
                                            <i class="fa fa-pencil b1"></i></button>
                                        </td>
                                      </tr>
<div class="modal fade" id="update_stock<?=$l->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?base_url()?>update_stock" method="post">
      <div class="modal-body">
          <input type="hidden" name="qty" value="<?=$l->qty;?>">
          <input type="hidden" name="unit_price" value="<?=$l->unit_price;?>">
          
               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Quantity</label>
                                                   <div class="col-sm-10">
                                                      <input type="number" class="form-control" name="update_qty" required>
                                                   </div>
                                                </div>
               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Unit Price</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="update_unit_price" required>
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