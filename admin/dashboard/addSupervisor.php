<?php
/**
 * have your all includes here
 * that's all the files you want to use here
 */
require '../../inc/appNames.php';
require '../sessions/admin_session.php';
require '../../functions/add_supervisor_function.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php echo $appName ?>::Supervisor</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--favicon-->
    <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="../../inc/main.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<!-- Start wrapper-->
<div id="wrapper">

    <?php
    require 'admin.php';
    ?>

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Add Supervisor</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="changePassword.php"><?php echo $admin_name ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Supervisor</li>
                    </ol>
                </div>
                <div class="col-sm-3">
                    <a href="home.php">
                        <div class="btn-group float-sm-right">
                            <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i
                                    class="fa fa-home mr-1"></i> Home
                            </button>
                            <button type="button"
                                    class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                                    data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Breadcrumb-->

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <form id="personal-info" method="post" action="">
                            <input type="hidden" name="id" value='<?php echo $admin_id ?>'>
                            <h4 class="form-header text-uppercase">
                                <i class="fa fa-user-circle-o"></i>
                                Personal Info
                            </h4>
                            <div class="form-group row">
                                <label for="input-1" class="col-sm-2 col-form-label">Supervisor Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="supervisor_name"
                                           name="supervisor_name" placeholder="Enter Supervisor Name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input-2" class="col-sm-2 col-form-label">Email Address</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email"
                                           placeholder="Enter Email Address" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input-3" class="col-sm-2 col-form-label">National ID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="national_id"
                                           name="national_id" placeholder="Enter National ID" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input-4" class="col-sm-2 col-form-label">Contact Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="phone_number"
                                           name="phone_number" placeholder="Enter Contact Number" required>
                                </div>
                            </div>
                            <div class="form-footer">
                                <button type="submit" name="add_supervisor" class="btn btn-primary pull-right"><i class="fa fa-plus-square-o"></i> SAVE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!--End Row-->
        <!-- End container-fluid-->

    </div>
    <!--End content-wrapper-->


    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--Start footer-->
    <?php
    require('../../inc/footer.php')
    ?>
    <!--End footer-->

</div>
<!--End wrapper-->


<!--Include the .js files here-->
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/popper.min.js"></script>
<script src="../../assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="../../assets/plugins/simplebar/js/simplebar.js"></script>
<!-- waves effect js -->
<script src="../../assets/js/waves.js"></script>
<!-- sidebar-menu js -->
<script src="../../assets/js/sidebar-menu.js"></script>
<!-- Custom scripts -->
<script src="../../assets/js/app-script.js"></script>

<!-- Vector map JavaScript -->
<script src="../../assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../../assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Chart js -->
<script src="../../assets/plugins/Chart.js/Chart.min.js"></script>
<!-- Index js -->
<script src="../../assets/js/index.js"></script>

<script src="../../sweetalerts/sweetalert-dev.min.js"></script>
<script src="../../sweetalerts/sweetalert-dev.js"></script>
<script src="../../sweetalerts/sweetalert.min.js"></script>
<!--Form Wizard-->
<script src="../../assets/plugins/jquery.steps/js/jquery.steps.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../../assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<!--wizard initialization-->
<script src="../../assets/plugins/jquery.steps/js/jquery.wizard-init.js" type="text/javascript"></script>
</body>
</html>