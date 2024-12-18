<?php

	require("functions/productsFunctions.php");

	$page = "PRODUCTS LIST";
	$column = "id";
	$order = "ASC";
	
	$form1 = isset($_GET["search"]);	

	if ($form1){
		$search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
		$listProducts = orderSearchProduct($search, $column, $order);
	}
	else{
		$listProducts = listProducts();
	}

	$form2 = isset($_GET["column"]) && isset($_GET["order"]);

	if($form2){
		$column = filter_input(INPUT_GET, 'column', FILTER_SANITIZE_STRING);
		$order = filter_input(INPUT_GET, 'order', FILTER_SANITIZE_STRING);

		if($order == 'ASC' or $order == 'DESC'){
			if($column == 'id' or $column == 'name' or $column == 'price' or $column == 'quantity'){
				if ($form1) {
					$listProducts = orderSearchProduct($search, $column, $order); 
				} else {
					$listProducts = ascendingOrder($column, $order);
				}
			}
			else{
				header("Location: error404.php");
				exit();
			}
		}
		else{
			header("Location: error404.php");
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
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<link rel="stylesheet" href="styles/style.css">
	</head>

	<body>

		<header>
			<?php require("components/header.php"); ?>
		</header>
		
		<main>

			<div class="outer-border">
				<div class="main-title-div">
					<div class="list-div">
						<h3 class="page-titles">PRODUCTS LIST</h3>
						<div class="search-div">			
							<form action="productsList.php" class="search-form" method="get">
								<input type="text" name="search" placeholder="id/name" autofocus>
								<button type="submit" name="button" class="list-button search-button">
									<i class="fa fa-search"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			
				<table>
					<tr>
						<th>
							<div class="th-content">
								<div class="th-name">ID</div>
								<div>
									<form action="productsList.php" method="get" class="arrows">
										<input type="hidden" name="search" value="<?= isset($search) ? $search : '' ?>">
										<input type="hidden" name="column" value="id">
										<button type=submit name="order" value="ASC" class="arrow-button">&#11205;</button>
										<button type=submit name="order" value="DESC" class="arrow-button">&#11206;</button>
									</form>
								</div>
							</div>
						</th>
						<th class="name-column">
							<div class="th-content">
								<div class="th-name">NAME</div>
								<div>
								<form action="productsList.php" method="get" class="arrows">
									<input type="hidden" name="search" value="<?= isset($search) ? $search : '' ?>">
										<input type="hidden" name="column" value="name">
										<button type=submit name="order" value="ASC" class="arrow-button">&#11205;</button>
										<button type=submit name="order" value="DESC" class="arrow-button">&#11206;</button>
									</form>
								</div>
							</div>
						</th>
						<th>
							<div class="th-content">
								<div class="th-name">PRICE</div>
								<div>
								<form action="productsList.php" method="get" class="arrows">
									<input type="hidden" name="search" value="<?= isset($search) ? $search : '' ?>">
									<input type="hidden" name="column" value="price">
									<button type=submit name="order" value="ASC" class="arrow-button">&#11205;</button>
									<button type=submit name="order" value="DESC" class="arrow-button">&#11206;</button>
								</form>
								</div>
							</div>
						</th>
						<th>
							<div class="th-content">
								<div class="th-name">QUANTITY</div>
								<div>
								<form action="productsList.php" method="get" class="arrows">
									<input type="hidden" name="search" value="<?= isset($search) ? $search : '' ?>">
									<input type="hidden" name="column" value="quantity">
									<button type=submit name="order" value="ASC" class="arrow-button">&#11205;</button>
									<button type=submit name="order" value="DESC" class="arrow-button">&#11206;</button>
								</form>
								</div>
							</div>
						</th>
					</tr>

					<?php foreach ($listProducts as $i => $l): ?>
						<tr>
							<td><?= $l["id"]; ?></td>
							<td><?= $l["name"]; ?></td>
							<td><?= number_format($l["price"], 2); ?> €</td>
							<td><?= $l["quantity"]; ?></td>
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