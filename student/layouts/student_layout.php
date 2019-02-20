<?php

require '../../functions/fetch_notifications.php'

?>
<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
        <a href="../dashboard/home.php">
            <img src="../../assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
            <h5 class="logo-text">Student</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        <li>
            <a href="../dashboard/home.php" class="waves-effect">
                <i class="icon-home"></i> <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="fa fa-user-secret"></i>
                <span>My Account</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="../dashboard/profile.php"><i class="fa fa-circle-o"></i> Profile</a></li>
                <li><a href="../dashboard/changePassword.php"><i class="fa fa-circle-o"></i> Change Password</a></li>
            </ul>
        </li>
        <li>
            <a href="javaScript:void();" class="waves-effect">
                <i class="fa fa-laptop"></i>
                <span>Hub</span> <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="sidebar-submenu">
                <li><a href="#"><i class="fa fa-circle-o"></i> New Skill</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> View Skill</a></li>
            </ul>
        </li>

        <li>
            <a href="../mailbox/inbox.php" class="waves-effect">
                <i class="icon-envelope"></i>
                <span>Mailbox</span>
                <small class="badge float-right badge-warning"><?php echo number_format($unReadNotifications) ?></small>
            </a>
        </li>

        <li>
            <a href="../sessions/student_logout.php" class="waves-effect"><i class="fa fa-lock text-danger"></i> <span>Logout</span></a>
        </li>
    </ul>

</div>
<!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top bg-white">
        <ul class="navbar-nav mr-auto align-items-center">
            <li class="nav-item">
                <a class="nav-link toggle-menu" href="javascript:void();">
                    <i class="icon-menu menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <form class="search-bar">
                    <input type="text" class="form-control" placeholder="Enter keywords">
                    <a href="javascript:void();"><i class="icon-magnifier"></i></a>
                </form>
            </li>
        </ul>

        <ul class="navbar-nav align-items-center right-nav-link">
            <li class="nav-item dropdown-lg">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                   href="../mailbox/inbox.php">
                    <i class="icon-bell"></i><span
                            class="badge badge-primary badge-up"><?php echo number_format($unReadNotifications) ?></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <ul class="list-group list-group-flush">
                        <?php
                        $count = 0;
                        if ($connection) {
                            $result = mysqli_query($connection, "SELECT * FROM notification_table WHERE student_id='$student_id' ORDER BY id DESC");
                            if ($result == TRUE) {
                                echo '
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            You have 10 Notifications
                            <span class="badge badge-primary">10</span>
                        </li>';
                                while ($row = mysqli_fetch_array($result)) {
                                    echo '
                        <li class="list-group-item">
                            <a href="../mailbox/read.php?action=read&id=' . $row["id"] . '">
                                <div class="media">
                                    <i class="icon-bell fa-2x mr-3 text-danger"></i>
                                    <div class="media-body">
                                        <h6 class="mt-0 msg-title">' . $row['subject'] . '</h6>
                                        <p class="msg-info">' . $row['message'] . '</p>
                                    </div>
                                </div>
                            </a>
                        </li>';
                                }
                                echo '
                        <li class="list-group-item"><a href="../mailbox/inbox.php">See All Notifications</a></li>';
                            } else {
                                echo '  <li class="list-group-item d-flex justify-content-between align-items-center">
                            You have ' . number_format($unReadNotifications) . ' Notifications
                            <span class="badge badge-primary">' . number_format($unReadNotifications) . '</span>
                        </li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </li>

            <li class="nav-item language">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                   href="#"><i class="flag-icon flag-icon-ke"></i></a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-item"><i class="flag-icon flag-icon-ke mr-2"></i> Kenya</li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                    <span class="user-profile"><img src="../../assets/images/logo-icon.png" class="img-circle"
                                                    alt="user avatar"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li class="dropdown-item user-details">
                        <a href="javaScript:void();">
                            <div class="media">
                                <div class="avatar"><img class="align-self-start mr-3"
                                                         src="../../assets/images/logo-icon.png" alt="user avatar">
                                </div>
                                <div class="media-body">
                                    <h6 class="mt-2 user-title"><?php echo $student_name ?></h6>
                                    <p class="user-subtitle"><?php echo $email ?></p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><a href="../dashboard/profile.php"><i class="icon-wallet mr-2"></i>
                            Account</a></li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item"><a href="../sessions/student_logout.php"><i class="icon-power mr-2"></i>
                            Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<!--End topbar header-->