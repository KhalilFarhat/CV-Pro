const passwordInputLogin = document.querySelector('input[name="password"]');
const showPasswordButtonLogin = document.getElementById('hide-password');
const hidePasswordButtonLogin = document.getElementById('show-password');

hidePasswordButtonLogin.style.display = 'none';
showPasswordButtonLogin.style.display = 'block';

hidePasswordButtonLogin.addEventListener('click', function() {
  passwordInputLogin.setAttribute('type', 'password');
  hidePasswordButtonLogin.style.display = 'none';
  showPasswordButtonLogin.style.display = 'block';
});

showPasswordButtonLogin.addEventListener('click', function() {
  passwordInputLogin.setAttribute('type', 'text');
  showPasswordButtonLogin.style.display = 'none';
  hidePasswordButtonLogin.style.display = 'block';
});

const passwordInputSignup = document.getElementById('password-input');
const showPasswordButtonSignup = document.getElementById('hide-password_s');
const hidePasswordButtonSignup = document.getElementById('show-password_s');

hidePasswordButtonSignup.style.display = 'none';

hidePasswordButtonSignup.addEventListener('click', function() {
  passwordInputSignup.setAttribute('type', 'password');
  hidePasswordButtonSignup.style.display = 'none';
  showPasswordButtonSignup.style.display = 'block';
});

showPasswordButtonSignup.addEventListener('click', function() {
  passwordInputSignup.setAttribute('type', 'text');
  showPasswordButtonSignup.style.display = 'none';
  hidePasswordButtonSignup.style.display = 'block';
});

// Remove readonly attribute when the input field is focused
passwordInputSignup.addEventListener('focus', function() {
  this.removeAttribute('readonly');
});

passwordInputLogin.addEventListener('focus', function() {
  this.removeAttribute('readonly');
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