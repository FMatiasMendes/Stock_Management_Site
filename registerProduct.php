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
				<h3 class="page-titles">SEARCH</h3>				
				<form action="" class="search-form">
					<input type="number" name="id" placeholder="ID">
					<br>
					<input type="submit" name="" value="SEARCH" class="list-button">
				</form>					
			
				<table>
					<tr>
						<th>ID</th>
						<th class="name-column">NAME</th>
						<th>PRICE</th>
						<th>QUANTITY</th>
					</tr>
					<tr>
						<td>1</td>
						<td>Green Pen</td>
						<td>1.30 €</td>
						<td>53</td>
					</tr>					
				</table>
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