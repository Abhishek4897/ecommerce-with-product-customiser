<div class="login-content">
    <div class="card shadow-sm">
            <div class="card-body">
                    <div class="faq-accordion">
         <ul class="accordion">
            <li class="accordion-item">
               <a class="accordion-title" href="javascript:void(0)"><span class="navigate">CREATE DESIGNS </span><p class="f-16">Enter our customization studio to start creating unique designs.
Select the product you want to design : </p> <i class="fas fa-chevron-up"></i></a>
               <div class="accordion-content show" style="display: none;">
                  <?php include('design_product.php');?>
               </div>
            </li>
           <li class="accordion-item">
               <a class="accordion-title" href="javascript:void(0)"><span class="navigate">MY DESIGNS </span><p class="f-16">Manage and edit your existing designs. Unpublish or publish designs to your store.Track number of designs sold, details of all your orders / sales. </p> <i class="fas fa-chevron-up"></i></a>
               <div class="accordion-content show" style="display: none;">
                  <?php include('designer_designs.php');?>
               </div>
            </li>
            <li class="accordion-item">
               <a class="accordion-title" href="javascript:void(0)"><span class="navigate">Payouts</span><p class="f-16">Check your payout details.</p> <i class="fas fa-chevron-up"></i></a>
               <div class="accordion-content show" style="display: none;">
                  <?php include('payout_list.php');?>
               </div>
            </li>
             <li class="accordion-item">
               <a class="accordion-title" href="javascript:void(0)"><span class="navigate">Account Details</span><p class="f-16">Add/Edit your account details.</p> <i class="fas fa-chevron-up"></i></a>
               <div class="accordion-content show" style="display: none;">
                  <?php include('details_form.php');?>
               </div>
            </li>
         </ul>
      </div>
                  </div>
                </div>
  </div>