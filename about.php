<?php 
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/about.css?v=<?php echo time(); ?>">
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
 <div class="upper-main">
    <div class="text">
    <h3>For more then a decade for you with you!</h3>
    <p>
    Digital health, or digital healthcare, is a broad, multidisciplinary concept that includes concepts from an intersection between technology and healthcare

    </p>
  </div>
    <img src="images/group.jpg">
  </div>
  <div class="bottom-main">
  </div>
</div>
 <footer>
    <div class="line"></div>
<div class="footer">
<div class="f-left">
<p class="f-text">Digital health, or digital healthcare, is a broad, multidisciplinary concept that includes concepts from an intersection between technology and healthcare</p>
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
<p>Contact</p>
<p>+38344555666</p>
<p>health@healthcare.com</p>
<p>Copyright @ 2021 GM. </p>
<p>All rights reserved. </p>
</div>
</div>
</div>
</footer>
<script src="js/menu.js"></script>
</body>
</html>