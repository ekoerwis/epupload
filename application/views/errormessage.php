<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Eplant:ErrorMessage</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>images/favicon.ico">
    <link rel="icon" href="<?php echo base_url();?>images/favicon.ico" type="image/x-icon">
    
    <!-- jQuery -->
    <script src="<?php echo base_url();?>vendors/jquery/dist/jquery.min.js"></script>

   
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>dist/css/style.css" rel="stylesheet" type="text/css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>

<div class="hk-pg-wrapper">
<div class="container-fluid">
                <!-- Title -->

                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
  
                         <div class="row">
                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-4 align-self-center">
                         
                        <div class="d-62 bg-white rounded-circle mb-10 d-flex align-items-center justify-content-center mx-auto">
                            <i class="zmdi zmdi-settings font-28"></i>
                        </div>
                        <h1 class="display-4 mb-10 text-center"><?php echo $errortype." Kosong" ?></h1>
                        <p class="mb-30 text-center">Mohon Maaf <?php echo $errortype." Kosong" ?> yang dimasukan kosong, mohon isi dahulu atau hubungi administrator !</p>
                    
                            </div>
                            <div class="col-md-4">
                                
                            </div>
                        </div>
   
                    </div>
                </div>
                <!-- /Row -->
            </div>
</div>


    <!-- Init JavaScript -->
    <script src="<?php echo base_url();?>dist/js/init.js"></script>
    <script src="<?php echo base_url();?>dist/js/dashboard-data.js"></script>

     
    
</body>

</html>