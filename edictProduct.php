<?php

	require("functions/productsFunctions.php");

	$page = "EDICT PRODUCT";
	$listProducts = listProducts();
	$id = null;
	$product = null;

	$form1 = isset($_GET["search"]);

	if ($form1){
		$search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
		$listProducts = searchProduct($search);
	}
	else{
		$listProducts = listProducts();
	}

	$form2 = isset($_GET["edict"]);

	if ($form2) {
    $id = filter_input(INPUT_GET, "edict", FILTER_VALIDATE_INT);
    if ($id !== false) {
			$product = getProductById($id);
			if (empty($product["id"])){
				header("Location: error404.php");
      	exit();
			}
    }
	}	

	$form3 = isset($_GET["name"]) && isset($_GET["price"]) && isset($_GET["quantity"]);

	if ($form3){
		$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);
		$price = filter_input(INPUT_GET, 'price', FILTER_VALIDATE_FLOAT);
		$quantity = filter_input(INPUT_GET, 'quantity', FILTER_VALIDATE_INT);
		$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

		if($name !== false && $price !== false && $quantity !== false && $id !== false){
			edictProduct($name, $price, $quantity, $id);

			header("Location: edictProduct.php");
      exit();
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles/style.css">
	</head>

	<body>

		<header>
			<?php require("components/header.php"); ?>
		</header>
		
		<main>

			<?php if($form2): ?>
				<div class="outer-border">
					<!-- make div appear/disappear -->
					<h4 class="page-titles">
						EDICT PRODUCT (ID: <?= htmlspecialchars($product["id"] ?? ''); ?>)
					</h4>
					<div class="main-title-div">
						<div class="list-div">
							<form action="edictProduct.php" class="search-form form-top-margin" method="get">
								<input type="hidden" name="id" value="<?= $product['id'] ?? ''; ?>">
								<input type="text" name="name" placeholder="Name" value="<?= $product["name"] ?? ''; ?>" required autofocus><br><br>					
								<input type="number" name="price" placeholder="Price (€)" value="<?= $product["price"] ?? ''; ?>" min="0" max="999999" step="0.01" required><br><br>
								<input type="number" name="quantity" placeholder="Quantity" value="<?= $product["quantity"] ?? ''; ?>" min="0" max="999999" step="1" required><br><br>
								<input type="submit" name="save" value="SAVE" class="save-button">
								<a href="edictProduct.php" class="cancel-button">CANCEL</a>
							</form>					
						</div>
					</div>
				</div>
			<?php endif; ?>

			<div class="outer-border">
				<div class="main-title-div">
					<div class="list-div">
						<h3 class="page-titles">EDICT PRODUCT</h3>
					</div>
				
					<div class="search-div">			
						<form action="edictProduct.php" class="search-form" method="get">
							<input type="text" name="search" placeholder="id/name">
							<button type="submit" name="button" class="list-button search-button">
								<i class="fa fa-search"></i>
							</button>
						</form>
					</div>
				</div>
							
				<table>
					<tr>
						<th>ID</th>
						<th class="name-column">NAME</th>
						<th>PRICE</th>
						<th>QUANTITY</th>
						<th>ACTION</th>
					</tr>

					<?php foreach ($listProducts as $i => $l): ?>
						<tr>
							<td><?= htmlspecialchars($l["id"]); ?></td>
							<td><?= htmlspecialchars($l["name"]); ?></td>
							<td><?= number_format($l["price"], 2); ?> €</td>
							<td><?= htmlspecialchars($l["quantity"]); ?></td>
							<td>
							<form action="edictProduct.php" method="get">
								<button type="submit" name="edict" value="<?= $l["id"]; ?>" class="edict-button js-div-display">EDICT</button>
							</form>
						</tr>
					<?php endforeach; ?>

				</table>
			</div>

		</main>

		<footer>
			<?php require("components/footer.php"); ?>
		</footer>
			
	</body>
</html>