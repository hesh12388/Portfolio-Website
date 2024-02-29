
<?php

include_once "database.inc.php";

$date = $_POST['regDate'];

$sql = "DELETE FROM comments WHERE reg_date ='$date'";

mysqli_query($conn, $sql);

header("location: ../Blogs.php");

mysqli_close($conn);
exit();