<?php
/**
 *fetch a specific task to see more details
 * using an id
 */


// get id
$task_id = $_GET["id"];

// Do the query
$ses_sql = mysqli_query($connection, "SELECT * FROM task_table WHERE id='$task_id'");
$row = mysqli_fetch_assoc($ses_sql);

//assign
$task_type = $row['task_type'];
$task_description = $row['task_description'];
$created_at = $row['created_at'];

//update the query here that is to read
$update = mysqli_query($connection, "update task_table set status=1 where id='$task_id'");