<?php
/**
 *This file handles the deletion of
 * supervisors from the system
 */

//include database connection
require '../DBConnection/Connection.php';

// get id
$supervisor_id = $_GET["id"];

// Do the query
$fetch = mysqli_query($connection, "SELECT * FROM supervisor_table WHERE id='$supervisor_id'");
$query = mysqli_query($connection, "DELETE FROM supervisor_table WHERE id='$supervisor_id'");

$row = mysqli_fetch_assoc($fetch);
$name = $row['supervisor_name'];

//here check i supervisor was deleted
if ($query) {
    echo '<script type="text/javascript">';
    echo "setTimeout(function () { swal('Supervisor Account','You have successfully deleted $name account.','success');";
    echo '}, 100);</script>';

    header("location: ../admin/dashboard/viewSupervisor.php");// Redirecting To Other Page
} else {
    echo '<script type="text/javascript">';
    echo "setTimeout(function () { swal('Supervisor Account','Failed to delete $name account','error');";
    echo '}, 100);</script>';

    header("location: ../admin/dashboard/viewSupervisor.php");// Redirecting To Other Page
}