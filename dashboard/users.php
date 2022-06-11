<?php
session_start();
include_once('../models/db_con.php');
if($_SESSION['email'] != 'drenkadriu@gmail.com'){
    header('Location:../index.php');
    exit();
}
$query="SELECT * FROM users";
$result=mysqli_query($conn , $query);
?>
<?php
include('../models/db_con.php');
$success=['success'=>''];
$errors=['error'=>''];
if(isset($_POST['delete'])){
    $id=$_POST['id'];
    $queryy = "DELETE FROM users WHERE id='$id'";
    $query_run = mysqli_query($conn, $queryy);
    if($query_run){
    $success['success']='The user was successfully deleted!!';
    }else{
    $errors['error']='The user was not successfully deleted!!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  rel="stylesheet" href="users.css?v=<?php echo time(); ?>">
    <title>E-HEALTHCARE</title>
</head>
<body>
    <header>
        <div class="logo">
          <h1>E-HEALTHCARE</div>
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
            <table  class="content-table" >
    <tr><th colspan="3">USERS</th></tr>
    <tr><th colspan="5"><div class="success"><?php echo ($success['success'])?></div><th></tr>
    <tr><th ><div class="error"><?php echo ($errors['error'])?></div><th></tr>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>C_Password</th>
        <th>Type</th>
</tr>
<?php
    while($rows=mysqli_fetch_assoc($result))
    {
?>
    <tr>
        <td><?php echo $rows['id']; ?></td>
        <td><?php echo $rows['emri']; ?></td>
        <td><?php echo $rows['mbiemri']; ?></td>
        <td><?php echo $rows['email']; ?></td>
        <td><?php echo $rows['password']; ?></td>
        <td><?php echo $rows['password2']; ?></td>
        <td><?php echo $rows['type']; ?></td>
    </tr>
    <?php
    }
    ?>
</table>
            </div>
    
</body>
</html>