<?php 
   $this->load->view('admin/includes/header');
   $this->load->view('admin/includes/sidebar');
   ?>
<style>
ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
   margin: 20px 0px 0px 20px;
    padding-left: 20px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
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
                  <div class="col-xl-3 col-md-6">
                     <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-purple"><?=$order_count?></h4>
                                 <h6 class="text-muted m-b-0">Order Dispatched </h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-bar-chart f-28"></i>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer bg-c-purple">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0">% change</p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-line-chart text-white f-16"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-green"><?=$order_confirm?></h4>
                                 <h6 class="text-muted m-b-0"> Order Confirmed</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-file-text-o f-28"></i>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer bg-c-green">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0">% change</p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-line-chart text-white f-16"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-red"><?=$order_cancel?></h4>
                                 <h6 class="text-muted m-b-0">Order Cancelled</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-trash-o f-28"></i>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer bg-c-red">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0">% change</p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-line-chart text-white f-16"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="card">
                        <div class="card-block">
                           <div class="row align-items-center">
                              <div class="col-8">
                                 <h4 class="text-c-green"><?=$order_complete?></h4>
                                 <h6 class="text-muted m-b-0"> Order Completed</h6>
                              </div>
                              <div class="col-4 text-right">
                                 <i class="fa fa-calendar-check-o f-28"></i>
                              </div>
                           </div>
                        </div>
                        <div class="card-footer bg-c-green">
                           <div class="row align-items-center">
                              <div class="col-9">
                                 <p class="text-white m-b-0">% change</p>
                              </div>
                              <div class="col-3 text-right">
                                 <i class="fa fa-line-chart text-white f-16"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               	
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
                        <div class="card-block" >
                           
                            
                           <div class="dt-responsive table-responsive" style="height:600px;overflow-y:scroll;" >
                              <table id="order-table" class="table table-striped table-bordered nowrap">
                                 <thead>
                                    <tr>
                                       <th>#</th>
                                       <th>Order Id</th>
                                       <th>Customer name</th>
                                       <th>Shipping Address</th>
                                       <th>Customer Phone</th>
                                       <th>Order Date</th>
                                       <th>Order Amount</th>
                                       <th>payment Method</th>
                                       <th>Status</th>
                                       <th>Place-order</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                     $ocounter=0;
                                     foreach($orderlists as $myorder){
                                         $ocounter++;
                                         $check_cancel=check_cancel_order($myorder->id);
                                         $q = $this->db->query("Select * from users where id= '$myorder->user_id'");
                                                 $user= $q->row();
                                                 $ul = $this->db->query("Select * from user_location where id= '$myorder->location_id'");
                                                 $user_location= $ul->row();
                                                                              ?>
                                    <tr>
                                        <td><?= $ocounter ?></td>
                                        <td><a href="<?base_url()?>order_details/<?= $myorder->id?>"> <?= $invoice_data->order_prefix ?><?= $myorder->id ?></a></td> 
                                        <td><?= $user->user_fullname;?></td>
                                        <td><?php if($myorder->is_shipping==1){?><?=$user->house_no; ?>&nbsp;<?= $user->city;?>&nbsp; <?= $user->state;?> &nbsp;<?= $user->pincode;?><?php } else {?><?=$user_location->house_no; ?>&nbsp;<?= $user_location->city;?>&nbsp; <?= $user_location->state;?> &nbsp;<?= $user_location->pincode;?><?php }?></td>
                                        <td><?= $user->user_phone;?></td>
                                        <td><?= date("d-M-Y", strtotime($myorder->created)) ;?> <?= date('h:i A', strtotime($myorder->created));?></td>
                                        <td><?= $myorder->currency;?><?= $myorder->total;?></td>
                                        <td> <?= $myorder->payment ?></td>
                                       
                                       <td>
                       <?php if($myorder->awb_code==''){
                                    if($myorder->status=="cancelled") {?>
                                            <label  class="badge badge-danger btn-rounded" style="text-transform:capitalize;"><?= $myorder->status?></label>
                                    <?php } else if($check_cancel){?>
                                    <label  class="badge badge-danger btn-rounded" style="text-transform:capitalize;">Requested for cancel</label>
                                   <?php  }
                                    else {?>
                                            <label  class="badge badge-primary btn-rounded" style="text-transform:capitalize;"><?= $myorder->status?></label>
                                    <?php } 
                             } else if($myorder->status=="cancelled"){?>
                                 <label  class="badge badge-danger btn-rounded" style="text-transform:capitalize;"><?= $myorder->status?></label>
                                <?php } else {?>
                                         <label  class="badge badge-primary btn-rounded" data-toggle="modal" data-target="#order_status<?= $myorder->id?>" onclick="get_status('<?=$myorder->awb_code?>')">Track here</label>
                                    <?php }?>
                </td>
                
                <td>
                    <?php if($myorder->awb_code==''){
                        if($check_cancel){ 
                                if($check_cancel->status==0){?>
                                    <label  class="badge badge-danger btn-rounded" style="text-transform:capitalize;">Requested for cancel</label>
                               <?php  } else {?>
                                    <label  class="badge badge-danger btn-rounded" style="text-transform:capitalize;">cancelled</label>
                                <?php }
                                  }
                        else if($myorder->status=='confirmed'){
                        ?>
                        <button class="btn btn-primary btn-sm"  data-toggle="modal" data-target="#place_order<?= $myorder->id?>" type="button"><i class="fa fa-rocket"></i> Place-Order </button>
                        <?php } 
                        else if($myorder->status=="cancelled"){ ?>
                         <label class="badge badge-danger">Cancelled</label>
                        <?php } 
                        else if($myorder->status=="pending"){ ?>
                         <label class="badge badge-danger">Pending</label>
                        <?php }
                    }  else if($myorder->status=="cancelled") { ?>
                     <label class="badge badge-danger">Cancelled</label>
                    <?php  } else {?>
                    <label class="badge badge-danger" data-toggle="modal" data-target="#measurement<?= $myorder->id?>">Placed</label>
                    <?php } ?>
                    </td>
                                         
                                       <td>
                                           
                                           <div class="dropdown" style="margin-top:10px;">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
        <?php  
        if($check_cancel){
                if($check_cancel->status==0){?>
                        <button class=" dropdown-item btn waves-effect waves-light btn-default btn-xs  btn-custom"  data-toggle="modal" data-target="#cancel<?= $myorder->id?>" type="button"> Approve Cancel request</button>
                        <!--<a href="<?=base_url('admin/cancel_request_order/'.$myorder->id)?>"><button class=" dropdown-item btn waves-effect waves-light btn-default btn-xs  btn-custom"  type="button"> Cancel request</button></a>-->
                   <?php  }?>
			<form action="" method="post" class="del_button">
				<input type="hidden" name="id" value="<?=$myorder->id?>">
                <button class="dropdown-item btn waves-effect waves-light btn-default btn-xs  btn-custom" title="Delete" type="submit" onclick="return confirm('Are you sure to delete ?')" name="delete" value="orders">delete Order</button>
			</form>
       <?php }
        else if($myorder->status=='confirmed' || $myorder->status=='pending' || $myorder->status=='placed') { 
          if($myorder->status=='placed') {
          //if($myorder->awb_code) {
        ?>
            <button class="dropdown-item btn waves-effect waves-light btn-default btn-xs btn-custom" data-toggle="modal" data-target="#dispatch<?= $myorder->id?>" type="button"> Dispatch Order</button>
        <?php } ?>
            <button class=" dropdown-item btn waves-effect waves-light btn-default btn-xs  btn-custom"  data-toggle="modal" data-target="#cancel<?= $myorder->id?>" type="button"> Cancel Order</button>
			<form action="" method="post" class="del_button">
				<input type="hidden" name="id" value="<?=$myorder->id?>">
                <button class="dropdown-item btn waves-effect waves-light btn-default btn-xs  btn-custom" title="Delete" type="submit" onclick="return confirm('Are you sure to delete ?')" name="delete" value="orders">delete Order</button>
			</form>
		<?php }
		else if($myorder->status=='dispatched'){?>
		    <form action="" method="post" class="del_button">
				<input type="hidden" name="id" value="<?=$myorder->id?>">
                <button class=" dropdown-item btn waves-effect waves-light btn-default btn-xs  btn-custom" title="Complete" type="submit" onclick="return confirm('Are you sure to Complete order ?')" name="complete" value="orders"> Complete Order</button>
			</form>
		<?php }
		else if($myorder->status=='completed'){?>
			<form action="" method="post" class="del_button">
			    <input type="hidden" name="id" value="<?=$myorder->id?>">
                <button class="dropdown-item btn-sm" title="Delete" type="submit" onclick="return confirm('Are you sure to delete ?')" name="delete" value="orders">delete Order</button>
			</form>
		<?php } 
		else if($myorder->status=='cancelled'){?>
		<form action="" method="post" class="del_button">
			<input type="hidden" name="id" value="<?=$myorder->id?>">
            <button class="dropdown-item btn waves-effect waves-light btn-danger btn-xs  btn-custom" title="Delete" type="submit" onclick="return confirm('Are you sure to delete ?')" name="delete" value="orders">delete Order</button>
		</form>
		<?php }?>
    
  </div>
</div>
                                          
                                          
                                       </td>
                                    </tr>
                                    <!--modal Area-->
<div class="modal fade" id="order_status<?= $myorder->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <strong><?= $invoice_data->order_prefix . $myorder->id ?></strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center" style="height:300px;overflow-y:scroll;">
          <img src="<?=base_url()?>uploads/load.gif" id="order_stuatus_loader<?=$myorder->awb_code?>">
            <h3 id="new_track_status<?=$myorder->awb_code?>"> </h3>
			<h4 id="current_status<?=$myorder->awb_code?>"></h4>
			<h4 id="update_date<?=$myorder->awb_code?>"></h4>
			<ul class="timeline" id="order_timeline<?=$myorder->awb_code?>">
			</ul>
	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="place_order<?= $myorder->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <strong>Check Deliverability</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	                <form action="" method="post" enctype="multipart/form-data">
            <?php 
                    $order_details=$this->Home_model->orderdata($myorder->id);
                    $total_weight=0;
                    $total_length=0;
                    $total_breadth=0;
                    $total_height=0;
                    $total_dim = array(); 

                    foreach($order_details as $details){
                        $this->db->where('id',1);
                        $q = $this->db->get('invoice-details');
                        $setting_data= $q->row();
                        $products_dimention=json_decode($setting_data->dimention);
                        
                        $weight_data=$products_dimention[1];
                        $length_data=$products_dimention[2];
                        $breadth_data=$products_dimention[3];
                        $height_data=$products_dimention[4];
                        
                        foreach($products_dimention[0] as $key=>$p_id){
                            if($details->product_id == $p_id){
                                if(!isset($total_dim[$p_id]["qty"]))
                                    $total_dim[$p_id]["qty"] = 0;
                                $total_dim[$p_id]['weight'] = $weight_data[$key];
                                $total_dim[$p_id]['length'] = $length_data[$key];
                                $total_dim[$p_id]['breadth'] = $breadth_data[$key];
                                $total_dim[$p_id]['height'] = $height_data[$key];
                                $total_dim[$p_id]['qty'] += $details->qty;
                            }
                        }
                    }
                    $actual_dim = $this->Common_model->process_dimensions($total_dim);
                    $total_weight = $actual_dim['weight'];
                    $total_length = $actual_dim['length'];
                    $total_breadth = $actual_dim['breadth'];
                    $total_height = $actual_dim['height'];
                ?>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label>Weight</label>
                                 <input type="text" class="form-control"  required name="weight" value="<?=$total_weight?>"/>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label>Length</label>
                                <input type="text" class="form-control"  required name="length" value="<?=$total_length?>"/>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label>breadth</label>
                                <input type="text" class="form-control"  required name="breadth" value="<?=$total_breadth?>"/>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label>height</label>
                                <input type="text" class="form-control"  required name="height" value="<?=$total_height?>"/>
                            </div>
                        </div>    
                            
                            
                            
                            
                                        <!--<div class="form-group">-->
                                        <!--    <label for="pickup_postcode">Pickup Postcode</label>-->
                                        <!--    <input name="pickup_postcode" type="number" class="form-control" id="pickup_postcode" value="" min="100000" max="999999" required />-->
                                        <!--</div>-->
                                         
                                        <!--<div class="form-group">-->
                                        <!--    <label for="delivery_postcode">Delivery Postcode</label>-->
                                        <!--    <input name="delivery_postcode" type="number" class="form-control" id="delivery_postcode" value="" min="100000" max="999999" required />-->
                                        <!--</div>-->
                                        <!--<div class="form-group">-->
                                        <!--    <label for="is_cod">COD Order?</label>-->
                                        <!--    <select class="form-control" name="is_cod" id="is_cod" >-->
                                        <!--        <option value="0"> No</option>-->
                                        <!--        <option value="1"> Yes</option>-->
                                        <!--    </select>-->
                                        <!--</div>-->
                                        <!--<div class="form-group">-->
                                        <!--    <label for="weight">Weight (in KGs)</label>-->
                                        <!--    <input name="weight" type="number" class="form-control" id="weight" min="1" value="" />-->
                                        <!--</div>-->
                                        <div class="form-group">
                                            <label for="weight">Comment *(if required)</label>
                                            <textarea name="comment" class="form-control" rows="4"></textarea>
                                        </div>
                                        <input type="hidden" name="shiprocket_order_id" value="<?= $myorder->id?>">
                                        <button type="submit" class="btn btn-primary" name="shiprocket_deliverability" value="1">+ Add</button>
                                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="measurement<?= $myorder->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <strong>Measurement</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	 
            <?php 
                    $order_details=$this->Home_model->orderdata($myorder->id);
                    $total_weight=0;
                    $total_length=0;
                    $total_breadth=0;
                    $total_height=0;
                    $total_dim = array(); 

                    foreach($order_details as $details){
                        $this->db->where('id',1);
                        $q = $this->db->get('invoice-details');
                        $setting_data= $q->row();
                        $products_dimention=json_decode($setting_data->dimention);
                        
                        $weight_data=$products_dimention[1];
                        $length_data=$products_dimention[2];
                        $breadth_data=$products_dimention[3];
                        $height_data=$products_dimention[4];
                        
                        foreach($products_dimention[0] as $key=>$p_id){
                            if($details->product_id == $p_id){
                                if(!isset($total_dim[$p_id]["qty"]))
                                    $total_dim[$p_id]["qty"] = 0;
                                $total_dim[$p_id]['weight'] = $weight_data[$key];
                                $total_dim[$p_id]['length'] = $length_data[$key];
                                $total_dim[$p_id]['breadth'] = $breadth_data[$key];
                                $total_dim[$p_id]['height'] = $height_data[$key];
                                $total_dim[$p_id]['qty'] += $details->qty;
                            }
                        }
                    }
                    $actual_dim = $this->Common_model->process_dimensions($total_dim);
                    $total_weight = $actual_dim['weight'];
                    $total_length = $actual_dim['length'];
                    $total_breadth = $actual_dim['breadth'];
                    $total_height = $actual_dim['height'];
                ?>
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <label>Weight</label>
                                 <input type="text" class="form-control"  required name="weight" value="<?=$total_weight?>"readonly/>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label>Length</label>
                                <input type="text" class="form-control"  required name="length" value="<?=$total_length?>" readonly/>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label>breadth</label>
                                <input type="text" class="form-control"  required name="breadth" value="<?=$total_breadth?>"readonly/>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label>height</label>
                                <input type="text" class="form-control"  required name="height" value="<?=$total_height?>" readonly/>
                            </div>
                        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="cancel<?= $myorder->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <strong>Cancel Order</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <h5>Are you sure to cancel this order ? </h5>
	                <form action="" method="post" enctype="multipart/form-data">
           
                           
                                        <div class="form-group">
                                            <label for="weight">Note *</label>
                                            <textarea name="note" class="form-control" rows="4" required></textarea>
                                        </div>
                                        <input type="hidden" name="order_id" value="<?= $myorder->id?>">
                                        <button type="submit" class="btn btn-primary" title="cancel "   name="cancel" value="orders">Submit</button>
                                    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cancel<?= $myorder->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <strong>Cancel Order</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Are you sure to cancel this order ? </h5>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="weight">Note *</label>
                <textarea name="note" class="form-control" rows="4" required></textarea>
            </div>
            <input type="hidden" name="order_id" value="<?= $myorder->id?>">
            <button type="submit" class="btn btn-primary" title="cancel "   name="cancel" value="orders">Submit</button>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>

<div class="modal fade" id="dispatch<?= $myorder->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <strong>Dispatch Order</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5>Are you sure to dispatch this order ? </h5>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="weight">AWB Code *</label>
                <input name="awb_code" class="form-control" required></input>
            </div>
            <input type="hidden" name="order_id" value="<?= $myorder->id?>">
            <button type="submit" class="btn btn-primary" title="Dispatch" name="dispatch" value="orders">Submit</button>
        </form>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
    </div>
  </div>
</div>
                                <!--modal area    -->
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
   $this->load->view('admin/includes/footer');
   ?>
   <script>
   
   function get_status(value){
     $("#order_stuatus_loader"+awb).show();
       var awb=value;
       $.ajax({
        url: "<?=base_url()?>home/getDeliveryStatus/"+awb,
        type: "GET",
        success: function(jd) {
            $("#order_stuatus_loader"+awb).hide();
            // document.getElement/ById("new_loader_order").style.display = "none";
             var obj = JSON.parse(jd);
            console.log(obj);
            if(obj.tracking_data && obj.tracking_data.track_status==0){
               
                document.getElementById("new_track_status"+awb).innerHTML = "Current Status: Placed";
            }
             else{
                document.getElementById("new_track_status"+awb).innerHTML = "Current Status: "+ obj.current_status;
                // $('#current_status'+awb).html(' Current Status: ' + obj.current_status + '');
                   $('#update_date'+awb).html(' Date: ' + obj.etd + '');
                //   $('#order_id'+awb).html(' Order Id :  ' + obj.order_id + '');
                   $('#order_timeline'+awb).html('');
                   $.each(obj.scans, function( index, jd_array ) {
                       $('#order_timeline'+awb).append('<li><a target="" href=""> ' + jd_array.location + '</a><a href="#" class="float-right">' + jd_array.date+ '</a><p>'+jd_array.activity +'</p>');
                   });
            
        }
        
        }
        
       });
   }

</script>