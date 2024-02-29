<?php
    
function uidExists($conn, $username) 
{
    $sql = "SELECT * FROM users WHERE email = ?";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../SignUp.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);

  mysqli_stmt_execute($stmt);

  $result = mysqli_stmt_get_result($stmt);


  if($row = mysqli_fetch_assoc($result))
  {
        return $row;
  }

  else{
    $result=false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $password) 
{
    $sql = "INSERT INTO users (email, password) VALUES (?,?);";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../SignUp.php?error=stmtfailed");
        exit();
    }

    $hash = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ss", $username, $hash );

    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);

    header("location: ../SignUp.php?error=none");

    exit();
}


function loginUser($conn, $username, $password) 
{
  $uidExists= uidExists($conn, $username);


  if($uidExists===false)
  {
    header("location: ../Login.php?error=userdoesnotexist");
    exit(); 
  }

  $hash = $uidExists["password"];

  $checkPassword= password_verify($password, $hash);


  if($checkPassword===false)
  {
    header("location: ../Login.php?error=invalidpassword");
    exit();
  }

  else if($checkPassword===true)
  {
    session_start();
    $_SESSION["email"] = $uidExists["email"];

    header("location: ../Blog.php");
    exit();
  }


}

