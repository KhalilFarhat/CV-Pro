// set the initial countdown value
var count = 15;

// update the countdown every second
var countdown = setInterval(function() {
  count--;
  document.getElementById("countdown").innerHTML = count;
  // redirect to main_page.php when countdown reaches 0
  if (count == 0) {
    clearInterval(countdown);
    window.location.href = "index.php";
  }
}, 1000);

// redirect immediately when the user clicks the button
document.getElementById("redirect-btn").addEventListener("click", function() {
  window.location.href = "index.php";
});