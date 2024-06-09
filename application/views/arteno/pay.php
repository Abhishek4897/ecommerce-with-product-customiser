<body style="background-image:url('<?= base_url()?>assets/globalimage_0.jpg'); background-size:cover;">
    
    <style>
        .btn{
            height:auto;
            width:auto;
            padding:10px 15px 10px 15px;
            box-shadow:0px 0px 0px 1px;
            border:none;
            background:white;
            cursor:pointer;
            display:inline;
            margin-right:30px;
        }
        button{
            display:inline!important;
        }
        .bg-primary{
            background:pink;
        }
        .bg-danger{
            background:tomato;
        }
        .card-body h1,h4,p{
            color:white;
            text-align:center;
        }
        .card-body{
            text-align:center;
            margin:auto;
            
        }
    </style>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
$orderdata=$this->session->userdata('orderdetails');
$userdata=$this->Home_model->userbyid($orderdata->user_id);
?>
    <div class="bg-gray" id="page-content">        
        
        <div class="container-fluid">
            <div class="card">
                <div class="card-body"></br></br></br>
                    
                    <!--<a href="<?= base_url() ?>cancel_payment/<?= $orderdata->id ?>" onclick="return (confirm('Are you sure to cancel?')?true:false)"><button class="btn bg-danger" id="cancel_payment">Cancel</button></a>-->
                    <button class="btn bg-danger" id="change_payment_method"><a href="<?= base_url('checkout/re_payment_method') ?>">Cancel</a></button>
                    <button class="btn bg-primary" id="rzp-button1">Retry</button>
                    <br />
                    <br />
                    <br />
                    <button class="btn bg-danger" id="change_payment_method"><a href="<?= base_url('checkout/re_payment_method') ?>">Change Payment Method</a></button>
                    
                </div>
            </div>
        </div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>

<script>
// live secret key
// iSkV4jyNfCa39FwkbT9ullJD

//rzp_test_i7AoJuy98WjL5L
var logo_img = "<?= base_url()?>assets/logo/artenologo.png";
// var logo_img = "<?= base_url()?>assets/images/shareimage.png";
var options = {
    "key": "rzp_live_ZI7Ls1AddVuEdF", // Enter the Key ID generated from the Dashboard
    "amount": "<?= $orderdata->total*100 ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Arteno Creations Private Limited",
    "description": "payment to Arteno Creations Private Limited",
    "image": logo_img,
    "order_id": "<?php echo $orderdata->txn_id ?>", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "callback_url": "<?= base_url()?>Home/order_status",
    "prefill": {
        "name": "<?= $userdata->user_fullname ?>",
        "email": "<?= $userdata->user_email ?>",
        "contact": "<?= $userdata->user_phone ?>"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#000000"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        window.location.href='<?= base_url()?>cancel_payment/<?=$orderdata->id;?>';
        // alert(response.error.code);
        // alert(response.error.description);
        // alert(response.error.source);
        // alert(response.error.step);
        // alert(response.error.reason);
        // alert(response.error.metadata);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
$("#rzp-button1").click();
</script>
    </div>
     <!--End Sticky Cart-->
     <!--Footer-->
