<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ben Reid - Experience</title>

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
		<h1 class="header">Professional Experience</h1>
		
		<div class="section">
			<h2 class="sectionHeader">Student IT Specialist | University at Buffalo</h2>
			<p class="sectionDate">Febuaury 2015 - Present</p>
			<h6 class="sectionContent">In between classes I work on computers for engineering and the natural sciences. Roles include:</h6>
			<ul class="sectionList">
				<li>Diagnosing and repairing hardware malfunctions</li>
				<li>Performing operating system installations and configuration</li>
				<li>Maintain functionality and quality in computer labs across campus</li>
			</ul>
		</div>
			
		<div class="section">
			<h2 class="sectionHeader">Data Infrastructure Architect | ACV Auctions</h2>
			<p class="sectionDate">October 2017 - Present</p>
			<h6 class="sectionContent">Mostly remote work on brand new infrastructure for a local startup. Roles:</h6>
			<ul class="sectionList">
				<li>Design a pipeline to move data from production databases in Google BigQuery for analysis</li>
				<li>Ensure pipeline is resilient to production side changes</li>
				<li>Denormalize data from many production tables into more convenient wide tables</li>
				<li>Ensure data consistancy and accuracy</li>
			</ul>
		</div>
		
		<div class="section">
			<h2 class="sectionHeader">Software Engineering Intern | Bloomberg L.P.</h2>
			<p class="sectionDate">June 2017 - August 2017</p>
			<h6 class="sectionContent">Summer internship on a backend distributed job scheduler team</h6>
			<ul class="sectionList">
				<li>Design job start time suggestion algorithm based on historic system load to distribute job starts more evenly</li>
				<li>Extend job cluster/machine host selection using existing internal infrastructure to allow more flexibility at runtime</li>
				<li>Enhance existing database archiver to monitor multiple databases and push to a single archive</li>
			</ul>
		</div>
		
	</div>

</body>

</html>
