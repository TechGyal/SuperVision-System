<?php
/**
 *This file connects to the database or simple terms
 * It is used to acquire the connection to the database
 */


$host = "http://138.68.138.214";//define the host to the database for our case is localhost
$user = "TechGuy";//define the user who own the database or has privilege to access it
$password = "j@bv1nny54321";//define the password to access the database for our case we have none
$database_name = "as.mvtechzone.com";//Here we give the name of our database we want to connect to


/**
 * In this connection we try to connect then if it
 * fails we terminate by using die(connection)
 */
$connection = mysqli_connect($host, $user, $password, $database_name) or die($connection);