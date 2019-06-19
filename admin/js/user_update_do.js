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
    url = "user_update_do.php";
    var id = $(this).parent().siblings('.form-msg-one').children('input').val();
    var username = $(this).parent().siblings('.form-msg-two').children('input').val();
    var password = $(this).parent().siblings('.form-msg-three').children('input').val();
    var email = $(this).parent().siblings('.form-msg-four').children('input').val();
    var sex = $(this).parent().siblings('.form-msg-five').children('input').val();
    var type = $(this).parent().siblings('.form-msg-six').children('input').val();
    var idBtn = 0;
    url =url + "?id=" + id + "&username=" + username + "&password=" + password + "&email=" + email + "&sex=" + sex + "&type=" + type + "&idBtn=" + idBtn;
    url = url + "&sid=" + Math.random();
    XMLHttp.open("GET",url,true);
    XMLHttp.send(null);
    XMLHttp.onreadystatechange = function(){
        if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
            $('.system').html(XMLHttp.responseText);
        }
    }
});

$('.query-cancel').click(function(){
    XMLHttp = GetXmlHttpObject();
    url = "user_update_do.php";
    var id = $(this).parent().siblings('.form-msg-one').children('input').val();
    var username = $(this).parent().siblings('.form-msg-two').children('input').val();
    var password = $(this).parent().siblings('.form-msg-three').children('input').val();
    var email = $(this).parent().siblings('.form-msg-four').children('input').val();
    var sex = $(this).parent().siblings('.form-msg-five').children('input').val();
    var type = $(this).parent().siblings('.form-msg-six').children('input').val();
    var idBtn = 1;
    url =url + "?id=" + id + "&username=" + username + "&password=" + password + "&email=" + email + "&sex=" + sex + "&type=" + type + "&idBtn=" + idBtn;
    url = url + "&sid=" + Math.random();
    XMLHttp.open("GET",url,true);
    XMLHttp.send(null);
    XMLHttp.onreadystatechange = function(){
        if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
            $('.system').html(XMLHttp.responseText);
        }
    }
});