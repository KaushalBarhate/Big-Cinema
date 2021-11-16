<!DOCTYPE html>
<html lang="en">
<?php 
        $id = $_GET['id'];
        $EMAIL=$_GET['Email'];
        $link = mysqli_connect("localhost", "root", "", "cinema_db");

        $movieQuery = "SELECT * FROM movieTable WHERE movieID = $id"; 
        $movieImageById = mysqli_query($link,$movieQuery);
        $row = mysqli_fetch_array($movieImageById);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Book <?php echo $row['movieTitle']; ?> Now</title>
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body style="background-color:#05125c;">
    <div class="booking-panel">
        <div class="booking-panel-section booking-panel-section1">
            <h1>BOOK YOUR TICKET</h1>
        </div>
        <div class="booking-panel-section booking-panel-section2">
            <i class="fas fa-2x fa-times" onclick="window.history.go(-1); return false;"></i>
        </div>
        <div class="booking-panel-section booking-panel-section3">
            <div class="movie-box">
                <?php
                    echo '<img src="'.$row['movieImg'].'" alt="">';
                    ?>
            </div>
        </div>
        <div class="booking-panel-section booking-panel-section4">
            <div class="title"><?php echo $row['movieTitle']; ?></div>
            <div class="movie-information">
                <table>
                    <tr>
                        <td>GENRE</td>
                        <td><?php echo $row['movieGenre']; ?></td>
                    </tr>
                    <tr>
                        <td>DURATION</td>
                        <td><?php echo $row['movieDuration'];echo " mins"; ?></td>
                    </tr>
                    <tr>
                        <td>RELEASE DATE</td>
                        <td><?php echo $row['movieRelDate']; ?></td>
                    </tr>
                    <tr>
                        <td>DIRECTOR</td>
                        <td><?php echo $row['movieDirector']; ?></td>
                    </tr>
                    <tr>
                        <td>ACTORS</td>
                        <td><?php echo $row['movieActors']; ?></td>
                    </tr>
                    <tr>
                        <td>PRICE</td>
                        <td><?php echo '₹'; echo $row['price']; ?></td>
                    </tr>
                </table>
            </div>
            <div class="booking-form-container">
                
                <form id="1" method="POST">';
            

                    <select name="theatre" required>
                        <option value="" disabled selected>THEATRE</option>
                        <option value="INOX">INOX</option>
                        <option value="Cinepolis">Cinépolis</option>
                        <option value="pvr-cinemas">PVR Cinemas</option>
                    </select>

                    <select name="type" required>
                        <option value="" disabled selected>TYPE</option>
                        <option value="3d">3D</option>
                        <option value="2d">2D</option>
                        <option value="imax">IMAX</option>
                        <option value="7d">7D</option>
                    </select>

                    <select name="date" required>
                        <option value="" disabled selected>DATE</option>
                        <option value="20-11">November 20,2021</option>
                        <option value="21-11">November 21,2021</option>
                        <option value="22-11">November 22,2021</option>
                        <option value="23-11">November 23,2021</option>
                        <option value="24-11">November 24,2021</option>
                    </select>

                    <select name="hour" required>
                        <option value="" disabled selected>TIME</option>
                        <option value="09-00">09:00 AM</option>
                        <option value="12-00">12:00 AM</option>
                        <option value="15-00">03:00 PM</option>
                        <option value="18-00">06:00 PM</option>
                        <option value="21-00">09:00 PM</option>
                        <option value="24-00">12:00 PM</option>
                    </select>
                    <button type="submit" value="submit1" name="submit" class="form-btn" style="margin-left:176px"> Confirm Details</button>';
</form>
<?php

if(isset($_POST["submit"])){
                echo '<form id="2" action="seat-selection.php?Email='.$EMAIL.'&moviename='.$row['movieTitle'].'&bookingTheatre='.$_POST["theatre"].'&bookingType='.$_POST["type"].'&bookingDate='.$_POST["date"].'&bookingTime='.$_POST["hour"].'" method="POST">';
                
                
                   echo '<button type="submit" value="submit" name="submit" class="form-btn"> Book a Seat</button>';
                   echo '</form>';
}
?>
            
            </div>
        </div>
    </div>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>