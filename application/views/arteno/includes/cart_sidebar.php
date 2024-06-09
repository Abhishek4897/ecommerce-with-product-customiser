<style>
 .custom-checkbox-designer {
        display: block;
        vertical-align: top;
        line-height: 26px;
        font-size: 16px;
        font-weight: 500;
        margin-left: 11px;
    }
    .custom-checkbox-designer .checkmark i {
        display: none;
        margin-top: 3px;
        margin-left: 4px;
        font-size: 10px;
    }
    /* When the checkbox is checked, add a blue background */
    .custom-checkbox-designer input:checked ~ .checkmark {
        background-color:black;
    }
    /* Hide the browser's default checkbox */
    .custom-checkbox-designer input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }

    /* Create a custom checkbox */
    .custom-checkbox-designer .checkmark {
        position: absolute;
        top: 3px;
        left: 0;
        height: 18px;
        width: 18px;
        border: 1px solid lightgrey;
        border-radius: 5px;
        background: white;
    }

    .custom-checkbox-designer input:checked ~  .checkmark i {
        display: block;
        color:white;
    }
    /*custom checkbox whole css*/

.btn-light:hover, .btn-light:focus {
    color: #fff!important;
    background-color: #222;
    border-color: #222;
}

.btn-darkest:hover, .btn-darkest:focus {
    color: #222 !important;
    background-color: transparent;
    border-color: #222;
}
.btn-darkest {
    border-radius: 20px;
    color: #fff !important;
    font-weight: 600;
}
.shoppingCartModal .modal-content .modal-body .product-cart-content .product-cart .product-content .product-price span {
    display:inline-flex!important;
}
.product-cart-subtotal{
    font-weight:700;
    color:black!important;
}
.product-cart-subtotal .subtotal{
    color:black!important;
}
.cartmodal .modal-content .modal-body .product-cart-content .product-cart .product-content span {
    font-size: 12px;
    /*display: inline-flex;*/
    margin-bottom: 3px;
    color: black;
    font-weight:600;
}

.cartmodal .close {

    color: black !important;
    font-size: 27px;
    outline: 0!important;
    line-height: initial;
    -webkit-transition: .5s;
    transition: .5s;
    right: 16px;
    top: 17px;
    z-index: 0;
}
.price {
    min-height: 35px;
     margin-top: 0px; 
}
.cart-control{
    display:flex;
}
.cartmodal .modal-content .modal-body .product-cart-content .product-cart .product-content h3 a, h3 {
    color: black;
     font-family: ProximaNova, sans-serif!important;
    letter-spacing: 1 !important;
    /*margin-bottom: .5rem;*/
    font-weight: 600;
    /*line-height: 1.2;*/
    font-size:1.25rem;
    text-transform: capitalize !important;
}




.cartmodal .modal-content .modal-body .product-cart-content .product-cart {
    display:flex!important;
    padding-left: 0px!important;
}

    @media only screen and (min-width: 768px) {
        .cart-control i , .cart-primary i{
    margin-top:3px;
   }
        .cartmodal .close{
            right:32px !important;
        }
   .cartmodal.modal.right .modal-dialog{
    /*width:380 !important;*/
    width:380px !important;
}
.cartmodal  .product-content{
    margin-left:5%;
}
.cartmodal .modal-content .modal-body .product-cart-content .product-cart .product-image {
    position: static;
    left: 0;
    top: 0;
    width: 100px;
}
}
@media only screen and (max-width: 600px) {
    .shoppingCartModal .modal-content .modal-body .product-cart-content .product-cart .product-content .product-price .cart-control, .cart-primary {
        font-size:9px !important;
    }
    .cartmodal.col-sm-6,.col-6{
    /*padding-right: 10px;*/
    /*padding-left: 10px;*/
}

.cartmodal .modal-content .modal-body .product-cart-content .product-cart .product-image img {
    height: auto!important;
}
.cartmodal.modal.right .modal-dialog{
    /*width:270 !important;*/
    width:270px !important;
}
.cartmodal  .product-content{
    margin-left:5%;
}
.cartmodal .modal-content .modal-body .product-cart-content .product-cart .product-image {
    position: static;
    left: 0;
    top: 0;
    width: 100px;
}
}
</style>

<!--cart sidebar start-->
                   
                    <div class="modal right fade shoppingCartModal cartmodal" id="sidebarModalcart" tabindex="-1" role="dialog" style="text-align: left!important;">
                        <div class="modal-dialog" role="document" >
                            <div class="modal-content">
                                <div class="modal-body" id="minicart_details" style="overflow-y:scroll;height:500px;">
                               
                            </div>
                            </div>
                        </div>
                    </div>
                    <div id="condition_model" class="modal fade" tabindex="-1">
   <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
         <!--<div class="modal-header" style="border-bottom: 0px">-->
         <!--   <button type="button" class="close modal_remove_button" data-dismiss="modal">&times;</button>-->
         <!--</div>-->
         <div class="modal-body p-4 custum-modal-padding" style="" >
                <h4>Things to Check for: </h4>
                <ul>
                 <li>Text size Is legible and color stands out against background.</li>
                 <li>Nothing is overlapping or too close to the margins.</li>
                 <li>Information is accurate and spelled correctly.</li>
                 <li>Images are clear and don't appear blurry.</li>
                </ul>
                <br> <br>
                <!--<div class="form-check" style="margin-left: -20px;">-->
                <!--    <input type="checkbox" class="form-check-input" id="condition_verify" required>-->
                <!--    <label class="form-check-label" for="condition_verify">I have reviewed and approved my design.</label>-->
                <!--</div>-->
                
                 <div class="form-check" >
                   
                    <label class="form-check-label custom-checkbox-designer" for="condition_verify">
                         <input type="checkbox" class="form-check-input" checked="checked" id="condition_verify" required>
                        &emsp;I have reviewed and approved my design.
                       
                        <span class="checkmark"><i class="fa fa-check"></i></span>
                        </label>
                </div>
                <center>
                <a href="<?= base_url()?>checkout"><button class="openModel btn btn-primary text-uppercase text-center btn-lg btn-block view_more checkout-button submitbtn" style="margin-top:10px; width: 80%;">CHECKOUT</button></a>
                </center>
                <button type="button" class="close modal_remove_button" data-dismiss="modal" style="outline: 0px!important;">&times;</button>
         </div>
      </div>
   </div>
</div>
                   <script>
                   minicartdata_items();
    function minicartdata_items_loader(){
        $.ajax({
            method:"POST",
            url:"<?= base_url()?>Front/cart_item/",
            success:function(r){
                var cart_count = r.trim();
                // alert(cart_count);
                if(cart_count>0) {
                    $("#cart_side_validate").show();
                    $("#cart_no_side_validate").hide();
                    $("#cart_side_validate_mobile").show();
                    $("#cart_no_side_validate_mobile").hide();
                 } else {
                    $("#cart_side_validate").hide();
                    $("#cart_no_side_validate").show();
                     $("#cart_side_validate_mobile").hide();
                    $("#cart_no_side_validate_mobile").show();
                }
            }
        });
    }
    function minicartdata_items(){
        $.ajax({
            method:"POST",
            url:"<?= base_url()?>Front/minicart_data/",
            dataType:"json",
            success:function(r){
                $("#minicart_details").html(r);
            }
        });
    }
    $(document).on("click",".removecartsession",function(){
               var index  = $(this).data("id");
                         swal({
                    title: "",
                    text: "Are you sure to remove from cart?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                          if (willDelete) {
                        $.ajax({
                    url:"<?= base_url()?>/Front/removesessioncart/",
                    method:"POST",
                    data:{'index':index},
                    success:function(r){
                    if(r.trim()<1){
                    location.reload();
                    $("#mobile").html('<div>'+
                    '<center>'+
                    '<img src="<?= base_url()?>assets/images/gif/empty-cart.jpeg" class="mt-4" style="height:auto;width:50%" ><br>'+
                    '<a href="<?= base_url()?>/Home "class="btn btn-primary mt-4">Continue Shopping</a>'+
                    '</center>'+
                    '</div>');
                    $("#desktop").html('<div>'+
                    '<center>'+
                    '<img src="<?= base_url()?>assets/images/gif/empty-cart.jpeg" class="mt-4" style="height:auto;width:50%" ><br>'+
                    '<a href="<?= base_url()?>/Home "class="btn btn-primary mt-4">Continue Shopping</a>'+
                    '</center>'+
                    '</div>');
                    
                    }
                    swal("Product removed from cart successfully.",{
                    icon: "success",
                    button: false,
                    timer: 1200,
                    });
                    minicartdata_items();
                    cart_item()
                    
                    
                    }
                    
                    });
                    } 
                    });
               
             
             
              
            });
    $(document).on("click",".removecart",function() {
           
           var id = $(this).data("rowid");
           var cart_id = $(this).data("cart_id");
    
            swal({
                  title: "",
                  text: "Are you sure to remove from cart?",
                  icon: "warning",
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
            $("#cart"+cart_id).remove();
             $.ajax({
               url:"<?= base_url()?>Front/remove_cart/",
               method:"POST",
               data:{
               Id :id,
               cart_id:cart_id
               },
               success:function(r){
                   if(r < 1){
                       $("#mobile").html("");
                       $("#desktop").html("");
                   }
                    if(r<1){
                   location.reload();
                   }
                    minicartdata_items();
                    cart_item();
                    swal("Product removed from cart successfully.",{
                    icon: "success",
                    button: false,
                    timer: 1200,
                    });
                   
               }
           });
                  } 
            });
           });
    function cart_item(){
           $.ajax({
               method:"POST",
               url:"<?= base_url()?>Front/cart_item/",
               success:function(r){
                   $(".cartCount").html(r.trim());
               }
           });
       }
       function close_sidebar(){
          $('#sidebarModalcart').modal('hide'); 
       }
       $(document).on("click",".openModel",function(e){
        event.preventDefault(e);
         if($('#condition_verify').prop("checked") == true){
                window.location.href="<?= base_url()?>checkout";    
        } else { 
                 
                  swal("Please tick conditions checkbox",{
                            position: 'top-end',                     
                            icon: "warning",
                            button: false,
                            timer: 1200,
                    });
                    return false;  
                }
        
   });
   $(document).on("click",".order_submit_button",function(e){
        event.preventDefault(e);
        $("#condition_model").modal('show');
   });
                   </script>
                    <!--cart sidebar end-->