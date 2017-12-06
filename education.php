<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ben Reid - Education</title>

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
		<h1 class="header">Education</h1>
		<div class="section">
			<h2 class="sectionHeader">Computer Engineering B.S. | University at Buffalo</h2>
			<p class="sectionDate">August 2014 - May 2018</p>
			<p class="sectionContent">I will be graduating from the University at Buffalo soon with my B.S. in computer engineering. Below are some of the highlights of my experience</p>
			<ul class="sectionList">
				<li>Data Intensive Computing: <span class="sectionSpan">K-Means, KNN, Hadoop, Spark</span></li>
				<li>Computer Vision: <span class="sectionSpan">Feature detection, SIFT, RANSAC, scene classification and text recognition</span></li>
				<li>Computer Organization: <span class="sectionSpan">ALU's, pipelined processors, hardware memory, caches</span></li>
				<li>Compilers: <span class="sectionSpan">Coming soon</span></li>
			</ul>
		</div>
	</div>

</body>

</html>
