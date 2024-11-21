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

			<div class="outer-border">
				<h1 class="main-title">STOCK MANAGEMENT</h1>
				<nav>
					<ul class="nav-links">
						<li><a href="">HOME</a></li>
						<li><a href="">PRODUCTS LIST</a></li>
						<li><a href="">CODE SEARCH</a></li>
						<li><a href="">REGISTER PRODUCT</a></li>
						<li><a href="">EDICT PRODUCT</a></li>
						<li><a href="">DELETE PRODUCT</a></li>
						<li><a href="">REGISTER SALES</a></li>
						<li><a href="">LOGOUT</a></li>
					</ul>
				</nav>				
			</div>

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
			<!-- need to fix the position with less height -->
			<a href="https://www.linkedin.com/in/fmatiasmendes/" target="_blank">
				&copy;2024 FILIPE MENDES. ALL RIGHTS RESERVED
			</a>
		</footer>	
			
	</body>
</html>