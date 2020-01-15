<?php
/**
 * Here we will assign student a task and notify
 * the students
 */

//get the current time
$now = date('Y-m-d h:i:s');

if (isset($_POST['super_assign_task'])) {
    $supervisor_id = mysqli_real_escape_string($connection, $_POST['supervisor_id']);
    $student_id = mysqli_real_escape_string($connection, $_POST['student_id']);
    $task_type = mysqli_real_escape_string($connection, $_POST['task_type']);
    $task_description = mysqli_real_escape_string($connection, $_POST['task_description']);


    if (!$student_id) {
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Task Assignment','Please select student'.,'warning');";
        echo '}, 100);</script>';
        mysqli_close($connection);


        header("location: ../dashboard/assign_task.php");// Redirecting To Other Page
    } else {

        //save the details here of the task
        $sql = "INSERT INTO task_table (student_id,supervisor_id,task_type,task_description,created_at) VALUES ('$student_id','$supervisor_id','$task_type','$task_description','$now')";

        $task = mysqli_query($connection, $sql);
        if ($task) {
            //fetch student here
            $ses_sql = mysqli_query($connection, "SELECT * FROM student_table WHERE id='$student_id'");
            $row = mysqli_fetch_assoc($ses_sql);
            $name = $row['student_name'];

            //write notifications
            $studentNotification = "INSERT INTO notification_table (admin_id,supervisor_id,student_id,subject,message,created_at) VALUES (0,0,'$student_id','$task_type','$task_description','$now')";
            mysqli_query($connection, $studentNotification);


            //notify here
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Task Assignment','Successfully assigned task to '$name.,'success');";
            echo '}, 100);</script>';
            mysqli_close($connection);

            header("location: ../dashboard/assign_task.php");// Redirecting To Other Page
        }
    }
}