<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The News</title>
    <link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>">
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

    <!-- SlideShow  -->
    <div class="slider">
		<!-- fade css -->
		<div class="myslide fade">
			<div class="txt">
			</div>
			<img src="images/ehe.jpg">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
			</div>
			<img src="images/ehealth.jpg">
		</div>
		
		<div class="myslide fade">
			<div class="txt">
			</div>
			<img src="images/cover_ehealth.png">
		</div>
		
	
		<!-- /fade css -->
		
		<!-- onclick js -->
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  		<a class="next" onclick="plusSlides(1)">&#10095;</a>
		
		<div class="dotsbox" style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span>
			<span class="dot" onclick="currentSlide(2)"></span>
			<span class="dot" onclick="currentSlide(3)"></span>
		</div>
		<!-- /onclick js -->
	</div>
	<!-- SlideShow -->



    <div class="lajme">
        <div class="lajmi">
            <img src="images/covid.jpg">
            <a href="">E-Healthcare Helps!</a>
        </div>
        <div class="lajmi">
            <img src="images/fotooo.jpg">
            <a href="">E-Healthcare is faster.</a>
        </div>
        <div class="lajmi">
            <img src="images/growth.jpg">
            <a href="">E-Healthcare Growth</a>
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
<script src="js/slider.js"></script>
</body>
</html>