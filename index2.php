<?php
session_start();
?>
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
<style>
    #welcome-message{
    position: absolute;
    right: 0;
    }
    </style>
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
</div>

<div class=""></div>
<section class="head">
<div class="profile">
<img class="profile" src="resources/images/profile_img.png">
<div class="menu">
    <ul>
        <!-- <li><a href="#">Manage CVs</a></li> -->
        <li><a href="index.php?logout=true">Logout</a></li>
    </ul>
</div>
</div>
<div id="welcome-message">
    <?php
    if(isset($_SESSION['credentials'])) {
        if (isset($_SESSION['credentials']['first_name']) && isset($_SESSION['credentials']['last_name'])) {
            $username = $_SESSION['credentials']['first_name'] . ' ' . $_SESSION['credentials']['last_name'];
            echo 'Hello,  '  .  $username . '!';
        } else {
            echo 'Could not retrieve first and last name from credentials array';
        }
    } else {
        echo 'User is not logged in';
    }
    ?>
</div>

</div>
        <div class="title">
            <h1 style="font-size: 130px"><span>CV</span> PRO</h1>
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
                <a class="feature-btn" href="template2.html">Create New CV</a>
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