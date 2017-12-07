<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ben Reid - Quadcopter</title>

	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/app.css">
	<link rel="stylesheet" href="assets/css/sidebar-collapse.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	
	<link rel="import" href="assets/sidebar.html">

</head>

<body>
	<script>
		var content = document.querySelector('link[rel="import"]').import;
		document.body.appendChild(content.querySelector('.sidebar-left-collapse').cloneNode(true));
	</script>

	<div class="main-content">
		<h1 class="header">Quadcopter</h1>
		<p class="content">
			Being a model airplane enthusiast while also enjoying programming and tinkering has the inevitable conclusion of me attempting to build an
			autonomous aircraft. Of course I went with a quadcopter
		</p>
		<img src="assets/quadcopter/prog1.jpg"/>
		<p class="content">
			I began this project near the end of senior year of high school, so I did not have all of the math knowledge required for the project. I could fly,
			I could program, and I could read sensors and control motors, but the math was for sure my weak point as the most advanced material I learned was
			AP Calculus
		</p>
		<img src="assets/quadcopter/prog2.jpg"/>
		<p class="content">
			The orientation of the quadcopter is determined from a set of accelerometers and gyroscopes that give the accelerations and angular velocities in
			each of the three dimensions. With a bit of trignonometry, the orientation can be calculated from the accelerometers quite handily. This falls
			flat on its face, however, if there is any acceleration present not caused by gravity
		</p>
		<img src="assets/quadcopter/prog3.jpg"/>
		<p class="content">
			Determining the orientation from the gyroscopes involves
			integrating the velocities from one 3-dimensional coordinate system (the quadcopter system) to another 3-dimensional system (the ground frame).
			This involves quite a bit of math, such as quaternions, so it took me some time to figure out. Around four months of Googling, but eventually I
			figured out how to do it!
		</p>
	</div>

</body>

</html>
