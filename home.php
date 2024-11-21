<?php
	$page = "HOME";
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
				<!-- php edition missing (name) -->
				<p class="welcome-message">Welcome Filipe!</p>
				<!-- php edition missing (date) -->
				<p class="last-login-message">Last time you were here: dd/mm/yyyy at xx:xxH.</p>
			</div>

		</main>

		<footer>
			<?php require("components/footer.php"); ?>
		</footer>	
			
	</body>
</html>