function GetXmlHttpObject(){
    var XMLHttp = null;
    try{
        XMLHttp = new XMLHttpRequest();
    }
    catch(e){
        try{
            XMLHttp = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch(e){
            XMLHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return XMLHttp;
}


$('.query-ok').click(function(){
    XMLHttp = GetXmlHttpObject();
    var url = "setting_update.php";
    var id = $(this).parent().siblings('.form-msg-one').children('input').val();
    var username = $(this).parent().siblings('.form-msg-two').children('input').val();
    var password = $(this).parent().siblings('.form-msg-three').children('input').val();
    var email = $(this).parent().siblings('.form-msg-four').children('input').val();
    var sex = $(this).parent().siblings('.form-msg-five').children('input').val();
    url =url + "?id=" + id + "&username=" + username + "&password=" + password + "&email=" + email + "&sex=" + sex;
    url = url + "&sid=" + Math.random();
    XMLHttp.open("GET",url,true);
    XMLHttp.send(null);
    XMLHttp.onreadystatechange = function(){
        if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
            $('.system').html(XMLHttp.responseText);
        }
    }
});


$('.personl_setting').click(function(){
    alert("此页面可以修改个人的邮箱和性别，其他项目暂不对管理员用户进行开放！");
})