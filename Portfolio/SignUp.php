<?php
    include_once 'header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script defer src="SignUp.js"></script>
    <link rel="stylesheet" href="SignUp.css">

</head>
<body>
<div class="Logincontainer">

    
                
<section>
 
        
        <div  class="SignUpForm">
            <form  id ="form" method="post" action="includes/signup.inc.php">
            <h2 class="h2">SignUp</h2>

            <div class="input-control">
                
                <label for="username" id="usernamelabel">Username</label>
                    <input id="username" name="email" type="email">
                    
                    
                    <div class="error"></div>
            </div>
            
            
            <div class="input-control">
                <label for="password" id="passwordlabel">Password</label>
                    <input id="password" name="password" type="password">
                    
                    <div class="error"></div>
            </div>
            
        

                <input id="button1" type="submit" value="Sign Up" name="submit">
                <input id="button2" type ="reset" value="Reset">



                    <?php

                    if(isset($_GET["error"]))
                    {
                        if($_GET["error"] == "usernameExists")
                        {
                            echo "<p>Username already exists.</p>";
                        }

                        else if($_GET["error"] == "none"){
                            echo "<p>You have signed up!!</p>";
                        }
                    }
                    ?>
                
         
        </form>


        </div>
        

    </section>

      

</div>
</body>
</html>


