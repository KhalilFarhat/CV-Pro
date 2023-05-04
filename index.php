<head>    
    <link rel="icon" type="image/x-icon" href="resources/images/CvLogo.png">
    <script src="https://kit.fontawesome.com/4dbad2a688.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" ></script>
    <style>
<?php include ('css/Home.css'); ?>
<?php include ('css/loadingscreen.css'); ?>
<?php include ('css/all.css'); ?>
</style>
<script src="javascript/main.js" defer></script>
<script src="javascript/all.js" defer></script>
<script src="javascript/loading_screen_down_to_top.js" defer></script>

    <title>Home | CVpro</title>
    <script>
        function ShowP() {
var x = document.getElementById("psw");
var x2 = document.getElementById("psw-signup");
var y = document.getElementById("hide");
var z = document.getElementById("hide-pass");
if (x.type === "password" || x2.type === "password") {
    x.type = "text";
    x2.type = "text";
    y.src = "resources/images/show.png";
    z.src = "resources/images/show.png";
} else {
    x.type = "password";
    x2.type = "password";
    y.src = "resources/images/hide.png";
    z.src = "resources/images/hide.png";
}
}

</script>

</head>
<body>
    <div class="loader-container">
        <div id="timer"></div>
        <svg class="pl" width="240" height="240" viewBox="0 0 240 240">
            <circle class="pl__ring pl__ring--a" cx="120" cy="120" r="105" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 660" stroke-dashoffset="-330" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--b" cx="120" cy="120" r="35" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 220" stroke-dashoffset="-110" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--c" cx="85" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
            <circle class="pl__ring pl__ring--d" cx="155" cy="120" r="70" fill="none" stroke="#000" stroke-width="20" stroke-dasharray="0 440" stroke-linecap="round"></circle>
        </svg>
    </div>
<!-- back to top button  -->
<button id="back-to-top-btn" onclick="window.scrollTo(0, 0)"></button>
<!-- cookies prompt  -->
<div id="cookie-prompt">
    <p id="cookies_text">Can we place cookies? View our <a href="cookies.html"id="cookies_text"> Cookie Policy.</a></p>
    <button id="accept-cookies">Accept</button>
</div>

<div id="modal" class="modal">
    <div class="modal-header">
    <button style="border-top-left-radius: 10px;" class="modal-title active-text" id="login-btn">Login</button>
    <button style="border-radius: 0;" class="modal-title notactive-text" id="signup-btn">Sign Up</button>
    <button class="close-button">&times;</button>
    </div>
    
    <div class="modal-body login">
    <p style="font-size: 25px;" class="notactive-sign" id="form-title" > Log In</p>
    <p>Welcome! Please complete the form to proceed.</p>
    <hr><br>
    <form id="login-form" method="POST" action="insert.php">

    <div id="loginaccount" class="active-sign">
    <label class="titles2">Log In</label><br><br>
    <label for="email">Email:</label>
    <input type="email" placeholder="Enter Email..." name="email" id="email" required>

    <label id="password_label" for="password">Password:</label>
    <img class="password-img" src="resources/images/hide.png" onclick="ShowP()" id="hide"/>
    <input type="password" name="password" placeholder="Enter Password..." id="psw" onkeyup="password_length(event);" readonly onfocus="this.removeAttribute('readonly');" required autocomplete="off">

    <p class="psw">Don't have an account? </p>
    <p><a id="signupbtn2" style="color: white;">Sign Up</a></p>
    <button type="submit" id="login_submit">Submit</button>

    </div>
</form>
<div id="alert" class="notactive-sign">
    <p> Wrong email or password </p>
</div>
<!-- signup div -->

<form id="signup-form" method="POST" action="add.php" onsubmit="redirectToLogin()">
<p style="font-size: 25px;" class="notactive-sign"id="form-title-signup" id="form"> sign in</p>
  <div id="signup-div" class="active-sign">
    <label class="titles">Sign Up</label><br><br>
    <label for="email">Email:</label>
    <input type="email" placeholder="Enter Email..." name="email_signup" id="email_signup" required><br>
    <label id="first_name_signUp">First Name:</label><br><input type="text"placeholder="Enter First Name..." name="fname_signup" required>
    <label id="last_name_signup">Last Name:</label><input type="text"placeholder="Enter Last Name..." name="last_name_signup" required>
  </div>

  <div id="signup-div2" class="notactive-sign">
    <label for="psw-signup">Password:</label>
    <img class="password-img2" src="resources/images/hide.png" onclick="ShowP()" id="hide-pass"/>
    <input type="password" name="password_signup" placeholder="Enter Password..." id="psw-signup" onkeyup="password_length(event);" required>
    <div class="bar_container">
      <div id="password-length"></div>
    </div>
    <label for="psw-repeat">Repeat Password:</label>
    <input type="password" placeholder="Repeat Password..." name="psw-repeat" required>

    <button type="submit" id="signup-submit-btn">Submit</button>
  </div>
</div>
</form>
<script>
function redirectToLogin() {
  window.location.href = "login.php";
}
</script>


</div>
<div class="" id="overlay"></div>
<section class="head">
    <div class="head-top">
        <!-- <a href="template_login_portal.html"><button class="head-btns signup-btn openModalBtns" id="signupbtn">Sign Up</button> </a> -->
        <!-- <a href="template_login_portal.html"><button class="head-btns login-btn openModalBtns" id="loginbtn"> Account</button> -->
        <a href="login_signup_portal.html"><button class="head-btns login-btn openModalBtns" id="loginbtn" style="padding: 3px;min-width: 6vw;font-weight: bold;">Account</button></a></a>

</div>
        <div class="title">
            <h1 style="font-size: 130px" class="slide-bottom"><span>CV</span> PRO</h1>
            <p style="font-size: 40px; width: 400px; color: white;">Professional Resume Templates at Your Fingertips</p>
        </div>
        <img class="head-img"src="resources/images/Pic.png" alt="">
    </section>
    <section class="about-us">
        <div class="about-title">
            <h1>Build A Professional CV in Minutes!</h1>
            <p>Create an out of this world resume/CV with expert content that can be customized just for YOU</p>
        </div>
        <a href="#benefits" class="exp-btn">EXPLORE MORE</a>
    </section>
    <section class="features">
        <h1><span >Our</span> Features</h1>
        </section>
    <section class="features"id="features">
        <div class="features-container">
            <div class="feature-div">
                <i class="fa-regular fa-file" style="font-size: 60px;"></i>
                <h3>Create Resume/CV</h3>
                <p class="desc">Start Creating Your Own CV</p>
                <a class="feature-btn" href="template.html">Create New CV</a>
            </div>
            <div class="feature-div">
                <i class="fa-solid fa-magnifying-glass"style="font-size: 60px;"></i>
                <h3>Discover Others' CV</h3>
                <p class="desc">Discover people's Designs and CVs</p>
                <a href="discover.html" class="feature-btn">Discover a CV</a>
            </div>
        </div>
    </section>
    
    <section id="benefits" class="benefits">
        <h1 style="color: white;">Benefits of <span>CV PRO</span></h1>
        <div class="box">
            <div class="ben-divs">
                <div>
                    <div class="ben-icons">
                        <i class="fa-solid fa-square-check check" ></i>
                        <div style="text-align: center;">
                            <h4>CV Maker</h4>
                            <p>Easily manage multiple Visual CV versions, personalized for each application.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="ben-icons">
                        <i class="fa-solid fa-list-check check" ></i>
                        <div style="text-align: center;">
                            <h4>Manage Multiple CVs</h4>
                            <p>Select the Design that Suits you and Start Creating Your CV</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ben-divs">
                <div>
                    <div class="ben-icons">
                        <i class="fa-solid fa-share-nodes check " ></i>
                        <div style="text-align: center;">
                            <h4>Download and Share Your CVs</h4>
                            <p>Download your CV as PDF and Share it to apply directly to an Employer</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="ben-icons">
                        <i class="fa-solid fa-lock check" ></i>
                        <div style="text-align: center;">
                            <h4>Privacy Control</h4>
                            <p>Your CV with its information stays private and secure</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="CreateCV">
        <h2 style="margin-top: 30px;font-size: 60px; ">Create Your <span >CV</span> In 3 Steps</h2>
        <div class="steps">
            <div class="step-div">
                <div class="step">
                    <i class="fa fa-paperclip create" ></i>
                </div>
                <h3>Choose Your Resume Design</h3>
            </div>
            <div class="step-div">
                <div class="step">
                    <i class="fa fa-file-text-o create"></i>
                </div>
                <h3>Fill in Your Information</h3>
            </div>
            <div class="step-div">
                <div class="step">
                    <i class="fa fa-file-pdf-o create"></i>
                </div>
                <h3>Download & Share your CV</h3>
            </div>
        </div>
    </section>
<!-- Start -->
    <section class="Start">
        <h1>
            Get Started with our Resume Creator Now!
        </h1>
        </section>
    <section class="Start">
        <a  href="#features"><strong>Get Started Now</strong></a>
    </section>

<footer>      
    <section class="follow-support-div">
    <div class="support">
        <h1>Support</h1><br>
        <a href="Contact_us.html">Contact Us</a>
        <a href="FAQ.HTML">FAQ</a>
        <a href="terms_of_use.html">Terms of Use</a>
        <a href="privacy.html">Privacy</a>
        </div> 

        <div class="followdiv">
            <h1>Follow Us</h1><br>
            <a target="_blank" href="https://www.instagram.com/accounts/login/" class="icon icon--instagram">
                <i class="fa-brands fa-square-instagram social-media"></i><div></div>
            </a>
            <a target="_blank" href="https://twitter.com/i/flow/login"class="icon icon--twitter" >
                <i class="fa-brands fa-square-twitter social-media" ></i>
            </a>
            <a  target="_blank" href="https://www.facebook.com/login/" class="icon icon--facebook">
                <i class="fa-brands fa-square-facebook social-media" ></i>
            </a>
            <a target="_blank" href="https://www.linkedin.com/" class="icon icon--linkedin">
                <i class="fa-brands fa-linkedin social-media" ></i>
            </a>
        </div>
    </section>
    <section class="copyrights">
        <p style="color: white;">Copyright &copy; 2023 All Rights Reserved</p>
    </section>

</footer>
</body>