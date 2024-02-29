<?php

if(isset($_POST["submit"]))
{
    $username = $_POST["email"];
    $password = $_POST["password"];

    require_once "database.inc.php";

    require_once "functions.inc.php";

    loginUser($conn, $username, $password);

}

else{
    header("location: ../Login.php");

    exit();
}