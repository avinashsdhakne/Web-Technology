<?php

include 'connection.php';

if(isset($_POST['done'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = "INSERT INTO `crud` ( `username`, `password`) VALUES ('$username','$password')";
  
    $query = mysqli_query($con, $q);
 }
?>


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

    <style>
        .container{
            margin-top: 200px;
        }

        .card{
            margin:10px;
            padding:50px;
            margin-top:100px;
            border: solid black 2px;
            background: cyan;

        }

        .data{
            margin: 200px:
            border: solid black 2px;

        }

        button{
            margin-left: 40%;
            margin-right: 40%;
        }
    </style>
</head>
<body>
    <div class="col-6 m-auto container">
        <form method="post">
            <div class="card">
                <div class="card-header bg-black">
                    <h1 class="text-white text-center">CRUD Operation</h1>
                </div><br>
            
                <div class="data">
                    <label for="Username">Username</label>
                    <input type="text" class="form-control" name="username"><br>

                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password"><br>
                </div>

                <button class="btn btn-success" type="submit" name="done">Submit</button><br>
            </div>
        </form>
    </div>
</body>
</html>