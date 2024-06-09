<?php include('includes/header.php')?>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/categorypage.css">
<style>
.modal-backdrop.show {
    z-index:-1!important;
}
.filter_sidebar.modal.right .modal-dialog {
    position: fixed;
    top: 60px!important;
}

        .woocommerce-sidebar-area .collapse-widget .collapse-widget-title i {
           float: right;
        }
        .woocommerce-sidebar-area .collapse-widget .collapse-widget-title {
            font-size: 14px;
            font-weight: 500;
        }
       .filter-btn-pd {
            padding: 10px 15px!important;
            font-size: 13px!important;
        }
        .filter-header{
            z-index:999!important;
        }
        .form-control {
            background-color: #f5f5f5;
            width: 100%;
            height: 40px!important;
            padding: 10px 15px!important;
            margin-top: 10px!important;
            
        }
          .dropdown-item.active, .dropdown-item:active {
               color: black!important;
          }
          
            .category-section .dropdown-item.active {
                color: black;
            }
        
        
        /*.list{*/
        /*        width: 376px!important;*/

        /*}*/
        .link{
            color:black!important;
        }
        .sorting{
            border:1px solid gray;
            border-radius:5px;
        }
        .collapse-widget-title{
            font-weight:bold!important;
            font-size:16px!important;
            
        }
        .sortby{
            float:right!important;
        }
        @media only screen and (max-width: 767px){
            .ptb-60 {
            padding-top: 90px;
            padding-bottom: 35px;
        }
            
        }
        .nice-select .list{
            width:100%!important;
        }
        .custum-category-padding {
            padding-left: 25px;
            padding-right: 25px;
        }
        .nice-select .option {
            cursor: pointer;
            /*width: 153px;*/
        }
        .woocommerce-sidebar-area .collapse-widget .selected-filters-wrap-list ul li {
            display:block;
        }
        .dropdown-toggle{
            text-transform:capitalize;
        }
        .red_label {
          font-size: 10px;
        }
        .collapse-widget .selected-filters-wrap-list ul li {
         display: block;
        }
        .product-section {
            position: fixed;
            width: 100%!important;
            left: 20%;
            height: 100%;
            overflow-y: hidden!important;
        }
        @media screen and (max-width: 992px){
        .product-section {
        position: fixed;
        width:100%;
        left: 0%;
        height: 100%;
        overflow-y: hidden!important;
    }
   }
        .custum-category-padding {
            padding: 20px;
            /* padding-right: 0px!important; */
        }
        
        
        .sidebar-section {
            position: fixed;
            width: 20%;
            height: 100%;
          overflow-y: scroll;
            overflow-x: hidden!important;
        }
    .product-custum-slider{
        margin-left: 10px;
        margin-bottom: 10px;
      margin-top: 23px;
    }
    .btn-wishlist {
        border-radius: 50%;
        background: 0 0;
        border: 1px solid #d3d3d3;
        padding: 5px 5px 3px;
    }
    .btn-wishlist {
        height: 27px;
        width: 27px;
    }
    .nice-select{
        display:inline!important;
        /*width:auto!important;*/
    }
    .product-card .btn {
        padding: 5px 15px;
        font-size: 12px;
        border-radius: 20px!important;
    }
    .heading-section h4{
        font-size:18px;
    }
    .single-product-box .product-image img {
        height: 230px;
    }
    .designer_area{
        bottom:95px!important;
    }
   .product-section .form-control {
           background-color: #f5f5f5;
        /*width: 34%;*/
        margin-top: 20px;
        height: 30px;
        padding: 5 15px;
        border-radius: 50%;
        font-size: 14px;
        line-height: initial;
        color: #222;
        border: none;
        border-radius: 12px;
        -webkit-transition: .5s;
        transition: .5s;
        }
        .sortmenu button{
            font-size:14px!important;
        }
        .dropdown-item.active, .dropdown-item:active {
            color: #fff;
            text-decoration: none;
            background-color:white!important;
            font-size: 15px!important;
        }
    .category-section ::-webkit-scrollbar-thumb {
            background: white!important;
        }
        
        .chevron-down::after {
            margin-top:6px !important;
        }
        .category-section ::-webkit-scrollbar {
        width: 0px;
    }
    .btn.focus, .btn:focus {
    outline: 0;
     box-shadow:none!important; 
}
    @media (min-width: 768px){
    .col-md-8 {
    padding-left: 0px!important;
}}
         @media only screen and (max-width: 600px) {
             
            .custum-category-padding {
                padding-left: 0px!important;
                padding-right:0px!important;
            }
            .category-name,.filter{
                font-weight:bold;
            }
            .dropdown-toggle::after {
                display: inline-block;
                margin-left: 5.255em !important;
                
                vertical-align: .255em;
                content: "";
                border-top: .3em solid;
                border-right: .3em solid transparent;
                border-bottom: 0;
                border-left: .3em solid transparent;
    }
    .dropdown-toggle::after{
        margin-top:6px!important;
    }
            .container-fluid{
                padding-right:0px!important;
            }
       .red_label {
         margin-top: -6px;
        }
         .product-card .btn {
        padding: 5px 10px!important;
        border-radius: 20px!important;
    }
    .btn-wish .btn-wishlist{
        height:26px;
    }
    .single-product-box .product-image{
      margin-top: 10px;
    }
    .detail-modal img{
        height:22px;
    }
    .custum-category-padding {
        padding-left: 8px;
        padding-right: 8px;
    }
    .single-product-box .product-content .product-price {
            margin-top: 4px;
            margin-bottom: 5px;
        }
        .new-price {
            font-size: 14px!important;
        }
        .old-price, .offer {
            font-size: 11px!important;
        }
   }
    
</style>
<section class="d-lg-none d-md-block d-sm-block d-xs-block shadow-sm filter-header" >
   <div class="container">
      <div clas="row" style="display:flex">
         <div class="col-md-8 col-8 col-sm-8" style="border-right: 1px solid #eee;">
            <span class="category-name">Category Name (50)</span>
         </div>
         <div class="col-md-4 col-4 col-sm-4 text-right">
            <a data-toggle="modal" data-target="#filtersidebarModal"><span><i class="fa fa-filter" aria-hidden="true"></i> <span class="filter">Filter</span> <span class="cart-value">1</span></span></a>
         </div>
      </div>
   </div>
   <!--mobil filter sidebar-->
   <div class="modal right fade shoppingCartModal filter_sidebar" id="filtersidebarModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document" style="">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Select Product Filter</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span-->
            <!--        aria-hidden="true">&times;</span></button>-->
            <div class="modal-body p-0">
               <!--<h3>Arteno</h3>-->
               <div class="product-cart-content mobile-sidebar">
                  <div class="modal-body">
                     <div class="woocommerce-sidebar-area">
                        <div class="collapse-widget filter-list-widget">
                           <h3 class="collapse-widget-title">
                              All Category
                              <i class="fas fa-angle-up"></i>
                           </h3>
                           <div class="selected-filters-wrap-list">
                              <form>
                                 <ul>
                                    <li>
                                       <div class="form-group">
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" id="cat1">
                                             <label class="form-check-label" for="cat1">category Name</label>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="form-group">
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" id="cat2">
                                             <label class="form-check-label" for="cat2">category Name</label>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="form-group">
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" id="cat3">
                                             <label class="form-check-label" for="cat3">category Name</label>
                                          </div>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="form-group">
                                          <div class="form-check">
                                             <input class="form-check-input" type="checkbox" id="cat4">
                                             <label class="form-check-label" for="cat4">category Name</label>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </form>
                           </div>
                        </div>
                        <div class="collapse-widget collections-list-widget">
                           <h3 class="collapse-widget-title">
                              Brand
                              <i class="fas fa-angle-up"></i>
                           </h3>
                           <ul class="collections-list-row">
                              <li>
                                 <div class="form-group">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" id="brand1">
                                       <label class="form-check-label" for="brand1">Brand Name</label>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="form-group">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" id="brand1">
                                       <label class="form-check-label" for="brand1">Brand Name</label>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="form-group">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" id="brand1">
                                       <label class="form-check-label" for="brand1">Brand Name</label>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="form-group">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" id="brand1">
                                       <label class="form-check-label" for="brand1">Brand Name</label>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <!--<div class="collapse-widget size-list-widget">-->
                        <!--   <h3 class="collapse-widget-title">-->
                        <!--      Price-->
                        <!--      <i class="fas fa-angle-up"></i>-->
                        <!--   </h3>-->
                        <!--   <ul class="size-list-row">-->
                        <!--      <br>-->
                              
                        <!--      <br>-->
                        <!--   </ul>-->
                        <!--</div>-->
                        <div class="collapse-widget brands-list-widget">
                           <h3 class="collapse-widget-title">
                              Select By Designer
                              <i class="fas fa-angle-up"></i>
                           </h3>
                           <ul class="brands-list-row">
                              <li>
                                 <div class="form-group">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" id="designer">
                                       <label class="form-check-label" for="designer">Designer Name</label>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="form-group">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" id="designer">
                                       <label class="form-check-label" for="designer">Designer Name</label>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="form-group">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" id="designer">
                                       <label class="form-check-label" for="designer">Designer Name</label>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="form-group">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" id="designer">
                                       <label class="form-check-label" for="designer">Designer Name</label>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                        <br><br>
                        <div class="" style="position: fixed;bottom: 10px;width: 90%;z-index: 9999;">
                            <div class="row">
                                <div class="col-6 col-sm-6  pr-0 pl-1">
                                     <button class="btn filter-btn-pd btn-block btn-primary">Apply Filter</button>
                                </div>
                                <div class="col-6 pl-1 pr-1">
                                    <button class="btn btn-light btn-block mt-0 filter-btn-pd">Reset</button>
                                </div>
                            </div>
                        </div>
                        <!--<div class="collapse-widget price-list-widget">-->
                        <!--    <h3 class="collapse-widget-title">-->
                        <!--        Price-->
                        <!--        <i class="fas fa-angle-up"></i>-->
                        <!--    </h3>-->
                        <!--    <ul class="price-list-row">-->
                        <!--        <li><a href="#">$10 - $100</a></li>-->
                        <!--        <li class="active"><a href="#">$100 - $200</a></li>-->
                        <!--        <li><a href="#">$200 - $300</a></li>-->
                        <!--        <li><a href="#">$300 - $400</a></li>-->
                        <!--        <li><a href="#">$400 - $500</a></li>-->
                        <!--        <li><a href="#">$500 - $600</a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                        <!--<div class="collapse-widget color-list-widget">-->
                        <!--    <h3 class="collapse-widget-title">-->
                        <!--        Color-->
                        <!--        <i class="fas fa-angle-up"></i>-->
                        <!--    </h3>-->
                        <!--    <ul class="color-list-row">-->
                        <!--        <li><a href="#" title="Black" class="color-black"></a></li>-->
                        <!--        <li><a href="#" title="Red" class="color-red"></a></li>-->
                        <!--        <li><a href="#" title="Yellow" class="color-yellow"></a></li>-->
                        <!--        <li><a href="#" title="White" class="color-white"></a></li>-->
                        <!--        <li><a href="#" title="Blue" class="color-blue"></a></li>-->
                        <!--        <li><a href="#" title="Green" class="color-green"></a></li>-->
                        <!--        <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>-->
                        <!--        <li><a href="#" title="Pink" class="color-pink"></a></li>-->
                        <!--        <li><a href="#" title="Violet" class="color-violet"></a></li>-->
                        <!--        <li><a href="#" title="Blue Violet" class="color-blueviolet"></a></li>-->
                        <!--        <li><a href="#" title="Lime" class="color-lime"></a></li>-->
                        <!--        <li><a href="#" title="Plum" class="color-plum"></a></li>-->
                        <!--        <li><a href="#" title="Teal" class="color-teal"></a></li>-->
                        <!--    </ul>-->
                        <!--</div>-->
                     </div>
                  </div>
               </div>
               <!--<div class="product-cart-subtotal">-->
               <!--    <span>Subtotal</span>-->
               <!--    <span class="subtotal">$500.00</span>-->
               <!--</div>-->
            </div>
         </div>
      </div>
   </div>
   <!--mobil filter sidebar-->
</section>
<section class="products-collections-area ptb-60">
   <div class="container-fluid custum-section category-section">
      
      <div class="row" style="margin-right:0px!important" style="margin-right:0px!important">
         <div class="col-lg-3 col-md-3 p-0 d-none d-lg-block" style="border-right: 1px solid #eee;">
            <div class="heading-section ml-5">
               <h4><b>FILTER BY</b></h4>
            </div>
            <hr>
            <div class="woocommerce-sidebar-area p-4">
               <div class="collapse-widget filter-list-widget">
                  <h3 class="collapse-widget-title">
                     All Category
                     <i class="fas fa-angle-up"></i>
                  </h3>
                  <div class="selected-filters-wrap-list">
                     <form>
                        <ul>
                           <li>
                              <div class="form-group">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cat1">
                                    <label class="form-check-label" for="cat1">category Name</label>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="form-group">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cat2">
                                    <label class="form-check-label" for="cat2">category Name</label>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="form-group">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cat3">
                                    <label class="form-check-label" for="cat3">category Name</label>
                                 </div>
                              </div>
                           </li>
                           <li>
                              <div class="form-group">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="cat4">
                                    <label class="form-check-label" for="cat4">category Name</label>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </form>
                  </div>
               </div>
               <div class="collapse-widget collections-list-widget">
                  <h3 class="collapse-widget-title">
                     Brand
                     <i class="fas fa-angle-up"></i>
                  </h3>
                  <ul class="collections-list-row">
                     <li>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="brand1">
                              <label class="form-check-label" for="brand1">Brand Name</label>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="brand1">
                              <label class="form-check-label" for="brand1">Brand Name</label>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="brand1">
                              <label class="form-check-label" for="brand1">Brand Name</label>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="brand1">
                              <label class="form-check-label" for="brand1">Brand Name</label>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <!--<div class="collapse-widget size-list-widget">-->
               <!--   <h3 class="collapse-widget-title">-->
               <!--      Price-->
               <!--      <i class="fas fa-angle-up"></i>-->
               <!--   </h3>-->
               <!--   <ul class="size-list-row">-->
               <!--      <br>-->
               <!--      <div class="form-group" style="width:100%">-->
                        <!--<label for="exampleFormControlSelect1">Select Price</label>-->
               <!--         <select class="form-control" id="exampleFormControlSelect1">-->
               <!--            <option value="">High To Law</option>-->
               <!--            <option value="">Law To High</option>-->
               <!--         </select>-->
               <!--      </div>-->
               <!--      <br>-->
               <!--   </ul>-->
               <!--</div>-->
               <div class="collapse-widget brands-list-widget">
                  <h3 class="collapse-widget-title">
                     Select By Designer
                     <i class="fas fa-angle-up"></i>
                  </h3>
                  <ul class="brands-list-row">
                     <li>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="designer">
                              <label class="form-check-label" for="designer">Designer Name</label>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="designer">
                              <label class="form-check-label" for="designer">Designer Name</label>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="designer">
                              <label class="form-check-label" for="designer">Designer Name</label>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="designer">
                              <label class="form-check-label" for="designer">Designer Name</label>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <br>
               <!--<div class="collapse-widget price-list-widget">-->
               <!--    <h3 class="collapse-widget-title">-->
               <!--        Price-->
               <!--        <i class="fas fa-angle-up"></i>-->
               <!--    </h3>-->
               <!--    <ul class="price-list-row">-->
               <!--        <li><a href="#">$10 - $100</a></li>-->
               <!--        <li class="active"><a href="#">$100 - $200</a></li>-->
               <!--        <li><a href="#">$200 - $300</a></li>-->
               <!--        <li><a href="#">$300 - $400</a></li>-->
               <!--        <li><a href="#">$400 - $500</a></li>-->
               <!--        <li><a href="#">$500 - $600</a></li>-->
               <!--    </ul>-->
               <!--</div>-->
               <!--<div class="collapse-widget color-list-widget">-->
               <!--    <h3 class="collapse-widget-title">-->
               <!--        Color-->
               <!--        <i class="fas fa-angle-up"></i>-->
               <!--    </h3>-->
               <!--    <ul class="color-list-row">-->
               <!--        <li><a href="#" title="Black" class="color-black"></a></li>-->
               <!--        <li><a href="#" title="Red" class="color-red"></a></li>-->
               <!--        <li><a href="#" title="Yellow" class="color-yellow"></a></li>-->
               <!--        <li><a href="#" title="White" class="color-white"></a></li>-->
               <!--        <li><a href="#" title="Blue" class="color-blue"></a></li>-->
               <!--        <li><a href="#" title="Green" class="color-green"></a></li>-->
               <!--        <li><a href="#" title="Yellow Green" class="color-yellowgreen"></a></li>-->
               <!--        <li><a href="#" title="Pink" class="color-pink"></a></li>-->
               <!--        <li><a href="#" title="Violet" class="color-violet"></a></li>-->
               <!--        <li><a href="#" title="Blue Violet" class="color-blueviolet"></a></li>-->
               <!--        <li><a href="#" title="Lime" class="color-lime"></a></li>-->
               <!--        <li><a href="#" title="Plum" class="color-plum"></a></li>-->
               <!--        <li><a href="#" title="Teal" class="color-teal"></a></li>-->
               <!--    </ul>-->
               <!--</div>-->
            </div>
         </div>
         <div class="col-lg-9 col-md-9 p-0 ">
            
            <div class="d-none d-lg-block d-md-block">
                 <div class="row">
                    <div class="col-md-8" style="padding-left:0px!important;">
                        <div class="heading-section ml-5">
                           <h4><b>Category Name(500)</b></h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--<div class="sorting bg-dark">-->
                        <!--    <div class="row" style="margin:0px!important">-->
                        <!--    <div class="col-md-4" style="margin-top:14px">-->
                        <!--        <span class="sortby" style="font-weight:bold;font-size:16px">Sort By:</span>-->
                        <!--    </div>-->
                        <!--    <div class="col-md-8">-->
                        <!--         <select class="form-control right" style="display:inline!important">-->
                        <!--    <option value="">High to Low</option>-->
                        <!--    <option value="">High to Low</option>-->
                        <!--    <option value="">Low to High</option>-->
                        <!--</select>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <!--</div>-->
                        <div class="btn-group" style="margin-top:10px">
                          <button type="button" class="btn  btn-sm dropdown-toggle chevron-down" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border:1px solid grey;padding: 8px 30px;width:280px">
                           <span style="float:left"><b style="float:left">Sort By:</b> &nbsp; recommended</span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-left sortmenu" style="width: 280px;">
                            <button class="dropdown-item" type="button">Price: High to Low</button>
                            <button class="dropdown-item" type="button">Price: Low to High  </button>
                          </div>
                        </div>
                       
                    </div>
                </div>
            </div>
           <div class=" d-block d-sm-block d-md-none d-lg-none">
               <div class="instagram-area">
                  <div class="instagram-slides owl-carousel owl-theme">
                     <div class="product-custum-slider">
                        <div class="">
                           <div class="card text-center" style="">
                              <img class="card-img-top" src="https://cdn.toesmith.com/toesmith/slipon_45_oDajmVrev.png" alt="Card image cap">
                              <div class="card-body">
                                <center><a class="btn btn-light btn-rounded w-150 text-center" href="" style="width: 100px!important;padding: 7px 10px;">Shoes</a></center>
                              </div>
                            </div>
                        </div>
                        <!--<button class="btn btn-light btn-rounded text-center float-left" href="" target="_blank">Shoes</button>-->
                     </div>
                   
                  </div>
               </div>
            </div>
            <!--<hr class="mobile-top-padding-0">-->
            <div id="products-filter" class="products-collections-listing custum-category-padding category-product-section row" style="margin-bottom:65px;">
               <div class="col-lg-3 col-md-3 col-6 col-sm-6  products-col-item">
                  <div class="single-product-box product-card">
                     <div class="product-image" onMouseOver="show_slider('product_slider11','product_image11')" onMouseOut="hide_slider('product_slider11','product_image11')">
                        <a href="<?= base_url()?>product_detail" id="product_image11">
                        <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                        </a>
                        <div id="product_slider11" style="display:none">
                           <div id="carouselExampleIndicators11" class="carousel slide " data-ride="carousel">
                              <ol class="carousel-indicators">
                                 <li data-target="#carouselExampleIndicators11" data-slide-to="0" class="active"></li>
                                 <li data-target="#carouselExampleIndicators11" data-slide-to="1"></li>
                                 <li data-target="#carouselExampleIndicators11" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                 <div class="carousel-item active">
                                    <img class="d-block w-100 " src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="First slide">
                                 </div>
                                 <div class="carousel-item">
                                    <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="Second slide">
                                 </div>
                                 <div class="carousel-item">
                                    <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="Third slide">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <span style="position: absolute; top: 0px; left: 0px;">
                       <span class="red_label">Top Selling  <span class="label_arrow"></span></span>
                     </span>
                     <span style="position: absolute; top: 0px; right: 0px;">
                       <a class="detail-modal d-lg-none d-md-none d-sm-block d-xs-block" data-toggle="modal" data-target="#productQuickView"><img src="<?= base_url()?>assets/img/mpdetail.webp" style="height:22px;"></a>
                     </span>
                     <p class="designer_area d-none d-lg-block d-md-block"> <img src="https://cdn.toesmith.com/toesmith/designer-profile/2R7weHHKDkorbZUbAKtmi2_tBhIbL7Et.jpg" class="designer_image" alt="...">
                        <span class="design_title">Designed By:</span> <span class="three-dot designer-name">Richa Jain</span>
                     </p>
                     <div class="product-content text-left">
                        <h3><a href="<?= base_url()?>product_detail">Cool crystal</a></h3>
                        <div class="product-price">
                           <span class="new-price">₹ 299.00</span>
                           <span class="old-price">₹ 300.00</span>
                           <span class="offer-price"> (25% off)</span>
                        </div>
                        <a href="#" class="btn btn-light btn-edit">Edit Design</a>
                        <span class="btn-wish"><button class="btn-wishlist wished"><i class="far fa-heart"></i></button></span>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-3 col-6 col-sm-6  products-col-item">
                    <div class="single-product-box product-card">
                       <div class="product-image" onMouseOver="show_slider('product_slider12','product_image12')" onMouseOut="hide_slider('product_slider12','product_image12')">
                          <a href="#" id="product_image12">
                          <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                          </a>
                          <div id="product_slider12" style="display:none">
                             <div id="carouselExampleIndicators12" class="carousel slide " data-ride="carousel">
                                <ol class="carousel-indicators">
                                   <li data-target="#carouselExampleIndicators12" data-slide-to="0" class="active"></li>
                                   <li data-target="#carouselExampleIndicators12" data-slide-to="1"></li>
                                   <li data-target="#carouselExampleIndicators12" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                   <div class="carousel-item active">
                                      <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="First slide">
                                   </div>
                                   <div class="carousel-item">
                                      <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="Second slide">
                                   </div>
                                   <div class="carousel-item">
                                      <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="Third slide">
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <span style="position: absolute; top: 0px; left: 0px;">
                         <span class="red_label">Top Selling  <span class="label_arrow"></span></span>
                       </span>
                       <span style="position: absolute; top: 0px; right: 0px;">
                         <a class="detail-modal d-lg-none d-md-none d-sm-block d-xs-block" data-toggle="modal" data-target="#productQuickView"><img src="<?= base_url()?>assets/img/mpdetail.webp" style="height:22px;"></a>
                       </span>
                       <p class="designer_area d-none d-lg-block d-md-block"> <img src="https://cdn.toesmith.com/toesmith/designer-profile/2R7weHHKDkorbZUbAKtmi2_tBhIbL7Et.jpg" class="designer_image" alt="...">
                          <span class="design_title">Designed By:</span> <span class="three-dot designer-name">Richa Jain</span>
                       </p>
                       <div class="product-content text-left">
                          <h3><a href="#">Cool crystal</a></h3>
                          <div class="product-price">
                             <span class="new-price">₹ 299.00</span>
                             <span class="old-price">₹ 300.00</span>
                             <span class="offer-price"> (25% off)</span>
                          </div>
                          <a href="#" class="btn btn-light btn-edit">Edit Design</a>
                          <span class="btn-wish"><button class="btn-wishlist wished"><i class="far fa-heart"></i></button></span>
                       </div>
                    </div>
                </div>
               <div class="col-lg-3 col-md-3 col-6 col-sm-6  products-col-item">
                    <div class="single-product-box product-card">
                       <div class="product-image" onMouseOver="show_slider('product_slider20','product_image20')" onMouseOut="hide_slider('product_slider20','product_image20')">
                          <a href="#" id="product_image20">
                          <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                          </a>
                          <div id="product_slider20" style="display:none">
                             <div id="carouselExampleIndicators20" class="carousel slide " data-ride="carousel">
                                <ol class="carousel-indicators">
                                   <li data-target="#carouselExampleIndicators20" data-slide-to="0" class="active"></li>
                                   <li data-target="#carouselExampleIndicators20" data-slide-to="1"></li>
                                   <li data-target="#carouselExampleIndicators20" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                   <div class="carousel-item active">
                                      <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="First slide">
                                   </div>
                                   <div class="carousel-item">
                                      <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="Second slide">
                                   </div>
                                   <div class="carousel-item">
                                      <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="Third slide">
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <span style="position: absolute; top: 0px; left: 0px;">
                         <span class="red_label">Top Selling  <span class="label_arrow"></span></span>
                       </span>
                       <span style="position: absolute; top: 0px; right: 0px;">
                         <a class="detail-modal d-lg-none d-md-none d-sm-block d-xs-block" data-toggle="modal" data-target="#productQuickView"><img src="<?= base_url()?>assets/img/mpdetail.webp" style="height:22px;"></a>
                       </span>
                       <p class="designer_area d-none d-lg-block d-md-block"> <img src="https://cdn.toesmith.com/toesmith/designer-profile/2R7weHHKDkorbZUbAKtmi2_tBhIbL7Et.jpg" class="designer_image" alt="...">
                          <span class="design_title">Designed By:</span> <span class="three-dot designer-name">Richa Jain</span>
                       </p>
                       <div class="product-content text-left">
                          <h3><a href="#">Cool crystal</a></h3>
                          <div class="product-price">
                             <span class="new-price">₹ 299.00</span>
                             <span class="old-price">₹ 300.00</span>
                             <span class="offer-price"> (25% off)</span>
                          </div>
                          <a href="#" class="btn btn-light btn-edit">Edit Design</a>
                          <span class="btn-wish"><button class="btn-wishlist wished"><i class="far fa-heart"></i></button></span>
                       </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-3 col-6 col-sm-6  products-col-item">
                    <div class="single-product-box product-card">
                       <div class="product-image" onMouseOver="show_slider('product_slider13','product_image13')" onMouseOut="hide_slider('product_slider13','product_image13')">
                          <a href="#" id="product_image13">
                          <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                          </a>
                          <div id="product_slider13" style="display:none">
                             <div id="carouselExampleIndicators13" class="carousel slide " data-ride="carousel">
                                <ol class="carousel-indicators">
                                   <li data-target="#carouselExampleIndicators13" data-slide-to="0" class="active"></li>
                                   <li data-target="#carouselExampleIndicators13" data-slide-to="1"></li>
                                   <li data-target="#carouselExampleIndicators13" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                   <div class="carousel-item active">
                                      <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="First slide">
                                   </div>
                                   <div class="carousel-item">
                                      <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="Second slide">
                                   </div>
                                   <div class="carousel-item">
                                      <img class="d-block w-100" src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="Third slide">
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                      
                       <span style="position: absolute; top: 0px; right: 0px;">
                         <a class="detail-modal d-lg-none d-md-none d-sm-block d-xs-block" data-toggle="modal" data-target="#productQuickView"><img src="<?= base_url()?>assets/img/mpdetail.webp" style="height:22px;"></a>
                       </span>
                       <p class="designer_area d-none d-lg-block d-md-block"> <img src="https://cdn.toesmith.com/toesmith/designer-profile/2R7weHHKDkorbZUbAKtmi2_tBhIbL7Et.jpg" class="designer_image" alt="...">
                          <span class="design_title">Designed By:</span> <span class="three-dot designer-name">Richa Jain</span>
                       </p>
                       <div class="product-content text-left">
                          <h3><a href="#">Cool crystal</a></h3>
                          <div class="product-price">
                             <span class="new-price">₹ 299.00</span>
                             <span class="old-price">₹ 300.00</span>
                             <span class="offer-price"> (25% off)</span>
                          </div>
                          <a href="#" class="btn btn-light btn-edit">Edit Design</a>
                          <span class="btn-wish"><button class="btn-wishlist wished"><i class="far fa-heart"></i></button></span>
                       </div>
                    </div>
                 </div>
                <!--product details modal for mobile view-->
                  <div class="modal fade productQuickView" id="productQuickView" tabindex="-1" role="dialog" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="right: 0!important; left: auto;">
                           <span aria-hidden="true"><i class="fas fa-times"></i></span>
                           </button>
                           <div class="row align-items-center">
                              <div class="col-lg-12 col-md-12">
                                  
                                   <div class="product-content">
                                    <h3><a href="#">T-shirt</a></h3>
                                    <div class="product-price">
                                       <span class="new-price">₹ 299.00</span>
                                       <del class="old-price">₹ 300.00</del>
                                       <span class="offer-price"> (25% off)</span>
                                    </div>
                                    
                                    <a href="" class="link">More details >></a>
                                    <!--<ul class="product-info">-->
                                    <!--   <li> </li>-->
                                    <!-- </ul>-->
                                 </div>
                                     <div class="">
                                       <div class="products-page-gallery">
                                            <div class="product-page-gallery-main">
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                            </div>
                                            <div class="product-page-gallery-preview">
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                                <div class="item">
                                                    <img src="https://admin.anshuwap.com/new_arteno/assets/img/t-shirt2.png" alt="image">
                                                </div>
                                            </div>
                                        </div>
                                     </div>
                                      <center><button type="submit" class="btn btn-primary mt-2"><i class="far fa-heart"></i> Add to Wislist</button></center>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            </div>
            
         </div>
      </div>
   </div>
</section>
<?php include('includes/footer.php')?>