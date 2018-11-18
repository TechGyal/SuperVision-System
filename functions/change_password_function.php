<?php
/**
 * This file handles all the password resets from both the
 * Admin
 * Supervisor
 * Student
 * requests
 */
require 'js.php';
session_start(); // Starting Session

if (isset($_POST['admin_reset'])) {
    if (empty($_POST['national_id']) || empty($_POST['password']) || empty($_POST['secret_code']) || empty($_POST['confirm_password'])) {
        $error = "Password Don't Match";
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Validation','Please enter data','warning');";
        echo '}, 100);</script>';
    } else {
        //get data from fields
        $national_id = mysqli_real_escape_string($connection, $_POST['national_id']);
        $secret_code = mysqli_real_escape_string($connection, $_POST['secret_code']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($connection, $_POST['confirm_password']);

        if ($password != $confirm_password) {
            $error = "Password Don't Match";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Validation','Password Don't Match','error');";
            echo '}, 100);</script>';
        } else {
            $query = mysqli_query($connection, "select * from admin_table where national_id='$national_id' AND secret_code='$secret_code'");
            $rows = mysqli_num_rows($query);
            if ($rows == 1) {
                $pass1 = md5($password); //hash password before storing it.
                $query1 = mysqli_query($connection, "update admin_table set password='$pass1' where national_id='$national_id'");
                mysqli_query($connection, $query1);

                $_SESSION['login_admin'] = $national_id; // Initializing Session
                header("location: ../dashboard/home.php");// Redirecting To Other Page
            } else {
                echo '<script type="text/javascript">';
                echo "setTimeout(function () { swal('Validation','Wrong National_ID or Secret Code','error');";
                echo '}, 100);</script>';
            }
            mysqli_close($connection); // Closing Connection
        }
    }
} else if (isset($_POST['student_reset'])) {
    if (empty($_POST['national_id']) || empty($_POST['password']) || empty($_POST['secret_code']) || empty($_POST['confirm_password'])) {
        $error = "Password Don't Match";
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Validation','Please enter data','warning');";
        echo '}, 100);</script>';
    } else {
        //get data from fields
        $national_id = mysqli_real_escape_string($connection, $_POST['national_id']);
        $secret_code = mysqli_real_escape_string($connection, $_POST['secret_code']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($connection, $_POST['confirm_password']);

        if ($password != $confirm_password) {
            $error = "Password Don't Match";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Validation','Password Don't Match','error');";
            echo '}, 100);</script>';
        } else {
            $query = mysqli_query($connection, "select * from student_table where national_id='$national_id' AND secret_code='$secret_code'");
            $rows = mysqli_num_rows($query);
            if ($rows == 1) {
                $pass1 = md5($password); //hash password before storing it.
                $query1 = mysqli_query($connection, "update student_table set password='$pass1' where national_id='$national_id'");
                mysqli_query($connection, $query1);

                $_SESSION['login_supervisor'] = $national_id; // Initializing Session
                header("location: ../dashboard/home.php");// Redirecting To Other Page
            } else {
                echo '<script type="text/javascript">';
                echo "setTimeout(function () { swal('Validation','Wrong National_ID or Secret Code','error');";
                echo '}, 100);</script>';
            }
            mysqli_close($connection); // Closing Connection
        }
    }
} else if (isset($_POST['super_reset'])) {
    if (empty($_POST['national_id']) || empty($_POST['password']) || empty($_POST['secret_code']) || empty($_POST['confirm_password'])) {
        $error = "Password Don't Match";
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Validation','Please enter data','warning');";
        echo '}, 100);</script>';
    } else {
        //get data from fields
        $national_id = mysqli_real_escape_string($connection, $_POST['national_id']);
        $secret_code = mysqli_real_escape_string($connection, $_POST['secret_code']);
        $password = mysqli_real_escape_string($connection, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($connection, $_POST['confirm_password']);

        if ($password != $confirm_password) {
            $error = "Password Don't Match";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Validation','Password Don't Match','error');";
            echo '}, 100);</script>';
        } else {
            $query = mysqli_query($connection, "select * from supervisor_table where national_id='$national_id' AND secret_code='$secret_code'");
            $rows = mysqli_num_rows($query);
            if ($rows == 1) {
                $pass1 = md5($password); //hash password before storing it.
                $query1 = mysqli_query($connection, "update supervisor_table set password='$pass1' where national_id='$national_id'");
                mysqli_query($connection, $query1);

                $_SESSION['login_supervisor'] = $national_id; // Initializing Session
                header("location: ../dashboard/home.php");// Redirecting To Other Page
            } else {
                echo '<script type="text/javascript">';
                echo "setTimeout(function () { swal('Validation','Wrong National_ID or Secret Code','error');";
                echo '}, 100);</script>';
            }
            mysqli_close($connection); // Closing Connection
        }
    }
}