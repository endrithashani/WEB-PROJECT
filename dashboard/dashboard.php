<?php
session_start();
if($_SESSION['email'] != 'endrithashani@gmail.com'){
    header('Location:../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="dashboard.css">
    <title>Document</title>
</head>
<header>
    <div class="logo">
      <img src="../images/logo.png" >
    </div>
    <div class="right">
      <p>ADMIN PANEL</p>
  </div>
    <div class="header-left">
        <div class="user"><?php echo $_SESSION['email'];?></div>
         <a href="../logout.php">Logout</a>
  </div>
  </header>
<body>
    <div class="container">
        <div class="main">
            <a href="add-news.php">Add News</a>
            <a href="edit-news.php">Edit News</a>
            <a href="contact.php">Contact Us</a>
            <a href="users.php">Users</a>
        </div>
        <div class="panel">
            <h1>WELCOME BACK</h1>
        </div>
    </div>
</body>
</html>