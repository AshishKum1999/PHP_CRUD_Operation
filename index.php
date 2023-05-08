<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/562bf7ce02.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
    <form action="insert.php" method="post">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-4">
                <h3 class="text-center text-primary font-monospace">Todo List</h3>
                <div class="col-8">
                    <input type="text" name="list" class="font-control" id="">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary"><i class="fa-solid fa-circle-plus"></i></button>
                </div>
            </div>
        </div>
    </form>
    <!-- getdata  -->

    <?php
    include "config.php";
    $rawData=mysqli_query($con, "select * from tbltodo");
    ?>
    <div class="container">
        <div class="col-8 bg-white m-auto mt-3">
    <table class="table">
        <tbody>
            <?php 
            while($row = mysqli_fetch_array($rawData)){
            ?>
            <tr>
                <td> <?php echo $row['list'] ?> </td>
                <td style="width: 10%;"><a href="delete.php? ID= <?php echo $row['ID'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></a></td>
                <td style="width: 10%;"><a href="update.php? ID= <?php echo $row['ID'] ?>" class="btn btn-outline-success"><i class="fa-solid fa-pen-to-square"></i></a></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
    </div>
</body>
</html>