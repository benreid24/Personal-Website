<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ben Reid - Lucinduce</title>

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
		<h1 class="header">Lucinduce</h1>
		<p class="content">
			A lucid dream is a dream in which you are aware that you are dreaming. In a lucid dream one can sometimes manipulate the dream however they please,
			essentially becoming a god in their own world. Lucid dreams are awesome
		</p>
		<div style="text-align: center"><img src="assets/lucinduce/start.jpg"/><img src="assets/lucinduce/prog2.jpg"/></div>
		<p class="content">
			Lucinduce aims to incude lucid dreams in the wearer. Lucid dreams most often occur when the dreamer is in REM sleep, which is characterized by rapid
			eye movements and general restlessness. Luciduce is a headbance (currently) that is worn to bed. Motion is tracked, and combined with time elapsed, REM 
			cycles are identified. The headset then uses a combination of auditory and visual cues to attempt to alert the user that they are dreaming, while also
			attempting to be subtle enough that the user is not woken. 
		</p>
		<div style="text-align: center"><img src="assets/lucinduce/prog3.jpg"/><img src="assets/lucinduce/final.jpg"/></div>
		<p class="content">
			REM cycles start around 70 minutes after falling asleep, and repeat every 90 minutes or so. Combining this known timing information with the actual
			motion of the user, which is measured via gyroscopes, the headset can determine when REM cycles begin and end, to some degree of accuracy. It can also
			determine when the user fell asleep based on when their movement falls below a given threshold, which greatly assists with the accuracy of the timing. Naturally
			this is plagued by error as different people are more or less still as they sleep, which can result in false positives and failed detections. Eventually
			I would like to implement a per-user calibration that can learn their range of motion over a few nights and compensate accordingly
		</p>
		<div style="text-align: center"><img src="assets/lucinduce/data1.jpg"/><img src="assets/lucinduce/data2.jpg"/></div>
		<p class="content">
			The surrounding graphs are real data gathered from when I wore the headset from multiple nights. In the graph below, the first red line represents when I
			first fell asleep, and the subsequent lines are rem cycles that were detected as I was wearing it
		</p>
		<img src="assets/lucinduce/data3.jpg"/>
		<p class="content">
			The current user stimulation is simple blinking leds near the eyes, but I would also like to add a small speaker and a simple repeating tone as well. The code,
			data, and documentation are all available on <a href="https://github.com/benreid24/Lucinduce" class="link">GitHub</a>
		</p>
		<div style="text-align: center"><img src="assets/lucinduce/crazy.jpg"/></div>
	</div>

</body>

</html>
