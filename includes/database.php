<?php
$dbuser = "user";
$dbpassword = "password";
$dbhost = "localhost";
$dbdatabase = "datastore";
$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbdatabase);
if(!$connection){
  echo "database error";
}
?>