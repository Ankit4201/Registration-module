<?php
/*
This files contains database configuration assuming you are running mysql using user "root" and password "".
*/
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','Onlychance@02');
define('DB_NAME','login');

//connecting to database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);

//Check the connection
if($conn == false){
    die('Error: Cannot connect');
}

?>