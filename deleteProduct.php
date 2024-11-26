<?php

	require_once("functions/productsFunctions.php");

	$page = `DELETE PRODUCT`;
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

	$form2 = isset($_GET["id"]);

	if($form2){
		$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);

		if($id !== FALSE){
			$product = getProductById($id);

			if (empty($product["id"])){
				header("Location: error404.php");
      	exit();
			}
		}
	}

	$form3 = isset($_GET['option']);

	if($form3){
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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="styles/style.css">
	</head>

	<body>

		<header>
			<?php require("components/header.php"); ?>
		</header>
		
		<main>
			<?php if($form2 && $id > 15): ?>
				<div class="outer-border">
					<p class="delete-message">Are you shure you want to delete 
						<b><?= $product['name'] ?? ''; ?> (ID <?= $product['id'] ?? ''; ?>)</b>?
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
			<?php elseif($form2 && $id <= 15): ?>
				<div class="outer-border">
					<p class="delete-message">
						<span style="font-size: 26px">SORRY!!!</span>
						<br><br>
						To ensure that there are always products registered for people to test the website, 
							products with ID up to 15 cannot be deleted!
						<br>
						Try one with ID 16 or higher!
					</p>
				</div>
			<?php endif; ?>

			<div class="outer-border">
				<div class="main-title-div">
					<div class="list-div">
						<h3 class="page-titles">DELETE PRODUCT</h3>
					</div>
					<div class="search-div">			
						<form action="deleteProduct.php" class="search-form" method="get">
							<input type="text" name="search" placeholder="id/name" autofocus>
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