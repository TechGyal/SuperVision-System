<?php
/**
 * This file handles all the reset password from both the
 * Admin
 * Supervisor
 * Student
 * requests
 */

if (isset($_POST['admin_reset'])) {
    if (empty($_POST['currentPassword']) || empty($_POST['newPassword']) || empty($_POST['confirmPassword'])) {
        $error = "Password Don't Match";
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Validation','Please enter data','warning');";
        echo '}, 100);</script>';
    } else {
        $currentPassword = mysqli_real_escape_string($connection, $_POST['currentPassword']);
        $newPassword = mysqli_real_escape_string($connection, $_POST['newPassword']);
        $confirmPassword = mysqli_real_escape_string($connection, $_POST['confirmPassword']);
        $national_id = mysqli_real_escape_string($connection, $_POST['national_id']);

        $password = md5($currentPassword);

        //check for the correct credentials
        $query = mysqli_query($connection, "select * from admin_table where password='$password'");
        $rows = mysqli_num_rows($query);

        /**
         * if correct credentials start a session
         */
        if ($newPassword !== $confirmPassword) {
            $error = "";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Validation','Password Don't Match','warning');";
            echo '}, 100);</script>';
        }
        if ($rows == 1) {
            $hashNewPassword = md5($newPassword);
            $update = mysqli_query($connection, "update admin_table set password='$hashNewPassword' where national_id='$national_id'");
            $rows_update = mysqli_num_rows($query);

            if ($rows_update == 1) {
                header("location: ../dashboard/changePassword.php");// Redirecting To Other Page

                echo '<script type="text/javascript">';
                echo "setTimeout(function () { swal('Admin Password','Password changed successfully','success');";
                echo '}, 100);</script>';
            }
        } else {
            header("location: ../dashboard/changePassword.php");// Redirecting To Other Page

            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Validation','The current password does not match our records','warning');";
            echo '}, 100);</script>';
        }
        mysqli_close($connection); // Closing Connection
    }
}elseif (isset($_POST['supervisor_reset'])){
    if (empty($_POST['currentPassword']) || empty($_POST['newPassword']) || empty($_POST['confirmPassword'])) {
        $error = "Password Don't Match";
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Validation','Please enter data','warning');";
        echo '}, 100);</script>';
    } else {
        $currentPassword = mysqli_real_escape_string($connection, $_POST['currentPassword']);
        $newPassword = mysqli_real_escape_string($connection, $_POST['newPassword']);
        $confirmPassword = mysqli_real_escape_string($connection, $_POST['confirmPassword']);
        $national_id = mysqli_real_escape_string($connection, $_POST['national_id']);

        $password = md5($currentPassword);

        //check for the correct credentials
        $query = mysqli_query($connection, "select * from supervisor_table where password='$password'");
        $rows = mysqli_num_rows($query);

        /**
         * if correct credentials start a session
         */
        if ($newPassword !== $confirmPassword) {
            $error = "";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Validation','Password Don't Match','warning');";
            echo '}, 100);</script>';
        }
        if ($rows == 1) {
            $hashNewPassword = md5($newPassword);
            $update = mysqli_query($connection, "update supervisor_table set password='$hashNewPassword' where national_id='$national_id'");
            $rows_update = mysqli_num_rows($query);

            if ($rows_update == 1) {
                header("location: ../dashboard/changePassword.php");// Redirecting To Other Page

                echo '<script type="text/javascript">';
                echo "setTimeout(function () { swal('Supervisor Password','Password changed successfully','success');";
                echo '}, 100);</script>';
            }
        } else {
            header("location: ../dashboard/changePassword.php");// Redirecting To Other Page

            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Validation','The current password does not match our records','warning');";
            echo '}, 100);</script>';
        }
        mysqli_close($connection); // Closing Connection
    }
}elseif (isset($_POST['student_reset'])){
    if (empty($_POST['currentPassword']) || empty($_POST['newPassword']) || empty($_POST['confirmPassword'])) {
        $error = "Password Don't Match";
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Validation','Please enter data','warning');";
        echo '}, 100);</script>';
    } else {
        $currentPassword = mysqli_real_escape_string($connection, $_POST['currentPassword']);
        $newPassword = mysqli_real_escape_string($connection, $_POST['newPassword']);
        $confirmPassword = mysqli_real_escape_string($connection, $_POST['confirmPassword']);
        $national_id = mysqli_real_escape_string($connection, $_POST['national_id']);

        $password = md5($currentPassword);

        //check for the correct credentials
        $query = mysqli_query($connection, "select * from student_table where password='$password'");
        $rows = mysqli_num_rows($query);

        /**
         * if correct credentials start a session
         */
        if ($newPassword !== $confirmPassword) {
            $error = "";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Validation','Password Don't Match','warning');";
            echo '}, 100);</script>';
        }
        if ($rows == 1) {
            $hashNewPassword = md5($newPassword);
            $update = mysqli_query($connection, "update student_table set password='$hashNewPassword' where national_id='$national_id'");
            $rows_update = mysqli_num_rows($query);

            if ($rows_update == 1) {
                header("location: ../dashboard/changePassword.php");// Redirecting To Other Page

                echo '<script type="text/javascript">';
                echo "setTimeout(function () { swal('Student Password','Password changed successfully','success');";
                echo '}, 100);</script>';
            }
        } else {
            header("location: ../dashboard/changePassword.php");// Redirecting To Other Page

            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Validation','The current password does not match our records','warning');";
            echo '}, 100);</script>';
        }
        mysqli_close($connection); // Closing Connection
    }
}