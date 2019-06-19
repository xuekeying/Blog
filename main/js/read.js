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

$('.content-wrap').click(function(){
    XMLHttp = GetXmlHttpObject();
    var url = "read.php";
    var id = $(this).children().siblings(".id").text();
    url =url + "?id=" + id;
    url = url + "&sid=" + Math.random();
    XMLHttp.open("GET",url,true);
    XMLHttp.send(null);
    XMLHttp.onreadystatechange = function(){
        if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
            $('body').html(XMLHttp.responseText);
        }
    }
});



// $('.content-wrap').click(function(){
//     var id = $(this).children().siblings(".id").text();
//     // var introduction = $(this).children().siblings(".con").text();
//     // var author = $(this).children().siblings(".info").children().siblings('.author').text();
//     // var articleType = $(this).children().siblings(".info").children().siblings('.type').text();
//     // var content = $(this).children().siblings(".content-desc").text();
// });