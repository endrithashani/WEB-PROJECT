<?php
    session_start();
    require('./models/db_con.php');
    $success=['success'=>''];
    $errors=['emri'=>'' , 'email'=> '', 'mesazhi'=>''];
    if(isset($_POST['submit'])){
        $emri=$_POST['emri'];
        $email=$_POST['email'];
        $mesazhi=$_POST['mesazhi'];
    if(empty($emri)){
        $errors['emri'] ='Name is required!';
    }else{
        if(!preg_match('/^[a-zA-Z]+$/', $emri)){
            $errors['emri'] ='Name must contain only letters';
        }
    }
    if(empty($mesazhi)){
        $errors['mesazhi'] ='Message is required!';
    }
    if(empty($email)){
        $errors['email'] ='Email is required!';
    }else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['email'] = 'Enter a valid email';
        }
    }if(!array_filter($errors)){
        $success['success']='Thank you for your message!!';
        $sql = ("INSERT INTO contact_us (emri,  email, mesazh) VALUES ('{$emri}',  '{$email}', '{$mesazhi}')");
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
    <link rel="stylesheet" href="./css/contact.css?v=<?php echo time(); ?>">
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
 <div id="container">
    <form id="contact" name="Form" method="post" action=""> 
        <h3>CONTACT US</h3>
        <div class="success"><?php echo ($success['success']);?></div>
        <label for="">Name</label><br>
        <fieldset>
            <input placeholder="Your Name" type="text" id="inputat" name="emri" ><br>
            <div class="error"><?php echo ($errors['emri']); ?></div>
        </fieldset>
        <label for="">EMAIL</label><br>
        <fieldset>
        <input placeholder="Your email" type="text" id="inputat" name="email"><br>
        <div class="error"><?php echo ($errors['email']); ?></div>
        </fieldset>
        <label for="">YOUR MESSAGE</label><br>
        <fieldset>
            <input placeholder="Your message" type="textarea" name="mesazhi" id="mesazhi"><br>
            <div class="error"><?php echo ($errors['mesazhi']); ?></div>
        </fieldset>
        <h5><i>please provide detailed Information</i></h3>
            <fieldset>
                <button type="submit" name="submit">Submit</button>
            </fieldset>
    </form>
</div>
 
 <footer>
    <div class="line"></div>
<div class="footer">
<div class="f-left">
<a href=""><img src="images/logo.png"></a>
<p class="f-text">TheNews.com është portal i pavarur i lajmeve në gjuhën shqipe i themeluar në vitin 2006, me bazë kryesore në Prishtinë dhe seli të dytë në Maqedoni.</p>
<div class="logot">
<div class="logo1">
    <a href="#"><p class="l-text">in</p></a>
</div>
    <div class="logo2">
        <a href="#"><img src="images/twitter.png" class="twitter"></a>
</div>
    <div class="logo3">
        <a href="#"><p class="ff-text">f</p></a>
</div>
</div>
</div>
<div class="line-footer"></div>
<div class="ff-right">
<p>NEWSLETTER</p>
<form>
<input type="email" name="" class="search" placeholder="E-mail">
<img src="images/email.png" class="email-img">
</form>
<p>Copyright @ 2021 GM. </p>
<p>All rights reserved. </p>
</div>
</div>
</div>
</footer>
<script src="js/contact.js"></script>
<script src="js/menu.js"></script>
</body>
</html>