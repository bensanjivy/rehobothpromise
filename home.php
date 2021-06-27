<?php
// Test si connecté
session_start();
$is_in = false;
if (isset($_SESSION['connected']) && $_SESSION['connected'] === true) {
    $is_in = true;
}

// Imports


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>rehobothpromise</title>

        <!--BOOTSTRAP-->
        
            
        <!-- JQUERY and AJAX -->
        
            
        <!--MY CSS-->
        <link rel="stylesheet" href="home.css">  
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">  
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- MY JavaScript -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        
    </head>

    <body style="background-color:#557174">
        
            <!-- ICONES-->
            <div class="nav justify-content-end">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a href="https://www.facebook.com/rehobothgp" class="navbar-brand" style="padding-left:25px;">
                            <i class="fab fa-facebook-square fa-lg" style="color:WHITE"></i>
                        </a>

                        <a href="#" class="navbar-brand" style="padding-left:25px;">
                        <i class="fab fa-tumblr-square fa-lg" style="color:white"></i>
                        </a>

                        <a href="https://www.instagram.com/rehobothgp/" class="navbar-brand" style="padding-left:25px;">
                            <i class="fab fa-instagram fa-lg" style="color:white"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/rehoboth-gp-162a461b3/" class="navbar-brand" style="padding-left:25px;">
                            <i class="fab fa-linkedin fa-lg" style="color:white"></i>
                        </a>
                        <a href="https://twitter.com/rehobothgp" class="navbar-brand" style="padding-left:25px;">
                            <i class="fab fa-twitter-square fa-lg" style="color:white"></i>
                        </a>
                        <a href="seconnecter.php" class="navbar-brand" style="padding-left:25px;">
                            <i class="fas fa-user-circle fa-lg" style="color:white"></i>
                        </a>
                        <a href="boutiques.php" class="navbar-brand" style="padding-left:25px;">
                        <i class="fas fa-shopping-bag fa-lg" style="color:white"></i>
                        <!-- <span class="badge rounded-pill badge-notification bg-danger" height="35">1</span> -->
                        </a>
                        <a href="labible.php" class="navbar-brand" style="padding-left:25px;">
                        <i class="fas fa-search fa-lg" style="color:white"></i>
                        </a>
                    </nav>
                </div>

            <!-- Navbar-->
            <nav class="navbar navbar-expand-lg navbar-light" class="bs-example" style="background-color:#9DAD74">
                <div class="container-fluid justify-content-between">

                    <!-- Left elements -->
                    <div class="d-flex">
                        <!-- Brand -->
                        <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
                            <img src="./images/logo.jpeg" height="80" alt="" style="margin-top: 2px;"/>
                        </a>
                    </div>

                    <!-- Center elements -->
                    <ul class="navbar-nav flex-row d-none d-md-flex">
                        <li class="nav-item"><a href="accueil.php" class="nav-link active" style="color: #0B5345; font-size: 32px; font-family:perpetua"><b>HOME</b></a></li>
                        <li class="nav-item"><a href="bible.php" class="nav-link" style="color:#0B5345; font-size:32px; font-family:perpetua">BIBLE</a></li>
                        <li class="nav-item"><a href="boutiques.php" class="nav-link" style="color:#0B5345; font-size:32px; font-family:perpetua">SHOP</a></li>
                        <li class="nav-item"><a href="team.php" class="nav-link" style="color:#0B5345; font-size:32px; font-family:perpetua">OUR TEAM</a></li>
                        <li class="nav-item"><a href="contact.php" class="nav-link" style="color:#0B5345; font-size:32px; font-family:perpetua">CONTACT</a></li>
                    </ul>

                    <!-- Right elements -->
                    <ul class="navbar-nav flex-row">
                        <span style="display:<?php echo ($is_in ? 'none' : ''); ?>">
                            <li data-target="#register" class="nav-item">
                                <a href="seconnecter.php" class="nav-link" style="color:#0B5345; font-size:32px; font-family:perpetua">LOGIN</a>
                            </li>
                        </span>
                            <li class="nav-item"><a href="logout.php" class="btn btn-success" style="display:<?php echo (!$is_in?'none':''); ?>">LOGOUT</a></li>
                    </ul>
                </div>
            </nav>
           
            <section class="module parallax parallax-1" data-type="background" data-speed="10">
                <div class="parallax-container">
                    <h1>REHOBOTH</h1>
                </div>
            </section>

            <section  class="module content">
                <div class="parallax-container">
                <h1 class="display-3">Rehoboth et en hebreu hzcgg</h1>
                <a href="learnmore.php" class="btn btn-success">Learn more</a>
                </div>
            </section>

            <section class="module parallax parallax-2" data-type="background" data-speed="10">
                <div class="parallax-container">
                    <h1>WELCOME</h1>
                </div>
            </section>

            <section class="module content">
                <div class="parallax-container">
                    <h2>Lorem Ipsum Dolor</h2>
                    <p>Lorem ipsum dolor...</p>
                </div>
            </section>
                    
            <footer class="footer"> 
                <div style="background-color:#9DAD74">
                    <div>

                        <!-- Grid row-->
                        <div class="row py-3 d-flex align-items-center">

                            <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                                <h6 class="mb-0" style="color:GREEN; font-size:20px">GET CONNECTED WITH US!</h6>
                            </div>
                        
                            <div class="col-md-6 col-lg-7 text-center text-md-right">
                                <!-- Facebook -->
                                <a href="https://www.facebook.com/rehobothgp" class="fb-ic">
                                    <i class="fab fa-facebook-f white-text mr-4" style="color:GREEN; font-size:25px"> </i>
                                </a>
                                <!-- Twitter -->
                                <a href="https://twitter.com/rehobothgp" class="tw-ic">
                                    <i class="fab fa-twitter white-text mr-4" style="color:GREEN; font-size:25px"> </i>
                                </a>
                                
                                <!--Linkedin -->
                                <a href="https://www.linkedin.com/in/rehoboth-gp-162a461b3/" class="li-ic">
                                    <i class="fab fa-linkedin-in white-text mr-4" style="color:GREEN; font-size:25px"> </i>
                                </a>
                                <!--Instagram-->
                                <a href="https://www.instagram.com/rehobothgp/" class="ins-ic">
                                    <i class="fab fa-instagram white-text" style="color:GREEN; font-size:27px"> </i>
                                </a>
                            </div> 
                        </div>
                    </div>
                </div>
            </footer>


            
        



            
       
       
        
    

        <!-- My JS Bundle -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
        <script src="./JS/home.js"></script>
    </body>

</html>

    

