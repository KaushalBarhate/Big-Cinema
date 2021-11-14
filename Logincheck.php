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
    $sql1="SELECT Email,Password From login";
    $result1= $conn->query($sql1);
    $row1=$result1 -> fetch_assoc();
    if($result1->num_rows > 0) 
    {
        while($result1->fetch_assoc()) 
        {
            if($EMAIL == $row1["Email"] &&  $PASSWORD1 == $row1["Password"]){
                header("Location: index.php");
                die();
                break;
            }

        }
    }

}
else 
{
    echo "All field are required";
    die();
}

?>
