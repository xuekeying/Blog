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


$('.article_read').click(function(){
    XMLHttp = GetXmlHttpObject();
    var id = $(this).parent().siblings('.first_col').text();
    // var title = $(this).parent().siblings('.second_col').text();
    // var introduction = $(this).parent().siblings('.third_col').text();
    // var author = $(this).parent().siblings('.sixth_col').text();
    // var article_type = $(this).parent().siblings('.fiveth_col').text();
    // var content = $(this).parent().siblings('.fourth_col').text();
    var url = "article_read.php";
    var poststr = "id=" + id;
    poststr = poststr + "&sid=" + Math.random();
    XMLHttp.open("POST",url,true);
    XMLHttp.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    XMLHttp.send(poststr);
    XMLHttp.onreadystatechange = function(){
        if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
            $('.system').html(XMLHttp.responseText);
        }
    }
});