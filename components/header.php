<div class="outer-border">
	<h1 class="main-title">STOCK MANAGEMENT</h1>
	<nav>
		<ul class="nav-links">
			<li><a href="home.php" class="<?= ($page == "HOME") ? "link-active" : ""; ?>">
				HOME
			</a></li>
			<li><a href="productsList.php" class="<?= ($page == "PRODUCTS LIST") ? "link-active" : ""; ?>">
				PRODUCTS LIST
			</a></li>
			<li><a href="codeSearch.php" class="<?= ($page == "CODE SEARCH") ? "link-active" : ""; ?>">
				CODE SEARCH
			</a></li>
			<li><a href="registerProduct.php" class="<?= ($page == "REGISTER PRODUCT") ? "link-active" : ""; ?>">
				REGISTER PRODUCT
			</a></li>
			<li><a href="edictProduct.php" class="<?= ($page == "EDICT PRODUCT") ? "link-active" : ""; ?>">
				EDICT PRODUCT
			</a></li>
			<li><a href="deleteProduct.php" class="<?= ($page == `DELETE PRODUCT`) ? "link-active" : ""; ?>">
				DELETE PRODUCT
			</a></li>
			<li><a href="transactionRegister.php" class="<?= ($page == "TRANSACTION REGISTER") ? "link-active" : ""; ?>">
				TRANSACTION REGISTER
			</a></li>
			<li><a href="index.php">
				LOGOUT
			</a></li>
		</ul>
	</nav>				
</div>