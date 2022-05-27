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
    <h3>Për më shumë se një dekadë me ju.</h3>
    <p>
      TheNews.com është portal i pavarur i lajmeve në gjuhën shqipe i themeluar në vitin 2006, me bazë kryesore në Prishtinë dhe seli të dytë në Maqedoni. TheNews për më shumë se një dekadë ka arritur të ruajë paanshmërinë dhe të jetë burim i lajmeve me kredibilitetin më të lartë në të gjithë trevat shqipfolëse.
  
  Misioni kryesor i Telegrafit është informimi i saktë i qytetarëve në kohë reale, duke ruajtur fuqishëm epitetin e medias së pavarur dhe pozicionin si lider në fushën e medias online.
    </p>
  </div>
    <img src="images/group.jpg">
  </div>
  <div class="bottom-main">
    <h3>Ekipi i TheNews</h3>
  <p>Puna e shkëlqyer dhe korrekte e ekipit tonë e ka renditur TheNews si burimin kryesor të informimit në vend dhe rajon. Falë përkushtimit dhe bashkëpunimit të ngushtë në mes të punonjësve në departamente të ndryshme, në Telegrafi numërohen miliona shfletime të lajmeve të lexuara çdo muaj.</p>
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
<p>Contact</p>
<p>+38344555666</p>
<p>news@thenews.com</p>
<p>Copyright @ 2021 GM. </p>
<p>All rights reserved. </p>
</div>
</div>
</div>
</footer>
<script src="js/menu.js"></script>
</body>
</html>