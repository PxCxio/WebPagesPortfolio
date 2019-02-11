<?php
//connect to the MySQL database
require "connect_to_mysql.php";

$sql="CREATE TABLE transactions (
	id int(11) NOT NULL auto_increment,
	product_id_array varchar(255) NOT NULL,
	payer_email varchar(255) NOT NULL,
	first_name varchar(255) NOT NULL,
	last_name varchar(255) NOT NULL,
	payment_date date NOT NULL,
	mc_gross varchar(255) NOT NULL,
	payment_currency varchar(255) NOT NULL,
	txn_id varchar(255) NOT NULL,
	reciever_email varchar(255) NOT NULL,
	payment_type varchar(255) NOT NULL,
	payment_status varchar(255) NOT NULL,
	txn_type varchar(255) NOT NULL,
	payer_status varchar(255) NOT NULL,
	address_street varchar(255) NOT NULL,
	address_city varchar(255) NOT NULL,
	address_state varchar(255) NOT NULL,
	address_zip varchar(255) NOT NULL,
	address_country varchar(255) NOT NULL,
	address_status varchar(255) NOT NULL,
	notify_version varchar(255) NOT NULL,
	verify_sign varchar(255) NOT NULL,
	payer_id varchar(255) NOT NULL,
	mc_currency varchar(255) NOT NULL,
	mc_fee varchar(255) NOT NULL,
	PRIMARY KEY (id),
	UNIQUE KEY txn_id (txn_id)
	)";
if ($con->query($sql) === TRUE) { 
	echo "Table created successfully"; 
} else { 
  echo "Error creating table: " . $con->error; 
} 
$con->close(); 
?>
	
