<?php
session_start();
require('./models/db_con.php');
$errors=[ 'email'=> '', 'password'=>'','exists'=>''];
if(isset($_POST['login'])){
  $email=$_POST['email'];
  $password=$_POST['password'];
  if(empty($email)){
    $errors['email'] ='Email is required!';
  }else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Enter a valid email!';
      }
    }
    if(empty($password)){
      $errors['password'] = 'Password is required!';
    }else{
    $query=mysqli_query($conn,"SELECT * FROM users where email='$email'");
    $passCheck=mysqli_query($conn,"SELECT * FROM users where password='$password'");
    $queryy = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1");
    if(mysqli_num_rows($query)===0){
    $errors['exists'] ='Email doesn\'t exist!';
    }else{
    if(mysqli_num_rows($passCheck)===0){
      $errors['exists'] ='Password incorrect!';
    } 
  }   
    if (mysqli_num_rows($queryy) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($queryy);
			if ($logged_in_user['type'] == 1) {
				$_SESSION['email'] = $email;
				header('location: ./dashboard/dashboard.php');		  
			}else{
        $_SESSION['email'] = $email;
				header('location: index.php');
			}
    }
    }
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css?v">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 
if(isset($_SESSION['email'])){
    require_once("header-login.php");
}else{  
    require_once("header.php");
}
?>
 <div class="container">
  <form id="form" name="Formm" method="post" action="" onsubmit="emptyValidation()">
    <p class="login-text">Login</p>
    <div class="error"><?php echo ($errors['exists'])?></div>
    <div class="form-control">
      <input type="text" placeholder="Email" id="email" name="email">
      <div class="error"><?php echo ($errors['email'])?></div>
    </div>
    <div class="form-control">
      <input type="password" placeholder="Password" id="password" name="password">
      <div class="error"><?php echo ($errors['password'])?></div>
    </div>
    <button type="submit" name="login" >Login</button>
    <p >Don't have an account? <a href="register.php">Register here</a>.</p>
    </form>
</div>
<script src="js/login.js"></script>
<script src="js/menu.js"></script>
</body>
</html>