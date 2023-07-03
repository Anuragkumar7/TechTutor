<!DOCTYPE html>
<html>

<head>
	<title>python</title>
	<link rel="stylesheet" href="htmlstyle.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
	<!-- The side navbar -->
	<?php
	include 'htmlvideos.php';
	?>
	<!-- Nav bar -->
<?php
	include "../../header.php";
	?>

	<?php
	include 'htmlvideos.php';
	?>
	<!-- The video container -->
	<div id="video-container" >
    <iframe id = "video1" class="video" src="https://www.youtube-nocookie.com/embed/vLqTf2b6GZw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video2" class="video" src="https://www.youtube-nocookie.com/embed/yGB9jhsEsr8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video3" class="video" src="https://www.youtube-nocookie.com/embed/8jLOx1hD3_o" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video4" class="video" src="https://www.youtube-nocookie.com/embed/ZzaPdXTrSb8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video5" class="video" src="https://www.youtube-nocookie.com/embed/videoseries?list=PLfqMhTWNBTe0b2nM6JHVCnAkhQRGiZMSJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> 
    </div>


	<script src="../../videoscript.js"></script>
</body>

</html>