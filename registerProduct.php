<?php

	require("functions/productsFunctions.php");

	$page = "REGISTER PRODUCT";

	$form = isset($_GET["name"]) && isset($_GET["price"]) && isset($_GET["quantity"]);

	if ($form){
		$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
		$price = filter_input(INPUT_GET, 'price', FILTER_VALIDATE_FLOAT);
		$quantity = filter_input(INPUT_GET, 'quantity', FILTER_VALIDATE_INT);

		if ($name !== false && $price !== false && $quantity !== false) {
			insertProduct($name, $price, $quantity);
			$product = getProduct($name);
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Stock Management</title>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="styles/style.css">
	</head>

	<body>

		<header>
			<?php require("components/header.php"); ?>
		</header>
		
		<main>
			<div class="outer-border">
				<h3 class="page-titles">REGISTER NEW PRODUCT</h3>				
				<form action="registerProduct.php" class="search-form form-top-margin" method="get">
					<input type="text" name="name" placeholder="Name" required autofocus><br><br>					
					<input type="number" name="price" placeholder="Price (€)" min="0" max="999999" step="0.01" required><br><br>
					<input type="number" name="quantity" placeholder="Quantity" min="0" max="999999" step="1" required><br><br>
					<input type="submit" value="SAVE" class="list-button">
				</form>
				<div>	
					<?php if($form): ?>		
						<p class="product-registered-message">					
							<?= ($name); ?> ID: (<?= $product['id']; ?>) registered with sucess! 					
						</p>
					<?php endif; ?>	
				</div>
			</div>
		</main>

		<footer>
			<?php require("components/footer.php"); ?>
		</footer>	
			
	</body>
</html>