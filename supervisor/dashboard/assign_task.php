<?php
/**
 * have your all includes here
 * that's all the files you want to use here
 */
require '../../inc/appNames.php';
require '../sessions/supervisor_session.php';
require '../../functions/assign_task.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php echo $appName ?> - Assign Task</title>
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
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Assign Task To Student</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="changePassword.php"><?php echo $supervisor_name ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Task</li>
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
                            <div class="card-title text-center">Assign Task</div>
                            <hr>
                            <form method="post" action="">
                                <input type="hidden" name="supervisor_id" value='<?php echo $supervisor_id ?>'>
                                <div class="form-group">
                                    <label for="student_id">Select Student</label>
                                    <select name="student_id" id="student_id" class="form-control" required>
                                        <option value="Select Student" selected disabled>Select Student</option>
                                        <?php
                                        $date = date('Y-m-d');
                                        //connect to the database mysql
                                        //check for connection failures
                                        if ($connection) {
                                            //we are going to ftech from attachmnet table all students managed by this supervisor
                                            $resultAttachment = mysqli_query($connection, "SELECT * FROM attachment_table WHERE supervisor_id='$supervisor_id' ORDER BY id DESC ");
                                            if ($resultAttachment) {
                                                while ($rowAttachment = mysqli_fetch_array($resultAttachment)) {
                                                    $id = $rowAttachment['student_id'];
                                                    $result = mysqli_query($connection, "SELECT * FROM student_table WHERE id='$id'");
                                                    if ($result) {
                                                        while ($row = mysqli_fetch_array($result)) {
                                                            echo '<option value="' . $row['id'] . '">' . $row['student_name'] . ' | ' . $row['phone_number'] . ' | ' . $row['national_id'] . '</option>';
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="task_type">Task Type</label>
                                    <input type="text" class="form-control" id="task_type"
                                           name="task_type"
                                           placeholder="Enter Task Type" required>
                                </div>
                                <div class="form-group">
                                    <label for="task_description">Task Description</label>
                                    <textarea name="task_description" id="task_description" cols="30" rows="10"
                                              class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="super_assign_task"
                                            class="btn btn-primary btn-block shadow-primary px-5"><i
                                                class="fa fa-code"></i> Assign
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

<script src="../../assets/sweetalerts/sweetalert-dev.min.js"></script>
<script src="../../assets/sweetalerts/sweetalert-dev.js"></script>
<script src="../../assets/sweetalerts/sweetalert.min.js"></script>
</body>
</html>