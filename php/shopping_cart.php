<script>
function warn(){
	var x = document.getElementById("qty1").value;
	
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

<?php
	
	if(count($_SESSION['cart']) == 0){
		
		$outstr .= '<h1 id = "cart-header">Shopping Cart</h1>';
		$outstr .= '<h2 id = "empty">Your cart is empty</h2><br><br>';
		$outstr .=  '<a style ="left:751px" id = "continue" href = "shop.php"><button value = "Continue Shopping">Continue Shopping</button></a>';
	}
	else{
		$total = 0;
		$outstr = '';
		$outstr .= '<table id = "shopping-cart">';
		$outstr .= '<h1 id = "cart-header">Shopping Cart</h1>';
		$outstr .=  '<a id = "continue" href = "shop.php"><button value = "Continue Shopping">Continue Shopping</button></a>';
		$outstr .= '<form action ="update_cart.php"  method = "post">
						<input id = "clear" name = "empty" type = "submit" value = "Empty Cart">
					</form>';
		foreach($_SESSION['cart'] as $item){
			$priceQuery = mysqli_query($con, "SELECT price FROM store WHERE id = " .$item[0]) or die (mysql_error());
			while ($row = mysqli_fetch_array($priceQuery)){
			$price = $row['price'];
			$subtotal = 0;
			$subtotal = $item[2] * $price;
			$total += $subtotal;
			$outstr .= '<form onsubmit = "return warn()" action = "update_cart.php" method = "post">';
			$outstr .= '
						<tr><input type = "hidden" name = "id" value ="'.$item[0].'">
						<td>Title: '.$item[1].'<br><br>Quantity: '.$item[2].'<br><br>$'.$price.' each.&nbsp;Total: $'.$subtotal.'.00&nbsp;<br style = "margin-bottom: 20px;"><input id = "qty1" name = "update_quantity" type = "text" value = "1" size="1"><input style ="position: relative;left: 5px" name = "update" type = "submit" value = "Update"><input style ="position: relative;left: 130px" name = "remove" type = "submit" value = "Remove"><br><br></td>
						</tr></form>';
						
			}

		}
					$outstr .= '</table>';
			$outstr .= '<div id = "total"> Grand Total: $'.$total.'.00</div>';
			$outstr .=	'<form action ="checkout.php"  method = "post">
						<input name = "total_bill" value = "'.$total.'" type= "hidden">
						<input id = "shop_checkout" type = "submit" name = "checkout" value = "Check Out"></input>
					</form>';
	}
		
	
?>