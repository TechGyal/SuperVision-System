<?php
/**
 * have your all includes here
 * that's all the files you want to use here
 */
require '../inc/appNames.php';
require '../functions/login_function.php';

if (isset($_SESSION['login_admin'])) {
    header("location: ../admin/dashboard/home.php");
} else if (isset($_SESSION['login_supervisor'])) {
    header("location: dashboard/home.php");
} else if (isset($_SESSION['login_student'])) {
    header("location: ../student/dashboard/home.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php echo $appName ?></title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--favicon-->
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="../inc/main.css" rel="stylesheet"/>
</head>
<body>

<!-- Start wrapper-->
<div id="wrapper">
    <div class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-5 animated bounceInDown">
        <div class="card-body">
            <div class="card-content p-2">
                <div class="text-center">
                    <img src="../assets/images/logo-icon.png">
                </div>
                <div class="card-title text-uppercase text-center py-3">Supervisor Sign In</div>
                <form method="post" action="">
                    <div class="form-group">
                        <div class="position-relative has-icon-right">
                            <label for="national_id" class="sr-only">Enter National ID</label>
                            <input type="text" id="national_id" name="national_id"
                                   class="form-control form-control-rounded"
                                   placeholder="Enter National ID" required>
                            <div class="form-control-position">
                                <i class="icon-user"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="position-relative has-icon-right">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" id="password" name="password"
                                   class="form-control form-control-rounded"
                                   placeholder="Password" required>
                            <div class="form-control-position">
                                <i class="icon-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="form-row mr-0 ml-0">
                        <div class="form-group col-6">
                            <!--                            <div class="icheck-primary">-->
                            <!--                                <input type="checkbox" id="user-checkbox" checked="" />-->
                            <!--                                <label for="user-checkbox">Remember me</label>-->
                            <!--                            </div>-->
                        </div>
                        <div class="form-group col-6 text-right">
                            <a href="password/resetPassword.php">Reset Password</a>
                        </div>
                    </div>
                    <button type="submit" name="super_login"
                            class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Sign In
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
</div>
<!--wrapper-->


<!--Include the .js files here-->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="../assets/plugins/simplebar/js/simplebar.js"></script>
<!-- waves effect js -->
<script src="../assets/js/waves.js"></script>
<!-- sidebar-menu js -->
<script src="../assets/js/sidebar-menu.js"></script>
<!-- Custom scripts -->
<script src="../assets/js/app-script.js"></script>

<!-- Vector map JavaScript -->
<script src="../assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Chart js -->
<script src="../assets/plugins/Chart.js/Chart.min.js"></script>
<!-- Index js -->
<script src="../assets/js/index.js"></script>

<script src="../assets/sweetalerts/sweetalert-dev.min.js"></script>
<script src="../assets/sweetalerts/sweetalert-dev.js"></script>
<script src="../assets/sweetalerts/sweetalert.min.js"></script>
</body>
</html>