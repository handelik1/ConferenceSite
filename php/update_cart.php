<?php
session_start();
?>
<?php include('header.html'); ?>

<?php include('nav.php'); ?>

<?php include('dropdown.html'); ?>

<img alt = "Join Us From July 6, 2017 - July 11, 2017" id = "banner" src = "banner.jpg"/>
<br>
<br>
<body>

<?php
	require("connect.php");
	
	$outstr = '';
	//remove an item from cart
	if(isset($_POST['remove'])){
	$id = $_POST['id'];
		echo $id;
		foreach($_SESSION['cart'] as $type => $item){
			if($id == $item[0]){
				unset($_SESSION['cart'][$type]);			
			}
		}
		include("shopping_cart.php");
	}
	//update item in cart
	else if(isset($_POST['update'])){
	$id = $_POST['id'];
	$update_quantity = mysqli_real_escape_string($con,$_POST['update_quantity']);
		foreach($_SESSION['cart'] as $type => $item){
			if($id == $item[0]){
				$_SESSION['cart'][$type][2] = $update_quantity;		
			}
		}
		include("shopping_cart.php");
	}
	
	else if(isset($_POST['empty'])){
			$_SESSION['cart'] = array();
			$outstr = '';
			
			if(count($_SESSION['cart']) == 0){
		
		$outstr .= '<h1 id = "cart-header">Shopping Cart</h1>';
		$outstr .= '<h2 id = "empty">Your cart is empty</h2><br><br>';
		$outstr .=  '<a style = "left: 750px" id = "continue" href = "shop.php"><button value = "Continue Shopping">Continue Shopping</button></a><br><br><br>';
	}

	}
	//add item to cart
	else{
	$product_name = $_POST['product_name'];
	$itemQuantity = mysqli_real_escape_string($con,$_POST['itemQuantity']);
	$total = 0;
	$exists = false;
	$id = $_POST['id'];
	
	//if no cart exists, make one.
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}

	$product = array();
	array_push($product, $id, $product_name, $itemQuantity);
	
		$outstr .= '<h1 id = "cart-header">Shopping Cart</h1>';
		
		$outstr .= '<a href = "show_cart.php"><img id = "cart" src = "cart.png" href = "cart.php" /></a>';
		
		//checks to see if item exists in cart
		foreach($_SESSION['cart'] as $item){
			if($id == $item[0]){
				$exists = true;			
			}
			
		}	
		//updates quantity
		foreach($_SESSION['cart'] as $type => $item){
			if($exists && $id == $item[0]){
				
				$_SESSION['cart'][$type][2] += $itemQuantity;
			}
		}
		//if cart is empty, add item		
		if(count($_SESSION['cart']) == 0){
		array_push($_SESSION['cart'], $product);
			$exists = true;
		}
		//if item does not exist in cart, add it
		foreach($_SESSION['cart'] as $item){
			if(!$exists && $id != $item[0]){
				array_push($_SESSION['cart'], $product);
				break;
			}
		}	
		
		$outstr .=  '<h3 class = "added">Item(s) have been added to your shopping cart</h3>';
		$outstr .=  '<a id = "continue" href = "shop.php"><button value = "Continue Shopping">Continue Shopping</button></a>';
	}
	echo $outstr;
	mysqli_close($con);
	

?>

</body>

<?php include('footer.html'); ?>