//show/hide password
const passwordInput = document.querySelector('input[type="password"]');
const showPasswordButton = document.getElementById('show-password');
const hidePasswordButton = document.getElementById('hide-password');

const passwordInputs = document.querySelector('password-input_s');
const showPasswordButtons = document.getElementById('show-password_s');
const hidePasswordButtons = document.getElementById('hide-password_s');

// hidePasswordButton.style.display = 'none';
// showPasswordButton.style.display = 'block';

hidePasswordButton.addEventListener('click', function() {
  passwordInput.setAttribute('type', 'password');
  hidePasswordButton.style.display = 'block';
  showPasswordButton.style.display = 'none';
});
showPasswordButton.addEventListener('click', function() {
  passwordInput.setAttribute('type', 'text');
  showPasswordButton.style.display = 'block';
  hidePasswordButton.style.display = 'none';
});

hidePasswordButtons.click(function() {
  passwordInput.setAttribute('type', 'password');
  hidePasswordButton.style.display = 'block';
  showPasswordButton.style.display = 'none';
  console.log("vfgvbg");

});
showPasswordButtons.addEventListener('click', function() {
  passwordInput.setAttribute('type', 'text');
  showPasswordButton.style.display = 'block';
  hidePasswordButton.style.display = 'none';
  console.log("show");

});


const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");
const logo_login = document.getElementById("logo_login");
const logo_signup = document.getElementById("logo_signup");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
  logo_login.classList.replace("activate","notactivate");
  logo_signup.classList.replace("notactivate","activate");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
  logo_signup.classList.replace("activate","notactivate");
  logo_login.classList.replace("notactivate","activate");
});


//password strength
$(document).ready(function() {
  var passwordInput = $('#password-input');
  var passwordStrengthMeter = $('#password-strength-meter');
  var passwordStrengthBars = passwordStrengthMeter.find('.bar');
  
  passwordInput.on('input', function() {
    var password = passwordInput.val();
    var result = zxcvbn(password);
    var score = result.score;
    
    // Update password strength meter bars
    passwordStrengthBars.each(function(index, bar) {
      if (index <= score) {
        $(bar).addClass('filled');
      } else {
        $(bar).removeClass('filled');
      }
    });
  });
});