<?php 
	$title = "404";
	require "partials/head.php"; 
?>		
	<?php require_once "partials/nav.php"; ?>	
		<header>
			<h1>
				<span style="color: tomato"><?= $_SERVER['REQUEST_URI']; ?></span> Not Found
			</h1>
		</header>
<?php require_once "partials/footer.php"; ?>