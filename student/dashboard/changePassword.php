<?php
/**
 * have your all includes here
 * that's all the files you want to use here
 */
require '../../inc/appNames.php';
require '../sessions/student_session.php';
require '../../functions/reset_password_function.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php echo $appName ?>::Change Password</title>
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
    require 'student.php';
    ?>

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Change Password</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="changePassword.php"><?php echo $student_name ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
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

            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title text-center">Change Password</div>
                            <hr>
                            <form method="post" action="">
                                <input type="hidden" name="national_id" value='<?php echo $national_id ?>'>
                                <div class="form-group">
                                    <label for="currentPassword">Current Password</label>
                                    <input type="password" class="form-control" id="currentPassword"
                                           name="currentPassword" placeholder="Enter Current Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="newPassword">New Password</label>
                                    <input type="password" class="form-control" id="newPassword" name="newPassword"
                                           placeholder="Enter New Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="confirmPassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword"
                                           name="confirmPassword" placeholder="Enter Confirm Password" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="student_reset"
                                            class="btn btn-primary btn-block shadow-primary px-5"><i
                                                class="icon-lock"></i> Change Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->

        </div>
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
</body>
</html>