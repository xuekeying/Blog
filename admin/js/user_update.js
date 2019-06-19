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


$('.user_update').click(function(){
    XMLHttp = GetXmlHttpObject();
    url = "user_update.php";
    var id = $(this).parent().siblings('.first_col').text();
    var name = $(this).parent().siblings('.second_col').text();
    var password = $(this).parent().siblings('.third_col').text();
    var email = $(this).parent().siblings('.fourth_col').text();
    var sex = $(this).parent().siblings('.seventh_col').text();
    var type = $(this).parent().siblings('.fiveth_col').text();
    url =url + "?id=" + id + "&name=" + name + "&password=" + password + "&email=" + email + "&sex=" + sex + "&type=" + type;
    url = url + "&sid=" + Math.random();
    XMLHttp.open("GET",url,true);
    XMLHttp.send(null);
    XMLHttp.onreadystatechange = function(){
        if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
            $('.system').html(XMLHttp.responseText);
        }
    }
});