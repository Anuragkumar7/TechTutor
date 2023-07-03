<!DOCTYPE html>
<html>

<head>
	<title>python</title>
	<link rel="stylesheet" href="mangodbstyle.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
	<!-- The side navbar -->
	<?php
	include 'mangodbvideos.php';
	?>
	
<!-- Nav bar -->
<?php
	include "../../header.php";
	?>
	<?php
	include 'mangodbvideos.php';
	?>
	<!-- The video container -->
	<div id="video-container" >
    <iframe id = "video1" class="video"  src="https://www.youtube-nocookie.com/embed/J6mDkcqU_ZE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video2" class="video"  src="https://www.youtube-nocookie.com/embed/ofme2o29ngU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video3" class="video"  src="https://www.youtube-nocookie.com/embed/E-1xI85Zog8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video4" class="video"  src="https://www.youtube-nocookie.com/embed/9cWm74DteMQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video5" class="video"  src="https://www.youtube-nocookie.com/embed/AYDP1S5BbTo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

	<script src="../../videoscript.js"></script>

</body>

</html>