<?php
session_start();
require 'dbcon.php';

// delete start
if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);
    
    $query = "DELETE FROM allin WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        header("Location: booking.php");
        exit(0);
    }
    else
    {
        header("Location: booking.php");
        exit(0);
    }
}
// delete end

// account registration starts here
if(!empty($_SESSION["id"])){
    header("Location: index.php");
}
if(isset($_POST['submit']))
{
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $zip = mysqli_real_escape_string($con, $_POST['zip']);
    $usertype = mysqli_real_escape_string($con, $_POST['usertype']);
    $query = "INSERT INTO user (fname,lname,email,password,city,location,zip,usertype) VALUES ('$fname','$lname','$email','$password','$city','$location','$zip','$usertype')";
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['status'] = "Successfully Registered";
        $_SESSION['status_text'] = "press ok to login";
        $_SESSION['status_code'] = 'success';
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['status'] = "Not registered";
        $_SESSION['status_code'] = 'error';
        header("Location: registration.php");
        exit(0);
    }
}
// account registration ends here


// account login starts here
if(isset($_POST["submit2"]))
{
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);


	$sql="select * from user where email='".$email."' AND password='".$password."' ";

	$result=mysqli_query($con,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{		
		header("location:main.php");
	}
	elseif($row["usertype"]=="admin")
	{
		header("location:admin.php");
	}

}
// account login ends here

// origin start
if(isset($_POST["submit3"]))
{
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $origin = mysqli_real_escape_string($con, $_POST['origin']);
    $destination = mysqli_real_escape_string($con, $_POST['destination']);
    $departured = mysqli_real_escape_string($con, $_POST['departured']);
    $departuret = mysqli_real_escape_string($con, $_POST['departuret']);
    $query_running = "INSERT INTO allin (fname,lname,origin,destination,departured,departuret) VALUES ('$fname','$lname','$origin','$destination','$departured','$departuret')";
    $query_running = mysqli_query($con, $query_running);
	if($origin == "cebu")
	{
        $query = "INSERT INTO cebu (fname,lname,origin,destination,departured,departuret) VALUES ('$fname','$lname','$origin','$destination','$departured','$departuret')" ;
        $query_run = mysqli_query($con, $query);
        $_SESSION['status'] = "Request Sent";
        $_SESSION['status_text'] = "please wait for our confirmation via email address";
        $_SESSION['status_code'] = 'success';
		header("location:main.php");
        exit(0);
	}
	elseif($origin =="manila")
	{
        $query = "INSERT INTO manila (fname,lname,origin,destination,departured,departuret) VALUES ('$fname','$lname','$origin','$destination','$departured','$departuret')" ;
        $query_run = mysqli_query($con, $query);
        $_SESSION['status'] = "Request Sent";
        $_SESSION['status_text'] = "please wait for our confirmation via email address";
        $_SESSION['status_code'] = 'success';
		header("location:main.php");
        exit(0);
	}elseif($origin=="bohol")
    {
        $query = "INSERT INTO bohol (fname,lname,origin,destination,departured,departuret) VALUES ('$fname','$lname','$origin','$destination','$departured','$departuret')" ;
        $query_run = mysqli_query($con, $query);
        $_SESSION['status'] = "Request Sent";
        $_SESSION['status_text'] = "please wait for our confirmation via email address";
        $_SESSION['status_code'] = 'success';
		header("location:main.php");
        exit(0);
    }else{
        header("location:main.php");
    }

}
// origin end


?>