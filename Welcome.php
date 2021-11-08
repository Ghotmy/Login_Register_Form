<?php   session_start(); ?>

<!DOCTYPE html>
<html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Welcome</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">


</head>
<body style="background-image:url('bg.jpg') ; background-size: 100% ;">
<div class="login-form">
    <form action="Login.php" method="POST">
        <h2 class="text-center">Welcome</h2>      
        <h2 class="text-center">
                <?php echo $_SESSION['name']; ?>
                </h2> 
        <div class="form-group">
            <button type="submit" id="btn" class="btn btn-primary btn-block">Log out</button>
        </div>
    </form>
</div>
<?php  session_destroy();?>
</body>
</html>