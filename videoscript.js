
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
