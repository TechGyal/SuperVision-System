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

$now = date('Y-m-d h:i:s');

if (isset($_POST['add_supervisor'])) {
    //get data from fields
    $national_id = mysqli_real_escape_string($connection, $_POST['national_id']);
    $supervisor_name = mysqli_real_escape_string($connection, $_POST['supervisor_name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone_number = mysqli_real_escape_string($connection, $_POST['phone_number']);
    $admin_id = mysqli_real_escape_string($connection, $_POST['id']);

    $password = md5($national_id); //hash password before fetching it


    $checkSupervisor = "SELECT * FROM supervisor_table WHERE national_id = '$national_id' OR email = ' $email ' OR  phone_number = '$phone_number'";
    $gotSupervisor = mysqli_query($connection, $checkSupervisor);
    while ($row = mysqli_fetch_array($gotSupervisor)) {
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
        //query
        $sqlm = "INSERT INTO supervisor_table (supervisor_name,email,phone_number,national_id,secret_code,password,created_at) VALUES ('$supervisor_name','$email','$phone_number','$national_id','$secret_code','$password','$now')";
        mysqli_query($connection, $sqlm);

        /**
         * fetch supervisor id
         */
        $ses_sql = mysqli_query($connection, "select * from supervisor_table where national_id='$national_id'");
        $rows = mysqli_fetch_assoc($ses_sql);
        $supervisor_id = $rows['id'];


        /**
         * create a notification to the admin and student
         */
        $subject = 'New Supervisor';
        $subjectTwo = 'My Account';
        $adminNotif = 'Added new supervisor known as ' . $supervisor_name;
        $supervisorNotif = 'Your account secret code is ' . $secret_code;

        $adminNotification = "INSERT INTO notification_table (admin_id,supervisor_id,student_id,subject,message,created_at) VALUES ('$admin_id','0','0','$subject','$adminNotif','$now')";


        $supervisorNotification = "INSERT INTO notification_table (admin_id,supervisor_id,student_id,subject,message,created_at) VALUES ('0','$supervisor_id','0','$subjectTwo','$supervisorNotif','$now')";

        //check this
        mysqli_query($connection, $supervisorNotification);
        mysqli_query($connection, $adminNotification);

        /*
         * Notify
         * */
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('$supervisor_name','Registered successfully and password is the national ID','success');";
        echo '}, 100);</script>';
        mysqli_close($connection);


//        header("location: ../dashboard/addSupervisor.php");// Redirecting To Other Page
    }
}