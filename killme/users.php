<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Code sa mga</title>
  <!-- CSS only -->
  <link rel="stylesheet" href="css/design.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body> 

<div class="modal fade" id="studentAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg bg-info">
            <h5 class="modal-title text-bold" id="exampleModalLabel">Create</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="code.php" method="POST">
            <div class="modal-body">
                            <div class="row">
                              <div class="col-3">
                                <a href="enroll1.php" class="btn btn-danger rounded-pill">1st year</a>
                              </div>
                              <div class="col-3">
                                <a href="enroll2.php" class="btn btn-danger rounded-pill">2nd year</a>
                              </div>
                              <div class="col-3">
                                <a href="enroll3.php" class="btn btn-danger rounded-pill">3rd year</a>
                              </div>
                              <div class="col-3">
                                <a href="enroll4.php" class="btn btn-danger rounded-pill">4th year</a>
                              </div>
                            </div>
                            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="save_student" class="btn btn-primary">Save</button>
            </div>
        </form>
        </div>
    </div>
</div>



  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top mb-5">
    <div class="container">
      <a class="navbar-brand" href="https://www.facebook.com/mark.degamo.581/">
        <h4><strong>CPC</strong></h4>
        <!-- <img src="img/cpc.jpg" height="" alt=""> -->
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto text-primary">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><strong>Contacts</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php"><strong>LogOut</strong></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<form class="design">
  <div class="container  design">
    <div class="row">
      <div class="col-lg">
        <img src="img/99.jfif" width="100%" alt="an image" class="img-fluid mt-4 mb-4 rounded"/>
      </div> 
      <div class="col-lg">
          <h3 class="mb-4"></h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi qui nihil rem similique, reprehenderit molestiae vel mollitia quasi quis labore consectetur placeat quam iusto in repellendus explicabo commodi eius autem.</p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic consequatur aliquam nesciunt molestiae velit ut autem id neque molestias perferendis natus architecto nihil, iusto quaerat esse quidem fuga odit facere.</p>
      </div> 
      <div class="col-lg">
        <h3 class="mb-4"></h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi qui nihil rem similique, reprehenderit molestiae vel mollitia quasi quis labore consectetur placeat quam iusto in repellendus explicabo commodi eius autem.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic consequatur aliquam nesciunt molestiae velit ut autem id neque molestias perferendis natus architecto nihil, iusto quaerat esse quidem fuga odit facere.</p>
    </div> 
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 p-5 text-center">
      <button type="button" class="btn btn-primary text-center" data-bs-toggle="modal" data-bs-target="#studentAddModal"><i class="bi bi-plus-circle"> Enroll</i></button>
      </div>
    </div>
</div>
</form>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>