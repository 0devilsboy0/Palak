<?php

//Configuration for locakhost
// define('DB_SERVER','localhost');
// define('DB_USER','root');
// define('DB_PASS' ,'');
// define('DB_NAME', 'palak');

//Configuration for Hosting
//Used mywindowshosting for free sql hosting
define('DB_SERVER', 'mysql8001.site4now.net');
define('DB_USER', 'a86c2f_palak');
define('DB_PASS', 'P@55Word');
define('DB_NAME', 'db_a86c2f_palak');

//Configuration for cPanel
// define('DB_SERVER', 'mysql5027.site4now.net');
// define('DB_USER', 'a7add6_palak');
// define('DB_PASS', 'P@55Word');
// define('DB_NAME', 'db_a7add6_palak');


$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
