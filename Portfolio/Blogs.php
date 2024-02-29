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
    <link rel="stylesheet" href="blogs.css">
    <title>Document</title>
</head>
<body>
      <div class="filter"> 
        <form method="post" action="Blogs.php">
            <label for="month" id="monthLabel">Filter by Month</label>
          <select name="month">
              <option value="All"> All</option>
              <option value="January">January</option>
              <option value="February">February</option>
              <option value="March">March</option>
              <option value="April">April</option>
              <option value="May">May</option>
              <option value="June">June</option>
              <option value="July">July</option>
              <option value="August">August</option>
              <option value="September">September</option>
              <option value="October">October</option>
              <option value="November">November</option>
              <option value="December">December</option>
        </select>
                <button type="submit" name="submit">Apply</button>

        
        </form>
      </div>
    <div class="blogsContainer">
    <?php 

    
       
        include "includes/database.inc.php";    

        $sql2 = "SELECT * FROM blogs";


        $result= mysqli_query($conn, $sql2);

            if(mysqli_num_rows($result)>0)
            {
    

                  $count = mysqli_num_rows($result);

                  $a = array();

                  for($i=0; $i<$count; $i++)
                  {
                    array_push($a, mysqli_fetch_assoc($result));
              
                  }


                
                  for($j=0; $j<$count; $j++)
                  {
                      for($i=0; $i<$count; $i++)
                      {
                 
                    
                        if($a[$j]['reg_date']>$a[$i]['reg_date'])
                        {
                          $temp = $a[$i];
                          $a[$i]=$a[$j];
                          $a[$j]=$temp;
                        }
                      }

                  
                  }


                 
                  $month = $_POST["month"];

                  for($z=$count-1; $z>=0; $z--)
                  {
                    $row=$a[$z];
                    $title = $row['Title'];
                    $content = $row['Content'];
                    $date = $row['reg_date'];
                    $postId = $row['postID']-1;

                    $_SESSION['post_id'] = $postId;
                    $str = date_parse($date);
                    if($str["month"]===getMonth($_POST["month"]) || getMonth($_POST["month"]) ===-1 || $month===null)
                    {
                      
                      echo "<div class='blog'> 
                            <div class='flex-item1'> 
                              <div class='title'>
                                <h2>$title</h2> 
                              </div>  
    
                              <div class='date'>
                              <p>$date</p>
                              </div>
                            </div> 
    
                            <div class='content'> 
                                <p>$content</p> 
                            </div>";

                              echo " <form method='post' action='includes/removePost.php'>";
                              echo "<input type='hidden' name='reg_Date' value='$date' />";
                           if($_SESSION['email']==='heshamAhme@outlook.com')
                           {
                             echo "<button type='submit' name='submit'>Delete</button>";
                           }
                           echo " </form> ";
                    

                       $sql3 = "SELECT * FROM comments WHERE PostID='$postId'";

                       $result2 = mysqli_query($conn, $sql3);

                       while($comment=mysqli_fetch_assoc($result2))
                       {
                         $commentText=$comment['comment'];
                         $user = $comment['userId'];
                         $commentDate= $comment['reg_date'];
                           echo " <form method='post' action= 'includes/removeComment.php'>
                           <div class='commentText'> 
                           $user : $commentText";
                           echo "<input type='hidden' name='regDate' value='$commentDate'/>";
                           if($_SESSION['email']==='heshamAhme@outlook.com')
                           {
                             echo "<button type='submit' name='submit' id='deleteButton'>Delete</button>";
                           }
                           echo "</div> </form> ";
                       }

                      if(isset($_SESSION["email"]))
                      {
                        $commentUser=$_SESSION["email"];
                        
                          echo "<div class='comment'>
                                <form action='includes/addComment.php' method='post' class='commentform'>
                                      <label>Comment</label>
                                      <input type='hidden' name='user' value='$commentUser' />
                                      <input type='hidden' name='post_id' value='$postId' />
                                      <textarea name='comment' id='comment'>Write Comment here </textarea>
                                      <input type='submit' name='submit' onclick='validateInputs()'  value='Add Comment'/>
                                </form>
                                </div> </div>";
                          }

                      else{
                        echo "</div>";
                      }


                          if(isset($_GET["error"]))
                          {
                            if($_GET["error"]=="$postId")
                            {
                                echo "<p id='error'>Error, must input valid comment</p> ";
                            }
                          }

                
                      }
                    }

            }

        

              function getMonth($month)
              {
                if($month==="January"){
                  return 1;
                }

                elseif($month==="February"){
                  return 2;
                }

                elseif($month==="March"){
                  return 3;
                }

                elseif($month==="April"){
                  return 4;
                }
                elseif($month==="May"){
                  return 5;
                }

                else if($month==="June"){
                  return 6;
                }

                elseif($month==="July")
                {
                    return 7;
                }

                else if($month==="August"){
                  return 8;
                }

                else if($month==="September"){
                  return 9;
                }

                else if($month==="October"){
                  return 10;
                }

                else if($month==="November"){
                  return 11;
                }

                else if($month==="December"){
                  return 12;
                }

                return -1;
              }

            


              mysqli_close($conn);
        
    ?>
    </div>
   
</body>
</html>