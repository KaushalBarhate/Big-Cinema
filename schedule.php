<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="style/styles.css">
    <title>Movies Schedule</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<header></header>

<body>
    <?php
// $EMAIL = $_GET['Email'];
<<<<<<< Updated upstream
=======
$file=fopen("C:\\xampp\htdocs\Big-Cinema\Email.txt","r");
$EMAIL=fgets($file);
>>>>>>> Stashed changes

$link = mysqli_connect("localhost", "root", "", "cinema_db");
$sql  = "SELECT * FROM movieTable";
?>
    <div class="schedule-section">
        <h1>Schedule</h1>
        <div class="schedule-dates">
            <div class="schedule-item">November 12,2021</div>
            <div class="schedule-item schedule-item-selected">November 13,2021</div>
            <div class="schedule-item">November 14,2021</div>
            <div class="schedule-item">November 15,2021</div>
            <div class="schedule-item">November 16,2021</div>
        </div>
        <div class="schedule-table">
            <table>
                <tr>
                    <th>SHOW</th>
                    <th>SCHEDULE IN CINEMA</th>
                </tr>
            <?php
if ($result = mysqli_query($link, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        for ($i = 0; $i <= 5; $i++) {
            $row = mysqli_fetch_array($result);
            echo '<tr class="fade-scroll">';
            echo '<td>';
            echo '<h2>' . $row['movieTitle'] . '</h2>';
            echo '<i class="far fa-clock"></i> 125m <i class="fas fa-desktop"></i> IMAX';
            echo '<h3>SYNOPSIS</h3>';
            echo '<p>' . $row['synopsis'] . '';
            echo '</p>';
<<<<<<< Updated upstream
            echo '<div class="schedule-item"> DETAILS</a>';
=======
            echo '<div class="schedule-item"></a>';
            echo '<a href="booking.php?id=' . $row['movieID'] . '&Email=' . $EMAIL . '"><i class="fas fa-ticket-alt"></i> Book a seat</a>';
>>>>>>> Stashed changes
            echo '</div>';
            echo '</td>';
            echo '<td>';
            echo '<div class="hall-type">';
            echo '<h3>PVR Cinemas</h3>';
            echo '<div>';
            echo '<div class="schedule-item"><i class="far fa-clock"></i></div>';
            echo '<div class="schedule-item">09:00 AM</div>';
            echo '<div class="schedule-item">11:30 AM</div>';
            echo '<div class="schedule-item">06:00 PM</div>';
            echo '</div>';
            echo '</div>';
            echo '<div class="hall-type">
                                                <h3>Cinépolis</h3>
                                                <div>
                                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                                <div class="schedule-item">09:00 AM</div>
                                                <div class="schedule-item">11:30 AM</div>
                                                <div class="schedule-item">06:00 PM</div>
                                                </div>
                                                </div>
                                                <div class="hall-type">
                            <h3>INOX</h3>
                            <div>
                                <div class="schedule-item"><i class="far fa-clock"></i></div>
                                <div class="schedule-item">09:00 AM</div>
                                <div class="schedule-item">11:30 AM</div>
                                <div class="schedule-item">06:00 PM</div>
                            </div>
                        </div>
                    </td>
                </tr>';
        }
        mysqli_free_result($result);
    } else {
        echo '<h4 class="no-annot">No Booking to our movies right now</h4>';
    }} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
    </table>



    </div>
    <footer></footer>

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>

</html>