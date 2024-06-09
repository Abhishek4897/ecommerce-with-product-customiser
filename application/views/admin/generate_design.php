<?php 
   $this->load->view('admin/includes/header');
   $this->load->view('admin/includes/sidebar');
   ?>
<div class="pcoded-content">
    <div class="page-header">
        <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
               <div class="page-header-title">
                  <h5 class="m-b-10"> Admin Dashboard</h5>
                  <p class="m-b-0">Welcome to Admin dashboard</p>
               </div>
            </div>
            <div class="col-md-4">
               <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                     <a href=""> <i class="fa fa-home"></i> </a>
                  </li>
                  <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#!">Download Design</a>
                  </li>
               </ul>
            </div>
        </div>
     </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
            <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                           <h4>Download Design</h4>
                            <?= $this->session->flashdata('message') ?>
                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-12"></div>
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
<?php $this->load->view('admin/includes/footer');?>