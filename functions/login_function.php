<?php
/**
 * This file handles all the login from both the
 * Admin
 * Supervisor
 * Student
 * requests
*/

require('../db_connection/Connection.php');
include_once 'js.php';

session_start(); // Starting Session

if (isset($_POST['admin_submit'])) {
    if (empty($_POST['national_id']) || empty($_POST['password'])) {
        $error = "Password Don't Match";
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Validation','Please enter data','warning');";
        echo '}, 100);</script>';
    } else {
        // Define $username and $password
        $national_id = $_POST['national_id'];
        $password = $_POST['password'];

        // To protect MySQL injection for Security purpose
        $national_id = stripslashes($national_id);
        $password = stripslashes($password);
        $national_id = mysqli_real_escape_string($connection, $national_id);
        $password = mysqli_real_escape_string($connection, $password);
        $password = md5($password); //hash password before fetching it

        //check for the correct credentials
        $query = mysqli_query($connection, "select * from admin_table where password='$password' AND national_id='$national_id'");
        $rows = mysqli_num_rows($query);

        /**
         * if correct credentials start a session
        */
        if ($rows == 1) {
            $_SESSION['login_admin'] = $national_id; // Initializing Session
            header("location: ../admin/dashboard/home.php");// Redirecting To Other Page
        } else {
            $error = "National or Password is invalid";
	        echo '<script type="text/javascript">';
	        echo "setTimeout(function () { swal('Validation','Wrong Entries Please Check And Try Again','warning');";
	        echo '}, 100);</script>';
        }
        mysqli_close($connection); // Closing Connection
    }

} else if (isset($_POST['student_login'])) {
    if (empty($_POST['national_id']) || empty($_POST['password'])) {
        $error = "Password Don't Match";
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Validation','Please enter data','warning');";
        echo '}, 100);</script>';
    } else {
        // Define $username and $password
        $national_id = $_POST['national_id'];
        $password = $_POST['password'];

        // To protect MySQL injection for Security purpose
        $national_id = stripslashes($national_id);
        $password = stripslashes($password);
        $national_id = mysqli_real_escape_string($connection, $national_id);
        $password = mysqli_real_escape_string($connection, $password);
        $password = md5($password); //hash password before fetching it

        //check for the correct credentials
        $query = mysqli_query($connection, "select * from student_table where password='$password' AND national_id='$national_id'");
        $rows = mysqli_num_rows($query);

        /**
         * if correct credentials start a session
         */
        if ($rows == 1) {
            $_SESSION['login_student'] = $national_id; // Initializing Session
            header("location: ../student/dashboard/home.php");// Redirecting To Other Page
        } else {
            $error = "National or Password is invalid";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Validation','Wrong Entries Please Check And Try Again','warning');";
            echo '}, 100);</script>';
        }
        mysqli_close($connection); // Closing Connection
    }
} else if (isset($_POST['super_login'])) {
    if (empty($_POST['national_id']) || empty($_POST['password'])) {
        $error = "Password Don't Match";
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Validation','Please enter data','warning');";
        echo '}, 100);</script>';
    } else {
        // Define $username and $password
        $national_id = $_POST['national_id'];
        $password = $_POST['password'];

        // To protect MySQL injection for Security purpose
        $national_id = stripslashes($national_id);
        $password = stripslashes($password);
        $national_id = mysqli_real_escape_string($connection, $national_id);
        $password = mysqli_real_escape_string($connection, $password);
        $password = md5($password); //hash password before fetching it

        //check for the correct credentials
        $query = mysqli_query($connection, "select * from supervisor_table where password='$password' AND national_id='$national_id'");
        $rows = mysqli_num_rows($query);

        /**
         * if correct credentials start a session
         */
        if ($rows == 1) {
            $_SESSION['login_supervisor'] = $national_id; // Initializing Session
            header("location: ../supervisor/dashboard/home.php");// Redirecting To Other Page
        } else {
            $error = "National or Password is invalid";
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Validation','Wrong Entries Please Check And Try Again','warning');";
            echo '}, 100);</script>';
        }
        mysqli_close($connection); // Closing Connection
    }
}