$(document).ready(function(){
    $(window).scroll(function(){
    if ($(window).scrollTop() > 150) 
    {
    $("#back-to-top-btn").css('opacity', '1');
    }
    if ($(window).scrollTop() < 150) 
    {
    $("#back-to-top-btn").css('opacity', '0');
    }
});
});