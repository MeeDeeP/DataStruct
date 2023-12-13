<?php
session_start();
require 'dbcon.php';


// log in and register starts here

if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST["submit"])){
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
    $usertype = mysqli_real_escape_string($con, $_POST['usertype']);
    $duplicate = mysqli_query($con, "SELECT * FROM users WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate) > 0){
        $_SESSION['message'] = "Username or email Already Taken";
        header("Location: create-acc.php");
        exit(0);
    }
    else{
        if($password == $confirmpassword){
        $query = "INSERT INTO users VALUES('','$name','$username','$email','$password','$usertype')";
        mysqli_query($con, $query);
        $_SESSION['message'] = "Successfully";
        header("Location: index.php");
        exit(0);
        }
            else{
                $_SESSION['message'] = "failed";
        }
    }
}

if(isset($_POST["submit2"]))
{
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);


	$sql="select * from users where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($con,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{		
		header("location:users.php");
	}
	elseif($row["usertype"]=="admin")
	{
		header("location:dash.php");
	}else{
        $_SESSION['message'] = "Don't have an account";
        header("location:index.php");
    }

}
// log in and register ends here

// 1st year enrollment starts here
if(isset($_POST['delete_student1']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student1']);
    $query = "DELETE FROM students WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: 1year.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: 1year.php");
        exit(0);
    }
}

if(isset($_POST['update1']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $bdate = mysqli_real_escape_string($con, $_POST['bdate']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $query = "UPDATE students SET name='$name', bdate='$bdate',email='$email', gender='$gender', phone='$phone' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: rtable.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Updated";
        header("Location: rtable.php");
        exit(0);
    }

}


if(isset($_POST['save_student1']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $bdate = mysqli_real_escape_string($con, $_POST['bdate']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $image = mysqli_real_escape_string($con, $_POST['image']);
    $query = "INSERT INTO students (name,bdate,email,gender,phone,image) VALUES ('$name','$bdate','$email','$gender','$phone','$image')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Successfully";
        header("Location: users.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Failed";
        header("Location: enroll.php");
        exit(0);
    }
}
//1st year enrollment ends here


// 2nd year enrollment starts here
if(isset($_POST['delete_student2']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student2']);
    $query = "DELETE FROM students1 WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: 2year.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: 2year.php");
        exit(0);
    }
}

if(isset($_POST['update2']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $bdate = mysqli_real_escape_string($con, $_POST['bdate']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $query = "UPDATE students1 SET name='$name', bdate='$bdate',email='$email', gender='$gender', phone='$phone' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: 2year.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Updated";
        header("Location: 2year.php");
        exit(0);
    }

}


if(isset($_POST['save_student2']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $bdate = mysqli_real_escape_string($con, $_POST['bdate']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $query = "INSERT INTO students1 (name,bdate,email,gender,phone) VALUES ('$name','$bdate','$email','$gender','$phone')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Successfully";
        header("Location: users.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Failed";
        header("Location: enroll.php");
        exit(0);
    }
}
//2nd year enrollment ends here


// 3rd year enrollment starts here
if(isset($_POST['delete_student3']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student3']);
    $query = "DELETE FROM students2 WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: 3year.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: 3year.php");
        exit(0);
    }
}

if(isset($_POST['update3']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $bdate = mysqli_real_escape_string($con, $_POST['bdate']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $query = "UPDATE students2 SET name='$name', bdate='$bdate',email='$email', gender='$gender', phone='$phone' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: rtable.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Updated";
        header("Location: rtable.php");
        exit(0);
    }

}


if(isset($_POST['save_student3']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $bdate = mysqli_real_escape_string($con, $_POST['bdate']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $query = "INSERT INTO students2 (name,bdate,email,gender,phone) VALUES ('$name','$bdate','$email','$gender','$phone')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Successfully";
        header("Location: users.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Failed";
        header("Location: enroll.php");
        exit(0);
    }
}
//3rd year enrollment ends here

// 4th year enrollment starts here
if(isset($_POST['delete_student4']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student4']);
    $query = "DELETE FROM students3 WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Deleted Successfully";
        header("Location: 4year.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Deleted";
        header("Location: 4year.php");
        exit(0);
    }
}

if(isset($_POST['update4']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);
    
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $bdate = mysqli_real_escape_string($con, $_POST['bdate']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $query = "UPDATE students3 SET name='$name', bdate='$bdate',email='$email', gender='$gender', phone='$phone' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: 4year.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Updated";
        header("Location: 4year.php");
        exit(0);
    }

}


if(isset($_POST['save_student4']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $bdate = mysqli_real_escape_string($con, $_POST['bdate']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $query = "INSERT INTO students3 (name,bdate,email,gender,phone) VALUES ('$name','$bdate','$email','$gender','$phone')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Successfully";
        header("Location: users.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Failed";
        header("Location: enroll.php");
        exit(0);
    }
}
//4th year enrollment ends here
?>
