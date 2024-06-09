<div class="col-lg-4 col-md-12 d-none d-xs-none d-sm-none d-lg-block">
    <div class="card shadow-sm user_sidebar">
        <div class="card-body">
            <aside class="widget-area" id="secondary">
               <section class="widget widget_recent_comments">
                  <h3 class="widget-title sidebar_top_title">User Dashboard</h3>
                  <ul>
                     <li class="p-7 <?=($page=='user_details')?'sidebar_active':''?>">
                        <span class="comment-author-link sidebar_title">
                        <a href="<?=base_url('user_details')?>">User Details</a>
                        </span>
                     </li>
                     <li class="p-7 <?=($page=='shipping_details')?'sidebar_active':''?>">
                        <span class="comment-author-link sidebar_title">
                        <a href="<?=base_url('shipping_details')?>">Addresses</a>
                        </span>
                     </li>
                     <li class="p-7 <?=($page=='my_orders' || $page=='order_details')?'sidebar_active':''?>">
                        <span class="comment-author-link sidebar_title">
                        <a href="<?=base_url('my_orders')?>">My Orders</a>
                        </span>
                        
                     </li>
                     <li class="p-7 ">
                        <span class="comment-author-link sidebar_title">
                        <a href="<?=base_url('user_logout')?>">Logout</a>
                        </span>
                     </li>
                  </ul>
               </section>
            </aside>
            </div>
        </div>
</div>