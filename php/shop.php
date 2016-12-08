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

<script>
$(document).ready(function(){
	
$('input').on('keyup', function (e) {
    if (e.which === 46) return false;
}).on('input', function () {
	var self = this;
    setTimeout(function () {
        if (self.value.indexOf('.') != -1) self.value = parseInt(self.value, 10);
    }, 0);
});
});
</script>

<img alt = "Join Us From July 6, 2017 - July 11, 2017" id = "banner" src = "banner.jpg"/>
<br>
<br>
<body>

<?php
	require("connect.php");

	$outstr = '';
	
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}
	
	$itemQuery = mysqli_query($con, "SELECT * FROM store") or die (mysql_error());
	$outstr .= '<h1 id = "store-header">Welcome to our store!</h1>';
	$outstr .= '<a href = "show_cart.php"><img id = "cart" src = "cart.png" href = "cart.php" /></a>';
	$outstr .= '<div class = "items">';

	$outstr .= '<table border="1">';	

    while ($row = mysqli_fetch_array($itemQuery)){
	$outstr .= '<form name = "form" onsubmit = "return warn()" action = "update_cart.php" method = "post">';
	$productName = $row['productName'];
	$price = $row['price'];
	$id = $row['id'];
	$outstr .= '
					<tr><input type = "hidden" name = "id" value ="'.$id.'">
						<input type = "hidden" name = "product_name" value ="'.$productName.'">
						<td style = "border: 1px solid black"><span>Title: '.$productName.'</span><br><br>$'.$price.'<br><br>Quantity <input id = "qty" name = "itemQuantity" type = "text" value = "1" size="1"><br><br><input type = "submit" value = "Add to Cart"> </td>';
	$outstr .= '</tr>';
			
	$outstr .='</form>';
	}


	$outstr .= '</table>';
	$outstr .= '</div>';
	$outstr .= '<div id = "management"><a href = "manager.php">Inventory Management</a></div>';
		
	mysqli_close($con);

	echo $outstr;
	
?>

</body>

<?php include('footer.html'); ?>

