<?php //connect to db require"connect_to_mysql.php"; 
require "connect_to_mysql.php";

$sql = "CREATE TABLE admin ( 
	id int(11) NOT NULL auto_increment,
	username varchar(255) NOT NULL, 
	password varchar(255) NOT NULL, 
	last_log_date date NOT NULL, 
	PRIMARY KEY (id), UNIQUE KEY username (username) )"; 
if ($con->query($sql) === TRUE) { 
	echo "Table created successfully"; 
} else { 
  echo "Error creating table: " . $con->error; 
} 
$con->close(); ?>
