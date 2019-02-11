<?php
//Run a select query to get my latest 6 items
//Connect to the MySQL database
include "storescripts/connect_to_mysql.php";
$dynamicList ="";
$sql = mysqli_query($con, "SELECT * FROM products ORDER BY date_added DESC LIMIT 6");
$productCount = mysqli_num_rows($sql); //count the output amount
if($productCount > 0) {
        while($row = mysqli_fetch_array($sql)){
        $id = $row["id"];
        $product_name = $row["product_name"];
        $price = $row["price"];
        $date_added = strftime("%b %d, %Y",strtotime($row["date_added"]));
        $dynamicList .= ' <table width="100%" border="0" cellspacing="0" cellpadding="6">
  <tr>
    <td width="17%" valign="top"><a href="product.php?id=' . $id . '"><img style="border:#666; 1px solid" src="inventory_images/' . $id . '.jpg" alt="' . $product_name . '" width="77" height="102" border="1"/></a></td>
    <td width-"83%" valign="top">' . $product_name . '<br/>
	$' . $price . '<br/>
	<a href="product.php?id=$' . $id . '">View Product</a></td>
   </tr>
  </table>';
        }
} else {
        $dynamicList = "we have no products listed in store yet";

}
//mysql_close();
?>

<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTDxhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"/>
<head>
<meta http-equiv="Content-Type" content="text/html, charset=utf-8"/>
<title>Store Home Page</title>
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen"/>
</head>


<body>
<div align="center" id="mainWrapper">
<?php include_once("template_header.php");?>
<div id="pageContent"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
  <td width="24%" valign="top"><p>Todays Deals</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </td>
 
  <td width="53%" valign="top"><p> Newest Items Added to the store</p><?php echo $dynamicList;?> <br/>
   </p>
  <!--table width="100%" border="0" cellspacing="0" cellpadding="6">
  <tr>
    <td width="17%"><a href="#"><img style="border:#666; 1px solid" src="inventory_images/1.jpg" alt="$dynamicTitle" width="77" height="102" border="1"/></a>
    </td>
    <td width-"83%">&nbsp;</td>
   </tr>
  </table-->
  <p><br/>
  <p> </td>
  <td width="23%" valign="top">&nbsp;</td>
</tr>
</table>
</div>
<?php include_once("template_footer.php");?>
</div>
</body>
<html>
