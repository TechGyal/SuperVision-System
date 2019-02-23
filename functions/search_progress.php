<?php
/**
 * Here we will search the student hub details
 * using Student Reg.no/Email/Phone Number/National Id
 */

$student_id = $student_name = null;

if (isset($_POST['admin_search_student'])) {
    $detail = mysqli_real_escape_string($connection, $_POST['detail']);

    //first check if the student exists
    $sql = mysqli_query($connection, "SELECT * FROM student_table WHERE phone_number='$detail' OR national_id='$detail' OR email='$detail'");

    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);

        $student_id = $row['id'];
        $student_name = $row['student_name'];


        header("location: ../dashboard/view_progress.php");// Redirecting To Other Page
    } else {
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Student Search','Sorry the student detail you entered does not exist in our records. Please check and try again.','warning');";
        echo '}, 100);</script>';
        mysqli_close($connection);

        header("location: ../dashboard/search_progress.php");// Redirecting To Other Page

    }
}
if (isset($_POST['supervisor_search_student'])) {
    $detail = mysqli_real_escape_string($connection, $_POST['detail']);

    //first check if the student exists
    $sql = mysqli_query($connection, "SELECT * FROM student_table WHERE phone_number='$detail' OR national_id='$detail' OR email='$detail'");

    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);

        $student_id = $row['id'];
        $student_name = $row['student_name'];


        header("location: ../dashboard/view_progress.php");// Redirecting To Other Page
    } else {
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Student Search','Sorry the student detail you entered does not exist in our records. Please check and try again.','warning');";
        echo '}, 100);</script>';
        mysqli_close($connection);

        header("location: ../dashboard/search_progress.php");// Redirecting To Other Page

    }
}