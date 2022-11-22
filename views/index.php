<?php 
	$title = "Home";
	require "partials/head.php"; 
?>		
<?php require_once "Database.php"; ?>
	<?php require_once "partials/nav.php"; ?>	
		<header>
			<h1>
				Home Page
			</h1>			
		</header>
		<ul style="display: block; text-align: center;">
			<?php foreach($todos as $todo) : ?>
				<li style="padding: 5px;">
					<?= $todo['title']; ?>
				</li>
			<?php endforeach; ?>
		</ul>
<?php require_once "partials/footer.php"; ?>