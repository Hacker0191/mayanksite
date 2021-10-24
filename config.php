<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql201.byetcluster.com');
define('DB_USERNAME', 'epiz_29432306');
define('DB_PASSWORD', 'hjBpcUdbRQEZVl');
define('DB_NAME', 'epiz_29432306_login');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
