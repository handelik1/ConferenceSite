<?php

	require('connect.php');
	
	if(isset($_POST['delete'])){
		$itemID = $_POST['id'];
		$dquery = "DELETE FROM store WHERE id = ".$itemID;
		mysqli_query($con,$dquery);
		
	}
	
	else if(isset($_POST['update_inventory_price'])){
	$itemID = $_POST['id'];
	$itemPrice = mysqli_real_escape_string($con, $_POST['itemPrice']);
	$pquery = "UPDATE store SET price =" .$itemPrice. "WHERE id =". $itemID;
	mysqli_query($con,$pquery);
	
	}
	else if(isset($_POST['add_item'])){
		$itemPrice = mysqli_real_escape_string($con, $_POST['product_price']);
		$itemName = mysqli_real_escape_string($con, $_POST['product_name']);
		$aquery = "INSERT INTO store (productName, price) VALUES ('$itemName', '$itemPrice')";
		mysqli_query($con,$aquery);
	}
	include("manager.php");
	
?>