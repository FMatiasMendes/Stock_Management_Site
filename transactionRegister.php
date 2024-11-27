<?php

	require_once("functions/productsFunctions.php");

	$page = "TRANSACTION REGISTER";

	$listProducts = listProducts();
	$product = null;
	$id = null;

	$form1 = isset($_GET["search"]);

	if ($form1){
		$search = filter_input(INPUT_GET, 'search', FILTER_SANITIZE_STRING);
		$listProducts = searchProduct($search);
	}
	else{
		$listProducts = listProducts();
	}

	$form2 = isset($_GET["id"]) && isset($_GET["action"]);

	if($form2){
		$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
		$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

		if($id !== FALSE && $action !== FALSE){
			$product = getProductById($id);
			if (empty($product["id"])){
				header("Location: error404.php");
				exit();
			}
			elseif($action !== 'sell' && $action !== 'buy'){
				header("Location: error404.php");
				exit();
			}
		}
	}

	$form3 = isset($_GET["quantity"]) && isset($_GET["option"]) && isset($_GET["action"]);

	if($form3){
		$quantity = filter_input(INPUT_GET, 'quantity', FILTER_VALIDATE_INT);
		$option = filter_input(INPUT_GET, 'option', FILTER_SANITIZE_STRING);
		$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);

		if($quantity !== FALSE && $option !== FALSE && $action !== FALSE){
			if($option === 'register'){
				if($action == 'buy'){
				$initialQuantity = $product['quantity'];
				$updatedQuantity = $initialQuantity + $quantity;			
				}
				elseif($action == 'sell'){
					$initialQuantity = $product['quantity'];
					$updatedQuantity = $initialQuantity - $quantity;					
				}
				updateProductQuantity($updatedQuantity, $id);
				$listProducts = listProducts();
			}			
		}
		header("Location: transactionRegister.php");
		exit();
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
					<h4 class="page-titles">
						How many "<?= $product["name"]; ?>" (ID: <?= $product["id"]; ?>) were
						<?= ($action == 'buy')? "bought": "sold" ; ?>?
					</h4>					
					<div>
						<form action="transactionRegister.php" class="search-form form-top-margin" method="get">
							<input type="hidden" name="id" value="<?= $product["id"]; ?>">
							<input type="hidden" name="action" value="<?= $action; ?>">
							<input type="number" name="quantity" placeholder="Quantity" min="0" max="999999" step="1" required autofocus><br>
							<button type="submit" name="option" value="register" class="save-button">REGISTER</button>
							<button type="submit" name="option" value="cancel" class="cancel-button">CANCEL</button>
						</form>
					</div>
				</div>
			<?php endif; ?>

			<div class="outer-border">
				<div class="main-title-div">
					<div class="list-div">
						<h3 class="page-titles">REGISTER SALES</h3>
					</div>
					<div class="search-div">			
						<form action="transactionRegister.php" class="search-form" method="get">
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
							<td><?= htmlspecialchars($l["id"]); ?></td>
							<td><?= htmlspecialchars($l["name"]); ?></td>
							<td><?= number_format($l["price"], 2); ?> €</td>
							<td><?= htmlspecialchars($l["quantity"]); ?></td>							
							<td>
								<div id="action-buttons">
									<form action="">
										<input type="hidden" name="action" value="buy">
										<button type="submit" name="id" value="<?= htmlspecialchars($l["id"]); ?>" class="edict-button">BUY</button>
									</form>
									<form action="">
										<input type="hidden" name="action" value="sell">
										<button type="submit" name="id" value="<?= htmlspecialchars($l["id"]); ?>" class="edict-button">SELL</button>
									</form>									
								</div>						
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