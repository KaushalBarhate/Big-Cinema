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

<body style="background-color: #05125c">
<div class="seat-selection">

  <div class="seat-title">
      <div class="booking-panel-section booking-panel-section1">
            <h1>SELECT YOUR SEATS</h1>
      </div>
  
    <div class="booking-panel-section booking-panel-section2" onclick="window.history.go(-1); return false;">
            <i class="fas fa-2x fa-times"></i>
     </div>
  </div>
    <!-- <div class="movie-container">
      <label>Pick a movie:</label>
      <select id="movie">
        <option value="10">Avengers: Endgame ($10)</option>
        <option value="12">Joker ($12)</option>
        <option value="8">Toy Story 4 ($8)</option>
        <option value="9">The Lion King ($9)</option>
      </select>
    </div> -->

    <ul class="showcase">
      <li>
        <div class="seat"></div>
        <small>Available</small>
      </li>

      <li>
        <div class="seat selected"></div>
        <small>Selected</small>
      </li>

      <li>
        <div class="seat occupied"></div>
        <small>Occupied</small>
      </li>
    </ul>

    <div class="container">
      <div class="screen"></div>
      <div class="row">
        <div class="row-name">A</div>
        <div class="seat">1</div>
        <div class="seat">2</div>
        <div class="seat">3</div>
        <div class="seat">4</div>
        <div class="seat">5</div>
        <div class="seat">6</div>
        <div class="seat">7</div>
        <div class="seat">8</div>
      </div>
      <div class="row">
        <div class="row-name">B</div>
        <div class="seat">1</div>
        <div class="seat">2</div>
        <div class="seat">3</div>
        <div class="seat">4</div>
        <div class="seat">5</div>
        <div class="seat">6</div>
        <div class="seat">7</div>
        <div class="seat">8</div>
      </div>

      <div class="row">
        <div class="row-name">C</div>
        <div class="seat">1</div>
        <div class="seat">2</div>
        <div class="seat">3</div>
        <div class="seat">4</div>
        <div class="seat">5</div>
        <div class="seat">6</div>
        <div class="seat">7</div>
        <div class="seat">8</div>
      </div>

      <div class="row">
        <div class="row-name">D</div>
        <div class="seat">1</div>
        <div class="seat">2</div>
        <div class="seat">3</div>
        <div class="seat">4</div>
        <div class="seat">5</div>
        <div class="seat">6</div>
        <div class="seat">7</div>
        <div class="seat">8</div>
      </div>

      <div class="row">
        <div class="row-name">E</div>
        <div class="seat">1</div>
        <div class="seat">2</div>
        <div class="seat">3</div>
        <div class="seat">4</div>
        <div class="seat">5</div>
        <div class="seat">6</div>
        <div class="seat">7</div>
        <div class="seat">8</div>
      </div>

      <div class="row">
        <div class="row-name">F</div>
        <div class="seat">1</div>
        <div class="seat">2</div>
        <div class="seat">3</div>
        <div class="seat">4</div>
        <div class="seat">5</div>
        <div class="seat">6</div>
        <div class="seat">7</div>
        <div class="seat">8</div>
      </div>
    </div>

    <p class="text">
      You have selected <span id="count">0</span> seats for a price of $<span id="total">0</span>
    <br>
    <button type="submit" value="confirm" name="confirm" class="seat-selection-button">Confirm</button>
    </p>
</div>
    <!-- <footer></footer> -->

    <script src="scripts/jquery-3.3.1.min.js "></script>
    <script src="scripts/owl.carousel.min.js "></script>
    <script src="scripts/script.js "></script>
</body>


</html>