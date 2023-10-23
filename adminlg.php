<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo2";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
  $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
  $stmt = mysqli_prepare($conn,$sql);
  mysqli_stmt_bind_param($stmt,"ss",$username,$password);
  
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if(mysqli_num_rows($result) >  0){
    header('Location:admin.html');
    

  }else{
     echo "invalid username or password";
  }

  
   


}
mysqli_close($conn);



?>