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

$('.fenlei_delete').click(function(){
    if(window.confirm("确定删除吗？此操作不可恢复！")){
        XMLHttp = GetXmlHttpObject();
        url = "fenlei_delete.php";
        var id = $(this).parent().siblings('.first_col').text();
        url = url + "?id=" + id;
        url = url + "&sid=" + Math.random();
        XMLHttp.open("GET",url,true);
        XMLHttp.send(null);
        XMLHttp.onreadystatechange = function(){
            if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
                $('.system').html(XMLHttp.responseText);
            }
        }
        return true;
    }
    else{
        return false;
    }
});