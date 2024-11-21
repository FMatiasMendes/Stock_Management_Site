<?php
	$page = "REGISTER SALES";
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
			<h3 class="page-titles">REGISTER SALES (48)</h3>
			
			<div>
				<form action="" class="search-form">
					<!-- change placeholders number -->
					<input type="number" name="" value="" placeholder="Quantity sold"><br>

					<input type="submit" name="" value="REGISTER" class="save-button">
					<button class="cancel-button">CANCEL</button>
				</form>
			</div>				

		</div>

			<div class="outer-border">
				<h3 class="page-titles">REGISTER SALES</h3>				
							
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
								<input type="submit" name="edict" value="SALE" class="edict-button">
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
							<input type="submit" name="edict" value="SALE" class="edict-button">
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
							<input type="submit" name="edict" value="SALE" class="edict-button">
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
							<input type="submit" name="edict" value="SALE" class="edict-button">
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
							<input type="submit" name="edict" value="SALE" class="edict-button">
							</form>							
						</td>
					</tr>
				</table>
			</div>
		</main>

		<footer>
			<?php require("components/footer.php"); ?>
		</footer>	
			
	</body>
</html>