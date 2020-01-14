<?php
/*
 * connect to database
 * */
require '../../db_connection/Connection.php';

session_start(); // Starting Session
// Storing Session
$admin_check = $_SESSION['login_admin'];
// SQL Query To Fetch Complete Information Of User
$ses_sql = mysqli_query($connection, "select * from admin_table where national_id='$admin_check'");

//fetch all admin details
$row = mysqli_fetch_assoc($ses_sql);
$admin_id = $row['id'];
$admin_name = $row['admin_name'];
$admin_email = $row['email'];
$national_id = $row['national_id'];
$secret_code = $row['secret_code'];
$phone_number = $row['phone_number'];


if (!isset($national_id)) {
    header("location: ../login.php");// Redirecting To Other Page
    mysqli_close($connection); // Closing Connection
}