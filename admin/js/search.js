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

$('#search').click(function(){
    XMLHttp = GetXmlHttpObject();
    url = "searchContent.php";
    var authorContent = $(this).siblings('input').val();
    url =url + "?authorContent=" + authorContent;
    url = url + "&sid=" + Math.random();
    XMLHttp.open("GET",url,true);
    XMLHttp.send(null);
    XMLHttp.onreadystatechange = function(){
        if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
            $('body').html(XMLHttp.responseText);
        }
    }
});

$('.backBtn').click(function(){
    window.location.reload();
});

