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


$('.gongao_update').click(function(){
    XMLHttp = GetXmlHttpObject();
    url = "gongao_update.php";
    var id = $(this).parent().siblings('.first_col').text();
    var content = $(this).parent().siblings('.second_col').text();
    var createtime = $(this).parent().siblings('.third_col').text();
    var modiftime = $(this).parent().siblings('.fourth_col').text();
    url =url + "?id=" + id + "&content=" + content + "&createtime=" + createtime + "&modiftime=" + modiftime;
    url = url + "&sid=" + Math.random();
    XMLHttp.open("GET",url,true);
    XMLHttp.send(null);
    XMLHttp.onreadystatechange = function(){
        if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
            $('.system').html(XMLHttp.responseText);
        }
    }
});