<?php
/**
 * have your all includes here
 * that's all the files you want to use here
 */
require '../../inc/appNames.php';
require '../sessions/student_session.php';
require '../../functions/update_profile.php'
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php echo $appName ?>::Profile</title>
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
    require '../layouts/student_layout.php';
    ?>

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Student Profile</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="profile.php"><?php echo $student_name ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Student Profile</li>
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
                <div class="col-lg-4">
                    <div class="profile-card-3">
                        <div class="card">
                            <div class="user-fullimage">
                                <img src="../../assets/images/gallery/5.jpg" alt="user avatar" class="card-img-top">
                                <div class="details">
                                    <h5 class="mb-1 text-white ml-3"><?php echo $student_name ?></h5>
                                    <h6 class="text-white ml-3">Student</h6>
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <hr>
                                <a href="../sessions/student_logout.php"
                                   class="btn btn-danger shadow-danger btn-sm btn-round waves-effect waves-light m-1">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#profile" data-toggle="pill"
                                       class="nav-link active"><i class="icon-user"></i> <span
                                                class="hidden-xs">Profile</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#edit" data-toggle="pill"
                                       class="nav-link"><i class="icon-note"></i> <span
                                                class="hidden-xs">Edit</span></a>
                                </li>
                            </ul>
                            <div class="tab-content p-3">
                                <div class="tab-pane active" id="profile">
                                    <h5 class="mb-3">Supervisor Profile</h5>
                                    <hr>
                                    <h6><span class="fa fa-user"></span> Personal Info</h6>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Name</h6>
                                            <p>
                                                <?php echo $student_name ?>
                                            </p>
                                            <h6>Email</h6>
                                            <p>
                                                <?php echo $email ?>
                                            </p>
                                            <h6>Secret Code</h6>
                                            <p>
                                                <?php echo $secret_code ?>
                                            </p>
                                            <h6>Gender</h6>
                                            <p>
                                                <?php echo $gender ?>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>National ID</h6>
                                            <p>
                                                <?php echo $national_id ?>
                                            </p>
                                            <h6>Phone Number</h6>
                                            <p>
                                                <?php echo $phone_number ?>
                                            </p>
                                            <h6>Address</h6>
                                            <p>
                                                <?php echo $address ?>
                                            </p>
                                        </div>
                                    </div>

                                    <hr>
                                    <h6><span class="icon icon-graduation"></span> University Info</h6>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>University Name</h6>
                                            <p>
                                                <?php echo $uni_name ?>
                                            </p>
                                            <h6>Registration Number</h6>
                                            <p>
                                                <?php echo $reg_no ?>
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>Year Of Study</h6>
                                            <p>
                                                <?php echo $year_of_study ?>
                                            </p>
                                            <h6>Course Of Study</h6>
                                            <p>
                                                <?php echo $course_of_study ?>
                                            </p>
                                        </div>
                                    </div>

                                    <hr>
                                    <h6><span class="fa fa-building"></span> Attachment Info</h6>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>Period</h6>
                                            <p>
                                                <?php echo date('F d, Y', strtotime($start_date)) . ' - ' . date('F d, Y', strtotime($end_date)) ?>
                                            </p>
                                            <h6>Your Supervisor</h6>
                                            <p>
                                                <?php echo $supervisor_name ?>
                                            </p>
                                        </div>
                                    </div>
                                    <!--/row-->
                                </div>
                                <div class="tab-pane" id="edit">
                                    <form action="" method="post">
                                        <div class="form-group row">
                                            <label for="name" class="col-lg-3 col-form-label form-control-label">Full
                                                name</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" disabled name="name" id="name"
                                                       value='<?php echo $student_name ?>'>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="national_id" class="col-lg-3 col-form-label form-control-label">National
                                                ID</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" disabled name="national_id"
                                                       id="national_id"
                                                       value='<?php echo $national_id ?>'>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-lg-3 col-form-label form-control-label">Email
                                                Address</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="email" id="email"
                                                       value='<?php echo $email ?>'>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="phone_number"
                                                   class="col-lg-3 col-form-label form-control-label">Phone
                                                Number</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="phone_number"
                                                       id="phone_number"
                                                       value='<?php echo $phone_number ?>'>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address"
                                                   class="col-lg-3 col-form-label form-control-label">Address</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" type="text" name="address"
                                                       id="address"
                                                       value='<?php echo $address ?>'>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label"></label>
                                            <div class="col-lg-9">
                                                <input type="submit" class="btn btn-primary pull-right"
                                                       name="student_update"
                                                       value="Save Changes">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

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

<script src="../../assets/sweetalerts/sweetalert-dev.min.js"></script>
<script src="../../assets/sweetalerts/sweetalert-dev.js"></script>
<script src="../../assets/sweetalerts/sweetalert.min.js"></script>
</body>
</html>