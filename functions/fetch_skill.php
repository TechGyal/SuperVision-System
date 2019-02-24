<?php
/**
 *fetch a specific skill to see more details
 * using an id and also comment on it.
 */

// get id
$skill_id = $_GET["id"];

// Do the query
$ses_sql = mysqli_query($connection, "SELECT * FROM hub_table WHERE id='$skill_id'");
$row = mysqli_fetch_assoc($ses_sql);

//assign
$learn = $row['learn'];
$skill = $row['skill'];
$comment = $row['comment'];