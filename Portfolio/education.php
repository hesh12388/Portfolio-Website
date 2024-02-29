<?php
    include_once("header.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    
    <link rel="stylesheet" href="education.css">
    <link rel="stylesheet" href="mobileEducation.css" media="screen and (max-width:768px)">
    <script defer src="education.js"></script>
    <title>Document</title>
</head>
<body class="grid">
    
<div class="slidercontainer">
    <div class="showSlide">
       
        <div class="about">
            <header id="about1">
                <h1>About</h1>
                <hr>
            </header>
            <div id="about2">
            <figure>
                <img src="profileimage.jpg" width="200vw" height="200vw">
            
                <figcaption> Aspiring Software Engineer</figcaption>
            </figure>
            
            <section id="about3">
                <aside>
                    <p id="heading"> Computer Science Undergraduate Student at Queen Mary University of London</p>
            
                    <article>
                        <p>My professional aim is to become an proficient and talented Software Engineer or to become an expert in Data Analytics or CyberSecurity. In order to do this, I plan to complete my bachelor's degree in Computer Science then possibly pursuing a masters in CyberSecurity or Data Science. I believe this, along with work experience in the industry, will prepare me for a career in technology</p>
                    </article>
                </aside>
            </section>
            </div>
            
        </div>
    </div>

    <div class="showSlide">
      
        <div class="skills">
                <h1 id="skills-title">Skills</h1>
        <section id="technical-skills">
            <header id="skills-title1">
                <h1>Technical Skills</h1>
            </header>

                <ul>
                    <li>Java</li>
                    <li>HTML, CSS, JavaScript</li>
                    <li>SQL, PHP</li>
                    <li>C++</li>
                    <li>Git, command line prompt</li>
                    <li>Python, machine learning</li>
                </ul>
        </section>


        <section id="non-technical-skills">
            <header id="skills-title2">
                <h1>
                        Non-technical Skills
                </h1>
            </header>

            <ul>
                <li>Presentation</li>
                <li>Communication</li>
                <li>Collobaration and Teamwork</li>
            </ul>
        </section>
        </div>
    </div>

    <div class="showSlide">
 
        <div class="education">
            <header id="education-title">
                <h1>Education</h1>
            </header>
    
            <section id="uni">
                <header>
                    <h1>Queen Mary University of London</h1>
                </header>
    
                <p>Computer Science BSc Hons, Expected First Class</p>
            </section>
    
    
            <section id="school">
                <header>
                    <h1>Hayah International Academy</h1>
                </header>
    
                <p>
                    International Baccalaureate, 40 points with 7,7,7 in Biology, Chemistry, and Mathematics
                </p>
            </section>
        </div>
    </div>
    
    <!-- Navigation arrows -->
    <a class="left" onclick="nextSlide(-1)"> &lt</a>
    <a class="right" onclick="nextSlide(1)">&gt</a>
</div>

</body>
</html>