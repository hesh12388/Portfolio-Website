<?php

include_once "database.inc.php";
$title = $_POST["title"];
$content = $_POST["content"];


$sql = "INSERT INTO blogs (Title, Content) VALUES ('$title', '$content')";

mysqli_query($conn, $sql);

header("location: ../Blogs.php");
mysqli_close($conn);