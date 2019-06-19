$('#username').focus(function(){
    $('#u1').html('请输入您的用户名');
    $('#u1').show();
});
$('#username').blur(function(){
    if ($('#username').val() == ""){
        $('#u1').html('输入的用户名为空，请重新输入');
        $('#u1').show();
    }
    else {
        $('#u1').hide();
    }
});

$('#password').focus(function(){
    $('#p1').html('请输入您的密码(6-16位)');
});
$('#password').blur(function(){
    if($('#password').val().length < 6 && $('#password').val().length > 16){
        $('#p1').html('输入的密码长度不正确');
    }
    else {
        $('#p1').hide();
    }
});

history.pushState(null, null, document.URL);
window.addEventListener('popstate', function() {
    history.pushState(null, null, document.URL);
});