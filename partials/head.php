<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?= $title; ?> Page</title>
		<style>
			* {
				margin: 0;
				padding: 0;
				font-family: sans-serif;
			}
			
			body {
				background-color: #242424;
				color: #ccc;
			}
			
			nav {
				background-color: #424242;
			}
			
			ul {
				display: flex;
				justify-content: center;
			}
			
			li {
				list-style-type: none;			
				padding: 20px;
			}
			
			a {
				text-decoration: none;
				color: #ccc;
			}
			
			header {
				text-align: center;
				padding: 20px 0;
			}

			.active {
				color: lightgreen;
			}			
		</style>	
	</head>
		<body>