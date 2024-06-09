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
                  <h5 class="m-b-10">  Dashboard</h5>
                  <p class="m-b-0">Welcome to IMS dashboard</p>
               </div>
            </div>
            <div class="col-md-4">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href="<?= base_url()?>ims/index"> <i class="fa fa-home"></i> </a>
                  </li>
                  <li class="breadcrumb-item"><a href="<?= base_url()?>ims/index">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Reports</a>
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
                              <div class="col-8">
                                 <h4>Generate Report</h4>
                              </div>
                              <div class="col-4">
                              </div>
                           </div>
                        </div>
                        <div class="card-block text-center">
                           <form action="" method="post" enctype="multipart/form-data">
                              <div class="row">
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label for="title">Choose Ledger</label>
                                       <select   class="form-control" name="ledger" id="ledger" required>
                                           <option> Select ledger</option>
                                            <option value="stock"> Stock Expences</option>
                                             <option value="designer"> Designer Expences</option>
                                              <option value="other"> Other Expences</option>
                                              <option value="income"> Income</option>
                                              <option value="return_stock"> Debit Note</option>
                                           </select>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label for="title">From</label>
                                       <input type="date"  class="form-control" name="from" id="from" required>
                                    </div>
                                 </div>
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <label for="title">To</label>
                                       <input type="date"  class="form-control" name="to" id="to" required>
                                    </div>
                                 </div>
                                 
                                 <div class="col-md-3">
                                    <div class="form-group">
                                       <button type="submit"  name="generate" style="margin-top:30px;" class="btn btn-primary btn-block "    value="1">Genarate</button>
                                    </div>
                                 </div>
                                
                              </div>
                           </form>
                           <div class="row">
                               <div class="col-md-6">
                         <?= $this->session->flashdata('message') ?>
                         </div>
                         <div class="col-md-6"></div>
                         </div>
                           <?php if($stock) {?>
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-green"> ₹<span id="stockexp_value"></span></h4>
                                 <h6 class="text-muted m-b-0">Stock Expenses</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-money f-28"></i>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer bg-c-green">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0"><strong> GST Included ₹<span id="stockgst_value"></span> </strong></p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-money text-white f-16"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  	            <div class="col-xl-4 col-md-6"></div>
								<div class="col-xl-4 col-md-6"></div>
				            	
                            </div>
                           <div class="dt-responsive table-responsive" >
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
                                       
                                    </tr>
                                 </thead>
                                  <tbody>
                                     <?php $all_gst=0; $total_se=0;$i=0; foreach ($stock as $l): $i++; 
                                     
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
                                         	<td>₹<?=$l->unit_price * $l->qty;?></td>
                                         		<td>₹<?= $total_expenses=$l->unit_price * $l->qty + $total_gst;?></td>
                                         <?php 
                                         $price=$l->unit_price * $l->qty;
                                         $all_gst= $all_gst + $total_gst;
                                         $total_se=$total_se + $price;
                                         ?>
                                          
                                        
                                         
                                      </tr>

                                      <?php endforeach;?>
                                      <input type="text" value="<?=$all_gst;?>" id="total_stock_gst" style="visibility: hidden!important;">
                                          <input type="text" value="<?=$total_se + $all_gst;?>" id="total_stock_expense" style="visibility: hidden!important;">
                                 </tbody>
                              </table>
                           </div>
                           <?php } else if($designer){?>
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-green"> ₹<span id="designer_value"></span></h4>
                                 <h6 class="text-muted m-b-0">Designer Expenses</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-money f-28"></i>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer bg-c-green">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0"><strong>  </strong></p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-money text-white f-16"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  	            <div class="col-xl-4 col-md-6"></div>
								<div class="col-xl-4 col-md-6"></div>
				            	
                            </div>
							<div class="dt-responsive table-responsive">
                              <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Designer</th>
                                       <th>Payout Price</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php $total_de=0;$i=1; foreach($designer as $od):
                                    $d=$this->Admin_model->list_designers($od->designer_id);?>
                             <tr>
                                       <td><?=$i?></td>
                                       <td><?=$d->user_fullname?></td>
                                        <td> ₹<?=$od->payout?></td>
                                    </tr>
                                    <?php 
                                    $total_de=$total_de + $od->payout;
                                    ?>
                                   
                                 <?php  $i++; endforeach;?>
                                   <input type="text" value="<?=$total_de;?>" id="total_designer_expense" style="visibility: hidden!important;">
                                 </tbody>
                                 
                              </table>
                           </div>
                            <?php } else if($return_stock){?>
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-green"> ₹<span id="return_value"></span></h4>
                                 <h6 class="text-muted m-b-0">Debit Note </h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-money f-28"></i>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer bg-c-green">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0"><strong>  </strong></p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-money text-white f-16"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  	            <div class="col-xl-4 col-md-6"></div>
								<div class="col-xl-4 col-md-6"></div>
				            	
                            </div>
						<div class="dt-responsive table-responsive">
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
                                     <?php $i=0; $total_return=0; foreach ($return_stock as $l): $i++; 
                                     
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
<?php 
                                    $total_return=$total_return + $l->amount;
                                    ?>
                                   
                                 <?php   endforeach;?>
                                   <input type="text" value="<?=$total_return;?>" id="total_return_stock" style="visibility: hidden!important;">
                                 </tbody>
                              </table>
                           </div>
                            <?php } else if($other){?>
                            
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-green"> ₹<span id="other_value"></span></h4>
                                 <h6 class="text-muted m-b-0">Other Expenses</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-money f-28"></i>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer bg-c-green">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0"><strong>  </strong></p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-money text-white f-16"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  	            <div class="col-xl-4 col-md-6"></div>
								<div class="col-xl-4 col-md-6"></div>
				            	
                            </div>
                           <div class="dt-responsive table-responsive">
                              <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Title</th>
                                       <th>Date</th>
                                       <th>Note</th>
                                       <th>Price</th>
                                      
                                    
                                    </tr>
                                 </thead>
                                 <tbody>
                    	<?php  $i=0; $total_oth=0;foreach ($other as $l): $i++; ?>
                                    <tr>
                                         <td><?=$i?></td>
                                         <td><?=$l->title?></td>
                                         <td> <?=date("d-M-Y", strtotime("$l->date"))?></td>
                                         <td><?=$l->notes?></td>
                                          <td>₹<?=$l->price?></td>
                                      </tr>
                                       <?php 
                                    $total_oth=$total_oth + $l->price;
                                    ?>
                                     
                                      
                                 <?php   endforeach;?>
<input type="text" value="<?=$total_oth;?>" id="all_other_expences" style="visibility: hidden!important;" >
                                 </tbody>
                              </table>
                           </div>
                            <?php } else if($income){?>
                                                        <div class="row">
                                <div class="col-xl-4 col-md-6">
                <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-green"> ₹<span id="income_all_value"></span></h4>
                                 <h6 class="text-muted m-b-0">Income</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-money f-28"></i>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer bg-c-green">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0"><strong> </strong></p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-money text-white f-16"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  	            <div class="col-xl-4 col-md-6"></div>
								<div class="col-xl-4 col-md-6"></div>
				            	
                            </div>
                           <div class="dt-responsive table-responsive">
                              <table id="order-table" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="order-table_info">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Order Id</th>
                                        <th>Total Order Amount</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                        <?php  $inc=0;$ocounter=0;
                                     foreach($income as $myorder){
                                         $ocounter++;?>
                                         <tr>
                                       <td><?=$ocounter?></td>
                                        <td><?= $invoice_data->order_prefix ?><?=$myorder->id?></td> 
                                        <td><?=$myorder->currency?><?=$myorder->total?></td>
                                    </tr>
                                                                             <?php 
                                         
                                        
                                         $inc=$inc + $myorder->total;
                                         ?>
                                         
                                          
                               <?php  } ?>
                               <input type="text" value="<?=$inc;?>" id="total_income_" style="visibility: hidden!important;">
                                 </tbody>
                              </table>
                           </div>
                           <?php } else {?>
                           <img src="<?=base_url('assets/empty.gif')?>" alt="" style= "height:auto;">
                           <?php }?>
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
 <script>
      
      $(document).ready(function() {
   $.fn.dataTable.ext.errMode = 'none';
    var table = $('#order-table')
         .DataTable( {
         "pagingType": "full_numbers",
         dom: 'Bfrtip',
         buttons: [
             'copy', 'csv', 'excel', 'pdf', 'print'
         ]
     } );
    
     
   } );
   $(document).ready(function() {
        var all_stock_expenses= $('#total_stock_expense').val();
       var all_stock_gst= $('#total_stock_gst').val();
        var all_designer_exenses= $('#total_designer_expense').val();
        var all_other_expences= $('#all_other_expences').val();
        var all_income_exenses= $('#total_income_').val();
        var all_return= $('#total_return_stock').val();
       
       
        $('#stockexp_value').html(all_stock_expenses);
          $('#stockgst_value').html(all_stock_gst);
           $('#designer_value').html(all_designer_exenses);
           $('#other_value').html(all_other_expences);
            $('#income_all_value').html(all_income_exenses);
             $('#return_value').html(all_return);
            
           
        
});
      </script>