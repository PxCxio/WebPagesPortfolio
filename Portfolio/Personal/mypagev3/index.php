<?php
$result = mysqli_query($con, 'select * from product');
?>
<table>
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Price</th>
	<th>Buy></th>
	
</tr>
<?php while ($product = mysqli_fetch_object($result)){ ?>
	<tr>
		<td><?php echo $product->id; ?></td> 
		<td><?php echo $product->name; ?></td>
		<td><?php echo $product->price; ?></td>
		<td><a href="cart.php?=<?php echo $product->id;?>">Order Now</a></td>
	</tr>
	
<?php } ?>	


</table>