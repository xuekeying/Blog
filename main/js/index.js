var regBtn = $('#reg');
regBtn.click(function(){
    window.location.href="./register.php";
});

var loginBtn = $('#login');
loginBtn.click(function(){
    window.location.href="./login.php";
});

var nav = $('.nav');
nav.click(function(){
    $(this).addClass('active').siblings().removeClass('active');
});

$('#logined').hover(function(){
    $('.sub .desc').show();
});
$('.sub .desc').hover(function(){ },function(){
    $(this).hide();
});

$('#logout').click(function(){
    window.location.href="./index.php";
});

$('#glym').click(function(){
    window.location.href='../user/';
});

$('.writeArticle').click(function(){
    window.location.href = '../user/editor.php';
})