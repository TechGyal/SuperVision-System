<?php
/*
 * connect to database
 * */
require '../../DBConnection/Connection.php';

session_start(); // Starting Session
// Storing Session
$supervisor_check = $_SESSION['login_supervisor'];
// SQL Query To Fetch Complete Information Of User
$ses_sql = mysqli_query($connection, "select * from supervisor_table where national_id='$supervisor_check'");

//fetch all admin details
$row = mysqli_fetch_assoc($ses_sql);
$supervisor_id = $row['id'];
$supervisor_name = $row['supervisor_name'];
$email = $row['email'];
$national_id = $row['national_id'];
$secret_code = $row['secret_code'];
$phone_number = $row['phone_number'];


if (!isset($national_id)) {
    header("location: ../login.php");// Redirecting To Other Page
    mysqli_close($connection); // Closing Connection
}