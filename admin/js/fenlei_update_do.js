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
    url = "fenlei_update_do.php";
    var id = $(this).parent().siblings('.form-msg-one').children('input').val();
    var classType = $(this).parent().siblings('.form-msg-two').children('input').val();
    var idBtn = 0;
    url =url + "?id=" + id + "&classType=" + classType + "&idBtn=" + idBtn;
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
    url = "fenlei_update_do.php";
    var id = $(this).parent().siblings('.form-msg-one').children('input').val();
    var classType = $(this).parent().siblings('.form-msg-two').children('input').val();
    var idBtn = 1;
    url =url + "?id=" + id + "&classType=" + classType + "&idBtn=" + idBtn;
    url = url + "&sid=" + Math.random();
    XMLHttp.open("GET",url,true);
    XMLHttp.send(null);
    XMLHttp.onreadystatechange = function(){
        if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
            $('.system').html(XMLHttp.responseText);
        }
    }
})