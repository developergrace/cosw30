<?php
// Create environment variables
$hostname   = getenv('DB_HOSTNAME');
$username   = getenv('');
$password   = getenv('');
$dbname     = getenv('');
// Establish the connection to the database
$connection = mysqli_connect($hostname, $username, $password, $dbname);
?>