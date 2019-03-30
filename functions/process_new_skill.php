<?php
/**
 * This file will save all
 * the new skills students enter/save
 * on daily basis
 */

//get the current time
$now = date('Y-m-d h:i:s a');

if (isset($_POST['save_skill'])) {
    $student_id = mysqli_real_escape_string($connection, $_POST['student_id']);
    $learn = mysqli_real_escape_string($connection, $_POST['learn']);
    $skill = mysqli_real_escape_string($connection, $_POST['skill']);


    if (!$student_id) {
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('New Skill','Please all fields are required.','warning');";
        echo '}, 100);</script>';
        mysqli_close($connection);


        header("location: ../dashboard/new_skill.php");// Redirecting To Other Page
    } else {

        //save the details here of the task
        $sql = "INSERT INTO hub_table (student_id,learn,skill,created_at) VALUES ('$student_id','$learn','$skill','$now')";

        $task = mysqli_query($connection, $sql);
        if ($task) {
            //write notifications
            $studentNotification = "INSERT INTO notification_table (admin_id,supervisor_id,student_id,subject,message,created_at) VALUES (0,0,'$student_id','$learn','$skill','$now')";
            mysqli_query($connection, $studentNotification);


            //notify here
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('New Skill','Successfully saved $learn skill to your Hub'.,'success');";
            echo '}, 100);</script>';
            mysqli_close($connection);

            header("location: ../dashboard/new_skill.php");// Redirecting To Other Page
        }
    }
}