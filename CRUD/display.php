<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <h1 class="text-warning text-center">Display table data</h1>
            <table class="table table-stripped table-hover table-border">
                <thead>
                    <tr class="bg-dark text-white">
                        <td>ID</td>
                        <td>Username</td>
                        <td>Password</td>
                        <td>Update</td>
                        <td>Delete</td>
                    </tr>

                    <?php
                        
                        include 'connection.php';
                        $q = "select * from CRUD";
                        $query = mysqli_query($con, $q);

                        while($res = mysqli_fetch_array($query)){

                    ?>

                    <tr class="text-center">
                        <td><?php echo $res['id'] ?></td>
                        <td><?php echo $res['username'] ?></td>
                        <td><?php echo $res['password']  ?></td>
                        <td> <button class="btn-danger btn"> <a class="text-white" href="update.php?id=<?php echo $res['id'] ?>">Update</a> </button> </td>
                        <td> <button class="btn-primary btn"> <a class="text-white" href="delete.php?id=<?php echo $res['id']?>">Delete</a> </button> </td>
                    </tr>

                    <?php
                        }
                    ?>

                </thead>
            </table>
        </div>
    </div>
</body>
</html>