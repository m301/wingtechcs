<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'wingtechcs');

$conn= new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(mysqli_connect_errno())
	die('Couldn\'t connect!'.mysqli_connect_error());
//echo 'Connected Successfully!';




?>