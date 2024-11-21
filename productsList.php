<?php
	$page = "PRODUCTS LIST";
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
		<!-- consider make the ascending/descending order with arrows on each column -->
			<div class="outer-border">
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
					<tr>
						<td>2</td>
						<td>Pink Pen</td>
						<td>0.75 €</td>
						<td>10</td>
					</tr>
					<tr>
						<td>48</td>
						<td>White wallet</td>
						<td>6.50 €</td>
						<td>12</td>
					</tr>
					<tr>
						<td>49</td>
						<td>Black wallet</td>
						<td>8.99 €</td>
						<td>15</td>
					</tr>
					<tr>
						<td>50</td>
						<td>Pencil Case</td>
						<td>1.49 €</td>
						<td>50</td>
					</tr>
				</table>
			</div>
		</main>

		<footer>
			<?php require("components/footer.php"); ?>
		</footer>	
			
	</body>
</html>