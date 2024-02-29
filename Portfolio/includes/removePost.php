
<?php

include_once "database.inc.php";

$date = $_POST['reg_Date'];

$sql = "DELETE FROM blogs WHERE reg_date ='$date'";

mysqli_query($conn, $sql);

header("location: ../Blogs.php");

mysqli_close($conn);
exit();