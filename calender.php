<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{
        border-collapse:collapse;

    }
    td{
        padding:5px 10px;
        text-align: center;
        border:1px solid #999;
    }
    .holiday{
        background:pink;
        color:#999;
    }
    .grey-text{
        color:#999;
    }
    .today{
        background:blue;
        color:white;
        font-weight:bolder;
    }
</style>


</head>
<body>



<h3><?php echo date("m月");?></h3>
<table>
<tr>
    <td></td>
    <td>日</td>
    <td>一</td>
    <td>二</td>
    <td>三</td>
    <td>四</td>
    <td>五</td>
    <td>六</td>
</tr>
<?php
$Day1=date("Y-m-1");/**$firstDay */  /**每個月第一天*/
$Day1Q=strtotime($Day1); /**$firstDayTime */ 
$Day1W=date("w",$Day1Q);  /**$firstDayWeek */

for($i=0;$i<6;$i++){
    echo "<tr>";
    echo "<td>";
    echo $i+1;
    echo "</td>";
    for($j=0;$j<7;$j++){
        //echo "<td class='holiday'>";
        $c=$i*7+$j -$Day1W; /**$cell */  /**因為第一天是星期二，所以每一格都要減2才會跟本來的星期幾一樣*/
        $BB=strtotime("$c days".$Day1);  /**$theDayTime = $BB */

        //所需樣式css判斷
        $theMonth=(date("m",$BB)==date("m"))?'':'grey-text';
        $isToday=(date("Y-m-d",$BB)==date("Y-m-d"))?'today':'';
        $w=date("w",$BB);
        $isHoliday=($w==0 || $w==6)?'holiday':''; /**$isHoliday */
        
        echo "<td class='$isHoliday $theMonth $isToday'>";
        echo date("d",$BB);
        echo "</td>";
        
    }
    echo "</tr>";
}



?>
</table>





</body>
</html>
