<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','vanbooking');

// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}


//define('DB_HOST','localhost');
//define('DB_USER','root');
//define('DB_PASS','');
//define('DB_NAME','carrental');
//
//// Establish database connection.
//$dbh = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//
//if (mysqli_connect_errno($dbh)) {
//    exit("Error: " . mysqli_connect_error($dbh));
//}
//
//mysqli_set_charset($dbh, "utf8");
