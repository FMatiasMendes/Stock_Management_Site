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

		<div class="outer-border">
			<!-- change id number -->
			<h3 class="page-titles">EDICT PRODUCT (48)</h3>
			<div>
				<form action="" class="search-form">
					<!-- change placeholders number -->
					<input type="text" name="name" placeholder="Green Pen"><br><br>					
					<input type="number" name="price" placeholder="1.68 €"><br><br>
					<input type="number" name="quantity" placeholder="153"><br><br>
					<input type="submit" name="" value="SAVE" class="save-button">
					<button class="cancel-button">CANCEL</button>
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
					<tr>
						<td>1</td>
						<td>Green Pen</td>
						<td>1.30 €</td>
						<td>53</td>
						<td>
							<form action="">
								<input type="submit" name="edict" value="EDICT" class="edict-button">
							</form>							
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Pink Pen</td>
						<td>0.75 €</td>
						<td>10</td>
						<td>
							<form action="">
								<input type="submit" name="edict" value="EDICT" class="edict-button">
							</form>							
						</td>
					</tr>
					<tr>
						<td>48</td>
						<td>White wallet</td>
						<td>6.50 €</td>
						<td>12</td>
						<td>
							<form action="">
								<input type="submit" name="edict" value="EDICT" class="edict-button">
							</form>							
						</td>
					</tr>
					<tr>
						<td>49</td>
						<td>Black wallet</td>
						<td>8.99 €</td>
						<td>15</td>
						<td>
							<form action="">
								<input type="submit" name="edict" value="EDICT" class="edict-button">
							</form>							
						</td>
					</tr>
					<tr>
						<td>50</td>
						<td>Pencil Case</td>
						<td>1.49 €</td>
						<td>50</td>
						<td>
							<form action="">
								<input type="submit" name="edict" value="EDICT" class="edict-button">
							</form>							
						</td>
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