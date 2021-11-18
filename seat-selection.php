<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Seat Selection</title>
</head>

<!-- <header></header> -->
<?php
 $EMAIL=$_GET['Email'];
 $movieName=$_GET['moviename'];
 $bookingTheatre=$_GET['bookingTheatre'];
 $bookingType=$_GET['bookingType'];
 $bookingDate=$_GET['bookingDate'];
 $bookingTime=$_GET['bookingTime'];
?>
<body style="background-color: #05125c">
<div class="seat-selection">

  <div class="seat-title">
      <div class="booking-panel-section booking-panel-section1">
            <h1>SELECT YOUR SEATS</h1>
      </div>
  
    <div class="booking-panel-section booking-panel-section2">
            <i class="fas fa-2x fa-times" onclick="window.history.go(-1); return false;"></i>
     </div>
  </div>

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>

      <li>
        <div class="seat selected"></div>
        <small>Occupied</small>
      </li>

      <!-- <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li> -->
    </ul>

    <div class="container">
      <div class="screen"></div>
      <div class="row">
        <div class="row-name">A</div>
        <?php
        for($i=1;$i<=8;$i++){
          $ss="A";
          $ss=$ss.$i;
          $link0 = mysqli_connect("localhost", "root", "", "cinema_db");
          $sql0="SELECT Seat_no from bookingtable where movieName='$movieName' AND bookingTheatre='$bookingTheatre' AND bookingDate='$bookingDate' AND bookingTime='$bookingTime' AND Seat_no='$ss'";
          $result0= mysqli_query($link0, $sql0);
          mysqli_close($link0);
          if ($result0->num_rows > 0)
          {
              echo '<div class="seat selected">'.$i.'</div>';
          }
          else{
            echo '<div class="seat">'.$i.'</div>';
          }   
        }
        ?>
      </div>
      <div class="row">
        <div class="row-name">B</div>
        <?php
        for($i=1;$i<=8;$i++){
          $ss="B";
          $ss=$ss.$i;
          $link0 = mysqli_connect("localhost", "root", "", "cinema_db");
          $sql0="SELECT Seat_no from bookingtable where movieName='$movieName' AND bookingTheatre='$bookingTheatre' AND bookingDate='$bookingDate' AND bookingTime='$bookingTime' AND Seat_no='$ss'";
          $result0= mysqli_query($link0, $sql0);
          mysqli_close($link0);
          if ($result0->num_rows > 0)
          {
              echo '<div class="seat selected">'.$i.'</div>';
          }
          else{
            echo '<div class="seat">'.$i.'</div>';
          }   
        }
        ?>
      </div>

      <div class="row">
        <div class="row-name">C</div>
        <?php
        for($i=1;$i<=8;$i++){
          $ss="C";
          $ss=$ss.$i;
          $link0 = mysqli_connect("localhost", "root", "", "cinema_db");
          $sql0="SELECT Seat_no from bookingtable where movieName='$movieName' AND bookingTheatre='$bookingTheatre' AND bookingDate='$bookingDate' AND bookingTime='$bookingTime' AND Seat_no='$ss'";
          $result0= mysqli_query($link0, $sql0);
          mysqli_close($link0);
          if ($result0->num_rows > 0)
          {
              echo '<div class="seat selected">'.$i.'</div>';
          }
          else{
            echo '<div class="seat">'.$i.'</div>';
          }   
        }
        ?>
      </div>

      <div class="row">
        <div class="row-name">D</div>
        <?php
        for($i=1;$i<=8;$i++){
          $ss="D";
          $ss=$ss.$i;
          $link0 = mysqli_connect("localhost", "root", "", "cinema_db");
          $sql0="SELECT Seat_no from bookingtable where movieName='$movieName' AND bookingTheatre='$bookingTheatre' AND bookingDate='$bookingDate' AND bookingTime='$bookingTime' AND Seat_no='$ss'";
          $result0= mysqli_query($link0, $sql0);
          mysqli_close($link0);
          if ($result0->num_rows > 0)
          {
              echo '<div class="seat selected">'.$i.'</div>';
          }
          else{
            echo '<div class="seat">'.$i.'</div>';
          }   
        }
        ?>
      </div>

      <div class="row">
        <div class="row-name">E</div>
        <?php
        for($i=1;$i<=8;$i++){
          $ss="E";
          $ss=$ss.$i;
          $link0 = mysqli_connect("localhost", "root", "", "cinema_db");
          $sql0="SELECT Seat_no from bookingtable where movieName='$movieName' AND bookingTheatre='$bookingTheatre' AND bookingDate='$bookingDate' AND bookingTime='$bookingTime' AND Seat_no='$ss'";
          $result0= mysqli_query($link0, $sql0);
          mysqli_close($link0);
          if ($result0->num_rows > 0)
          {
              echo '<div class="seat selected">'.$i.'</div>';
          }
          else{
            echo '<div class="seat">'.$i.'</div>';
          }   
        }
        ?>
      </div>

      <div class="row">
        <div class="row-name">F</div>
        <?php
        for($i=1;$i<=8;$i++){
          $ss="F";
          $ss=$ss.$i;
          $link0 = mysqli_connect("localhost", "root", "", "cinema_db");
          $sql0="SELECT Seat_no from bookingtable where movieName='$movieName' AND bookingTheatre='$bookingTheatre' AND bookingDate='$bookingDate' AND bookingTime='$bookingTime' AND Seat_no='$ss'";
          $result0= mysqli_query($link0, $sql0);
          mysqli_close($link0);
          if ($result0->num_rows > 0)
          {
              echo '<div class="seat selected">'.$i.'</div>';
          }
          else{
            echo '<div class="seat">'.$i.'</div>';
          }   
        }
        ?>
      </div>
    </div>

    <form name="myform"  method="POST" style="display:flex;flex-direction:column;color:black">
    <input type="text" name="seat" placeholder="Enter Seat Number"style="text-align:center" required="">
    <button type="submit" value="confirm" name="confirm" class="seat-selection-button">Confirm</button>
    </form>
   
    <?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "cinema_db";
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    $a=0;
    if(isset($_POST['confirm'])){

      $seatNo=$_POST["seat"];
      $link = mysqli_connect("localhost", "root", "", "cinema_db");
      $sql1="SELECT Seat_no from bookingtable where movieName='$movieName' AND bookingTheatre='$bookingTheatre' AND bookingDate='$bookingDate' AND bookingTime='$bookingTime' AND Seat_no='$seatNo'";
      $result2= mysqli_query($link, $sql1);
      while($row2 = $result2->fetch_assoc()) 
        {
          echo $row2['Seat_no'];
          if($row2['Seat_no'] == $seatNo){
            $a=1;
            echo " - Seat is booked, Pick another seat";
            echo'<br>';
            echo '<form id="2" name="myform"  method="POST">';
<<<<<<< Updated upstream
            echo'<br>';
            echo '<input type="text" name="seat" placeholder=" Enter Seat Number Again" required="">';
            echo '<button type="submit" value="confirm1" name="confirm1" class="seat-selection-button">Confirm</button>';
            echo '</form>';
            if(isset($_POST['confirm1'])){
              $seatNo=$_POST['confirm1'];
              $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
              $INSERT = "INSERT Into bookingtable(Email,
                                         movieName,
                                         bookingTheatre,
                                         bookingType,
                                         bookingDate,
                                         bookingTime,
                                         Seat_no)values(?,?,?,?,?,?,?)";
                        $stmt = $conn->prepare($INSERT);
                        $stmt->bind_param("sssssss",$EMAIL,$movieName,$bookingTheatre,$bookingType,$bookingDate,$bookingTime,$seatNo);
                        $stmt->execute();
    }
          }
=======
            // echo '<input type="text" name="seat" placeholder=" Enter Seat Number Again" required="">';
            // // echo '<button type="submit" value="confirm1" name="confirm1" class="seat-selection-button">Confirm</button>';
            // echo '</form>';
    //         if(isset($_POST['confirm1'])){
    //           $seatNo=$_POST['confirm1'];
    //           $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    //           $INSERT = "INSERT Into bookingtable(Email,
    //                                      movieName,
    //                                      bookingTheatre,
    //                                      bookingType,
    //                                      bookingDate,
    //                                      bookingTime,
    //                                      Seat_no)values(?,?,?,?,?,?,?)";
    //                     $stmt = $conn->prepare($INSERT);
    //                     $stmt->bind_param("sssssss",$EMAIL,$movieName,$bookingTheatre,$bookingType,$bookingDate,$bookingTime,$seatNo);
    //                     $stmt->execute();
    // }
           }
>>>>>>> Stashed changes
        }
        mysqli_close($link);
      }
    
      if($a!=1){
      $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
      $INSERT = "INSERT Into bookingtable(Email,
                                         movieName,
                                         bookingTheatre,
                                         bookingType,
                                         bookingDate,
                                         bookingTime,
                                         Seat_no)values(?,?,?,?,?,?,?)";
                        $stmt = $conn->prepare($INSERT);
                        $stmt->bind_param("sssssss",$EMAIL,$movieName,$bookingTheatre,$bookingType,$bookingDate,$bookingTime,$seatNo);
                        $stmt->execute();
    }
    echo '<form id="3" action="confirmation.php?Email='.$EMAIL.'&moviename='.$movieName.'&bookingTheatre='.$bookingTheatre.'&bookingType='.$bookingType.'&bookingDate='.$bookingDate.'&bookingTime='.$bookingTime.'" name="myform"  method="POST">';
    echo'<br>';
    echo '<button type="submit" value="confirm3" name="confirm3" class="seat-selection-button">Proceed</button>';
    echo '</form>';
      
    ?>
    </p>
</div>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>


</html>