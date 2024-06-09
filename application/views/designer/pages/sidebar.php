<style>
    .custum-table th{
        font-size:12px;
    }
    .social{
        padding-left:0px;
    }
    .instra a{
       background: #e4405f	;
    }
    .mail a{
       background:#0084ff;
    }
    .fb a{
       background: #4267B2;
    }
    .twitter a{
       background: #00aced;
    }
    .linked a{
       background: #007bb6;
    }
    .social li a i{
        color: white;
        margin-right: 7px;
        font-size: 16px;
        padding: 6px;
        padding-left: 8px;
    }
    .social-share li a {
        /*border: 1px solid black;*/
        height: 30px;
        margin-right: 10px;
        width: 30px;
        border-radius: 50%;
    }
</style>
 <div class="col-lg-4 col-md-12">
    <div class="card shadow-sm user_sidebar mb-2">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 col-3 p-0 text-center image_area">
                   
                    <img src="<?=($designer->user_image)?$designer->user_image:base_url('assets/img/user.png')?>" class="designer_image">
                    <label for="profile_pic" class="pro_pic"><span ><i class="fa fa-camera cam_size"></i></span></label>
                </div>
                <form method="post" id="upload_pro_pic" action="<?= base_url()?>Designer/update_picture" enctype="multipart/form-data"> 
                <input type="file" name="propic" id="profile_pic">
                  <button type="submit"
            class='input_submit'
            style="display:none"
       >
    </button>
                </form>
                <div class="col-md-9 col-l>g-9 col-sm-9 col-xs-9 col-9">
                    <h5><b><?=$designer->user_fullname;?></b></h5>
                    <h6>Designer</h6>
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
                     <button class="btn btn btn-primary" data-toggle="modal" data-target="#share_modal">Share Now  &nbsp;<i class="fas fa-share-square"></i></button> 
                      
                </div>
            </div>
           
        </div>
    </div>
     <aside class="widget-area" id="secondary">
               <section class="widget widget_recent_comments">
                  <!--<h3 class="widget-title sidebar_top_title">Designer Dashboard</h3>-->
                  <ul>
                      <li class="p-7 <?=($page=='start_design')?'sidebar_active':''?>">
                        <span class="comment-author-link sidebar_title">
                        <a href="<?=base_url('start_design')?>">Start Designing</a>
                        </span>
                     </li>
                     <li class="p-7 <?=($page=='my_store')?'sidebar_active':''?>">
                        <span class="comment-author-link sidebar_title">
                        <a href="<?=base_url('my_store')?>">My Store</a>
                        </span>
                     </li>
                     <li class="p-7 <?=($page=='my_design')?'sidebar_active':''?>">
                        <span class="comment-author-link sidebar_title">
                        <a href="<?=base_url('my_design')?>">My Designs</a>
                        </span>
                     </li>
                     <li class="p-7 <?=($page=='payouts')?'sidebar_active':''?>">
                        <span class="comment-author-link sidebar_title">
                        <a href="<?=base_url('payouts')?>">Payouts</a>
                        </span>
                     </li>
                     <li class="p-7 <?=($page=='account_details')?'sidebar_active':''?>">
                        <span class="comment-author-link sidebar_title">
                        <a href="<?=base_url('account_details')?>">Account Details</a>
                        </span>
                     </li>
                     <li class="p-7 ">
                        <span class="comment-author-link sidebar_title">
                        <a href="<?=base_url('designer_logout')?>">Logout</a>
                        </span>
                     </li>
                  </ul>
               </section>
            </aside>
 </div>
 <script>
 document.getElementById("profile_pic").onchange = function() {
    document.getElementById("upload_pro_pic").submit();
}
 </script>