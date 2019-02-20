<?php
/**
 * have your all includes here
 * that's all the files you want to use here
 */
require '../../inc/appNames.php';
require '../sessions/student_session.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php echo $appName ?>::Mail Inbox</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--favicon-->
    <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="../../inc/table.css" rel="stylesheet" type="text/css"/>
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
                    <h4 class="page-title">Mail Inbox</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javaScript:void();"><?php echo $appName ?></a></li>
                        <li class="breadcrumb-item"><a href="javaScript:void();">Mail</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mail Inbox</li>
                    </ol>
                </div>
                <div class="col-sm-3">
                    <div class="btn-group float-sm-right">
                        <a href="../dashboard/home.php" class="btn btn-outline-primary waves-effect waves-light"><i
                                    class="fa fa-home mr-1"></i> Home
                        </a>
                        <button type="button"
                                class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light"
                                data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">

                                <!-- Left sidebar -->
                                <?php require '../layouts/mail_layout.php' ?>
                                <!-- End Left sidebar -->

                                <!-- Right Sidebar -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="btn-toolbar" role="toolbar">
                                                <div class="btn-group mr-1">
                                                    <a href="inbox.php"
                                                       class="btn btn-outline-primary waves-effect waves-light"><i
                                                                class="fa fa-refresh"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-lg-4">
                                            <div class="position-relative has-icon-right">
                                                <input type="text" class="form-control" placeholder="search mail">
                                                <div class="form-control-position">
                                                    <i class="fa fa-search text-info"></i>
                                                </div>
                                            </div>
                                        </div>


                                    </div> <!-- End row -->

                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <?php
                                            if ($connection) {
                                                $result = mysqli_query($connection, "SELECT * FROM notification_table WHERE student_id='$student_id' ORDER BY id DESC");
                                                if ($result == TRUE) {
                                                    echo ' <div class="table-responsive">';
                                                    echo ' <table class="table table-hover">';
                                                    echo ' <tbody>';

                                                    while ($row = mysqli_fetch_array($result)) {
                                                        echo '<tr>';
                                                        if ($row['status'] == 1) {
                                                            echo ' <td class="mail-rateing">
        <i class="fa fa-envelope-open text-success"></i>
    </td>';
                                                        } else {
                                                            echo ' <td class="mail-rateing">
        <i class="fa fa-envelope text-danger"></i>
    </td>';
                                                        }

                                                        echo ' <td>
        <a href="read.php?action=read&id=' . $row["id"] . '">' . $row['subject'] . '</a>
    </td>';
                                                        echo '<td>
        <a href="read.php?action=read&id=' . $row["id"] . '"><i
                class="fa fa-circle text-info mr-1"></i>' . $row['message'] . '</a>
    </td>';
                                                        echo ' <td class="text-right">
       ' . date('F d, Y H:i a', strtotime($row['created_at'])) . '
    </td>';

                                                        echo '</tr>';

                                                    }


                                                    echo '</tbody>';
                                                    echo ' </table>';
                                                    echo ' </div>';
                                                } else {

                                                }
                                            }
                                            ?>
                                            <hr>

                                            <div class="row">
                                                <div class="col-7">
                                                    Showing <?php echo number_format($allNotifications) ?>
                                                </div>
                                            </div>

                                        </div> <!-- card body -->
                                    </div> <!-- card -->
                                </div> <!-- end Col-9 -->

                            </div><!-- End row -->

                        </div>
                    </div>
                </div>
            </div><!-- End row -->

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


<!-- Bootstrap core JavaScript-->
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

<script>
    $(document).ready(function () {
        //Default data table
        $('#default-datatable').DataTable();


        var table = $('#example').DataTable({
            lengthChange: false,
            buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
        });

        table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');

    });

</script>
</body>
</html>