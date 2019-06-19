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

$('#email').focus(function(){
    $('#e1').html('请输入您的邮箱账号');
    $('#e1').show();
});
$('#email').blur(function(){
    var reg=/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    var email = $('#email').val();
    if (email == ""){
        $('#e1').html('请输入您的邮箱账号');
        return;
    }else if(email != ""){
        isok = reg.test(email);
        if(!isok){
            $('#e1').html('邮箱地址非法');
        }
        else{
            $('#e1').hide();
        }
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

$('#repassword').focus(function(){
    $('#p2').html('请再次输入您的密码');
});
$('#repassword').blur(function(){
    if($('#repassword').val() != $('#password').val()){
        $('#p2').html('输入的密码和之前的不一样');
    }
    else {
        $('#p2').hide();
    }
});

