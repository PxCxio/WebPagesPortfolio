<?php
//connect to the MySQL database
require "connect_to_mysql.php";

$sql="CREATE TABLE products (
	id int(11) NOT NULL auto_increment,
	product_name varchar(255) NOT NULL,
	price varchar(16) NOT NULL,
	details text NOT NULL,
	category varchar(16) NOT NULL,
	subcategory varchar(16) NOT NULL,
	date_added date NOT NULL,
	PRIMARY KEY (id),
	UNIQUE KEY  product_name (product_name)
	)";
if ($con->query($sql) === TRUE) { 
	echo "Table created successfully"; 
} else { 
  echo "Error creating table: " . $con->error; 
} 
$con->close(); 
?>
	
