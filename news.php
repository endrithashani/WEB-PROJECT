<?php
include_once('models/db_con.php');
session_start();
$query="SELECT * FROM news";
$result=mysqli_query($conn , $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The News</title>
    <link rel="stylesheet" href="./css/news.css?v=<?php echo time(); ?>">
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
 <div class="news">
 <div class="lajmet">
 <?php
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<h3>".$row['title']."</h3>";
        echo "<img src='images/".$row['image']."' >";
        echo "<p>".$row['description']."</p>";
    }
    ?>
    </div>
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