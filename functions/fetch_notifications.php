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
    $sqlRead = mysqli_query($connection, "SELECT * FROM notification_table WHERE admin_id='$admin_id'");
    if ($sqlRead) {
        while ($rowTwo = mysqli_fetch_array($sqlRead)) {
            $allNotifications++;
        }

        $sqlUnRead = mysqli_query($connection, "SELECT * FROM notification_table WHERE admin_id='$admin_id' AND status=0");
        if ($sqlUnRead)
            while ($rowOne = mysqli_fetch_array($sqlUnRead)) {
                $unReadNotifications++;
            }
    }
} else if (isset($_SESSION['login_supervisor'])) {
    $sqlRead = mysqli_query($connection, "SELECT * FROM notification_table WHERE supervisor_id='$supervisor_id'");
    if ($sqlRead) {
        while ($rowTwo = mysqli_fetch_array($sqlRead)) {
            $allNotifications++;
        }
        $sqlUnRead = mysqli_query($connection, "SELECT * FROM notification_table WHERE supervisor_id='$supervisor_id' AND status=0");
        if ($sqlUnRead)
            while ($rowOne = mysqli_fetch_array($sqlUnRead)) {
                $unReadNotifications++;
            }
    }
} else if (isset($_SESSION['login_student'])) {
    $sqlRead = mysqli_query($connection, "SELECT * FROM notification_table WHERE student_id='$student_id'");
    if ($sqlRead) {
        while ($rowTwo = mysqli_fetch_array($sqlRead)) {
            $allNotifications++;
        }
        $sqlUnRead = mysqli_query($connection, "SELECT * FROM notification_table WHERE student_id='$student_id' AND status=0");
        if ($sqlUnRead)
            while ($rowOne = mysqli_fetch_array($sqlUnRead)) {
                $unReadNotifications++;
            }
    }
}