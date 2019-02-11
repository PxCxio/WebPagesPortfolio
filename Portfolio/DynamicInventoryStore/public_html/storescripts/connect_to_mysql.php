<?php 
$db_host = "localhost";
$db_username = "ciroadmin";
$db_pass = "Pascasio182";
$db_name = "jewelry_shop";
 $con = mysqli_connect("$db_host","$db_username","$db_pass","$db_name"); 
 //$sdb = mysqli_select_db["$db_name"];
  $db_selected = mysqli_select_db($con, $db_name );	
  if (!$db_selected)
          {
             die( $db_name . ' does not exist, can\'t use it ' . mysql_error());
          }
// Check connection
if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); } 

?>
