// Load Page Parts a Home
const container = document.querySelector('.container');
const seats = document.querySelectorAll('.row .seat:not(.occupied');
const count = document.getElementById('count');
const total = document.getElementById('total');
const movieSelect = document.getElementById('movie');

$(document).ready(function () {
    $("header").load("includes/header.php");
    $("footer").load("includes/footer.php");
    $(".owl-carousel").owlCarousel();
});



// faded scroll
$(function () {
    var documentElement = $(document),
        fadeElement = $('.fade-scroll');


    documentElement.on('scroll', function () {
        var currScrollPos = documentElement.scrollTop();

        fadeElement.each(function () {
            var $this = $(this),
                elemOffsetTop = $this.offset().top;
            if (currScrollPos > elemOffsetTop) $this.css('opacity', 1 - (currScrollPos - elemOffsetTop) / 400);
        });
    });

});


// Trailers Section image to video efect
$('.trailer-item-info').click(function () {
    var video = $('<iframe />', {
        'class': "trailer-item-video",
        'src': "https://www.youtube.com/embed/" + this.dataset.video + "?controls=0",
        'height': "100%",
        'width': "100%",
        'frameborder': "0"
    });
    $(this).siblings('img').replaceWith(video);
    $(this).hide();
});



// showing and hiding notifications panel in admin secyion

$(".admin-notification-button").click(function () {
    $('.admin-notifications').removeClass('hidden-div');
});

$('.admin-notification-button').click(function () {
    $('.admin-notifications').addClass('hidden-div');
});



// Play Button Effect
$('.trailer-item-info').children('i').hover(function () {
    $(this).removeClass("far");
    $(this).toggleClass('fas');

}, function () {
    $(this).removeClass("fas");
    $(this).addClass('far');
});

//multi-step booking form script

$(document).ready(function () {
    $('.form-tab2').hide();
});

$('.form-tab1').children('.form-btn').click(function () {
    $('.form-tab1').hide();
    $('.form-tab2').show();
});


// booking form validatioin
function validate() {
    if (document.getElementsByClassName("form-tab2").fName.value == "") {
        alert("Please provide your name!");
        document.getElementById("form-tab2").fName.focus();
        return false;
    }
    if (document.getElementById("form-tab2").lName.value == "") {
        alert("Please provide your name!");
        document.getElementById("form-tab2").lName.focus();
        return false;
    }
    if (document.getElementById("form-tab2").EMail.value == "") {
        alert("Please provide your Email!");
        document.getElementById("form-tab2").EMail.focus();
        return false;
    }

    return (true)
};

//admin dashboard notidication panel

$('.admin-login-info').children('i').hover(function () {
    $(this).removeClass("far");
    $(this).toggleClass('fas');
}, function () {
    $(this).removeClass("fas");
    $(this).addClass('far');
});


$('.fa-bell').on('click', function () {
    $('.admin-notifications').removeClass("hidden-div");
}, function () {
    $('.admin-notifications').addClass('hidden-div');
});

// showing and hiding booking panel

$(".movie-info a").on('click', function () {
    $('.booking-wrap').show();
});

$(".booking-panel-section2").on('click', function () {
    $('.booking-wrap').hide();
});




$(".admin-navigation-schedule").on('click', function () {
    $('.admin-navigation-schedule-dropdwn').show();
});

$(".admin-navigation-schedule").on('click', function () {
    $('.admin-navigation-schedule-dropdwn').hide();
});

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

// Seat selectionn
populateUI();
let ticketPrice = +movieSelect.value;

// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem('selectedMovieIndex', movieIndex);
  localStorage.setItem('selectedMoviePrice', moviePrice);
}

// update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll('.row .seat.selected');

  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

  localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

  //copy selected seats into arr
  // map through array
  //return new array of indexes

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;
  total.innerText = selectedSeatsCount * ticketPrice;
}

// get data from localstorage and populate ui
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));
  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        seat.classList.add('selected');
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem('selectedMovieIndex');

  if (selectedMovieIndex !== null) {
    movieSelect.selectedIndex = selectedMovieIndex;
  }
}

// Movie select event
movieSelect.addEventListener('change', (e) => {
  ticketPrice = +e.target.value;
  setMovieData(e.target.selectedIndex, e.target.value);
  updateSelectedCount();
});

// Seat click event
container.addEventListener('click', (e) => {
  if (e.target.classList.contains('seat') && !e.target.classList.contains('occupied')) {
    e.target.classList.toggle('selected');

    updateSelectedCount();
  }
});

// intial count and total
updateSelectedCount();