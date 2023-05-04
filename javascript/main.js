function loader(){
    document.querySelector('.loader-container').classList.add('fade-out');
}
function fadeOut(){
    setInterval(loader, 2000);
}
function password_length(event){
    const bar=document.getElementById('password-length');
    var length = event.target.value.length;
    bar.className="";
        if(length<5){
            bar.classList.add('bad');
        }
        else if(length>=5 && length<10){
            bar.classList.add('good');
        }
        else if (length >=10){
            bar.classList.add('perfect');
        }
        else 
        bar.classList.add('bad');
}

window.onload = fadeOut();
const openModalBtns = document.querySelectorAll('[data-modal-target]');
const closeModalBtns = document.querySelectorAll('.close-button');
const psw= document.getElementById('psw');

const overlay = document.getElementById('overlay');
function openModal(currentModal){
    currentModal.classList.add('active');
    overlay.classList.add('active');
    psw.setAttribute('value', '');
}
function closeModal(currentModal){
    currentModal.classList.remove('active');
    overlay.classList.remove('active');
    psw.setAttribute('value', '');

}
openModalBtns.forEach(function(button){
    button.addEventListener('click',function(){
        const modal = document.querySelector(button.dataset.modalTarget)
        openModal(modal);
        document.body.classList.add('overflow');
    psw.setAttribute('value', '');

    })
})
closeModalBtns.forEach(function(button){
    button.addEventListener('click',function(){
        const modal = button.closest('.modal')
        closeModal(modal);
        document.body.classList.remove('overflow');
    psw.setAttribute('value', '');


    })
})
overlay.addEventListener('click',function(){
    const modal = document.querySelector('.modal.active')
    closeModal(modal);
    document.body.classList.remove('overflow');
    psw.setAttribute('value', '');


})

const loginbtn = document.getElementById("login-btn");
const signupbtn = document.getElementById("signup-btn");
const signupdiv = document.getElementById("signup-div");
const signupdiv2 = document.getElementById("signup-div2");

const signloginbtn = document.getElementById("sign/login-btn");
const signupbtnmain = document.getElementById("signupbtn");
const loginbtnmain = document.getElementById("loginbtn");
const signupbtn2 = document.getElementById("signupbtn2"); 
const form=document.getElementById("form");
const loginaccount = document.getElementById("loginaccount");

signupbtnmain.addEventListener('click',signup);
signupbtn.addEventListener('click',signup);

signupbtnmain.addEventListener('click', () => {
    formTitle.innerText = 'Sign Up'; // change the form title to "Sign Up"
    signupbtnmain.click(); // trigger the click event of signupbtn to open the sign-up page
});
signupbtn2.addEventListener('click', () => {
    formTitle.innerText = 'Sign Up'; // change the form title to "Sign Up"
    signupbtn.click(); // trigger the click event of signupbtn to open the sign-up page
});

function signup(){
    signupdiv.classList.replace("notactive-sign","active-sign");
    signupdiv2.classList.replace("notactive-sign","active-sign");
    signupbtn.classList.replace("notactive-text","active-text");
    loginbtn.classList.replace("active-text","notactive-text");
    loginaccount.classList.replace("active-sign","notactive-sign");
    signloginbtn.innerHTML="SIGN-UP"; 
    form.innerHTML="Sign up";
    formTitle.innerHTML = 'Sign Up';
    loginBtn.click();
}
function login(){
    loginaccount.classList.replace("notactive-sign","active-sign");
    signupdiv.classList.replace("active-sign","notactive-sign");
    signupdiv2.classList.replace("active-sign","notactive-sign");
    signupbtn.classList.replace("active-text","notactive-text");
    loginbtn.classList.replace("notactive-text","active-text");
    signloginbtn.innerHTML="LOGIN";
    form.innerHTML="Log in";
    formTitle.innerHTML = 'Log In';

    signupbtn.click();
}
loginbtn.addEventListener('click',login);
loginbtnmain.addEventListener('click',login);

const authForm = document.getElementById('auth-form');
const formTitle = document.getElementById('form-title');
const signupFields = document.querySelector('.signup-fields');

const loginBtn = document.getElementById('login-btn');
const signupBtn = document.getElementById('signup-btn');
const signupLink = document.getElementById('signup-link');
const formtitlesignup = document.getElementById('form-title-signup');
loginBtn.addEventListener('click', () => {
    formTitle.innerText = 'Log In';
    formTitle.innerHTML = 'Log In';
    signupFields.style.display = 'none';
    authForm.setAttribute('action', 'login.php');
    loginBtn.classList.add('active-text');
    formTitle.classList.remove('notactive-sign');
    formTitle.classList.add('active-sign');
    signupBtn.classList.remove('active-text');
    formtitlesignup.classList.add('notactive-sign');
});

signupBtn.addEventListener('click', () => {
    formTitle.innerText = 'Sign Up';
    formTitle.innerHTML = 'Sign Up';
    signupFields.style.display = 'block';
    authForm.setAttribute('action', 'signup.php');
    loginBtn.classList.remove('active-text');
    signupBtn.classList.add('active-text');
    formTitle.classList.add('notactive-sign');
    formtitlesignup.classList.remove('notactive-sign');
    formtitlesignup.classList.add('active-sign');

    
});

signupLink.addEventListener('click', (event) => {
    event.preventDefault();
    formTitle.innerText = 'Sign Up';
    formTitle.innerHTML = 'Sign Up';
    signupFields.style.display = 'block';
    authForm.setAttribute('action', 'signup.php');
    loginBtn.classList.remove('active-text');
    signupBtn.classList.add('active-text');
});

