<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'crashbeer_nl_sportbet');
define('DB_PASSWORD', '4ZyY6iqsMLpY');
define('DB_NAME', 'crashbeer_nl_sportbet');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

?>