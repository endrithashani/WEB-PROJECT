<?php
session_start();
include('../models/db_con.php');
$query="SELECT * FROM news";
$result=mysqli_query($conn , $query);
if(!isset($_SESSION['email'])){
    header('Location:./index.php');
}
?>
<?php
include('../models/db_con.php');
$success=['success'=>''];
$errors=['error'=>''];
if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $query = "DELETE FROM news WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);
    if($query_run){
    $success['success']='The news was successfully deleted!!';
    }else{
    $errors['error']='The news was not successfully deleted!!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="edit.css?v=<?php echo time(); ?>">
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
            <a href="">Edit News</a>
            <a href="contact.php">Contact Us</a>
            <a href="users.php">Users</a>
        </div>
        <div class="panel">
        <table  class="content-table" >
    <tr><th colspan="3">NEWS </th></tr>
    <tr><th colspan="5"><div class="success"><?php echo ($success['success'])?></div><th></tr>
    <tr><th ><div class="error"><?php echo ($errors['error'])?></div><th></tr>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
</tr>
<?php
    while($rows=mysqli_fetch_assoc($result))
    {
?>
    <tr>
        <td><?php echo $rows['id']; ?></td>
        <td><?php echo $rows['title']; ?></td>
        <td><?php echo $rows['description']; ?></td>
        <td>
         <img src="<?php echo "../images/".$rows['image'];?>" width="50px" height="50px">
        </td>
      <form action="edit-news.php"  method="POST">
        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>" >
        <td><input type="submit" name="edit" class="edit" value="EDIT"></td>
    </form>
    <form action=""  method="POST">
        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>" >
      <td><input type="submit" name="delete" class="del" value="DELETE"></td>
    </form>
    </tr>
    <?php
    }
    ?>
</table>
        </div>
    </div>
</body>
</html>