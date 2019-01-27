<?php
/**
 * have your all includes here
 * that's all the files you want to use here
 */
require '../../inc/appNames.php';
require '../sessions/supervisor_session.php';

$sqlOne = mysqli_query($connection, "SELECT * FROM student_table");
$sqlTwo = mysqli_query($connection, "SELECT * FROM supervisor_table");
$sqlThree = mysqli_query($connection, "SELECT * FROM attachment_table WHERE supervisor_id='$id'");

$students = $supervisors = $in_progress = $finished = 0;

while ($rowOne = mysqli_fetch_array($sqlOne)) {
    $students++;
}
while ($rowTwo = mysqli_fetch_array($sqlTwo)) {
    $supervisors++;
}

while ($rowThree = mysqli_fetch_array($sqlThree)) {
    $end_date = $rowThree['end_date'];
    if (strtotime($end_date) < date('Y-m-d')) {
        $finished++;
    } else {
        $in_progress++;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php echo $appName ?>::Home</title>
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
    require '../layouts/supervisor_layout.php';
    ?>

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">

            <!--Start Dashboard Content-->

            <div class="row mt-3">
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card border-info border-left-sm">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-info"><?php echo number_format($finished)?></h4>
                                    <span>Cleared</span>
                                </div>
                                <div class="align-self-center w-circle-icon rounded-circle gradient-scooter">
                                    <i class="fa fa-bar-chart-o text-white"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card border-danger border-left-sm">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-danger"><?php echo number_format($in_progress) ?></h4>
                                    <span>In Progress</span>
                                </div>
                                <div class="align-self-center w-circle-icon rounded-circle gradient-bloody">
                                    <i class="icon-pie-chart text-white"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card border-success border-left-sm">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-success"><?php echo number_format($students) ?></h4>
                                    <span>Students</span>
                                </div>
                                <div class="align-self-center w-circle-icon rounded-circle gradient-quepal">
                                    <i class="icon-graduation text-white"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-xl-3">
                    <div class="card border-warning border-left-sm">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body text-left">
                                    <h4 class="text-warning"><?php echo number_format($supervisors) ?></h4>
                                    <span>Supervisors</span>
                                </div>
                                <div class="align-self-center w-circle-icon rounded-circle gradient-blooker">
                                    <i class="fa fa-users text-white"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-0">
                            Recent Orders
                            <div class="card-action">
                                <div class="dropdown">
                                    <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret"
                                       data-toggle="dropdown">
                                        <i class="icon-options"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="javascript:void();">Action</a>
                                        <a class="dropdown-item" href="javascript:void();">Another action</a>
                                        <a class="dropdown-item" href="javascript:void();">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void();">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Photo</th>
                                    <th>Product ID</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Shipping</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td>Iphone 5</td>
                                    <td><img src="assets/images/products/01.png" class="product-img" alt="product img">
                                    </td>
                                    <td>#9405822</td>
                                    <td><span class="badge gradient-quepal text-white shadow">Paid</span></td>
                                    <td>$ 1250.00</td>
                                    <td>03 Aug 2017</td>
                                    <td>
                                        <div class="progress shadow" style="height: 6px;">
                                            <div class="progress-bar gradient-quepal" role="progressbar"
                                                 style="width: 100%"></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Earphone GL</td>
                                    <td><img src="assets/images/products/02.png" class="product-img" alt="product img">
                                    </td>
                                    <td>#9405820</td>
                                    <td><span class="badge gradient-blooker text-white shadow">Pending</span></td>
                                    <td>$ 1500.00</td>
                                    <td>03 Aug 2017</td>
                                    <td>
                                        <div class="progress shadow" style="height: 6px;">
                                            <div class="progress-bar gradient-blooker" role="progressbar"
                                                 style="width: 60%"></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>HD Hand Camera</td>
                                    <td><img src="assets/images/products/03.png" class="product-img" alt="product img">
                                    </td>
                                    <td>#9405830</td>
                                    <td><span class="badge gradient-bloody text-white shadow">Failed</span></td>
                                    <td>$ 1400.00</td>
                                    <td>03 Aug 2017</td>
                                    <td>
                                        <div class="progress shadow" style="height: 6px;">
                                            <div class="progress-bar gradient-bloody" role="progressbar"
                                                 style="width: 70%"></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Clasic Shoes</td>
                                    <td><img src="assets/images/products/04.png" class="product-img" alt="product img">
                                    </td>
                                    <td>#9405825</td>
                                    <td><span class="badge gradient-quepal text-white shadow">Paid</span></td>
                                    <td>$ 1200.00</td>
                                    <td>03 Aug 2017</td>
                                    <td>
                                        <div class="progress shadow" style="height: 6px;">
                                            <div class="progress-bar gradient-quepal" role="progressbar"
                                                 style="width: 100%"></div>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Hand Watch</td>
                                    <td><img src="assets/images/products/05.png" class="product-img" alt="product img">
                                    </td>
                                    <td>#9405840</td>
                                    <td><span class="badge gradient-bloody text-white shadow">Failed</span></td>
                                    <td>$ 1800.00</td>
                                    <td>03 Aug 2017</td>
                                    <td>
                                        <div class="progress shadow" style="height: 6px;">
                                            <div class="progress-bar gradient-bloody" role="progressbar"
                                                 style="width: 40%"></div>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div><!--End Row-->

            <!--End Dashboard Content-->

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