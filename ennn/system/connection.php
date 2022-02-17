<?php
require_once 'config.php';
$con = mysqli_connect($mysqlHostname,$mysqlUser,$mysqlPass,$mysqlDatabase);
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
mysqli_set_charset($con,"utf8");
