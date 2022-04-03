<?php
  require('./models/db_con.php');
  session_start();
  $success=['success'=>''];
  $errors=['emri'=>'' ,'mbiemri'=>'' ,  'email'=> '', 'password'=>'','c_password'=>'','cc_password'=>'','exists'=>''];
  if(isset($_POST['reg_user'])){
    $emri=$_POST['emri'];
    $mbiemri=$_POST['mbiemri'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $c_password=$_POST['password2'];
    $query=mysqli_query($conn,"SELECT * FROM users where email='$email'");
    if(mysqli_num_rows($query)>0){
      $errors['exists'] ='Email is already in use!';
    }
  if(empty($emri)){
    $errors['emri'] ='Name is required!';
  }else{
    if(!preg_match('/^[a-zA-Z]/', $emri)){
        $errors['emri'] ='Name must contain only letters';
    }
  }
  if(empty($mbiemri)){
    $errors['mbiemri'] ='Last Name is required!';
  }else{
    if(!preg_match('/^[a-zA-Z]/', $mbiemri)){
        $errors['mbiemri'] ='Lasy Name must contain only letters';
    }
  }
  if(empty($password)){
    $errors['password'] ='Password is required!';
  }
  if(empty($c_password)){
    $errors['c_password'] ='Confirm Password is required!';
  }
  if($password!=$c_password){
    $errors['cc_password'] ='Password and Confirm Password should be the same!!';
  }
  if(empty($email)){
    $errors['email'] ='Email is required!';
  }else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Enter a valid email';
    }
  }if(!array_filter($errors)){
    $success['success']='User registered successfully';
    $sql = ("INSERT INTO users (emri, mbiemri, email, password, password2) VALUES ('{$emri}',  '{$mbiemri}', '{$email}','{$password}','{$c_password}')");
    if(mysqli_query($conn,$sql)){

     }else{
    //errors
     echo 'query error' . mysqli_error($conn);
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
    <title>The News</title>
    <link rel="stylesheet" href="./css/register.css?v=<?php echo time(); ?>">
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
        <form id="Form" action="" method="post">
          <p class="login-text">Register</p>
              <div class="success"><?php echo ($success['success']); ?></div>
              <div class="error"><?php echo ($errors['exists']); ?></div>
              <div class="error"><?php echo ($errors['cc_password']); ?></div>
          <div class="form-control">
                <input type="text" id="emri" name="emri" placeholder="First name">
                <div class="error"><?php echo ($errors['emri']); ?></div>
              </div>
                <div class="form-control">
                <input type="text" id="mbiemri" name="mbiemri" placeholder="Last name">
                <div class="error"><?php echo ($errors['mbiemri']); ?></div>
      
              </div>
          <div class="form-control">
            <input type="text" id="email" name="email" placeholder="Email" >
            <div class="error"><?php echo ($errors['email']); ?></div>
      
          </div>
          <div class="form-control">
            <input type="password" id="password" name="password" placeholder="Password" >
            <div class="error"><?php echo ($errors['password']); ?></div>
      
          </div>
          <div class="form-control">
            <input type="password" id="password2" name="password2" placeholder="Confirm Password" >
            <div class="error"><?php echo ($errors['c_password']); ?></div>
          </div>
          <button type="submit" name="reg_user" onclick="emptyValidation()">Register</button>
          <p >Have an account? <a href="login.php">Login here</a>.</p>
        </form>
        
      </div>
<script src="js/register.js"></script>
<script src="js/menu.js"></script>
</body>
</html>