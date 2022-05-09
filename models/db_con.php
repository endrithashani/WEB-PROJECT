<?php

 $conn=mysqli_connect('localhost','root','','registerdb');
 if(!$conn){
     echo 'Database connection error' . mysqli_connect_error();
 }
 ?>