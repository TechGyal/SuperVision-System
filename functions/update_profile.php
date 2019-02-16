<?php
/**
 * This file contains all the
 * updating admin/supervisor and student profiles
 * each function is identified by the button clicked
 */
echo $admin_name;
if (isset($_POST['update_admin'])) {
    //get data from fields
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $phone_number = mysqli_real_escape_string($connection, $_POST['phone_number']);

    //hera check for the admin session and fetch the id of the currently logged in admin
    $query = mysqli_query($connection, "update admin_table set phone_number='$phone_number',email='$email' WHERE id='$admin_id'");
    if ($query) {
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Hello $admin_name','You have successfully updated your account.','success');";
        echo '}, 100);</script>';
    } else {
        echo '<script type="text/javascript">';
        echo "setTimeout(function () { swal('Account Update','Failed to update your account','error');";
        echo '}, 100);</script>';
    }

}