<?php
include "config.php";
$List = $_POST['list'];
$Id= $_POST['id'];
mysqli_query($con, "UPDATE `tbltodo` SET `list`='$List' WHERE ID=$Id");
header("location:index.php");
?>