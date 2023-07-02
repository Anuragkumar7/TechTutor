<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital@0;1&family=IBM+Plex+Sans+Condensed:ital@0;1&family=IBM+Plex+Sans:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&family=IBM+Plex+Serif:ital@0;1&family=Montserrat:wght@200;300;600;900&family=Poppins:wght@500&family=Sacramento&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <title>ourWebsite</title>
    <link rel="stylesheet" href="styles/styles.css">

</head>

<body">

    <!-- <?php
            include 'courses/header.php'
            ?> -->
    <section id="home">
        <!-- navbar starts -->
        <nav class="homenav navbar navbar-expand-lg">
            <div class="container-fluid">
                <img class="logo" src="images/logo.png" alt="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="navv navitems nav-link active" aria-current="page" href="index.php">Home</a>
                        <a class="navv navitems nav-link active" href="courses/courses.php">Courses</a>
                        <a class="navv navitems nav-link active" href="aboutus.php">About us</a>
                        <a class="navv navitems nav-link active" href="contactus.php">contact us</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navbar ends -->
        <!-- Title -->
        <div class="homep row">
            <div class="col-lg-6 left">
                <h5 class="heading1">Welcome to ourwebsite.</h5>
                <h1 class="head2">
                    Structured roadmap to learn new skills and uplift your learning!
                </h1>

                <button type="button" onclick="location.href= 'Signin/signin.php';" class="btn btn-light btn-outline-light">
                    Get Started
                </button>
                <!-- <button type=" button" class="btn btn-outline-light"><a class="signup" href=" Signin/signin.php">
                        Signup</a></button> -->
            </div>
            <div class="col-lg-6">
                <img class="home-image" src="images/homepage.png" alt="image" />
            </div>
        </div>
        </div>



        <div class="card-holder">
            <div class="card" style="width: 18rem;">
                <img src="courses/images/wp7250078.webp" class="card-img-top" alt="image">
                <div class="card-body">
                    <h5 class="card-title">JAVA</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6 left">
                <h1>Feedbacks </h1>

                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Feedback</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-light btn-outline-light">Submit</button>
                </form>
            </div>
            <div class="coll col-lg-6">
                <div class="comment-section my-3">
                    <div class="comment">
                        Feedback1
                    </div>
                    <div class="comment">
                        Feedback2
                    </div>
                    <div class="comment">
                        Feedback3
                    </div>
                    <div class="comment">
                        Feedback4
                    </div>
                    <div class="comment">
                        Feedback5
                    </div>
                    <div class="comment">
                        Feedback6
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- feature -->

    <footer id="foot">
        <!-- <img class="footer--image" src="footer-image.png" alt="footer-image"> -->
        <div class="contact-icons">

            <!-- <div class="contact-icons"> -->
            <i class="icon1 icon fa-brands fa-whatsapp"></i>
            <i class="icon2 icon fa-brands fa-instagram"></i>
            <i class="icon3 icon fa-regular fa-envelope"></i>
            <i class="icon4 icon fa-brands fa-github"></i>
            <i class="icon5 icon fa-brands fa-linkedin-in"></i>
            <i class="icon6 icon fa-brands fa-twitter"></i>

        </div>
    </footer>


    </body>

</html>