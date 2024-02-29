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
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="Blog.css">

    <script defer src="Blog.js"></script>
    <title>Document</title>
</head>
<body>
<div class="Blogcontainer">

    
                
<section>
 
        
        <div  class="BlogForm">
            <form  id ="form" method="post" action="includes/blog.inc.php">
            <h2 class="h2">Add Blog</h2>
            <div class="input-control">
                
                <label for="title" id="titlelabel">Title</label>
                    <input id="title" name="title" type="text">
                    
                    
                    <div class="error"></div>
            </div>

    
            <div class="input-control">
                <label for="content" id="contentlabel">Content</label>
                    <textarea id="content" name="content"></textarea>
                    <div class="error"></div>
            </div>
            
        

                <input id="button1" type="submit" value="Add" name="submit">
                <button id="button2">Clear</button>
                
         
        </form>
        </div>
        


    </section>

      

</div>
    

</body>
</html>