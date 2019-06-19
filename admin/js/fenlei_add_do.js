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
    url = "fenlei_add_do.php";
    var classType = $(this).parent().siblings('.form-msg-two').children('input').val();
    var idBtn = 0;
    url =url + "?classType=" + classType + "&idBtn=" + idBtn;
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
    url = "fenlei_add_do.php";
    var classType = $(this).parent().siblings('.form-msg-two').children('input').val();
    var idBtn = 1;
    url =url + "?classType=" + classType + "&idBtn=" + idBtn;
    url = url + "&sid=" + Math.random();
    XMLHttp.open("GET",url,true);
    XMLHttp.send(null);
    XMLHttp.onreadystatechange = function(){
        if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
            $('.system').html(XMLHttp.responseText);
        }
    }
});