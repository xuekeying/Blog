<?php
    $year = @$_GET['year'];
    $month = @$_GET['month'];
    if(empty($year)){
        $year = date('Y');
    }
    if(empty($month)){
        $month = date('n');
    }
    $day = date('j');
    $wd_ar = array("日","一","二","三","四","五","六");
    $wd=date("w",mktime(0,0,0,$month,1,$year));
    //年链接
    $y_lnk1 = $year<=1970?$year=1970:$year-1;
    $y_lnk2 = $year>=2037?$year=2037:$year-1;
    //月链接
    $m_lnk1 = $month<=1?$month=1:$month-1;
    $m_lnk2 = $month>=12?$month=12:$month+1;
    echo "<table cellpadding=6 cellspacing=0 width=290 bgcolor=#eeeeee><tr align=center bgcolor=#cccccc>";
    echo "<td colspan=4><a href='calendar.php?year=$y_lnk1&month=$month'><</a>".$year."年
    <a href='calendar.php?year=$y_lnk2&month=$month'>></a></td>";
    echo "<td colspan=3><a href='calendar.php?year=$year&month=$m_lnk1'><</a>".$month."月
    <a href='calendar.php?year=$year&month=$m_lnk2'>></a></td></tr>";
    echo "<tr align=center>";
    for($i=0;$i<7;$i++){
        echo "<td>$wd_ar[$i]</td>";
    }
    echo "</tr>";
    $tnum = $wd+date("t",mktime(0,0,0,$month,1,$year));
    for($i=0;$i<$tnum;$i++){
        $date = $i+1-$wd;
        if($i%7 == 0)   echo "<tr align=center>";
        echo "<td>";
        if($i>=$wd){
            if($date == $day && $month == date("n")){
                echo "<b>".$day."</b>";
            }
            else
                echo $date;
        }
        echo "</td>";
        if($i%7 == 6){
            echo "</tr>";
        }
    }
    echo "</table>";
?>