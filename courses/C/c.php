<!DOCTYPE html>
<html>

<head>
	<title>CSS</title>
	<link rel="stylesheet" href="../coursesstyle.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
	<!-- The side navbar -->
	<?php
	include 'cvideos.php';
	?>
	
	<!-- Nav bar -->
<?php
	include "../../header.php";
	?>
	<?php
	include 'cvideos.php';
	?>
	<!-- The video container -->
	<div id="video-container" >
	<iframe id = "video1" class="video"  src="https://www.youtube-nocookie.com/embed/videoseries?list=PLu0W_9lII9aiXlHcLx-mDH1Qul38wD3aR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	<iframe id = "video2" class="video"  src="https://www.youtube.com/embed/irqbmMNs2Bo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video3" class="video"  src="https://www.youtube-nocookie.com/embed/ZSPZob_1TOk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video4" class="video"  src="https://www.youtube-nocookie.com/embed/-CpG3oATGIs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video5" class="video"  src="https://www.youtube-nocookie.com/embed/YXcgD8hRHYY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video6" class="video"  src="https://www.youtube-nocookie.com/embed/videoseries?list=PLBlnK6fEyqRggZZgYpPMUxdY1CYkZtARR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    
    </div>
	<script src="../../videoscript.js"></script>
</body>

</html>