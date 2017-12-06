<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ben Reid - Peoplemon</title>

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
		<img src="assets/peoplemon/menu.jpg"/>
		<p style="content">
			Sophomore year of high school: the year was late 2010 and Peoplemon was first conceived. An over the top parady of Pokemon, Peoplemon
			replaces the pokemon with our friends. While there are quite a few inside jokes, the story and general weirdness is sure to entertain all.
		</p>
		<img src="assets/peoplemon/map.jpg"/>
		<p style="content">
			I am the primary developer of the game. I wrote it entirely in C++ from the ground up using SFML as my graphics/windowing/audio/network library.
			I also developed some of the tools for the game, such as the map editor, but the rest were done by my friend Vince in Python. The story and all
			of the actual content creation was done by my other friend Chris. We have pulled many all nighters and put many many years into this game, mostly
			for the fun of making it more than the actual end result
		</p>
		<img src="assets/peoplemon/screen.jpg"/>
		<p class="content">
			The game is not yet released, however we do have a <a href="http://22ndcg.org/games.php?game=8" class="link">demo</a> available for Windows and OS X.
			The official released will be available on Windows, OS X, and Linux from <a href="http://22ndcg.org/games.php?game=9" class="link">here</a>. The source
			can be viewed on my <a href="https://github.com/benreid24/Peoplemon" class="link">GitHub</a>
		</p>
	</div>

</body>

</html>
