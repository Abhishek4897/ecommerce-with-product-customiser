<style>
    .custum-table th{
        font-size:12px;
    }
</style>
<div class="card shadow-sm user_sidebar mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 col-3 p-0 text-center image_area">
                    <img src="<?=($designer->user_image)?$designer->user_image:base_url('assets/img/user.png')?>" class="designer_image">
                    <label for="profile_pic" class="pro_pic"><span ><i class="fa fa-camera cam_size"></i></span></label>
                </div>
                <input type="file" name="propic" id="profile_pic">
                <div class="col-md-9 col-lg-9 col-sm-9 col-xs-9 col-9">
                    <span class="designer_name"><?=$designer->user_fullname;?></span><br/>
                   <!--<span class="role">Designer</span>-->
                    <hr class="mt-0 mb-0 pb-2" style="display:none;">
                    <span class="mt-2" style="display:none;"><i style="font-size: 21px; margin-right: 10px;" class="fa fa-thumbs-up" aria-hidden="true" ></i></span><span style="display:none;"><span style="color:red">2</span> page Likes</span>
                </div>
                <div class="col-md-12 col-12 mt-3">
                   
                    <table class="table">
                      <thead class="custum-table">
                        <tr>
                          <th scope="col" class="text-center">Total Orders</th>
                          <th scope="col" class="text-center">Total Earnings</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center"><?=count_order($d_id)?></td>
                          <td class="text-center"><?=earnings($d_id)?></td>
                        </tr>
                      
                      </tbody>
                    </table>
                     <p>Make your page viral by sharing your e-shop page with friends, family and on social media to drive traffic to your page.</p>
                     <div class="row">
                         <div class="col-6">
                            <button class="btn btn btn-primary" data-toggle="modal" data-target="#share_modal">Share Now  &nbsp;<i class="fas fa-share-square"></i></button>
                         </div>
                         <div class="col-6">
                            <a href="<?=base_url('designer_logout')?>" style="float:right;"><button class="btn btn btn-light" style="float:right;"><i class="fas fa-power-off"></i> Logout</button></a>
                         </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>