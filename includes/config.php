<?php

//Configuration for locakhost
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'palak');

//Configuration for Hosting
// define('DB_SERVER','remotemysql.com');
// define('DB_USER','PrnwHiDRAX');
// define('DB_PASS' ,'ajsu3wWGxJ');
// define('DB_NAME', 'PrnwHiDRAX');


$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>