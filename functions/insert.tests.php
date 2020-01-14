<?php
/**
 * In this file we are going to process all our tests
 * e.g inserting admin details since we have no interface for entering an
 * admin and so on
 */


//first require this by checking the database connection connection
require('../db_connection/Connection.php');
require('../inc/appNames.php');

/**
 * enter manually admin data
 */
$admin_name = $adminName;
$national_id = $nationalID;
$email = $adminEmail;
//generate a random secret code
try {
	$secret_code = strtoupper(bin2hex(openssl_random_pseudo_bytes(5)));
} catch (Exception $e) {
    return 504;
}
$password = md5($national_id);
$now = date('Y-m-d h:i:s a');

$sql_statement = "INSERT INTO admin_table 
(admin_name,email,phone_number,national_id,secret_code,password,created_at)"
    . " VALUES(' $admin_name','$email','$phoneNumber','$national_id','$secret_code','$password','$now')";

//process the sq;_statement using mysql_query
$new_data = mysqli_query($connection, $sql_statement);

//check if the data query successful
if ($new_data) {
    //close the database connection
    mysqli_close($connection);

    //redirect back to this file
    return 200;
} else {
    return 401;
}