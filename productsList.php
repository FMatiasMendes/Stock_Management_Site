<?php

	require("functions/productsFunctions.php");

	$page = "PRODUCTS LIST";
	
	$form1 = isset($_GET["search"]);

	if ($form1){
		$search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
		$listProducts = searchProduct($search);
	}
	else{
		$listProducts = listProducts();
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
		<!-- consider make the ascending/descending order with arrows on each column -->
			<div class="outer-border">
				<div class="main-title-div">
					<div class="list-div">
						<h3 class="page-titles">PRODUCTS LIST</h3>				
						<div class="column-selector">
							<label for="">Column</label>
							<select name="column" id="column">
								<option value="id">ID</option>
								<option value="name">NAME</option>
								<option value="price">PRICE</option>
								<option value="quantity">QUANTITY</option>
							</select>
						</div>
						<div class="radio-inputs">
							<div>
								<label for="">Ascending</label>
								<br>
								<input type="radio" name="order" value="ascending" checked="checked">
							</div>
							<div>
								<label for="">Descending</label>
								<br>
								<input type="radio" name="order" value="descending">
							</div>
						</div>
						<input type="submit" name="" value="LIST" class="list-button">
						
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
						<th>ID</th>
						<th class="name-column">NAME</th>
						<th>PRICE</th>
						<th>QUANTITY</th>
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