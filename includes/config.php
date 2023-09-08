<?php
define('DB_SERVER','getenv('php_DB_HOST')');
define('DB_USER','getenv('php_DB_USER')');
define('DB_PASS' ,'getenv('php_DB_PASSWORD')');
define('DB_NAME', 'getenv('php_DB_NAME')');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
