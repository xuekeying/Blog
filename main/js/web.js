$(function() {
    var index = 0,
        timer = null,
        img = $('.img'),
        banner = $('.banner'),
        dots = $('span'),
        button = $('.button');
    // 封装图片轮播函数
    function slideImg() {

        // 鼠标不在banner区图片自动轮播
        banner.mouseout(function(){
            timer = setInterval(function(){
                index++;
                // 切换图片
                changeImg();
            },2000)
        });


        // 鼠标在banner上停止轮播
        banner.mouseover(function() {

            if (timer) {
                // 清除定时器
                clearInterval(timer);
                console.log('clear');
            }
        });

        // 启动自动轮播
        banner.mouseout();

        // 点击小圆点切换图片
        dots.click(function(event){
            // 令索引值等于点击的小圆点的索引
            index = dots.index($(this));
            changeImg();
        })

        // 点击三角切换图片
        button.eq(0).click(function(event){
            // 索引-1
            index--;
            changeImg();
        });
        button.eq(1).click(function(event){
            // 索引+1
            index++;
            changeImg();
        });

    }

    // 封装图片切换函数
    function changeImg() {
        // 判断index大小,如果超过图片数目则归零,如果小于图片数目则变最大值
        if (index >= img.length) {
            index = 0;
        }
        if (index < 0) {
            index = img.length-1;
        }
        console.log(index);

        // 清除所有的激活样式
        img.removeClass('block');
        dots.removeClass('active');

        //切换图片
        img.eq(index).addClass('block');
        dots.eq(index).addClass('active');
    }

    slideImg();
})