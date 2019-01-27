<?php
/**
 *fetch a specific mail
 * using an id
 */


// get id
$mail_id = $_GET["id"];

// Do the query
$ses_sql = mysqli_query($connection, "SELECT * FROM notification_table WHERE id='$mail_id'");
$row = mysqli_fetch_assoc($ses_sql);

//assign
$subject = $row['subject'];
$message = $row['message'];
$created_at = $row['created_at'];

//update the query here that is to read
$update = mysqli_query($connection, "update notification_table set status=1 where id='$mail_id'");
