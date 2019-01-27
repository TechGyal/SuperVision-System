<?php
/**
 * This we are going to fetch notifications
 * for either admin.supervisor or student
 * depending on the session that is active
 *
 *The if functions below checks the
 *sessions keys i.e  login_admin,login_supervisor
 */

$unReadNotifications = $allNotifications = 0;

if (isset($_SESSION['login_admin'])) {
    $sqlUnRead = mysqli_query($connection, "SELECT * FROM notification_table WHERE admin_id='$admin_id' AND status=0");

    while ($rowOne = mysqli_fetch_array($sqlUnRead)) {
        $unReadNotifications++;
    }

    $sqlRead = mysqli_query($connection, "SELECT * FROM notification_table WHERE admin_id='$admin_id'");
    while ($rowTwo = mysqli_fetch_array($sqlRead)) {
        $allNotifications++;
    }
} else if (isset($_SESSION['login_supervisor'])) {
    $sqlUnRead = mysqli_query($connection, "SELECT * FROM notification_table WHERE supervisor_id='$supervisor_id' AND status=0");
    while ($rowOne = mysqli_fetch_array($sqlUnRead)) {
        $unReadNotifications++;
    }
    $sqlRead = mysqli_query($connection, "SELECT * FROM notification_table WHERE supervisor_id='$supervisor_id'");
    while ($rowTwo = mysqli_fetch_array($sqlRead)) {
        $allNotifications++;
    }
} else if (isset($_SESSION['login_student'])) {
    $sqlUnRead = mysqli_query($connection, "SELECT * FROM notification_table WHERE student_id='$student_id' AND status=0");
    while ($rowOne = mysqli_fetch_array($sqlUnRead)) {
        $unReadNotifications++;
    }
    $sqlRead = mysqli_query($connection, "SELECT * FROM notification_table WHERE student_id='$student_id'");
    while ($rowTwo = mysqli_fetch_array($sqlRead)) {
        $allNotifications++;
    }
}