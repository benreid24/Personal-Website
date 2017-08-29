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
		printGallerySource(listDirectory("assets/images/photography/travel"));
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
			<p>Photos from trips I have taken and other various places that I have been</p>
			<ul>
				<li><a href="gallery.php?gal=travel/buffalo&title=Buffalo&desc=Photos+of+assorted+places+around+my+hometown+of+Buffalo&ret=travel.php">Buffalo</a></li>
				<li><a href="gallery.php?gal=travel/newyork/staten&title=Staten+Island+Ferry&desc=Some+photos+from+the+Staten+Island+Ferry+in+New+York&ret=travel.php">New York - Staten Island Ferry</a></li>
				<li><a href="gallery.php?gal=travel/newyork/rockaway&title=Rockaway+Beach&desc=Sunrise+from+Rockaway+Beach+in+Queens+New+York&ret=travel.php">New York - Rockaway Beach</a></li>
				<li><a href="gallery.php?gal=travel/newyork/manhattan&title=Manhattan&desc=Photos+of+various+places+and+buildings+around+the+borough+of+Manhattan&ret=travel.php">New York - Manhattan</a></li>
				<li><a href="gallery.php?gal=travel/newyork/central&title=Central+Park&desc=Some+neat+places+I+saw+in+Central+Park&ret=travel.php">New York - Central Park</a></li>
				<li><a href="gallery.php?gal=travel/newyork/dogs&title=Dogs&desc=Dogs+from+volunteering+with+Sean+Casey+Animal+Rescue+and+some+other+cute+dogs&ret=travel.php">New York - Dogs</a></li>
				<li><a href="gallery.php?gal=travel/newyork/floyd&title=Floyd+Bennet+Field&desc=Photos+of+the+historic+FLoyd+Bennett+Field+and+the+insides+of+some+of+the+buildings&ret=travel.php">New York - Floyd Bennett</a></li>
			</ul>
		</div>
		<?php
			printGalleryGrid(listDirectory("assets/images/photography/travel"));
		?>
	</div>

</body>

</html>
