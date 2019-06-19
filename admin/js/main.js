$('#logout').click(function(){
    window.location.href="./index.php";
});


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




$('.link').click(function(){
    $(this).addClass('active').siblings().removeClass('active');
    // $('.system').eq($('.link').index(this)).removeClass('show').siblings().addClass('show');
    // console.log($(this).index('.link')); // 取出所选择元素的id，从0开始
    var id = $(this).index('.link');
    XMLHttp = GetXmlHttpObject();
    url = "right_choose.php";
    url = url + "?id=" + id;
    url = url + "&sid=" + Math.random();
    XMLHttp.open("GET",url,true);
    XMLHttp.send(null);
    XMLHttp.onreadystatechange = function(){
        if(XMLHttp.readyState == 4 && XMLHttp.status == 200){
            $('.system').html(XMLHttp.responseText);
        }
    }

});