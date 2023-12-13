<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="/bootstrap-icons/bootstrap-icons.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Enrollment 4th year</title>
</head>
<body>
    <div class="container mt-5">
        <?php include('message.php'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create
                            <a href="users.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>phone number</label>
                                <input type="number" name="phone" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-6 mb-3">
                                    <label>Birthday</label>
                                    <input type="date" name="bdate" class="form-control">
                                </div>
                                <div class="col-3 mb-3 p-4">
                                    <div class="card" style="width: 5rem;">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item bg-primary">
                                                <i class="bi bi-gender-male">
                                                    <input type="radio"  name="gender" id="male" value="Male" Required>
                                            </i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-3 mb-3 p-4">
                                    <div class="card" style="width: 5rem;">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item bg-danger">
                                                <i class="bi bi-gender-female">
                                                    <input type="radio" name="gender" id="female" value="Female" Required>
                                            </i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 float-end">
                                <button type="submit" name="save_student4" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
