<?php include(__DIR__.'/../includes/header.php')?>
<?php include(__DIR__.'/../includes/user_header.php')?>
<link rel="preload" as="style" onload='this.onload=null,this.rel="stylesheet"' charset="UTF-8"  href="<?=base_url()?>assets/css/user.css">


          <?php //include('pages/sidebar.php')?>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
          <?= $this->session->flashdata('register'); ?>
          <?php 
          if($page=='user_details')
          include('user_details.php');
          if($page=='shipping_details')
          include('user_address.php');
          if($page=='my_orders')
          include('user_order.php');
          if($page=='order_details')
          include('user_order_details.php');
          if($page=='reset_password')
          include('update_password.php');
          ?>

<?php include(__DIR__.'/../includes/footer.php')?>