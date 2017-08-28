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
	<script type="text/javascript"src="assets/js/slide.js"></script> <!--http://slideshow.triptracker.net/howto.html -->
	
	<?php
		include("assets/gallery.php");
		printGallerySource(listDirectory("assets/images/photography"));
	?>
	
	<link rel="import" href="assets/sidebar.html">

</head>

<body>
	<script>
		var content = document.querySelector('link[rel="import"]').import;
		document.body.appendChild(content.querySelector('.sidebar-left-collapse').cloneNode(true));
	</script>

	<div class="gallery">
		<div class="menu">
			<h1>Travel</h1>
			<ul>
				<li><a href="gallery.php?gal=piper&title=Piper&desc=This+is+Piper&ret=travel.php">Buffalo</a></li>
				<li><a href="#">New York</a></li>
			</ul>
		</div>
		<?php
			printGalleryGrid(listDirectory("assets/images/photography"));
		?>
	</div>

</body>

</html>
