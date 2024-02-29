
<?php 

 

    include "database.inc.php";
        $comment = $_POST['comment'];
        $userID = $_POST['user'];
        $postID = $_POST['post_id'];

        $comment= trim($comment);
      
    
      if($_POST['comment']=== '' || $comment==='Write Comment here')
      {
        echo "reached here";
        header("location: ../Blogs.php?error=$postID");
        exit();
      }

      else{
        $sql = "INSERT INTO comments (userId, PostID, comment) VALUES ('$userID', '$postID', '$comment')";
  
        mysqli_query($conn, $sql);
    
        header("location: ../Blogs.php");
      }

       


    
