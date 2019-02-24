<?php
/**
 * Fetch the specific
 * skill to be commented and
 * update the comment the column with the
 * comment from the supervisor
 */

if (isset($_POST['supervisor_comment'])) {
    $skill_id = mysqli_real_escape_string($connection, $_POST['id']);
    $comment = mysqli_real_escape_string($connection, $_POST['comment']);

    //fetch the specific skill here
    $checkSkill = "SELECT * FROM hub_table WHERE id='$skill_id'";
    if (mysqli_query($connection, $checkSkill)) {
        //then update skill
        $updateSkillComment = mysqli_query($connection, "update hub_table set comment='$comment' where id='$skill_id'");
        if (mysqli_query($connection, $updateSkillComment)) {
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Skill Comments','Your comment to $learn Skill has been saved successfully.,'success');";
            echo '}, 100);</script>';
            mysqli_close($connection);


            header("location: ../dashboard/view_skill.php");// Redirecting To Other Page
        } else {
            echo '<script type="text/javascript">';
            echo "setTimeout(function () { swal('Skill Comments','Sorry!! System failed to commit your comment.','error');";
            echo '}, 100);</script>';
            mysqli_close($connection);


            header("location: ../dashboard/view_skill.php");// Redirecting To Other Page
        }
    } else {
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Skill Comments','Sorry!! System failed to commit your comment.','error');";
        echo '}, 100);</script>';
        mysqli_close($connection);


        header("location: ../dashboard/view_skill.php");// Redirecting To Other Page
    }
}