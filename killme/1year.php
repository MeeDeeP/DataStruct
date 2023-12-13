<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">

<head>
    <title>1st year</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/hello.css">
</head>

<body>
<?php include('message.php'); ?>
<section class="bg-secondary p-5">
        <p class="pb-2 fs-1 text-center">1st year</p>
    <div class="card">
            <div class="card-header">
                <h4>
                    <a href="dash.php" class="btn btn-danger float-end">BACK</a>
                </h4>
            </div>
        <div class="table-responsive" id="no-more-tables">
            <table class="table bg-white">
                <thead class="bg-dark text-light">
                    <tr>
                        <th>Name</th>
                        <th>Birthday</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>file</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                                    <?php 
                                    $query = "SELECT * FROM students";
                                    $query_run = mysqli_query($con, $query);
                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student) 
                                        {
                                            $bdate = new DateTime($student['bdate']);
                                            $today = new DateTime(date("Y-m-d"));
                                            $diff = $today->diff($bdate);
                                            $mark = $diff->y;
                                            ?>
                                            <tr>
                                                <td data-title="Name"><?= $student['name']; ?></td>
                                                <td data-title="Birthday"><?= $student['bdate']; ?></td>
                                                <td data-title="Age"><?php echo $mark; ?></td>
                                                <td data-title="Gender"><?= $student['gender']; ?></td>
                                                <td data-title="Email"><?= $student['email']; ?></td>
                                                <td data-title="Phone"><?= $student['phone']; ?></td>
                                                <td><a href="image1.php?id=<?= $student['id']; ?>" class="btn btn-primary btn-sm"><?= $student['image']; ?></a></td>
                                                <!-- <td data-title="file"><a href="image1.php"><?= $student['image']; ?></a></td> -->
                                                <!-- <td data-title="file">
                                                    <img  src="img/<?=$student['image']?>" height="50">
                                                </td> -->
                                                <td class="text-center">
                                                    <a href="View1.php?id=<?= $student['id']; ?>" class="btn btn-primary btn-sm"><i class="bi bi-eye"></i></a>
                                                    <a href="Edit1.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student1" value="<?=$student['id'];?>" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>