    <?php 
    $payout=payout($d_id);
    foreach($payout as $pay):
    $templates=$this->Designer_model->templates($pay->template_id);
    ?>
    <div class="card mt-5 shadow-sm">
            <div class="card-body">
               
             <span class="order_id">Order ID: <?= site_setting()->order_prefix . $pay->order_id;?></span><br>
                <div class="row">
            <div class="col-md-2 col-sm-6 col-6">
                <div class="product-thumbnail">
                    <a href="#">
                    <img src="<?=$templates->screenshot?>" alt="item" style="height:70px;">
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                <div class="product-name">
                    <a href="#" class="shipping_name"><?= $templates->name." (".$pay->template_id.")"?></a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-6">
                 <span class="shipping_address"><strong>Payout Price:</strong> <?= site_setting()->currency;?> <?=$pay->payout?></span>
                 <?php if($pay->status==3){?>
                 <span class="shipping_address" data-toggle="modal" data-target="#payout_response<?= $pay->id?>" style="cursor:pointer;"><strong><i class="fa fa-file"></i> Payout response</strong></span>
                <?php }?>
              </div>
            <div class="col-md-4 col-sm-6 col-6 text-center">
                <?php if($pay->status==1){?>
               <a href="<?=base_url('Designer/add_request/'.$pay->id)?>"><button class="btn btn-info" style="border-radius:20px;">Send Request</button></a>  
               <?php } else if($pay->status==2){ ?>
               <button class="btn btn-warning text-white" style="border-radius:20px;">Requested</button>  
               <?php } else if($pay->status==3){?>
               <button class="btn btn-success" style="border-radius:20px;">Completed</button>
                
               <?php }?>
               <!--tracking modal start-->
        <div class="modal fade" id="payout_response<?=$pay->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Payout Response</strong></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
          <div class="row">
              <div class="col-md-12">
                  <img src="<?=$pay->payment_screenshot;?>"  alt="..." style="height:140px;" >
                  <br>
                  <?php if($pay->note){?>
                  <p><?=$pay->note;?></p>
                  <?php }?>
                  </div>
              </div>
          
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
        <!--tracking modal end-->
            </div>
        </div>
            </div>
        </div>
    <?php endforeach;?>