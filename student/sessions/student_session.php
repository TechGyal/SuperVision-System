<?php
/*
 * connect to database
 * */
require '../../DBConnection/Connection.php';

session_start(); // Starting Session
// Storing Session
$student_check = $_SESSION['login_student'];
// SQL Query To Fetch Complete Information Of User
$ses_sql = mysqli_query($connection, "select * from student_table where national_id='$student_check'");

//fetch all admin details
$row = mysqli_fetch_assoc($ses_sql);
$id = $row['id'];
$student_name = $row['student_name'];
$email = $row['email'];
$national_id = $row['national_id'];
$address = $row['address'];
$secret_code = $row['secret_code'];
$phone_number = $row['phone_number'];
$gender = $row['gender'];

//fetch university name
$uniDetails = mysqli_query($connection,"select * from university_table where student_id='$id'");
$rowOne = mysqli_fetch_assoc($uniDetails);
$uni_name = $rowOne['name'];
$reg_no = $rowOne['reg_no'];
$year_of_study = $rowOne['year_of_study'];
$course_of_study = $rowOne['course_of_study'];

//fetch attachment details
$attachmentDetails = mysqli_query($connection,"select * from attachment_table where student_id='$id'");
$rowThree = mysqli_fetch_assoc($attachmentDetails);
$start_date = $rowThree['start_date'];
$end_date = $rowThree['end_date'];
$supervisor_id = $rowThree['supervisor_id'];

$supervisor = mysqli_query($connection,"select * from supervisor_table where id='$supervisor_id'");
$rowFour = mysqli_fetch_assoc($supervisor);
$supervisor_name = $rowFour['supervisor_name'];



if (!isset($national_id)) {
    header("location: ../login.php");// Redirecting To Other Page
    mysqli_close($connection); // Closing Connection
}