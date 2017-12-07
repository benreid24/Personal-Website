<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ben Reid - Ignus Cor</title>

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
		<h1 class="header">Ignus Cor</h1>
		<p class="content">What is Ignus Cor? Not even I know!</p>
		<p class="content">
			At least not yet. Based extensively off of <a href="peoplemon.php" class="link">Peoplemon's</a> source code,
			Ignus Cor will feel very similar. My general idea is for a role playing game of some sort that is open world
			and has intuitive yet fun combat mechanics. A fair amount of my inspiration so far is from Skyrim. More details
			will be added once I get further along
		</p>
		<p class="content">
			A good portion of my desire to create this game comes from the shortcomings of Peoplemon. My main issue is the
			content creation/addition process. Something as simple as placing an NPC into a map involves using four(!)
			different editors, then manually copying over three different files into the proper directories. The first stage
			of development for Ignus Cor is creating an all-in-one editor that streamlines the process, works in an easy manner,
			and handles data file installation for the user. Additionally, the editor and game share most of the code base, resulting
			in fewer bugs and graphically anomalies. Peoplemon had plenty that could be attributed to the code for the map editor
			and the game being completely disjoint
		</p>
		<p class="content">
			My progress can be watched on the <a href="https://github.com/benreid24/Ignus-Cor" class="link">GitHub</a>
		</p>
	</div>

</body>

</html>
