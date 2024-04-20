<?php
$databaseHost = 'localhost';
$databaseName = 'r4';
$databaseUsername = 'root';
$databasePassword = 'root@123';

// Open a new connection to the MySQL server
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
