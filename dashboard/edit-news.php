<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit-news.css?v=<?php echo time(); ?>">
    <title>The News</title>
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
        <?php
    include_once('../models/db_con.php');
    $errors=[ 'title'=> '', 'description'=>'','image'=>''];
    $id=$_POST['id'];
    $query="SELECT * FROM news WHERE id='$id'";
    $result=mysqli_query($conn , $query);
    if (isset($_POST['save'])) {
        $id=$_POST['id'];
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
          $sql = "UPDATE news SET title='$title',description='$image_text',image='$image' WHERE id='$id'";
          header('Location:edit.php');
          if(mysqli_query($conn,$sql)){
           }else{
          //errors
           echo 'query error' . mysqli_error($conn);
           }
        }
    }
    foreach($result as $row)
    {
    ?>
    <form id="form"  method="post" action="" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id'];?>">
            <label>Title</label>
            <input type="text" name="title" value="<?php echo $row['title'];?>" placeholder="Title">
            <div class="error"><?php echo ($errors['title'])?></div>
            <label>Description</label>
            <input class="description" name="description" value="<?php echo $row['description'];?>" placeholder="Description">
            <div class="error"><?php echo ($errors['description'])?></div>
            <label>Upload Image</label>
            <input type="file" name="image" id="image" value="<?php echo $row['image'];?>"> 
            <div class="error"><?php echo ($errors['image'])?></div>
            <div class="buttons">
            <button id="cancel" name="cancel"><a href="edit.php">CANCEL</a></button>
            <button id="add" name="save" value="upload">SAVE</button>
            </div>
    </form>
    
    <?php
    }
    ?>
    </div>
    </div>
</body>
</html>