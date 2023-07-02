<!DOCTYPE html>
<html>

<head>
	<title>React</title>
	<!DOCTYPE html>
<html>

<head>
	<title>react</title>
	<link rel="stylesheet" href="reactstyle.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
	<!-- The side navbar -->
	<?php
	include 'reactvideos.php';
	?>
	
	<style>
   .header{
    position: fixed;	
    top: 0;
    left: 0;
    z-index: 999;
    width: 100%;
	/* padding-right: 71px; */
    /* transition: background-color 0.5s; */
    background-color: #101010;
	margin-bottom: 40px;
	/* margin-left: 200px; */
}
a{
	text-decoration: none;
	/* color: white; */
	color: #fff;
	margin-left: 15px;		
}

.container{
    max-width: 100%;
    height: 15px;
    margin-inline: auto;
    padding-inline: 0;
}
.nav{
    height: 75px;
    display: flex;	
    align-items: center;
    /* justify-content: space-between; */
    border-bottom: 2px solid 
    rgba(255, 255, 255, 0.05);
    transition: height 0.25;
}
.button{
	/* display: inline-block; */
	margin-left: 850px;
	color: #16ff00;


}
.back{
	height: 25px;
  width: 25px;
  margin-left: 900px;
  text-align: center;
  border-radius: 50%;
  /* display: inline; */
  background-color: #1a4d2e;
}
.btback{
	color: #16ff00;
	cursor: pointer;
	
}
.header.header--active{
    background-color: #17181a;
    box-shadow: 0 3px 10px
    rgba(0, 0, 0, 0.1);
}
.header.header--active .nav{
    height: 60px;
}
.nav__logo-image
{
    width: 150px;
}
.bt{
    margin-left: 110px;
	margin-right: -30px;
}
</style>
<header class="header">
        <nav class="nav container">
            <a href="../index.php" class="nav__logo">
                <img src="../../images/logo.png" alt="" class="nav__logo-image" />
            </a>
            <a class="bt" href="../../index.php">Home</a>
            <a class="bt" href="../../index.php">about us</a>
            <a class="bt" href="../../index.php">Contact</a>
               <a href="../courses.php"><div class="back">
				<p class="btback"><b><</b></p></div>
				</a>
        </nav>
    </header>
	<?php
	include 'reactvideos.php';
	?>
	<!-- The video container -->
	<div id="video-container" >
    <iframe id = "video1" class="video" src="https://www.youtube-nocookie.com/embed/RGKi6LSPDLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video2" class="video" src="https://www.youtube-nocookie.com/embed/gY5sGvq-8h8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video3" class="video" src="https://www.youtube-nocookie.com/embed/bMknfKXIFA8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video4" class="video" src="https://www.youtube-nocookie.com/embed/lLeZ8Cr2YVM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video5" class="video" src="https://www.youtube-nocookie.com/embed/6l8RWV8D-Yo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video6" class="video" src="https://www.youtube-nocookie.com/embed/u6gSSpfsoOQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video7" class="video" src="https://www.youtube-nocookie.com/embed/XxXyfkrP298" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <iframe id = "video8" class="video" src="https://www.youtube-nocookie.com/embed/cd3P3yXyx30" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

	<script>
		// Get the navbar links
		var navbarLinks = document.querySelectorAll("#navbar li a");

		// Get the first video element and show it
		var firstVideo = document.querySelector(".video");
		firstVideo.style.display = "block";

		// Add a click event listener to each navbar link
		navbarLinks.forEach(function(link) {
			link.addEventListener("click", function(event) {
				// Prevent the default link behavior
				event.preventDefault();

				// Get the id of the video element to show
				var videoId = this.getAttribute("href");

				// Hide all the videos
				var videos = document.querySelectorAll(".video");
				videos.forEach(function(video) {
					video.style.display = "none";
				});

				// Show the selected video
				var videoToShow = document.querySelector(videoId);
				videoToShow.style.display = "block";

				// Remove the "active" class from all navbar links
				navbarLinks.forEach(function(link) {
					link.classList.remove("active");
				});

				// Add the "active" class to the selected navbar link
				this.classList.add("active");
			});
		});
	</script>
</body>

</html>