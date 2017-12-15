<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ben Reid - xkcd Stats Bot</title>

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
		<h1 class="header">xkcd Stats Bot</h1>
		<p class="content">
			After seeing <a href="https://www.reddit.com/r/xkcd/comments/7g7isx/xkcd_transcriber_bot_statistics/" class="link">this</a> Reddit post, I decided to
			try and develop my own Reddit bot. The purpose of this bot is to find references to xkcd comics on Reddit and compile data from those. From this data
			I plan on computing various stats, such as which comics are the most popular, where they get posted the most, and who references them the most
		</p>
		<h2 class="header"><a href="http://xkcdredditstats.com">The Data</a></h2>
		<p class="content">
			The bot currently identifies references based on links. It can parse xkcd links and determine which comic was referenced based on the comic number, or the
			image name if that is what the link points to. The entire comment text, parent comment (if any) text, commenter name, Reddit comment ids, and the comic itself are all added to a sql
			database. From this data the stats are computed every half an hour. Additionally, I was hoping to compute correlations in the parent comments, and other relatively simple
			metrics, to see how feasible it is to predict a "relevant xkcd." I don't expect to be able to do this accurately, but it would be interesting to see how
			far I can get without getting too crazy</p>
		</p>
		<h3 class="header"><a href="https://www.reddit.com/user/xkcd_stats_bot">The Bot</a></h3>
		<p class="content">
			The bot itself is implemented in Python as it is incredibly easy to interface to Reddit with. The source code for the bot and website can be viewed on GitHub:
			<a href="https://github.com/benreid24/xkcd_bot" class="link">Bot</a> | <a href="https://github.com/benreid24/xkcd-Stats-Site" class="link">Website</a> 
		</p>
	</div>

</body>

</html>
