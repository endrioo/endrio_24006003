<?php
$databaseHost = 'localhost';
$databaseUsername = 'root';
$databasePassword = '';
$databaseName = '24006003_database';    
$connection = mysqli_connect($databaseHost,$databaseUsername,$databasePassword);
$database = mysqli_select_db($connection,$databaseName);
?>
