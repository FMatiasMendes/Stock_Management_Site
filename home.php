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
			<?php require("components/header.php"); ?>
		</header>
		
		<main>

			<div class="outer-border">
				<p class="welcome-message">Welcome <?= $logged_user["user"]; ?>!</p>
				<p class="last-login-message">Last time you were here: <?= $logged_user["last_access"]; ?>!</p>
				<p class="disclaimer">
					Please use this website with care. It has been created for you to test all its features.
					Other users will follow to further test the site.
				</p>
			</div>

		</main>

		<footer>
			<?php require("components/footer.php"); ?>
		</footer>	
			
	</body>
</html>