<?php
	$page = "REGISTER PRODUCT";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Stock Management</title>
		<link rel="shortcut icon" href="images/background.jpg" type="image/x-icon">
		<link rel="stylesheet" href="styles/style.css">
	</head>

	<body>

		<header>
			<?php require("components/header.php"); ?>
		</header>
		
		<main>
		<!-- consider make the ascending/descending order with arrows on each column -->
			<div class="outer-border">
				<h3 class="page-titles">REGISTER NEW PRODUCT</h3>				
				<form action="" class="search-form">
					<input type="text" name="name" placeholder="Name"><br><br>					
					<input type="number" name="price" placeholder="Price (€)"><br><br>
					<input type="number" name="quantity" placeholder="Quantity"><br><br>
					<input type="submit" name="" value="REGIST" class="list-button">
				</form>
				<div>
					<p class="product-registered-message">
						Green Pen (ID: 32) registered with sucess!
					</p>
				</div>
			</div>

		</main>

		<footer>
			<?php require("components/footer.php"); ?>
		</footer>	
			
	</body>
</html>