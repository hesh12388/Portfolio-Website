
<?php
include_once "header.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="Login.css">

    <script defer src="login.js"></script>
    <title>Document</title>
</head>
<body>

    <div class="form-container">

    
                
            <section>
             
                    
                    <div  class="LoginForm">
                        <form  id ="form" method="post" action="includes/login.inc.php">
                        <h2 class="h2">Login</h2>
    
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
                        
                    

                            <input id="button1" type="submit" value="Login" name="submit">
                            <input id="button2" type ="reset" value="Reset">

                            
                                <?php

                                if(isset($_GET["error"]))
                                {
                                    if($_GET["error"] == "invalidpassword")
                                    {
                                        echo "<p>Incorrect</p>";
                                    }

                                    else if($_GET["error"] == "userdoesnotexist"){
                                        echo "<p>User does not exist</p>";
                                    }

                                }
                                ?>
                     
                    </form>
                    </div>
                    
            

                </section>
    
                  
    
        </div>
                
   
</body>
</html>




