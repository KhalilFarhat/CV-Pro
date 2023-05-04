// cookies prompt 
window.onload = function(){
  if (sessionStorage.getItem("cookiesAccepted")) {
    document.getElementById("cookie-prompt").style.display = "none";
  } else {
    document.getElementById("cookie-prompt").style.display = "block";
  }

  document.getElementById("accept-cookies").addEventListener("click", function(){
    sessionStorage.setItem("cookiesAccepted", true);
    document.getElementById("cookie-prompt").style.display = "none";
  });
};
