<?php

$host='localhost';
$user='root';
$DBpassword='';
$db='registration';

$con = mysqli_connect($host,$user,$DBpassword);
mysqli_select_db($con,$db);

session_start();

if(isset($_POST['email'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $encryptedPass=md5($password);
    $name=$_POST['name'];
    $sql="INSERT INTO users (email,name,password) VALUES ('".$email."','".$name."','".$encryptedPass."')";

    if(mysqli_query($con, $sql)){
        $_SESSION['name']=$name;
        header('location: Welcome.php');
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
}

?>



<!DOCTYPE html>
<html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Register</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">


</head>
<body style="background-image:url('bg.jpg') ; background-size: 100% ;">
<div class="login-form">
    <form action="#" method="POST">
        <h2 class="text-center">Sign Up</h2>       
        <div class="form-group">
            <input type="text" name='email' id="email" class="form-control" placeholder="e-mail" >
        </div>
        <div class="form-group">
            <input type="text" name='name' id="name" class="form-control" placeholder="name" >
        </div>
        <div class="form-group">
            <input type="password" name='password' id="pass" class="form-control" placeholder="password">
        </div>
        <div class="form-group">
            <input type="password" name='passwordConfirm' id="passConf" class="form-control" placeholder="confirm password" >
        </div>
        <div class="form-group">
            <button type="submit" id="btn" class="btn btn-primary btn-block">Sign Up</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label">Already have an account ?</label>
            <a href="Login.php" class="float-right">LOG IN NOW</a>
        </div>        
    </form>
</div>

<script src="RegisterValidation.js" type="text/javascript"></script>

</body>
</html>