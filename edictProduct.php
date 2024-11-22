<?php

	require("functions/productsFunctions.php");

	$page = "EDICT PRODUCT";
	$listProducts = listProducts();
	$id = null;
	$product = null;

	if (isset($_GET["edict"])) {
    $id = filter_input(INPUT_GET, "edict", FILTER_VALIDATE_INT);

    if ($id !== false) {
			$product = getProductById($id);
    }
	}	

	$form = isset($_GET["name"]) && isset($_GET["price"]) && isset($_GET["quantity"]);

	if ($form){
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
		<link rel="shortcut icon" href="images/background.jpg" type="image/x-icon">
		<link rel="stylesheet" href="styles/style.css">
	</head>

	<body>

		<header>
			<?php require("components/header.php"); ?>
		</header>
		
		<main>

		<div class="outer-border">
			<!-- make div appear/disappear -->
			<h3 class="page-titles">EDICT PRODUCT (<?= htmlspecialchars($product["id"] ?? ''); ?>)</h3>
			<div>
				<form action="edictProduct.php" class="search-form" method="get">
					<input type="hidden" name="id" value="<?= $product['id'] ?? ''; ?>">
					<input type="text" name="name" placeholder="Name" value="<?= $product["name"] ?? ''; ?>" required autofocus><br><br>					
					<input type="number" name="price" placeholder="Price (€)" value="<?= $product["price"] ?? ''; ?>" min="0" max="999999" step="0.01" required><br><br>
					<input type="number" name="quantity" placeholder="Quantity" value="<?= $product["quantity"] ?? ''; ?>" min="0" max="999999" step="1" required><br><br>
					<input type="submit" name="save" value="SAVE" class="save-button">
					<a href="edictProduct.php" class="cancel-button">CANCEL</a>
				</form>
			</div>
		</div>

			<div class="outer-border">
				<h3 class="page-titles">EDICT PRODUCT</h3>				
							
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
								<button type="submit" name="edict" value="<?= $l["id"]; ?>" class="edict-button">EDICT</button>
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