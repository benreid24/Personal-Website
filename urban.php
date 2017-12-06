<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ben Reid</title>

	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/sidebar-collapse.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="assets/highslide/highslide.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/highslide/highslide.css" /> <!-- view-source:http://highslide.com/examples/white-10px.html -->
	
	<script type="text/javascript">
		hs.graphicsDir = 'assets/highslide/graphics/';
		hs.wrapperClassName = 'wide-border';
	</script>
	
	<link rel="import" href="assets/sidebar.html">

</head>

<body>
	<script>
		var content = document.querySelector('link[rel="import"]').import;
		document.body.appendChild(content.querySelector('.sidebar-left-collapse').cloneNode(true));
	</script>

	<div class="gallery">
		<div class="menu">
			<h1>Urban Photos</h1>
			<p>Various photos in urban settings</p>
		</div>
		
		<div align="center">
			<!-- <a href="assets/images/photography/travel/IMGP3429.jpg" class="highslide" onclick="return hs.expand(this)">
				<img src="assets/images/photography/travel/IMGP3429.jpg" alt="Highslide JS" height="400" width="600" />
			</a> -->
			<?php
				include("assets/gallery.php");
				echo("<p>test</p>");
				print(printGalleryGrid(listDirectory("assets/images/photography/piper/")));
			?>
		</div>

		<?php
			include("assets/gallery.php");
			printGalleryGrid(listDirectory("assets/images/photography/urban"));
		?>
	</div>

</body>

</html>
