<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CDN Link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
            <link rel="stylesheet" href="style/index.css">
            <link rel="stylesheet" href="style/custom.css"> 
            <link rel="stylesheet" href="/css/bootstrap.min.css">
        <title>Log in</title>
    </head>
    <body>
    <!-- form section -->   
  <?php include('script.php'); ?>

        <div class="container-fluid bg m-3 ">
            <div class="nav-bar">
                <a href="#"><img height="80"  src="img/logo-2.png" alt="logo"></a>
            </div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4 "></div>
                    <div class="col-sm-4 col-md-4 col-lg-4 form-container">
                        <!-- FORM START -->
                        <form action="code.php" method="post">
                            <div class="title">
                                <p class="text-center fw-bold text-white"><span class="fw-bolder text-primary"><i class="bi bi-person-fill text-dark" class="fw-bold"></i>Login</span> here!</p>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
                            </div>
                            <div class="jk mb-3 text-center">
                                <input type="submit" name="submit2" class="btn btn-primary" value="Login now">
                            </div>
                            <p class="text-center text-white mt-3">Don't have an account? <a href="registration.php">Register</a></p>
                        </form>
                        <!-- FORM END -->
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 "></div>
                </div>
            </div>
            
           
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>