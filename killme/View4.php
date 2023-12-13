<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Student View 4th year</title>
</head>
<body>
<section class="vh-100 gradient-custom bg-secondary">
        <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                <div class="card-header text-black text-center bg bg-secondary ">
                        <h4>Update 
                            <a href="4year.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM students3 WHERE id='$student_id' ";
                            $query_run = mysqli_query($con, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                $bdate = new DateTime($student['bdate']);
                                            $today = new DateTime(date("Y-m-d"));
                                            $diff = $today->diff($bdate);
                                            $mark = $diff->y;
                                ?>
                                    <div class="row">
                                    <div class="col-6 mb-3">
                                        <label>Name</label>
                                        <p class="form-control">
                                        <?=$student['name'];?>
                                        </p>
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
                                            <?=$student['email'];?>
                                        </p>
                                    </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label>Birthdate</label>
                                            <p class="form-control">
                                                <?=$student['bdate'];?>
                                            </p>
                                        </div>
                                            <div class="col-6 mb-3">
                                                <label>phone</label>
                                                <p class="form-control">
                                                    <?=$student['phone'];?>
                                                </p>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6 mb-3">
                                            <label>Age</label>
                                            <p class="form-control">
                                                <?php echo $mark; ?>
                                            </p>
                                        </div>
                                        <div class="col-6 mb-3">
                                                <label>gender</label>
                                                <p class="form-control">
                                                    <?=$student['gender'];?>
                                                </p>
                                        </div>
                                    </div>
                                    <div class="mb-3 float-end">
                                    <a href="Edit4.php?id=<?= $student['id']; ?>"> <button type="submit" name="update4" class="btn btn-primary">
                                            Update
                                    </button></a>
                                    </div>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>