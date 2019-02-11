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
//Scirpt Error Reporting
error_reporting(E_ALL);
ini_set('display_errors','1');
?>
<?php
//Parse the form data add inventory item to system
if (isset($_POST['product_name'])){

 $pid = mysqli_real_escape_string($con,$_POST['thisID']);
 $product_name = mysqli_real_escape_string($con,$_POST['product_name']);
 $price = mysqli_real_escape_string($con,$_POST['price']);
 $category = mysqli_real_escape_string($con,$_POST['category']);
 $subcategory = mysqli_real_escape_string($con,$_POST['subcategory']);
 $details = mysqli_real_escape_string($con,$_POST['details']);
//See if that product name is an identical match to another product in the system
$sql = mysqli_query($con, "UPDATE products SET product_name='$product_name',price='$price',details='$details', category='$category', subcategory='$subcategory' WHERE id='$pid'");
   if($_FILES['fileField']['tmp_name']!=""){
   //Place image in folder
   $newname = "$pid.jpg";
   move_uploaded_file( $_FILES['fileField']['tmp_name'], "../inventory_images/$newname");
}
  header("location: inventory_list.php");
  exit();
}
?>
<?php
//Gather this product's full information for editing
if(isset($_GET['pid'])) {
$targetID = $_GET['pid'];
$sql = mysqli_query($con, "SELECT * FROM products WHERE id='$targetID' LIMIT 1");
$productCount = mysqli_num_rows($sql); //count the output amount
if($productCount > 0) {
        while($row = mysqli_fetch_array($sql)){
        $pid = $row["id"];
        $product_name = $row["product_name"];
        $price = $row["price"];
        $category = $row["category"];
        $subcategory = $row["subcategory"];
        $details = $row["details"];
        $date_added = strftime("%b %d, %Y",strtotime($row["date_added"]));
        }
} else {
        echo "Sorry that doesnt exist";
        exit();
}
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
  <!--?php echo $product_list; ?-->
  <!--p><a href="inventory_list.php">Manage Inventory</a><br>
  <a href="#">Manage blah blu</a></p-->
</div>
<a name="inventoryForm" id="inventoryForm"></a>

  <h3>
  Add New Inventory Item Form
  </h3>
  <form action="inventory_edit.php" enctype="multipart/form-data" name="myForm" id="myForm" method="post"> 
 <table width="90%" border="0" cellspacing="0" cellpadding="6">
   <tr>
     <td width="20%"> Product Name</td>
     <td width="80%"> <label>
     <input name="product_name" type="text" id="product_name" size="64" value="<?php echo $product_name;?>"/>
    </label></td>
   </tr>
   <tr>
     <td>Product Price</td>
     <td><label>
     $
     <input name="price" type="text" id="price" size="12" value="<?php echo $price;?>"/>
     </label></td>
   </tr>
   <tr>
     <td align="right">Category</td>
     <td><label>
	<select name="category" id="category">
	<option value="<?php echo $category;?>"><?php echo $category;?></option>
	<option value="Rings">Rings</option>
	<option value="Necklaces">Necklaces</option>
	<option value="Earings">Earings</option>
	<option value="Watches">Watches</option>
	</select>
   </label></td>
   </tr>
   <tr>
     <td align="right">Subcategory</td>
     <td>
	<select name="subcategory" id="subcategory">
	<option value="<?php echo $subcategory;?>"><?php echo $subcategory;?></option>
	<option value="bronze">Bronze</option>
	<option value="Gold">Gold</option>
	<option value="Silver">Silver</option>
	</select>
   </td>
   </tr>
   <tr>
     <td align="left">Product Details</td>
     <td><label>
	<textarea name="details" id="details" cols="64" rows="5"><?php echo $details; ?></textarea>
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
	<input name="thisID" type="hidden" value="<?php echo $targetID;?>"/>
	<input type="submit" name="button" id="button" value="Make changes"/>
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
