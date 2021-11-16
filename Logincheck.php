<?php
$EMAIL = $_POST['email'];
$PASSWORD1 = $_POST["password"];
if (!empty($EMAIL)  || !empty($PASSWORD1))
{

    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "cinema_db";
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    if (mysqli_connect_error())
    {
        die('Connect Error ('. mysqli_connect_errno() .') ' . mysqli_connect_error());
    }

    else
    {
        $SELECT = "SELECT Email,Password From login Where Email = ? And Password = ? ";
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param('ss', $EMAIL,$PASSWORD1);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($e,$p);
        $rnum = $stmt->num_rows;
        if ($rnum==1) 
        {
            header("Location: index.php?Email=".$EMAIL);
            die();

        }
        else
        {
            header("Location: Invalidlogin.html");
            die();
        }
        $stmt->close();
        $conn->close();
    }
} 
else 
{
    echo "All field are required";
    die();
}
?>
