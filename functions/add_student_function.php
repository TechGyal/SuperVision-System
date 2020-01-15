<?php
require 'js.php';
/*
*define this
*/
$got_national_id = $got_email = $got_phone_number = '';

//generate a random secret code btn 100000-50000
try {
    $secret_code = strtoupper(bin2hex(openssl_random_pseudo_bytes(5)));
} catch (Exception $e) {
    return 504;
}

$now = date('Y-m-d h:i:s a');

if (isset($_POST['add_student'])) {
    //get data from fields
    $student_name = mysqli_real_escape_string($connection, $_POST['student_name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $national_id = mysqli_real_escape_string($connection, $_POST['national_id']);
    $phone_number = mysqli_real_escape_string($connection, $_POST['phone_number']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);
    $gender = mysqli_real_escape_string($connection, $_POST['gender']);
    $uni_name = mysqli_real_escape_string($connection, $_POST['name']);
    $reg_no = mysqli_real_escape_string($connection, $_POST['reg_no']);
    $year_of_study = mysqli_real_escape_string($connection, $_POST['year_of_study']);
    $course_of_study = mysqli_real_escape_string($connection, $_POST['course_of_study']);
    $start_date = mysqli_real_escape_string($connection, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($connection, $_POST['end_date']);
    $section = mysqli_real_escape_string($connection, $_POST['section']);
    $supervisor_id = mysqli_real_escape_string($connection, $_POST['supervisor_id']);

    $password = md5($national_id); //hash password before fetching it


    $checkStudent = "SELECT * FROM student_table WHERE national_id = '$national_id' OR email = ' $email ' OR  phone_number = '$phone_number'";
    $gotStudent = mysqli_query($connection, $checkStudent);
    while ($row = mysqli_fetch_array($gotStudent)) {
        $got_national_id = $row['national_id'];
        $got_email = $row['email'];
        $got_phone_number = $row['phone_number'];
    }

    if ($national_id === $got_national_id || $email === $got_email || $phone_number === $got_phone_number) {
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Duplicate Entry','Please check on the details entered. Your entries already exists..','warning');";
        echo '}, 100);</script>';
        mysqli_close($connection);
    } else {

        /**
         * add student info
         */
        $stringStudent = "INSERT INTO student_table (student_name,email,phone_number,national_id,secret_code,gender,address,password,created_at) VALUES ('$student_name','$email','$phone_number','$national_id','$secret_code','$gender','$address','$password','$now')";
        $student = mysqli_query($connection, $stringStudent);

        /**
         * fetch student id
         */
        $ses_sql = mysqli_query($connection, "select * from student_table where national_id='$national_id'");
        $rows = mysqli_fetch_assoc($ses_sql);
        $student_id = $rows['id'];


        /**
         * add university info
         */
        $stringUniversity = "INSERT INTO university_table (student_id,name,reg_no,year_of_study,course_of_study,created_at) VALUES ('$student_id','$uni_name','$reg_no','$year_of_study','$course_of_study','$now')";
        $university = mysqli_query($connection, $stringUniversity);

        /**
         * add attachment info
         */
        $stringAttachment = "INSERT INTO attachment_table (student_id,start_date,end_date,section,supervisor_id,created_at) VALUES ('$student_id','$start_date','$end_date','$section','$supervisor_id','$now')";
        $attachment = mysqli_query($connection, $stringAttachment);


        /**
         * create a notification to the admin and student
         */
        $subject = 'New Student';
        $subjectTwo = 'My Account';
        $adminNotif = 'Added new student known as ' . $student_name;
        $supervisorNotif = 'Assigned new student with registration number ' . $reg_no;
        $studentNotif = 'Your account secret code is ' . $secret_code;

        $adminNotification = "INSERT INTO notification_table (admin_id,supervisor_id,student_id,subject,message,created_at) VALUES ('$admin_id',0,0,'$subject','$adminNotif','$now')";


        $supervisorNotification = "INSERT INTO notification_table (admin_id,supervisor_id,student_id,subject,message,created_at) VALUES (0,'$supervisor_id',0,'$subject','$supervisorNotif','$now')";


        $studentNotification = "INSERT INTO notification_table (admin_id,supervisor_id,student_id,subject,message,created_at) VALUES (0,0,'$student_id','$subjectTwo','$supervisorNotif','$now')";

        //check this
        mysqli_query($connection, $supervisorNotification);
        mysqli_query($connection, $adminNotification);
        mysqli_query($connection, $studentNotification);

        /*
         * Notify
         * */
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('$student_name','Registered successfully and password is the national ID','success');";
        echo '}, 100);</script>';
        mysqli_close($connection);

//        header("location: ../dashboard/addStudent.php");// Redirecting To Other Page
    }
}