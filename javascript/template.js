var templateBtn = $("#template-btn");
var x = document.getElementsByClassName("mySlides");
var y = document.getElementsByClassName("background_imgs");
var f = document.getElementsByClassName("front_imgs");
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
if (slideIndex === 5) {
slideIndex = 1;
} else {
slideIndex += n;
}
showDivs(slideIndex);

}

function downDivs(n) {
if (slideIndex === 0) {
slideIndex = 5;
// slideIndex=x.length;
} else {
slideIndex -= n;
}
showDivs(slideIndex);
}

function resetSlides() {
for (var i = 0; i < x.length; i++) {
x[i].style.display = "none";
y[i].style.display = "none";
f[i].style.display = "none";

x[i].style.filter = "blur(3px)";
x[i].style.transform = "scale(1)";
x[i].style.position = "static";

}


}

function showDivsDown(n) {
resetSlides();

slideIndex--;

if (slideIndex === 0) {
slideIndex = x.length;
}

var startIndex = slideIndex - 2 < 0 ? slideIndex + 1 : slideIndex - 2;
var endIndex = slideIndex + 1 > x.length - 1 ? slideIndex - 2 : slideIndex + 1;

for (var i = startIndex; i <= endIndex; i++) {
x[i].style.filter = "blur(0px)";
x[i].style.transform = "scale(1.1)";
x[i].style.position = "relative";

y[i].style.display = "block";
f[i].style.display = "block";
var next = i+1;
// f[next].style.display = "none";
console.log(i);
if(slideIndex>1){
    var next = slideIndex;
    
    f[next+1].style.display = "none";
    console.log(next);
}
}

templateBtn.attr("href", getImageLink(slideIndex));
}

function showDivs(n) {
resetSlides();

if (n > x.length) {
slideIndex = 1;
}

if (n < 1) {
slideIndex = x.length;
}

var startIndex = slideIndex - 2 < 0 ? slideIndex + 1 : slideIndex - 2;
var endIndex = slideIndex + 1 > x.length - 1 ? slideIndex - 2 : slideIndex + 1;

for (var i = startIndex; i <= endIndex; i++) {
x[i].style.filter = "blur(0px)";
x[i].style.transform = "scale(1.1)";
x[i].style.position = "relative";
y[i].style.display = "block";
f[i].style.display = "block";


if(slideIndex>0){
    var next = slideIndex+3;
    
    f[next].style.display = "none";
    console.log("next"+next);
}

}
if(i==4){
    f[5].style.display="none";
    console.log("err"+i);

}
// console.log("current"+i);
document.getElementById("use-template").addEventListener("click", function() {
console.log("current"+slideIndex);

if(slideIndex==1){
    // window.location.href = "discover.html";
    window.location="Design5.php";
    // window.location="template5.php";
}
if(slideIndex==2){
    // window.location.href = "discover.html";
    window.location="Design3.php";
}
else if(slideIndex==3){
    // window.location.href = "FAQ.html";
    window.location="Design4.php";
    }
else if(slideIndex==4){
    // window.location.href = "privacy.html";
    window.location="Design5.php";

}
else if(slideIndex==5){
    // window.location.href = "privacy.html";
    window.location="Design6.php";

}
});


templateBtn.attr("href", getImageLink(slideIndex));
}

// document.getElementById("use-template").addEventListener("click", function() {
//     // Show image
//     document.getElementById("checkmark").style.display = "block";
// console.log("iurgbridu");
//     // Wait for 0.15 seconds and open new page
//     setTimeout(function() {
//     if (i == 0) {
//         window.location.href = "template_login_portal.html";
//     } else if (i == 1) {
//         window.location.href = "discover.html";
//     } else if (i == 2) {
//         window.location.href = "privacy.html";
//     } else if (i == 3) {
//         window.location.href = "FAQ.html";
//     } else if (i == 4) {
//         window.location.href = "sent.html";
//     } else if (i == 5) {
//         window.location.href = "template_login_portal.html";
//     }
//     else{
//         window.location.href = "template_login_portal.html";
//     }
// }, 150);
// });
// document.getElementById("use-template").addEventListener("click", function() {
//     // Show image
//   document.getElementById("checkmark").style.display = "block";
  
//     // Wait for 0.15 seconds and open new page
//   setTimeout(function() {
//       window.location.href = "template_login_portal.html";
//   }, 150);
//   });
function getImageLink(index) {
if (index == 0) {
return "/resources/images/CV1.jpg";
} else if (index == 1) {
return "/resources/images/CV2.jpg";
} else if (index == 2) {
return "/resources/images/CV3.jpg";
} else if (index == 3) {
return "/resources/images/CV4.jpg";
} else if (index == 4) {
return "/resources/images/CV5.jpg";
} else if (index == 5) {
return "/resources/images/CV1.jpg";
}
}