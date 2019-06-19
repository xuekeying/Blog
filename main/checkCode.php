<?php
    session_start();
    header('Content-type:image/gif');
    $image_w = 100;
    $image_h = 25;
    $number = range(0,9);
    $character = range("Z","A");
    $result = array_merge($number,$character);
    $string = "";
    $len = count($result);
    for($i=0;$i<4;$i++){
        $new_number[$i] = $result[rand(0,$len-1)];
        $string = $string.$new_number[$i];
    }
    $_SESSION['string']=$string;
    $check_image = imagecreatetruecolor($image_w,$image_h);
    $white = imagecolorallocate($check_image,255,255,255);
    $black = imagecolorallocate($check_image,0,0,0);
    $gray = imagecolorallocate($check_image,200,200,200);
    imagefill($check_image,0,0,$white);
    for($i=0;$i<100;$i++){
        imagesetpixel($check_image,rand(0,$image_w),rand(0,$image_h),$black);
    }
    // 添加干扰线
    $style = array($black, $black, $black, $black, $black, $gray, $gray, $gray, $gray, $gray);
    imagesetstyle($check_image, $style);
    $y1=rand(0,20);
    $y2=rand(0,20);
    $y3=rand(0,20);
    $y4=rand(0,20);
    imageline($check_image, 0, $y1, 60, $y3, IMG_COLOR_STYLED);
    imageline($check_image, 0, $y2, 60, $y4, IMG_COLOR_STYLED);

    for($i=0;$i<count($new_number);$i++){
        $x = mt_rand(1,8)+$image_w*$i/4;
        $y = mt_rand(1,$image_h/4);
        $color = imagecolorallocate($check_image,mt_rand(0,200),mt_rand(0,200),mt_rand(0,200));
        imagestring($check_image,5,$x,$y,$new_number[$i],$color);
    }
    imagepng($check_image);
    imagedestroy($check_image);
?>