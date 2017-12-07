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
			autonomous aircraft. Of course I went with a quadcopter. Note: Progress pictures are not corresponding to the text with regard to time
		</p>
		<div style="text-align: center"><img src="assets/quadcopter/prog1.jpg"/></div>
		<p class="content">
			I began this project near the end of senior year of high school, so I did not have all of the math knowledge required for the project. I could fly,
			I could program, and I could read sensors and control motors, but the math was for sure my weak point as the most advanced material I learned was
			AP Calculus
		</p>
		<div style="text-align: center"><img src="assets/quadcopter/prog2.jpg"/></div>
		<p class="content">
			The orientation of the quadcopter is determined from a set of accelerometers and gyroscopes that give the accelerations and angular velocities in
			each of the three dimensions. With a bit of trignonometry, the orientation can be calculated from the accelerometers quite handily. This falls
			flat on its face, however, if there is any acceleration present not caused by gravity
		</p>
		<div style="text-align: center"><img src="assets/quadcopter/prog3.jpg"/></div>
		<p class="content">
			Determining the orientation from the gyroscopes involves
			integrating the velocities from one 3-dimensional coordinate system (the quadcopter system) to another 3-dimensional system (the ground frame).
			This involves quite a bit of math, such as quaternions, so it took me some time to figure out. Around four months of Googling, but eventually I
			figured out how to do it!
		</p>
		<div style="text-align: center"><img src="assets/quadcopter/prog4.jpg"/></div>
		<p class="content">
			There is also the issue of sensor noise and calibration. I used a simple offset for calibration, and low pass filter to deal with noise. The output
			of the accelerometers and gyroscopes is then combined in a complimentary filter, with the gyroscopes being weighted higher as their output is more
			likely to be correct given the flying application
		</p>
		<div style="text-align: center"><img src="assets/quadcopter/prog5.jpg"/></div>
		<p class="content">
			When I began college progress came a halt. With the construction finished and the seemingly hardest part completed, I never really found the time to push
			myself to work on it
		</p>
		<div style="text-align: center"><img src="assets/quadcopter/prog6.jpg"/></div>
		<p class="content">
			In my junior year I was able to use my quadcopter for a term project in one of my courses. I took this opportunity to put a deadline on it, ideally motivating
			myself into finishing
		</p>
		<div style="text-align: center"><img src="assets/quadcopter/prog7.jpg"/></div>
		<p class="content">
			I began annew with the codebase as I had grown quite a bit better at programming in the years that elapsed. Rather than use a Raspberry Pi like I originally
			planned, I decided on using an Arduino for easier access to the hardware
		</p>
		<div style="text-align: center"><img src="assets/quadcopter/prog8.jpg"/></div>
		<p class="content">
			As time went on and the deadline approaching, I realized that calculating the orientation was only the beginning of the struggle, and that correcting/setting the
			orientation was also incredibly difficult
		</p>
		<div style="text-align: center"><img src="assets/quadcopter/prog9.jpg"/></div>
		<p class="content">
			I tried a bunch of different approaches and had the quadcopter in the air a couple of times, but it was never stable. Eventually I ditched the project in favor of
			Lucinduce for my class, leaving the quadcopter to sit. About a year later I salvaged the parts from the quadcopter and abandoned the project entirely
		</p>
		<div style="text-align: center"><img src="assets/quadcopter/final.jpg"/></div>
	</div>

</body>

</html>
