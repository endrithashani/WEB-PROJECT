<header>
<h1>E-HEALTHCARE</h1>
       <ul>
           <li><a href="index.php">Home</a></li>
           <li><a href="about.php">About Us</a></li>
           <li><a href="contact.php">Contact Us</a></li>
       </ul>
       <div class="user"><?php echo ($_SESSION['email']);?></div>
       <a href="logout.php" class="login">Log out</a>
   </header>
   <div class="topnav">
   <div class="topnav-logo"><h1>E-HEALTHCARE</h1></div>

  <!-- Navigation links (hidden by default) -->
  <div id="myLinks">
	 <a href="index.php">Home</a>
	 <a href="news.php">News</a>
	 <a href="about.php">About Us</a>
	 <a href="contact.php">Contact Us</a>
	 <a href="logout.php" >Log Out</a>
  </div>
  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div> 