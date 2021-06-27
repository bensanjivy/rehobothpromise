<?php 
//Test si connecté
session_start();
$is_in=false;
if (isset($_SESSION['connected']) && $_SESSION['connected'] === true) {
    $is_in = true;
}

//IMPORTS
// include_once('../rehobothpromise/db.php');

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>rehoboth</title>

        <!--BOOTSTRAP-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        
        <!-- JQUERY and AJAX -->
        <script src="../JS/jquery-3.5.1.min.js"></script>
        
        <!--MY CSS-->
        <link rel="stylesheet" href="bible.css">  
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">  

        <!-- JS COUNTER -->
        <script src="./JS/biblecounter.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

        <!-- JS -->
        <script src="js/biblechapter.js"></script>

    </head>

        

    <body style="background-color:#557174">

        <header>
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
        </header>

        <!-- Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light" class="bs-example" style="background-color:#9DAD74">
            <div class="container-fluid justify-content-between">

                <!-- Left elements -->
                <div class="d-flex">
                    <!-- Brand -->
                    <a class="navbar-brand me-2 mb-1 d-flex align-items-center" href="#">
                        <img src="../images/logo.jpeg" height="80" alt="" style="margin-top: 2px;"/>
                    </a>
                </div>

                <!-- Center elements -->
                <ul class="navbar-nav flex-row d-none d-md-flex">
                    <li class="nav-item"><a href="home.php" class="nav-link active" style="color: #0B5345; font-size: 32px; font-family:perpetua">HOME</a></li>
                    <li class="nav-item"><a href="bible.php" class="nav-link" style="color:#0B5345; font-size:32px; font-family:perpetua"><b>BIBLE</b></a></li>
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

        <div class="wrapper">
            <br><br>
            <div class="container" class="center">
                <div class="row">
                    <span class="center">
                        <div class="col-md-3 col-sm-6">
                            <div class="counter green">
                                <div class="counter-icon">
                                    <i class="fa fa-bible"></i>
                                </div>
                                <h3>BOOKS</h3>
                                <span class="counter-value">66</span>
                            </div>
                        </div>
                    </span>

                    <span class="center">
                        <div class="col-md-3 col-sm-6">
                            <div class="counter green">
                                <div class="counter-icon">
                                    <i class="fa fa-book-open"></i>
                                </div>
                                <h3>CHAPTERS</h3>
                                <span class="counter-value">1189</span>
                            </div>
                        </div>
                    </span>

                    <span class="center">
                        <div class="col-md-3 col-sm-6">
                            <div class="counter green">
                                <div class="counter-icon">
                                    <i class="fa fa-book-reader"></i>
                                </div>
                                <h3>VERSES</h3>
                                <span class="counter-value">31102</span>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
        </div>
        
            <form action="bible.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for='rehoboth.r_booknames' style="text-align:center; font-size:30px; background:#C7CFB7 !important" id="inputState" class="form-control">Please select a bookname</label>
                            <select class="form-control" id="booknames" name="booknames">
                                <option selected="" disabled="">Select bookname</option>
                                    <?php
                                        require_once 'data.php';
                                        $books = loadbooks();
                                        foreach($books as $books) {
                                            echo "<option id='".$books['id_booknames']."' value='".$books['id_booknames']."'>".$books['bookname']."</option>";
                                        }
                                    ?>
                            </select>
                    
                    </div>
                </div><br>

                <div class="form-row">
                    <div class="form-group col-md-12">   
                        <label for="chapter_pkey" style="text-align:center; font-size:25px; background:#C7CFB7 !important" id="inputState" class="form-control">Please select the chapter</label>
                            <select class="form-control" id="r_chapter" name="r_chapter">
                                <option selected="" disabled="">Select chapter</option>
                                    <?php
                                        require_once 'data.php';
                                        $r_chapter = loadchapter();
                                        foreach($r_chapter as $r_chapter) {
                                            echo "<option id='".$r_chapter['chapter_pkey']."' value='".$r_chapter['chapter_pkey']."'>".$r_chapter['chaptername']."</option>";
                                        }
                                    ?>
                            </select>
                    </div>                
                </div><br>

                <div class="form-row">
                    <div class="form-group col-md-12">   
                        <label for="verses_pkey" style="text-align:center; font-size:20px; background:#C7CFB7 !important" id="inputState" class="form-control">Please select the verses</label>
                            <select class="form-control" id="r_verses" name="r_verses">
                                <option selected="" disabled="">Select Verses</option>
                                    <?php
                                        require_once 'data.php';
                                        $r_verses = loadverses();
                                        foreach($r_verses as $r_verses) {
                                            echo "<option id='".$r_verses['verses_pkey']."' value='".$r_verses['verses_pkey']."'>".$r_verses['id_verses']."</option>";
                                        }
                                    ?>
                                            
                            </select>
                    </div>
                </div>

                <div class="form-group row">
                <input style="width: 60%; margin-left:25%; margin-right:25%;" class="btn btn-success" name ="submit" type="submit" value="Search">
                <?php 
                    require_once 'data.php';
                    if(isset($_POST['submit'])){
                        // echo 'Bookname:' . $_POST['r_chapter'];
                        // echo 'Verse ID' . $_POST['r_verses'];
                        
                        $_versetext = loadversetext();
                        foreach($_versetext as $_versetext){

                ?>
                            
                
                </div><br>

                
            
                <div style="background:#C7CFB7 !important" class="jumbotron">
                    <p style="text-align:center; font-size:30px"><?php echo $_versetext['versestext'];?></p>
                </div>

                <?php
                    }
                                
                            }
                ?>
        
            

            </form>
                       
        

        <br>

        
    </body>   
</html>