<!DOCTYPE html>
<html>

<head>
	<title>python</title>
	<link rel="stylesheet" href="javascriptstyle.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
	<!-- The side navbar -->
	<?php
	include 'javascriptvideos.php';
	?>
<!-- Nav bar -->
<?php
	include "../../header.php";
	?>
	<?php
	include 'javascriptvideos.php';
	?>
	<!-- The video container -->
	<div id="video-container" >
    <iframe id = "video1" class="video" src="https://www.youtube-nocookie.com/embed/hKB-YGF14SY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video2" class="video" src="https://www.youtube-nocookie.com/embed/videoseries?list=PL0rxPh2ovQP_JTqkFUtaZzBXzppx-VSWn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video3" class="video" src="https://www.youtube-nocookie.com/embed/SBmSRK3feww" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video4" class="video" src="https://www.youtube-nocookie.com/embed/videoseries?list=PLu0W_9lII9ahR1blWXxgSlL4y9iQBnLpR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video5" class="video" src="https://www.youtube-nocookie.com/embed/lGmRnu--iU8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

	<script src="../../videoscript.js"></script>

</body>

</html>