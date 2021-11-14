<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="Frontend.css">
</head>
<body>
<h1  style='text-align:center;'>CUSTOMER ORDERS 
</h1>
<form action="Login.html">
    <button type="submit" name="submit" value="DIYPC" style="position: centre; font-size: 150%"><b>LOG OUT!!</b></button>
    </form>
  
<?php
$EMAIL = $_POST['email'];
$PASSWORD1 = $_POST["password"];
$oid1 = $_POST['oid1'];
$adminlog="ADMIN@gmail.com";
$adminpass="ADMIN";
if ($EMAIL=="ADMIN@gmail.com" && $PASSWORD1=="ADMIN"){
    header("Location: admin/admin.php");
    die();
    
    }
    
?>
</div>
</body>
</html>
