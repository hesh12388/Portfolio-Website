
<?php 
if(isset($_POST["submit"]))
{
    $username = $_POST['email'];
    $password = $_POST['password'];
    

    require_once 'database.inc.php';
    require_once 'functions.inc.php';



if(uidExists($conn, $username) !== false)
{
        header("location: ../SignUp.php?error=usernameExists");
        exit();
}


    createUser($conn, $username, $password);


}

else{
   header("location: ../SignUp.php");
}


