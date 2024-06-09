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
                                 <h4>Stock Expenses</h4>
                              </div>
                              <div class="col-4 text-right">
                                  
                              </div>
                           </div>
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
                                       <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Selling Price</th>
                                        <th>GST</th>
                                     <th>  Date</th>
                                      <th>Product Expense</th>
                                       <th>Product Expense (With Gst)</th>
                                      <th>Return</th>
                                      
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i=0; foreach ($lists as $l): $i++; 
                                     
                                     $result = $this->db->where('id',$l->stock_id)->get('stock')->row();
                                     $pro = $this->db->where('id',$result->product)->get('products')->row();
                                     $this->db->where('id',1);
            $q = $this->db->get('invoice-details');
             $setting_data= $q->row();
             $products_gst=json_decode($setting_data->gstp);
            $pro_duct=$products_gst[1];
            foreach($products_gst[0] as $key=>$p_id){
             if($result->product== $p_id){
              $gst=$pro_duct[$key];
             }
            }
                                     
                                     
                                     ?>
                                     <tr>
                                         <td><?=$i?></td>
                                         <td><?=$pro->name;?></td>
                                         <td><button class="badge badge-default" style="background-color:<?=$result->color;?>;border-color:<?=$result->color;?>;"><?=$result->color;?></button></td>
                                         <td><?php if($result->size){echo $result->size;} else{echo '____';}?></td>
                                         <td> <?=$l->qty;?></td>
                                          <td>₹<?=$l->unit_price;?></td>
                                           
                                          <td> ₹<?=$l->selling_price;?></td>
                                          <td>Rate - <?=$gst;?>%
                                          <br/><br/>
                                          <?= $total_gst=$l->unit_price * $l->qty * $gst /100;?>
                                          </td>
                                           <td> <?= date("d-M-Y", strtotime("$l->date")); ?></td>
                                           <td>₹<?= $l->unit_price * $l->qty ;?></td>
                                         	<td>₹<?= $total_expenses=$l->unit_price * $l->qty + $total_gst;?></td>
                                         
                                      <td>
                                              <button class="btn waves-effect waves-light btn-primary btn-xs btn-icon btn-custom" data-toggle="modal" data-target="#update_stock<?=$l->id?>"><i
															  class="fa fa-pencil b1"></i></button>
													     
													      
                                         </td>
                                      </tr>
<div class="modal fade" id="update_stock<?=$l->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Return Stock</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?base_url()?>return_stock" method="post">
      <div class="modal-body">
          <input type="hidden" name="stock_id" value="<?=$l->stock_id?>">
          <input type="hidden" name="stock_exp_id" value="<?=$l->id?>">
          
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Amount</label>
                                                   <div class="col-sm-10">
                                                      <input type="number" class="form-control" name="amount" required>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Quantity</label>
                                                   <div class="col-sm-10">
                                                      <input type="number" class="form-control" name="qty" required>
                                                   </div>
                                                </div>
               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Note</label>
                                                   <div class="col-sm-10">
                                                      <textarea class="form-control" name="note" rows="4" required>
                                                          </textarea>
                                                   </div>
                                                </div>
              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="update" value="<?=$l->id?>" class="btn btn-primary" >Return</button>
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