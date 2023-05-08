<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<?php
$id=$_GET['ID'];
include "config.php";
$Rdata = mysqli_query($con, "select * from tbltodo where ID=$id");
$data= mysqli_fetch_array($Rdata);
?>

<body class="bg-info">
<form action="update1.php" method="post">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
                <h3 class="text-center text-primary font-monospace">Update</h3>
                <div class="col-10">
                    <input type="text" value="<?php echo $data['list']; ?>" name="list" class="font-control" id="">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary">Update</button>
                    <input type="hidden" name="id" value="<?php echo $data['ID']; ?>">
                </div>
            </div>
        </div>
    </form>
</body>
</html>