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


$('.commentBtn').click(function(){
    XMLHttp = GetXmlHttpObject();
    var url = "article_comment_do.php";
    var id = $(this).parent().siblings('.id').text();
    var content = $(this).siblings('.textComments').val();
    url = url + "?id=" + id + "&content=" + content + "&sid=" + Math.random();
    XMLHttp.open("GET",url,true);
    XMLHttp.send(null);
    XMLHttp.onreadystatechange = function(){
        if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
            $('body').html(XMLHttp.responseText);
        }
    }
});