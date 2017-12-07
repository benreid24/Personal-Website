<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ben Reid - Smart Aquarium</title>

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
		<h1 class="header">Smart Aquarium</h1>
		<p class="content">
			I own two fish tanks. I own an Arduino and Raspberry Pi. Fish tank maintenance is simple and reptitive. Fish tank monitoring is done with
			simple sensors. See where I'm going with this?
		</p>
		<img src="assets/aquarium/fish1.jpg"/>
		<p class="content">
			My end goal is a fully automated aquarium, barring weekly water changes. Feeding will be done with a hollow cylinder filled with food and holes down the side.
			Rotated at the right speed by a servo, the proper amount of food will fall into the tank. Temperature monitoring is done by a thermometer and currently outputs
			to a multi-digit seven-segment display. Both of these will be controlled by the Arduino. To make things interesting, I would like to connect my Raspberry Pi to
			my Arduino via the I2C bus. The Pi will allow for a camera and a web interface, in case I want to check in on my fish while away (defintely necessary). The Pi can
			manage the camera, connect to the web, and send commands to the Arduino based on the actual time of day. The Arduino wil handle the lower level hardware details as
			it has more versatile inputs and outputs, as well as analog support
		</p>
		<img src="assets/aquarium/fish2.jpg"/>
		<p class="content">
			Currently I have temperature monitoring and the Arduino/Pi interface working. I also have parts and designs for subsequent features. The code for the Arduino to Pi
			connection is available on <a href="https://github.com/benreid24/ArduCom" class="link">GitHub</a>
		</p>
	</div>

</body>

</html>
