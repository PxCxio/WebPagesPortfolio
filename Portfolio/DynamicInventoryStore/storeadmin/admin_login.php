<?php
session_start();
if(isset($_SESSION["manager"])){
  header("location: index.php");
  exit();
}
?>
<?php
//parse the log in form if the user has filed it ot and pressed "log in"
if(isset($_POST["username"])&&isset($_POST["password"])) {
  $manager=preg_replace('#[^A-Za-z0-9]#i','',$_POST["username"]); //filter everything but numbers or letters
  $password=preg_replace('#[^A-Za-z0-9]#i','',$_POST["password"]); // filter everything but numbers and letters       
  //Run MySQL query to be sure that this persone is an admin and that their password session var equals the database information
  //Connect to the MySQL database
  include "../storescripts/connect_to_mysql.php";
  $sql=mysqli_query($con,"SELECT id FROM admin WHERE username='$manager' AND password='$password' LIMIT 1"); //query the person
//... make sure person exists in database...
$existCount=mysqli_num_rows($sql); // count the row nums
if ($existCount==1) {//evaluate the count
        while($row=mysqli_fetch_array($sql)){
	   $id=$row["id"];
	}
	$_SESSION["id"]=$id;
	$_SESSION["manager"]=$manager;
	$_SESSION["password"]=$password;
        header("location: index.php");
        exit(); 
} else {
      //exit(); 
      //if ($con->query($sql) === TRUE) {
//} else { 
	echo 'That is not the right password try again <a href="index.php">Click Here</a>' . $con->error;
} 
//$con->close(); 
//	}
}
?>
<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTDxhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"/>
<head>
<meta http-equiv="Content-Type" content="text/html, charset=utf-8"/>
<title>Admin Log In</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" media="screen"/>
</head>


<body>
<div align="center"id="mainWrapper">
<?php include_once("../template_header.php");?>
<div id="pageContent"></br>
<div align="left" style="margin-left:24px;">
 <h2> Please Log In To Manage the Store</h2>
  <form id="form1" name="form1" method="post" action="admin_login.php">
  User Name:<br/>
    <input name="username" type="text" id="username" size="40"/>
    <br/><br/>
    Password<br/>
    <input name="password" type="password" id="password" size="40"/>
    <br/>
    <br/>
    <br/>
   <label>
        <input type="submit" name="button" id="button" value="Log In"/>
   </label>
   </form>
  <p>&nbsp;</p>
 </div>
 <br/>
<br/>
<br>
</div>
<?php include_once("../template_footer.php");?>
</div>
</body>
</html>
