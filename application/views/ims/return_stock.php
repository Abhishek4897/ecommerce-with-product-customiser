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
                                 <h4>Debit Note</h4>
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
                                       <th>Stock Expense id</th>
                                       <th>Products</th>
                                       <th>Color</th>
                                       <th>Size</th>
                                       <th>Quantity</th>
                                       
                                        <th>Amount</th>
                                      <th>Note</th>
                                       <th>  Date</th>
                                      
                                      
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php $i=0; foreach ($lists as $l): $i++; 
                                     
                                     $result = $this->db->where('id',$l->stock_id)->get('stock')->row();
                                     $pro = $this->db->where('id',$result->product)->get('products')->row();
                                     
                                     
                                     
                                     ?>
                                     <tr>
                                         <td><?=$i?></td>
                                         <td><?=$l->stock_exp_id;?></td>
                                         <td><?=$pro->name;?></td>
                                         <td><button class="badge badge-default" style="background-color:<?=$result->color;?>;border-color:<?=$result->color;?>;"><?=$result->color;?></button></td>
                                         <td><?php if($result->size){echo $result->size;} else{echo '____';}?></td>
                                         <td> <?=$l->qty;?></td>
                                          
                                           
                                          <td> ₹<?=$l->amount;?></td>
                                          <td>
                                          <?= $l->note ;?>
                                          </td>
                                           <td> <?= date("d-M-Y", strtotime("$l->date")); ?></td>
                                         	
                                         
                                      
                                      </tr>

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