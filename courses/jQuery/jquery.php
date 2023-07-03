<!DOCTYPE html>
<html>

<head>
	<title>CSS</title>
	<link rel="stylesheet" href="jquerystyle.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
	<!-- The side navbar -->
	<?php
	include 'jqueryvideos.php';
	?>
	
<!-- Nav bar -->
<?php
	include "../../header.php";
	?>
	<?php
	include 'jqueryvideos.php';
	?>
	<!-- The video container -->
	<div id="video-container" >
    <iframe id = "video1" class="video" src="https://www.youtube-nocookie.com/embed/YFlx1C8XwR0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video2" class="video" src="https://www.youtube-nocookie.com/embed/b2DFnwRidAU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video3" class="video" src="https://www.youtube-nocookie.com/embed/BWXggB-T1jQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video4" class="video" src="https://www.youtube-nocookie.com/embed/QhQ4m5g2fhA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video5" class="video" src="https://www.youtube-nocookie.com/embed/PNvyPEQ0y-I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

	<script src="../../videoscript.js"></script>

</body>

</html>