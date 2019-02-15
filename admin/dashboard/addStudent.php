<?php
/**
 * have your all includes here
 * that's all the files you want to use here
 */
require '../../inc/appNames.php';
require '../sessions/admin_session.php';
require '../../functions/add_student_function.php';
?>
<!doctype html>
<html lang="en">
<head>
    <title><?php echo $appName ?>::Student</title>
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
    require '../layouts/admin_layout.php';
    ?>

    <div class="clearfix"></div>

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumb-->
            <div class="row pt-2 pb-2">
                <div class="col-sm-9">
                    <h4 class="page-title">Add Student</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="changePassword.php"><?php echo $admin_name ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Student</li>
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
                                Student Info
                            </h4>
                            <div class="form-group row">
                                <label for="input-1" class="col-sm-2 col-form-label">Student Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="student_name"
                                           name="student_name" placeholder="Enter Student Name" required>
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
                            <div class="form-group row">
                                <label for="input-4" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="address"
                                           name="address" placeholder="Enter Address" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <select name="gender" id="gender" class="form-control" required>
                                        <option value="Select Gender" selected disabled>Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <h4 class="form-header text-uppercase">
                                <i class="fa fa-universal-access"></i>
                                University/School Info
                            </h4>
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">University Name</label>
                                <div class="col-sm-10">
                                    <select name="name" id="name" class="form-control" required>
                                        <option value="Select University" selected disabled>Select University</option>
                                        <option value="Chuka University">Chuka University</option>
                                        <option value="Kisii University">Kisii University</option>
                                        <option value="University Of Nairobi">University Of Nairobi</option>
                                        <option value="JKUAT University">JKUAT University</option>
                                        <option value="Kenyatta University">Kenyatta University</option>
                                        <option value="TUK University">TUK University</option>
                                        <option value="Embu University">Embu University</option>
                                        <option value="Laikipia University">Laikipia University</option>
                                        <option value="Maseno University">Maseno University</option>
                                        <option value="Moi University">Moi University</option>
                                        <option value="Karatina University">Karatina University</option>
                                        <option value="Masinde Muliro">Masinde Muliro</option>
                                        <option value="Pwani University">Pwani University</option>
                                        <option value="Dedan Kimathi University">Dedan Kimathi University</option>
                                        <option value="Egerton University">Egerton University</option>
                                        <option value="Technical University Mombasa">Technical University Mombasa
                                        </option>
                                        <option value="Maasai Mara University">Maasai Mara University</option>
                                        <option value="Meru University">Meru University</option>
                                        <option value="Kabianga University">Kabianga University</option>
                                        <option value="Jaramogi Oginga University">Jaramogi Oginga University</option>
                                        <option value="South Eastern Kenyatta University">South Eastern Kenyatta
                                            University
                                        </option>
                                        <option value="Multimedia University Kenya">Multimedia University Kenya</option>
                                        <option value="Eldoret University">Eldoret University</option>
                                        <option value="Taita Taveta University">Taita Taveta University</option>
                                        <option value="Muran'ga University">Muran'ga University</option>
                                        <option value="Kirinyaga University">Kirinyaga University</option>
                                        <option value="Cooperative University">Cooperative University</option>
                                        <option value="Kibabii University">Kibabii University</option>
                                        <option value="Garissa University">Garissa University</option>
                                        <option value="Rongo University">Rongo University</option>
                                        <option value="Machakos University">Machakos University</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input-4" class="col-sm-2 col-form-label">Student Registration Number</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="reg_no"
                                           name="reg_no" placeholder="Enter Reg Number" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="year_of_study" class="col-sm-2 col-form-label">Year Of Study</label>
                                <div class="col-sm-10">
                                    <select name="year_of_study" id="year_of_study" class="form-control" required>
                                        <option value="Select Year Of Study" selected disabled>Select Year Of Study
                                        </option>
                                        <option value="1">1st Year</option>
                                        <option value="2">2nd Year</option>
                                        <option value="3">3rd Year</option>
                                        <option value="4">4th Year</option>
                                        <option value="5">5th Year</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input-4" class="col-sm-2 col-form-label">Course Of Study</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="course_of_study"
                                           name="course_of_study" placeholder="Enter Course Of Study" required>
                                </div>
                            </div>
                            <h4 class="form-header text-uppercase">
                                <i class="fa fa-building"></i>
                                Attachment Info
                            </h4>
                            <div class="form-group row">
                                <label for="input-4" class="col-sm-2 col-form-label">Period</label>
                                <div class="col-sm-10">
                                    <div class="input-daterange input-group">
                                        <input type="date" class="form-control" name="start_date" id="start_date"/>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">to</span>
                                        </div>
                                        <input type="date" class="form-control" name="end_date" id="end_date"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input-4" class="col-sm-2 col-form-label">Section</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="section"
                                           name="section" placeholder="Enter Section i.e ICT Department" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="supervisor_id" class="col-sm-2 col-form-label">Select Supervisor</label>
                                <div class="col-sm-10">
                                    <select name="supervisor_id" id="supervisor_id" class="form-control" required>
                                        <option value="Select Supervisor" selected disabled>Select Supervisor Of Study
                                        </option>
                                        <?php
                                        if ($connection) {
                                            $result = mysqli_query($connection, "SELECT * FROM supervisor_table");
                                            if ($result == TRUE) {
                                                while ($row = mysqli_fetch_array($result)) {
                                                    echo '<option value="' . $row["id"] . '">' . $row["supervisor_name"] . '  ||  ' . $row["national_id"] . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-footer">
                                <button type="submit" name="add_student" class="btn btn-primary pull-right"><i
                                            class="fa fa-plus-square-o"></i> SAVE
                                </button>
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
<!-- Bootstrap core JavaScript-->

<script src="../../assets/sweetalerts/sweetalert-dev.min.js"></script>
<script src="../../assets/sweetalerts/sweetalert-dev.js"></script>
<script src="../../assets/sweetalerts/sweetalert.min.js"></script>
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

<!--Bootstrap Touchspin Js-->
<script src="../../assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js"></script>
<script src="../../assets/plugins/bootstrap-touchspin/js/bootstrap-touchspin-script.js"></script>

<!--Select Plugins Js-->
<script src="../../assets/plugins/select2/js/select2.min.js"></script>
<!--Inputtags Js-->
<script src="../../assets/plugins/inputtags/js/bootstrap-tagsinput.js"></script>

<!--Bootstrap Datepicker Js-->
<script src="../../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script>
    $('#default-datepicker').datepicker({
        todayHighlight: true
    });
    $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true
    });

    $('#inline-datepicker').datepicker({
        todayHighlight: true
    });

    $('#dateragne-picker .input-daterange').datepicker({});

</script>
<!--Multi Select Js-->
<script src="../../assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
<script src="../../assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>


<script>
    $(document).ready(function () {
        $('.single-select').select2();

        $('.multiple-select').select2();

        //multiselect start

        $('#my_multi_select1').multiSelect();
        $('#my_multi_select2').multiSelect({
            selectableOptgroup: true
        });

        $('#my_multi_select3').multiSelect({
            selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
            selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
            afterInit: function (ms) {
                var that = this,
                    $selectableSearch = that.$selectableUl.prev(),
                    $selectionSearch = that.$selectionUl.prev(),
                    selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                    selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                    .on('keydown', function (e) {
                        if (e.which === 40) {
                            that.$selectableUl.focus();
                            return false;
                        }
                    });

                that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                    .on('keydown', function (e) {
                        if (e.which == 40) {
                            that.$selectionUl.focus();
                            return false;
                        }
                    });
            },
            afterSelect: function () {
                this.qs1.cache();
                this.qs2.cache();
            },
            afterDeselect: function () {
                this.qs1.cache();
                this.qs2.cache();
            }
        });

        $('.custom-header').multiSelect({
            selectableHeader: "<div class='custom-header'>Selectable items</div>",
            selectionHeader: "<div class='custom-header'>Selection items</div>",
            selectableFooter: "<div class='custom-header'>Selectable footer</div>",
            selectionFooter: "<div class='custom-header'>Selection footer</div>"
        });


    });

</script>
</body>
</html>