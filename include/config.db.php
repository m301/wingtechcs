<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'wingtech_admin');
define('DB_PASSWORD', '6Nxv4bMcKa');
define('DB_DATABASE', 'wingtech_admin');


function getMYSQLIConnection(){
  $conn= new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  if($conn->errorno)
  	die('Couldn\'t connect!'.mysqli_connect_error());
  return $conn;
}
