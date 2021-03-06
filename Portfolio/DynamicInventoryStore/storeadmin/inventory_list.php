<?php
session_start();
if(!isset($_SESSION["manager"])){
  header("location: admin_login.php");
  exit();
}
$managerID = preg_replace('#[^0-9]#i','',$_SESSION["id"]); //filter everything but number and letters
$manager = preg_replace('#[^A-Za-z0-9]#i','',$_SESSION["manager"]); //filter everything but numbers or letters
$password = preg_replace('#[^A-Za-z0-9]#i','',$_SESSION["password"]); // filter everything but numbers and letters       
//Run MySQL query to be sure that this persone is an admin and that their password session var equals the database information
//Connect to the MySQL database
include "../storescripts/connect_to_mysql.php";
$sql = mysqli_query($con, "SELECT * FROM admin WHERE id='$managerID' AND username='$manager' AND password='$password' LIMIT 1"); //query the person
//... make sure person exists in database...
$existCount = mysqli_num_rows($sql); // count the row nums
if ($existCount == 0) {
        header("location: ../index.php");
        exit();
}
?>
<?php
//Delete item Question to admin, and Delete product if they choose
if (isset($_GET['deleteid'])) {
	echo'Do you really want to delete product with ID of ' . $_GET['deleteid'] . '?<a href="inventory_list.php?yesdelete=' . $_GET['deleteid'] . '">Yes</a>|<a href="inventory_list.php">No</a>';
 exit();
}
if (isset($_GET['yesdelete'])) {
	//remove item from system and delete its picture
	//delete from database
	$id_to_delete=$_GET['yesdelete'];
	$sql=mysqli_query($con,"DELETE FROM products WHERE id='$id_to_delete' LIMIT 1") or die (mysqli_error($con));
	//unlink image from server
	$pictodelete = ("../inventory_images/$id_to_delete.jpg");
	if(file_exists($pictodelete)) {
		unlink($pictodelete);
	}	
	header("location: inventory_list.php");
//	exit();

}
?>
<?php
if (isset($_POST['product_name'])){

 $product_name = mysqli_real_escape_string($con,$_POST['product_name']);
 $price = mysqli_real_escape_string($con,$_POST['price']);
 $category = mysqli_real_escape_string($con,$_POST['category']);
 $subcategory = mysqli_real_escape_string($con,$_POST['subcategory']);
 $details = mysqli_real_escape_string($con,$_POST['details']);
//See if that product name is an identical match to another product in the system
$sql = mysqli_query($con, "SELECT id FROM products WHERE product_name='$product_name' LIMIT 1");
$productMatch = mysqli_num_rows($sql); //count the output amount
 if($productMatch > 0 ) {
	echo 'Sorry you tried to place a duplicate "Product Name" into the system, <a href="inventory_list.php>Click Here</a>';
	exit();
	}
//Parse the form data and add inventory item to the system Add this product into the database now
   $sql = mysqli_query($con, "INSERT INTO products (product_name, price, details, category, subcategory, date_added) VALUES ('$product_name','$price','$details','$category','$subcategory',now())") or die (mysqli_error($con)); //try thesql error in the others
   $pid = mysqli_insert_id($con);
   //Place image in folder
   $newname = "$pid.jpg";
  move_uploaded_file( $_FILES['fileField']['tmp_name'], "../inventory_images/$newname");
header("location: inventory_list.php");
//exit();
}
?>
<?php
//This blocks grabs the whole list for viewing
$product_list ="";
$sql = mysqli_query($con, "SELECT * FROM products ORDER BY date_added DESC");
$productCount = mysqli_num_rows($sql); //count the output amount
if($productCount > 0) {
	while($row = mysqli_fetch_array($sql)){
	$id = $row["id"];
	$product_name = $row["product_name"];
	$price = $row["price"];
	$date_added = strftime("%b %d, %Y",strtotime($row["date_added"]));
	$product_list .= "Product ID: $id - <strong>$product_name</strong> - $$price - <em>Added$date_added</em>  &nbsp; &nbsp; &nbsp;  <a href='inventory_edit.php?pid=$id'>edit</a> &bull; <a href='inventory_list.php?deleteid=$id'>delete</a><br/>";
	}
} else {
	$product_list = "you have no product listed in your store yet";
}
?>
<!doctype html PUBLIC "_//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTDxhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"/>
<head>
<meta http-equiv="Content-Type" content="text/html, charset=utf-8"/>
<title>Inventory List</title>
<link rel="stylesheet" href="../style/style.css" type="text/css" media="screen" />
</head>



<div align="center"id="mainWrapper">
<?php include_once("../template_header.php");?>
<div id="pageContent"> <br/>
  <div align="right" style="margin-right 32px;"><a href="inventory_list.php#inventoryForm">+  Add New Inventory Item</a></div>
  <div align="left" style="margin-left:24px;">
  <h2>Inventory list</h2>
  <?php echo $product_list; ?>
  <!--p><a href="inventory_list.php">Manage Inventory</a><br>
  <a href="#">Manage blah blu</a></p-->
</div>
<a name="inventoryForm" id="inventoryForm"></a>

  <h3>
  Add New Inventory Item Form
  </h3>
  <form action="inventory_list.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post"> 
 <table width="90%" border="0" cellspacing="0" cellpadding="6">
   <tr>
     <td width="20%"> Product Name</td>
     <td width="80%"> <label>
     <input name="product_name" type="text" id="product_name" size="64"/>
    </label></td>
   </tr>
   <tr>
     <td>Product Price</td>
     <td><label>
     $
     <input name="price" type="text" id="price" size="12"/>
     </label></td>
   </tr>
   <tr>
     <td align="leftt">Category</td>
     <td><label>
	<select name="category" id="category">
	<option value=""></option>
	<option value="Rings">Rings</option>
	<option value="Necklaces">Necklaces</option>
	<option value="Earings">Earings</option>
	<option value="Watches">Watches</option>
	</select>
   </label></td>
   </tr>
   <tr>
     <td align="left">Subcategory</td>
     <td>
	<select name="subcategory" id="subcategory">
	<option value=""></option>
	<option value="bronze">Bronze</option>
	<option value="Gold">Gold</option>
	<option value="Silver">Silver</option>
	</select>
   </td>
   </tr>
   <tr>
     <td align="left">Product Details</td>
     <td><label>
	<textarea name="details" id="details" cols="64" rows="5"></textarea>
     </label></td>
   </tr>
 <tr>
     <td>Product Image</td>
     <td><label>
       <input type="file" name="fileField" id="fileField"/>
    </label></td>
   </tr>
  <tr>
     <td>&nbsp;</td>
     <td><label>
	<input type="submit" name="button" id="button" value="Add This Item Now"/>
	</label></td>
   </tr> 
</table>
</form>

 <br/>
<br/>
<br/>
</div>
  <?php include_once("../template_footer.php");?>
</div>

</body>
