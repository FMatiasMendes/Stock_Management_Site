<?php

	require_once("functions/productsFunctions.php");

	$page = 'DELETE PRODUCT';
	$listProducts = listProducts();
	$id = null;
	$product = null;

	if(isset($_GET["id"])){
		$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

		if($id !== FALSE){
			$product = getProductById($id);
		}		
	}

	$form = isset($_GET['option']);

	if($form){
		$option = filter_input(INPUT_GET, "option", FILTER_SANITIZE_STRING);

		if ($option == 'YES'){
			deleteProduct($id);
			$listProducts = listProducts();
			header("Location: deleteProduct.php");
			exit();
		}
		elseif($option == 'NO'){
			header("Location: deleteProduct.php");
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
			<!-- change id number -->
			<h3 class="page-titles">DELETE PRODUCT</h3>
			<p class="delete-message">Are you shure you want to delete 
				<b></b><?= $product['name'] ?? ''; ?> (ID <?= $product['id'] ?? ''; ?>)</b>?
			</p>

			<!-- correct this condition -->
			<!-- <?php if ($product === null): ?> -->
				<!-- <p class='error-message'>Product not found.</p> -->
    	<!-- <?php endif; ?> -->

			

			<div>
				<form action="deleteProduct.php" class="search-form" method="get">
					<input type="hidden" name="id" value="<?= $product['id'] ?? ''; ?>">
					<input type="submit" name="option" value="YES" class="save-button">
					<input type="submit" name="option" value="NO" class="cancel-button">
				</form>
			</div>				

		</div>

			<div class="outer-border">
				<h3 class="page-titles">DELETE PRODUCT</h3>				
							
				<table>
					<tr>
						<th>ID</th>
						<th class="name-column">NAME</th>
						<th>PRICE</th>
						<th>QUANTITY</th>
						<th>ACTION</th>
					</tr>
					
					<?php foreach($listProducts as $i => $l): ?>
						<tr>
							<td><?= htmlspecialchars($l['id']); ?></td>
							<td><?= htmlspecialchars($l['name']); ?></td>
							<td><?= number_format($l['price'], 2); ?></td>
							<td><?= htmlspecialchars($l['quantity']); ?></td>
							<td>
								<form action="deleteProduct.php" method="get">
									<button type="submit" name="id" value="<?= $l['id']; ?>" class="edict-button">DELETE</button>
								</form>							
							</td>
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