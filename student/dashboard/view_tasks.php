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
    <title><?php echo $appName ?> - My Assigned Tasks</title>
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
                    <h4 class="page-title">Tasks</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="changePassword.php"><?php echo $student_name ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">View Tasks</li>
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
                <div class="col-lg-12">
                    <div class="card">
                        <?php
                        //connect to the database mysql
                        //check for connection failures
                        if ($connection) {
                            $result = mysqli_query($connection, "SELECT * FROM task_table WHERE student_id='$student_id' ORDER BY id DESC ");
                            if (mysqli_num_rows($result) > 0) {
                                echo '<div class="card-header"><i class="fa fa-table"></i> Task Details</div>';
                                echo '<div class="card-body">';
                                echo '<div class="table-responsive">
                                <table id="example" class="table table-bordered">
                                    <thead>
                                    <tr>
                                      <th>NO</th>
                                    <th>Supervisor Name</th>
                                    <th>Task Type</th>
                                    <th>Task Description</th>
                                    <th>Action</th>
                                    <th>Date/Time</th>
                                    </tr>
                                    </thead>';
                                echo '<tbody>';
                                // keeps getting the next row until there are no more to get
                                while ($row = mysqli_fetch_array($result)) {
                                    $supervisor_id = $row['supervisor_id'];
                                    $sql = mysqli_query($connection, "SELECT * FROM supervisor_table WHERE id='$supervisor_id'");
                                    $rowThree = mysqli_fetch_assoc($sql);
                                    echo '<tr>
                                                  <td><strong class="text-primary">AS/' . $row['id'] . '</strong></td>
                                                  <td>' . $rowThree['supervisor_name'] . '</td>
                                                  <td>' . $row['task_type'] . '</td>
                                                  <td>' . mb_substr($row['task_description'], 0, 300, 'utf8') . '...' . '</td>
                                                  <td><a href="read_task.php?action=read&id=' . $row["id"] . '" class="btn btn-primary">Read More...</a></td>
                                                  <td>' . date('F d, Y h:i a', strtotime($row['created_at'])) . '</td>
                                                  </tr>';
                                }
                                echo '</tbody>';
                                echo '<tfoot>
                                    <tr>
                                       <th>NO</th>
                                    <th>Supervisor Name</th>
                                    <th>Task Type</th>
                                    <th>Task Description</th>
                                    <th>Action</th>
                                    <th>Date/Time</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>';
                                echo '</div>';
                            } else {
                                echo '<center><h2 class="text-danger text-uppercase">No Tasks Assigned To You Yet.</h2></center>';
                            }
                        }
                        ?>
                    </div>
                </div>
            </div><!-- End Row-->

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

<!--Data Tables js-->
<script src="../../assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="../../assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
<script src="../../assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
<script src="../../assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
<script src="../../assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
<script src="../../assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
<script src="../../assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
<script src="../../assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

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