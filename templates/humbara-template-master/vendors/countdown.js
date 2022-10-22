var countDownDate = new Date("Jan 1, 2023 18:30:00").getTime();

var x = setInterval(function() {
  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.querySelector(".specialcount-days").innerHTML = days;
  document.querySelector(".specialcount-hours").innerHTML = hours;
  document.querySelector(".specialcount-minutes").innerHTML = minutes;
  document.querySelector(".specialcount-seconds").innerHTML = seconds;

  if (distance < 0) {
    clearInterval(x);
    document.querySelector(".specialcount-expired").innerHTML = "EXPIRED";
  }
}, 1000);