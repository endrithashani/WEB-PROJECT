<?php
include_once('../models/db_con.php');
session_start();
$query="SELECT * FROM contact_us";
$result=mysqli_query($conn , $query);
?>
<?php
include('../models/db_con.php');
$success=['success'=>''];
$errors=['error'=>''];
if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $queryy = "DELETE FROM contact_us WHERE id='$id'";
    $query_run = mysqli_query($conn, $queryy);
    if($query_run){
    $success['success']='The message was successfully deleted!!';
    }else{
    $errors['error']='The message was not successfully deleted!!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="contact.css?v=<?php echo time(); ?>">
    <title>The News</title>
</head>
<body>
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
                <a href="edit.php">Edit News</a>
                <a href="contact.php">Contact Us</a>
                <a href="users.php">Users</a>
            </div>
            <div class="panel">
            <table  class="content-table" >
    <tr><th colspan="3">Contact US </th></tr>
    <tr><th colspan="4"><div class="success"><?php echo ($success['success'])?></div><th></tr>
    <tr><th><div class="error"><?php echo ($errors['error'])?></div><th></tr>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>Email</th>
        <th>Message</th>
        <th>Delete</th>
</tr>
<?php
    while($rows=mysqli_fetch_assoc($result))
    {
?>
    <tr>
        <td><?php echo $rows['id']; ?></td>
        <td><?php echo $rows['emri']; ?></td>
        <td><?php echo $rows['email']; ?></td>
        <td><?php echo $rows['mesazh']; ?></td>
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