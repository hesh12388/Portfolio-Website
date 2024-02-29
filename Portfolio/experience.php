


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="experience.css">
    <link rel="stylesheet" href="mobileExperience.css" media="screen and (max-width:768px)">
    <link rel="stylesheet" href="mobileHeader.css" media="screen and (max-width:768px)">
  
    <title>Document</title>
</head>

<body >

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
                           echo "<li class='nav-item'><a class='nav-link' href='Blog.php'>Add Post</a></li> ";
                           echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Log Out</a></li>";
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

         <div class="grid-container">
            
            <div class="box">
                <div class="title">
                
                        <p >London</p>
                        <header>
                            <h1>
                                Technology Insight Week, Amazon
                            </h1>
                        </header>

                        <p>
                            April 2023
                        </p>

                </div>
                     

                    <section class="content1">
                       
                        
                            <br>
                        <article>
                                <p>
                                        2 day insight program for students who are graduating in 2025, which includes:
                                </p>
                            <ul>
                            <li>Insight into the technological industry and a career at Amazon</li>
                            <li>Bespoke mentoring from Amazon employees following the end of the program</li>
                            <li>Mentor-lead sessions which include Coding and Software development exercises</li>
                            <li>CV writing and Interview practice</li>
                            <li>Working in groups of motivated individuals</li> 
                            </ul>
                            
                        </article>
                    </section>
                    
                    

            </div>
                
   
               
        

            <div class="box">
                    <div class="title2">

                    <p >London</p>
                    <header>
                        <h1>
                            Student Ambassador, Queen Mary University of London
                        </h1>
                    </header>

                    <p>
                          March 2023-current
                     </p>
                    </div>

                    <section class="content2">
                    
                            <br>

                            <article>
                                <p>
                                    I am a Student Ambassador and representative for the School of Electronic Engineering and Computer Science at
                                    Queen Mary University of London, demonstrating I understand the importance of representing my organization
                                    in a positive manner
                                </p>
                        </article>
                </section>
            </div>
       

     
        
        
        


   
                
    <div class="box">

        <div class="title3">
            <p>London</p>

            <header>
                <h1>
                    Barclays Mentorship Program, Barclay's UK
                </h1>
            </header>

            <p>
            February 2023 - March 2023
            </p>
        </div>

        <section class="content3">
           
            
           <br>
           <article>
           <p>
               Bespoke 5-week Program which includes: 
               <ul>
               <li>In-person work experience </li>
               <li>Virtual conversations and mentorship with current employees at Barclay's</li>
               <li>Mentor-lead session which includes personal goal setting, CV writing, application and interview practice </li>
               <li>Insight experience into the world of finance and industry</li> 
               </ul>
               
           </p>
           </article>
       
       </section>
            
    </div>

        

      
       
        
        

        <div class="box">

            <div class="title4">

            <p id="place4">London</p>
                <header>
                    <h1>
                        Front Griller and Kitchen Assistant, Nandos UK IRE
                    </h1>
                </header>
                <p>
                    November 2022-current
                </p>

            </div>

            <section class="content4">
                
                
                <br>
                <article>
                <p>
                    I work as a front griller which entails the following skills and attributes: 

                    <ul>
                    <li>I am able to work under continuous pressure, finding ways to adapt and recover</li>
                    <li>I am able to work alongside a team to achieve a common goal</li>
                    <li>I am consistently in situations where I have to solve problems quickly</li>
                    <li>I can communicate effectively with my team members and customers</li>
                    </ul>
                    
                </p>
            </article>
            </section>
        </div> 
         </div>

                   
</body>
</html>