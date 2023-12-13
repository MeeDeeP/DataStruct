<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=d, initial-scale=1.0">
    <link rel="stylesheet" href="style/design.css">
    <link rel="stylesheet" href="style/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Registration</title>
</head>
<body>
  <!-- Header Section start -->
  <header id="header">
    <div class="container-fluid p-4">
      <div class="row justify-content-between">
        <div class="col-lg-5 col-md-4 col-sm-4 px-5">
          <a href="#" class="text-decoration-none text-light fw-bold"><img height="80"  src="img/logo-2.png" alt="logo"></a>
        </div>
        <div class="title col-lg-7 col-md-8 col-sm-8 mt-md-3 mt-sm-3 justify-content-evenly">
          <h2>Register Here!</h2>
        </div>
      </div>
    </div>
  </header>

    <div class="container mt-5">
        <div class="row">
            <div class="col"></div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <form action="code.php" method="post" class="row g-3 form-container">
                    <div class="col-md-6 col-sm-6">
                      <label for="validationServer01" class="form-label text-white">First name</label>
                      <input type="text" class="form-control" name="fname" id="validationServer01" placeholder="First name" required>
                    </div>
                    <div class="col-md-6 col-sm-6 ">
                      <label for="validationServer02" class="form-label text-white">Last name</label>
                      <input type="text" class="form-control " name="lname" id="validationServer02" placeholder="Last name" required>
                    </div>
                    <div class="col-md-6 col-sm-6 ">
                      <label for="validationServerUsername" class="form-label text-white">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend3">@</span>
                        <input type="email" class="form-control" name="email" name id="validationServerUsername" aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" placeholder="Username" required>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 ">
                      <label for="validationServer02" class="form-label text-white">Password</label>
                      <input type="password" class="form-control " name="password" id="validationServer02" placeholder="Password" required>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <label for="validationServer03" class="form-label text-white">City</label>
                      <input type="text" class="form-control " name="city" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="City" required>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <label for="validationServer03" class="form-label text-white">Location</label>
                      <input type="text" class="form-control " name="location" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="Location" required>
                    </div>
                    <div class="col-md-4 col-sm-4">
                      <label for="validationServer05" class="form-label text-white">Zip</label>
                      <input type="text" class="form-control" name="zip" id="validationServer05" aria-describedby="validationServer05Feedback" placeholder="Zip" required>
                    </div>
                    <div class="mb-3 d-none">  
                                <select  name="usertype">
                                    <option value="user">user</option>
                                </select>
                            </div>
                    <!-- <div class="col-12">
                      <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label text-white" for="exampleCheck1">Agree with <a href="#" class="text-primary">Terms & Condition</a></label>
                      </div>
                    </div> -->
                    <div class="mb-3 text-end">
                      <a href="index.php"><input type="cancel" name="cancel" class="btn btn-danger" value="Cancel"></a>
                      <input type="submit" name="submit"  class="btn btn-primary" value="Register Now">
                    </div>
                  </form>
            </div>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>