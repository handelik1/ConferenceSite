<?php
session_start();
?>
<?php include('header.html'); ?>

<?php include('nav.php'); ?>

<?php include('dropdown.html'); ?>

<script>

function warn(){
	var x = document.getElementById("qty").value;
	
	if(x <= 0 || isNaN(x) || x.length== 0 || x == null){
		alert("Please enter a valid number");
		return false;
	}
	else{
		return true;
	}
	
}

</script>


<img alt = "Join Us From July 6, 2017 - July 11, 2017" id = "banner" src = "banner.jpg"/>
<br>
<br>
<body>



<?php
	require("connect.php");

	$outstr = '';
	
	$itemQuery = mysqli_query($con, "SELECT * FROM store") or die (mysql_error());
	$outstr .= '<h1 id = "manage-header">Inventory Management System</h1>';
	$outstr .= '<div class = "manager">';

	$outstr .= '<table border="1">';	
	//displays inventory manager
    while ($row = mysqli_fetch_array($itemQuery)){
	$outstr .= '<form name = "manage" onsubmit = "return warn()" action = "update_inventory.php" method = "post">';
	$productName = $row['productName'];
	$price = $row['price'];
	$id = $row['id'];
	$outstr .= '
					<tr><input type = "hidden" name = "id" value ="'.$id.'">
						<input type = "hidden" name = "product_name" value ="'.$productName.'">
						<td>'.$productName.'&nbsp;$'.$price.'<input type = "submit" name = "delete" value = "Remove">
						<input name = "update_inventory_price" type = "submit" value = "Update Price">
						<input style = "position: relative; top: 1px;" id = "price" name = "itemPrice" type = "text" size="4">
						</td>
					</tr>';
			
	$outstr .='</form>';
	}
	$outstr .='<table style = "border-top: none">
					<tr style = "border-top: none">
						<td>
							<form name = "manage1" onsubmit = "return warn()" action = "update_inventory.php" method = "post">
								Book Name: <input style = "float: none" type = "text" name = "product_name" size = "20"> Price: <input style = "float: none" type = "text" name = "product_price" size = "5">
									<input name = "add_item" type = "submit" value = "Add Item">
							</form>
						</td>
					</tr>
				</table>';
						

	$outstr .= '</table>';
	$outstr .= '</div><br>';

	
	
	mysqli_close($con);

	echo $outstr;
	
?>

</body>

<?php include('footer.html'); ?>