$(".welcome-text").hide(0);
$("#name").hide(0);

$(document).ready(function(){
    $(".welcome-text").delay(750).fadeIn(3000).fadeOut(3000);
    setTimeout(introText, 6700);
    setTimeout(showInput, 13400);
});

function introText() {
    $(".welcome-text").text('Welcome to Project Hub');
    $(".welcome-text").delay(750).fadeIn(3000).fadeOut(3000);
}

function showInput() {
    $(".welcome-text").text('What is your name?');
    $("#name").delay(500).fadeIn(3000);
    $(".welcome-text").fadeIn(3000);
}
