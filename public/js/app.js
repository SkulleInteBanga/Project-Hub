$("#welcome-box").hide(0);
$('#login-box').hide(0);
$('#register-box').hide(0);

$(document).ready(function(){
    $('#welcome-box').delay(250).fadeIn(1500);
});

$('#login').click(function(){
    $('#welcome-box').fadeOut(1500);
    $('#login-box').delay(1500).fadeIn(1500);
});

$('#register').click(function(){
    $('#welcome-box').fadeOut(1500);
    $('#register-box').delay(1500).fadeIn(1500);
});

$('#login-change').click(function(){
    $('#register-box').fadeOut(1500);
    $('#login-box').delay(1500).fadeIn(1500);
});

$('#register-change').click(function(){
    $('#login-box').fadeOut(1500);
    $('#register-box').delay(1500).fadeIn(1500);
});
