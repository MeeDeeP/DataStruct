<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
    <!-- <link rel="stylesheet" href="style/custom.css"> -->
    <title>Booking</title>

</head>
<body>
  <!-- Navbar start -->
<?php include ('script.php'); ?>
<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container">
    <a class="navbar-brand" href="#"><img height="80" src="img/logo-2.png" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
        <i class="ms-auto fs-5 fw-bolder text-white">Welcome Aboard!</i>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Origin
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#cebu">Cebu </a></li>
            <li><a class="dropdown-item" href="#manila">Manila</a></li>
            <li><a class="dropdown-item" href="#bohol">Bohol</a></li>
          </ul>
        </li>
        <a href="index.php"><button type="submit" class="btn btn-primary">Log out</button></a>
      </ul>
    </div>
  </div>
</nav>
<!-- Navbar end -->

<!-- content start -->
<div class="container mt-4">
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
    <img height="400" src="img/pic-3.jpg" class="img-fluid rounded-start" alt="img">
  </div>
  <div class="col-md-8 bg-dark rounded-end">
    <form action="code.php" method="post" class="form-container mx-4 my-5">
            <div class="row">
              <div class="col-6">
                  <label for="validationServer01" class="form-label text-white">First name</label>
                  <input type="text" class="form-control" name="fname" id="validationServer01" placeholder="First name" required>
              </div>
              <div class="col-6 ">
                <label for="validationServer02" class="form-label text-white">Last name</label>
                <input type="text" class="form-control " name="lname" id="validationServer02" placeholder="Last name" required>
              </div>
            </div>
            <div class="row">
            <div class="col-6">
                <label for="validationServer03" class="form-label text-white">Origin</label>
                <select class="form-control" name="origin">
                    <option value="cebu">cebu</option>
                    <option value="maynila">manila</option>
                    <option value="bohol">bohol</option>
                </select>
              </div>
              <div class="col-6">
                <label for="validationServer03" class="form-label text-white">Destination</label>
                <select class="form-control" name="destination">
                    <option value="Cebu">cebu</option>
                    <option value="Manila">manila</option>
                    <option value="Bohol">bohol</option>
                    <option value="Ormoc">ormoc</option>
                    <option value="Tagbilaran">Tagbilaran</option>
                    <option value="Palawan">Palawan</option>
                    <option value="Bataan">bataan</option>
                </select>
              </div>
            <!-- <div class="col-6">
                  <label for="validationServer03" class="form-label text-white">Origin</label>
                  <input type="text" class="form-control" name="fname" id="validationServer01" placeholder="Origin" required>
              </div> -->
              <!-- <div class="col-6">
                  <label for="validationServer04" class="form-label text-white">Destination</label>
                  <input type="text" class="form-control" name="fname" id="validationServer01" placeholder="Destination" required>
              </div> -->
            </div>
            <div class="row">
              <div class="col-6">
                <label for="validationServer05" class="form-label text-white">Departure Date</label>
                <input type="text" class="form-control " name="departured" id="validationServer03" aria-describedby="validationServer03Feedback" placeholder="Departure Date" required>
              </div>
              <div class="col-6">
                <label for="validationServer05" class="form-label text-white">Departure Time</label>
                <input type="text" class="form-control" name="departuret" id="validationServer05" aria-describedby="validationServer05Feedback" placeholder="Departure Time" required>
              </div>
            </div>
            
            <div class="mb-3 text-center my-5">
                        <input type="submit" name="submit3" class="btn btn-danger" value="Book Now">
            </div>
        </form>
  </div>
</div>
</div>
  <!-- Cebu Sched Start -->
  <section class="container" id="cebu">
  <table class="table text-center table-dark table-striped-columns">  
    <h3 class="table text-center">Cebu Schedule</h3>
    <tr>
        <th>Origin</th>
        <th>Destination</th>
        <th>Ferry Boat No.</th>
        <th>Capacity</th>
        <th>Departure Time</th>
        <th>Arrival Time</th>
    </tr>
    <tr>
        <td>Cebu</td>
        <td>Manila</td>
        <td>Ferry 101</td>
        <td>120 sets</td>
        <td>2:00 A.M.</td>
        <td>11:00 P.M.</td>
    </tr>
    <tr>
        <td>Cebu</td>
        <td>Ormoc</td>
        <td>Ferry 102</td>
        <td>120 sets</td>
        <td>5:00 A.M.</td>
        <td>8:00 A.M.</td>
    </tr>
    <tr>
        <td>Cebu</td>
        <td>Bohol</td>
        <td>Ferry 103</td>
        <td>100 sets</td>
        <td>7:00 A.M</td>
        <td>9:20 P.M</td>
    </tr>
    <tr>
        <td>Cebu</td>
        <td>Tagbilaran</td>
        <td>Ferry 104</td>
        <td>120 sets</td>
        <td>9:00 A.M</td>
        <td>11:20 P.M</td>
    </tr>
    <tr>
        <td>Cebu</td>
        <td>Manila</td>
        <td>Ferry 103</td>
        <td>120 sets</td>
        <td>2:00 P.M.</td>
        <td>11:00 A.M.</td>
    </tr>
    <tr>
        <td>Cebu</td>
        <td>Ormoc</td>
        <td>Ferry 104</td>
        <td>120 sets</td>
        <td>4:00 P.M.</td>
        <td>7:30 P.M.</td>
    </tr>
    <tr>
        <td>Cebu</td>
        <td>Bohol</td>
        <td>Ferry 102</td>
        <td>100 sets</td>
        <td>7:00 P.M</td>
        <td>9:20 P.M</td>
    </tr>
    <tr>
        <td>Cebu</td>
        <td>Tagbilaran</td>
        <td>Ferry 105</td>
        <td>120 sets</td>
        <td>9:00 P.M</td>
        <td>11:20 P.M</td>
    </tr>
  </table>
    <!-- Cebu Sched end -->

    <!-- Manila Sched Start -->
  <section class="container mb-5 my-5" id="manila">
  <table class="table text-center table-dark table-striped-columns">  
  <h3 class="table text-center">Manila Schedule</h3>
    <tr>
        <th>Origin</th>
        <th>Destination</th>
        <th>Ferry Boat No.</th>
        <th>Capacity</th>
        <th>Departure Time</th>
        <th>Arrival Time</th>
    </tr>
    <tr>
        <td>Manila</td>
        <td>Cebu</td>
        <td>Ferry 106</td>
        <td>120 sets</td>
        <td>2:00 A.M.</td>
        <td>11:00 P.M.</td>
    </tr>
    <tr>
        <td>Manila</td>
        <td>Palawan</td>
        <td>Ferry 105</td>
        <td>120 sets</td>
        <td>5:00 A.M.</td>
        <td>8:00 A.M.</td>
    </tr>
    <tr>
        <td>Manila</td>
        <td>Bataan</td>
        <td>Ferry 107</td>
        <td>100 sets</td>
        <td>7:00 A.M</td>
        <td>9:20 P.M</td>
    </tr>
    <tr>
        <td>Manila</td>
        <td>Puerto Princesa</td>
        <td>Ferry 108</td>
        <td>120 sets</td>
        <td>9:00 A.M</td>
        <td>11:20 P.M</td>
    </tr>
    <tr>
        <td>Manila</td>
        <td>Iloilo</td>
        <td>Ferry 105</td>
        <td>120 sets</td>
        <td>2:00 P.M.</td>
        <td>11:00 A.M.</td>
    </tr>
    <tr>
        <td>Manila</td>
        <td>Bacolod</td>
        <td>Ferry 106</td>
        <td>120 sets</td>
        <td>4:00 P.M.</td>
        <td>7:30 P.M.</td>
    </tr>
    <tr>
        <td>Manila</td>
        <td>Cebu</td>
        <td>Ferry 108</td>
        <td>100 sets</td>
        <td>7:00 P.M</td>
        <td>9:20 P.M</td>
    </tr>
    <tr>
        <td>Manila</td>
        <td>Palawan</td>
        <td>Ferry 106</td>
        <td>120 sets</td>
        <td>9:00 P.M</td>
        <td>11:20 P.M</td>
    </tr>
    <tr>
        <td>Manila</td>
        <td>Bataan</td>
        <td>Ferry 108</td>
        <td>100 sets</td>
        <td>7:00 A.M</td>
        <td>9:20 P.M</td>
    </tr>
    <tr>
        <td>Manila</td>
        <td>Puerto Princesa</td>
        <td>Ferry 105</td>
        <td>120 sets</td>
        <td>9:00 A.M</td>
        <td>11:20 P.M</td>
    </tr>
    <tr>
        <td>Manila</td>
        <td>Iloilo</td>
        <td>Ferry 109</td>
        <td>120 sets</td>
        <td>2:00 P.M.</td>
        <td>11:00 A.M.</td>
    </tr>
    <tr>
        <td>Manila</td>
        <td>Bacolod</td>
        <td>Ferry 106</td>
        <td>120 sets</td>
        <td>4:00 P.M.</td>
        <td>7:30 P.M.</td>
    </tr>
  </table>
    <!-- Manila Sched end -->
  </section>

<!-- Bohol Sched Start -->
  <section class="container" id="bohol">
  <table class="table text-center table-dark table-striped-columns">  
    <h3 class="table text-center">Bohol Schedule</h3>
    <tr>
        <th>Origin</th>
        <th>Destination</th>
        <th>Ferry Boat No.</th>
        <th>Capacity</th>
        <th>Departure Time</th>
        <th>Arrival Time</th>
    </tr>
    <tr>
        <td>Bohol</td>
        <td>Siquijor</td>
        <td>Ferry 101</td>
        <td>120 sets</td>
        <td>02:00 A.M.</td>
        <td>03:30 A.M.</td>
    </tr>
    <tr>
        <td>Bohol</td>
        <td>Cebu</td>
        <td>Ferry 102</td>
        <td>120 sets</td>
        <td>04:00 A.M.</td>
        <td>06:30 A.M.</td>
    </tr>
    <tr>
        <td>Bohol</td>
        <td>Dumaguete</td>
        <td>Ferry 103</td>
        <td>100 sets</td>
        <td>7:00 A.M</td>
        <td>9:20 A.M</td>
    </tr>
    <tr>
        <td>Bohol</td>
        <td>Tagbilaran</td>
        <td>Ferry 104</td>
        <td>120 sets</td>
        <td>9:00 A.M</td>
        <td>11:20 A.M</td>
    </tr>
    <tr>
        <td>Bohol</td>
        <td>Siquijor</td>
        <td>Ferry 101</td>
        <td>120 sets</td>
        <td>12:40 P.M.</td>
        <td>02:00 P.M.</td>
    </tr>
    <tr>
        <td>Bohol</td>
        <td>Cebu</td>
        <td>Ferry 102</td>
        <td>120 sets</td>
        <td>03:00 P.M.</td>
        <td>05:30 P.M.</td>
    </tr>
    <tr>
        <td>Bohol</td>
        <td>Dumaguete</td>
        <td>Ferry 103</td>
        <td>100 sets</td>
        <td>6:30 P.M</td>
        <td>8:20 P.M</td>
    </tr>
    <tr>
        <td>Bohol</td>
        <td>Tagbilaran</td>
        <td>Ferry 104</td>
        <td>120 sets</td>
        <td>9:00 P.M</td>
        <td>11:20 P.M</td>
    </tr>
  </table>
  <!-- Bohol Sched end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>