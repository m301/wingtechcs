<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'admin_wingtechcs');


function getMYSQLIConnection(){
  $conn= new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  if($conn->error_no())
  	die('Couldn\'t connect!'.mysqli_connect_error());
  return $conn;
}
