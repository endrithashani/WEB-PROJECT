
<?php
  // Create database connection
  include("../models/db_con.php");
  session_start();
  // Initialize message variable


  // If upload button is clicked ...
  $success=['success'=>''];
  $errors=[ 'title'=> '', 'description'=>'','image'=>''];
  if (isset($_POST['add'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($conn, $_POST['description']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);

  	// image file directory
  	$target = "../images/".basename($image);

    if(empty($title)){
        $errors['title']='Title is required!';
    }
    if(empty($image_text)){
        $errors['description']='Description is required!';
    }
    if(empty($image)){
        $errors['image']='Image is required!';
    }
    if(!array_filter($errors)){
        $success['success']= 'The news was added successfully!!';
        $sql = "INSERT INTO news (title,description,image) VALUES ('$title','$image_text','$image')";
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
    <link rel="stylesheet" href="add-news.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
          <img src="../images/logo.png">
        </div>
        <div class="right">
          <p>ADMIN PANEL</p>
      </div>
        <div class="header-left">
            <div class="user"><?php echo $_SESSION['email']; ?></div>
             <a href="../logout.php">Logout</a>
      </div>
      </header>
    <div class="container">
        <div class="main">
            <a href="add-news.php">Add News</a>
            <a href="edit.php">Edit News</a>
            <a href="contact.php">Contact Us</a>
            <a href="users.php">Users</a>
        </div>
    <div class="panel">
        <form id="form"  method="post" action="" enctype="multipart/form-data">
            <div class="success"><?php echo ($success['success'])?></div>
            <label>Title</label>
            <input type="text" name="title" placeholder="Title">
            <div class="error"><?php echo ($errors['title'])?></div>
            <label>Description</label>
            <textarea name="description" placeholder="Description"></textarea>
            <div class="error"><?php echo ($errors['description'])?></div>
            <label>Upload Image</label>
            <input type="file" name="image" id="image">
            <div class="error"><?php echo ($errors['image'])?></div>
            <button id="add" name="add" value="upload">ADD NEWS</button>
        </form>
    </div>
    </div>
</body>
</html>