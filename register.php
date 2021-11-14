<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
  <body>
    
<?php

$email  = $_POST['email'];
$name = $_POST['name'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];
$phone = $_POST['phone'];

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "cinema_db";

if (!empty($email) || !empty($password1) || !empty($password2) )
{
  $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if($password1==$password2)
{

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT Email From login Where Email = ?";
  $INSERT = "INSERT Into login (Email,Password,Phone_Number,Name)values(?,?,?,?)";

  $stmt = $conn->prepare($SELECT);
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $stmt->bind_result($email);
  $stmt->store_result();
  $rnum = $stmt->num_rows;

  if ($rnum==0) {
  $stmt = $conn->prepare($INSERT);
  $stmt->bind_param("ssss",$email,$password1,$phone,$name);
  $stmt->execute();
  $rnum = $stmt->num_rows;

?>
<form action='login.html'>
       
      <h2>Login Created Successfully !! </h2>
      <button type='submit' name='submit' value='login'>  LOGIN  </button>
     </form>
     <?php
     } else { ?>
     <form action='register.html'>
       <h1>OOPS !! </h1>
      <h2>This Email ID is Registered already. Cannot Register </h2>
      <button type='submit' name='submit' value='Goback'>  GO BACK  </button>
     </form>
     <?php }
}
}
    else
    { 
        ?>
    <form action='register.html'>
       <h1>OOPS !! </h1>
      <h2>Password and Confirm Password don't match </h2>
      <button type='submit' name='submit' value='Goback'>  GO BACK  </button>
     </form>
   <?php 
   }
  }
else {
 echo "All field are required";
 die();
}
?>
</body>
</html>