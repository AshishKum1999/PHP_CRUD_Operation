<?php
include "config.php";
$id=$_GET['ID'];
mysqli_query($con, "delete from `tbltodo` where ID=$id");
header("location:index.php");
?>