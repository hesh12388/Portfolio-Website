<?php 
      session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="mobileHeader.css" media="screen and (max-width:768px)">
</head>
<body>
<header class="navbar">
            <div class="container">
               <nav class="navbar-nav" id="navbarNav">
                  <ul>
                     <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                     <li class="nav-item"><a class="nav-link" href="education.php">About me</a></li>
                     <li class="nav-item"><a class="nav-link" href="education.php">Education</a></li>
                     <li class="nav-item"><a class="nav-link" href="education.php">Skills and Achievements</a></li>
                     <li class="nav-item"><a class="nav-link" href="experience.php">Experience</a></li>
                     <li class="nav-item"><a class="nav-link" href="projects.php">Portfolio</a></li>

                     <?php 
                        if(isset($_SESSION["email"])) {
                           $x = $_SESSION["email"];
                           echo "<li class='nav-item'><a class='nav-link' href='Blog.php'>Add Post</a></li> ";
                           echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Log Out</a></li>";
                           echo "connected as $x";
                        }

                        else{
                              echo " <li class='nav-item'><a class='nav-link' href='Login.php'>Login</a></li>";
                              echo "<li class='nav-item'><a class='nav-link' href='SignUp.php'>Sign Up</a></li> ";
                        }
                     ?>

                  <li class="nav-item"><a class="nav-link" href="Blogs.php">View Blogs</a></li>
               
                     
                  </ul>
               </nav>
            </div>
         </header>
</body>
</html>