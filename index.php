<?php
	$page = "HOME";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Stock Management</title>
		<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
		<link rel="stylesheet" href="styles/style.css">
	</head>

	<body>

		<header>
			<div class="outer-border">
				<h1 class="main-title">STOCK MANAGEMENT</h1>
				<div class="index-image">
					<img src="images/stock_image.png" alt="image">
				</div>
			</div>			
		</header>
		
		<main>
			<div class="outer-border">
				<h3 class="main-title">LOGIN</h3>
				<form action="home.php" method="post" class="login-form-div">
					<label for="user" class="login-text">USER</label>
					<br>
					<input type="text" name="user" placeholder="user" required autofocus class="login-input">
					<br><br>
					<label for="pass" class="login-text">PASSWORD</label>
					<br>
					<input type="password" name="pass" placeholder="password" required="required" class="login-input">
					<br><br>
					<button type="submit" name="login" class="login-button">Login</button>

				</form>
			</div>
		</main>

		<footer>
			<?php require("components/footer.php"); ?>
		</footer>	
			
	</body>
</html>