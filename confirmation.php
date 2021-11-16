<!DOCTYPE html>
<html lang="en">
<?php
 $EMAIL=$_GET['Email'];
 $movieName=$_GET['moviename'];
 $bookingTheatre=$_GET['bookingTheatre'];
 $bookingType=$_GET['bookingType'];
 $bookingDate=$_GET['bookingDate'];
 $bookingTime=$_GET['bookingTime'];
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <title>Confirm Booking</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/logo.png">
</head>
<body style="background-color: #04192e">
    <header></header>
   
    <div class="confirmation">
        <?php
        $link1 = mysqli_connect("localhost", "root", "", "cinema_db");
        $sql1 = "SELECT movieImg,price FROM movietable WHERE movieTitle='$movieName'";
        $result1= mysqli_query($link1, $sql1); 
        $row1 = $result1->fetch_assoc();
        $price=$row1['price'];
        // echo '<div><h1>&nbsp</h1></div>';
        // echo '<div>&nbsp</div>';
        echo '<div class="movie-box" style="width:300px;height: 350px;">';

        echo '<img src="'. $row1['movieImg'] .'" alt=" ">';
        echo '</div>';
        $i=0;
        $link = mysqli_connect("localhost", "root", "", "cinema_db");
        $sql = "SELECT * FROM bookingtable where movieName='$movieName' AND bookingTheatre='$bookingTheatre' AND bookingDate='$bookingDate' AND bookingTime='$bookingTime'";
        $result= mysqli_query($link, $sql);  

        echo '<div style="color:white"><h1><b>Customer Email: </b></h1>';
            echo $EMAIL;
            echo '<br>';
            echo '<h1><b>Movie Name: </b></h1>';
            echo $movieName;
            echo '<br>';
            echo '<h1><b>Booking Theatre: </b></h1>';
            echo $bookingTheatre;
            echo '<br>';
            echo '<h1><b>Booking Date: </b></h1>';
            echo $bookingDate;
            echo '<br>';
            echo '<h1><b>Booking Time: </b></h1>';
            echo $bookingTime;
            echo '<br>';
            echo '<h1><b>Seat Number: </b></h1>';
        while($row = $result->fetch_assoc()){
            $i=$i+1;
            echo $row['Seat_no'];
            echo '<br>';

        }

        echo '<br>';
         echo '<h1><b>Total Price: </b></h1>';
            echo '₹';
            echo $i*$price;
            echo '<br>';

        echo '<form id="3" action="login.html" name="myform"  method="POST">';
         echo'<br>';
         echo '<button type="submit" value="confirm3" name="confirm3" class="seat-selection-button">LOG OUT</button>';
         echo '</form>';
        echo '</div>';
        ?>
    
    </div>
    
    <footer></footer>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>
</html>