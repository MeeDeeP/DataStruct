<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
    <section class="login py-5 bg-light">
    <?php include('message.php'); ?>
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-5">
                    <img src="img/cccs2.jpg"  class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 text-center py-5">
                    <h1 class="animate__animated animate__bounce animate__infinite  ">Log in now</h1>
                    
                    <form action="code.php" method="POST">
                        <div class="form py-4 pt-5">
                            <div class="offset-1 col-lg-10">
                                <input type="text" class="inp px-3" name="username"  placeholder="Username"    >
                            </div>
                        </div>
                        <div class="form  py-3">
                            <div class="offset-1 col-lg-10">
                                <input type="password" class="inp px-3" name="password"  placeholder="Password" >
                            </div>
                        </div>
                        <div class=" py-3">
                            <div class="d-grid gap-2 col-4 mx-auto">
                                <input class="btn btn-danger  rounded-pill" name="submit2" type="submit" value="Login">
                            </div>
                        </div>
                        <p>Don't have an Account?</p>
                        <div class="form ">
                            <div class="offset-1  col-4 mx-auto">
                                <a href="create-acc.php" class="btn btn-danger rounded-pill">Register</a>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>