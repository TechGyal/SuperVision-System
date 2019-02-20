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
    <title><?php echo $appName ?> - Hub</title>
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
                    <h4 class="page-title">Student Hub</h4>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="profile.php"><?php echo $student_name ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Student Hub</li>
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
                    <section class="cd-timeline js-cd-timeline">
                        <div class="cd-timeline__container">
                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                                    <img src="assets/images/timeline/cd-icon-picture.svg" alt="Picture">
                                </div> <!-- cd-timeline__img -->

                                <div class="cd-timeline__content js-cd-content">
                                    <h4>Title of section 1</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                    <a href="#0" class="cd-timeline__read-more">Read more</a>
                                    <span class="cd-timeline__date">Jan 14</span>
                                </div> <!-- cd-timeline__content -->
                            </div> <!-- cd-timeline__block -->

                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                                    <img src="assets/images/timeline/cd-icon-movie.svg" alt="Movie">
                                </div> <!-- cd-timeline__img -->

                                <div class="cd-timeline__content js-cd-content">
                                    <h4>Title of section 2</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
                                    <a href="#0" class="cd-timeline__read-more">Read more</a>
                                    <span class="cd-timeline__date">Jan 18</span>
                                </div> <!-- cd-timeline__content -->
                            </div> <!-- cd-timeline__block -->

                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--picture js-cd-img">
                                    <img src="assets/images/timeline/cd-icon-picture.svg" alt="Picture">
                                </div> <!-- cd-timeline__img -->

                                <div class="cd-timeline__content js-cd-content">
                                    <h4>Title of section 3</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
                                    <a href="#0" class="cd-timeline__read-more">Read more</a>
                                    <span class="cd-timeline__date">Jan 24</span>
                                </div> <!-- cd-timeline__content -->
                            </div> <!-- cd-timeline__block -->

                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                                    <img src="assets/images/timeline/cd-icon-location.svg" alt="Location">
                                </div> <!-- cd-timeline__img -->

                                <div class="cd-timeline__content js-cd-content">
                                    <h4>Title of section 4</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
                                    <a href="#0" class="cd-timeline__read-more">Read more</a>
                                    <span class="cd-timeline__date">Feb 14</span>
                                </div> <!-- cd-timeline__content -->
                            </div> <!-- cd-timeline__block -->

                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--location js-cd-img">
                                    <img src="assets/images/timeline/cd-icon-location.svg" alt="Location">
                                </div> <!-- cd-timeline__img -->

                                <div class="cd-timeline__content js-cd-content">
                                    <h4>Title of section 5</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
                                    <a href="#0" class="cd-timeline__read-more">Read more</a>
                                    <span class="cd-timeline__date">Feb 18</span>
                                </div> <!-- cd-timeline__content -->
                            </div> <!-- cd-timeline__block -->

                            <div class="cd-timeline__block js-cd-block">
                                <div class="cd-timeline__img cd-timeline__img--movie js-cd-img">
                                    <img src="assets/images/timeline/cd-icon-movie.svg" alt="Movie">
                                </div> <!-- cd-timeline__img -->

                                <div class="cd-timeline__content js-cd-content">
                                    <h4>Final Section</h4>
                                    <p>This is the content of the last section</p>
                                    <span class="cd-timeline__date">Feb 26</span>
                                </div> <!-- cd-timeline__content -->
                            </div> <!-- cd-timeline__block -->
                        </div>
                    </section> <!-- cd-timeline -->
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

<!-- Vertical timeline js -->
<script src="../../assets/plugins/horizontal-timeline/js/horizontal-timeline.js"></script>
<script src="../../assets/plugins/vertical-timeline/js/vertical-timeline.js"></script>
</body>
</html>