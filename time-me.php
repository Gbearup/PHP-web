<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

date_default_timezone_set("Asia/Taipei");

echo date("Y/m/d H:i:s");
echo "<br>";

$start = date("Y/m/h");
$end = "2024-12-24 ";
$starttime=strtotime($start);
echo "開始時間". $starttime;
echo "<br>";
$endtime=strtotime($end);
echo "結束時間". $endtime;
echo "<br>";

$gap=$endtime-$starttime;
echo '差距秒:'.$gap;
echo "<br>";
$days=$gap/(60*60*24);
echo "距威生日還有:".$days ."天";
echo "<br>";

?>

<?php
$start = date("Y-m-d");
$end = "2025-01-19";

$starttime=strtotime($start);
$endtime=strtotime($end);

$gapdays = ($endtime-$starttime)/(60*60*24);
echo "距老公生日還有".$gapdays."天";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>

<?php
// echo date("Y年m月d日");
// echo "<br>";echo "<br>";
// echo date("Y-m-d");
// echo "<br>"."<br>"."<br>";



echo date("Y/m/d");
echo "<br>";


$weekString=[
'Monday' =>['min' =>'一','short' =>'周一', 'fulltext' =>'星期一'],
'Tuesday' =>['min' =>'二','short' =>'周二', 'fulltext' =>'星期二'],
'Wednesday' =>['min' =>'三','short' =>'周三', 'fulltext' =>'星期三'],
'Thursday' =>['min' =>'四','short' =>'周四', 'fulltext' =>'星期四'],
'Friday' =>['min' =>'五','short' =>'周五', 'fulltext' =>'星期五'],
'Saturday' =>['min' =>'六','short' =>'周六', 'fulltext' =>'星期六'],
'Sunday' =>['min' =>'日','short' =>'周日', 'fulltext' =>'星期日']];

echo date("Y年m月d日");
echo "<br>";
echo date("m月d日");
echo "<br>";
echo date("m月d日").$weekString[date("1")]['min'];
echo "<br>";
echo date("m月d日").$weekString[date("1")]['short'];
echo "<br>";
echo date("m月d日").$weekString[date("1")]['fulltext'];
echo "<br>";
echo "今天是西元".date("Y年m月d日");

if (date("N")>5){
echo "假日";
}else{
    echo "上班日";
}

echo "<br>";
?>


<?php
for($i=0; $i<5; $i++){
  $timestamp=strtotime("+$i weeks". date("Y-m-d"));
  echo date("Y-m-d",$timestamp);
  echo "&nbsp;";
  echo $weekString[date("1")]['fulltext'];
  echo "<br>";
}

?>



<style>
table{
  border-collapse:collapse;
}
td{
padding:5px;
text-alien:center;
border:1px solid #999;
}
.hoidday{
background:pink;
color:#999;
}
.grey-text{
  color:#999;
}

.today{
  background:blue;
  color:white;
  font-weight:1px;
}

</style>

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
$d=strtotime("2024-10-24");
$firstDayWeek=date("w",strtotime(date("Y-m-1")));
echo $firstDayWeek;

/**echo date ("m/t",$d);  t是天數   m/t or md*/

for($i=0;$i<6;$i++){
   echo "<tr>";
   echo "<td>";
   echo $i+1;  /**輸出行數，顯示當前的行索引（從 1 開始） */
   echo "</td>";
   for ($j=0;$j<7;$j++){
       echo "<td>";
       $dayNum=$i*7 + $j +1- $firstDayWeek;
       if($dayNum<=date('t') && $dayNum>0 ){  /**檢查計算出的天數是否在當月的有效天數內*/
          echo $dayNum;     /**如果天數有效，則輸出天數。 */
       }                    /**elseif{$dayNum<=0  } */
       
       echo "</td>";

   }
   echo "</tr>";
}
// || shift + \

echo "<br>";
echo "<br>";
?>


<style>
table{
  border-collapse:collapse;
}
td{
padding:5px;
text-alien:center;
border:1px solid #999;
}

</style>

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

$firstDay=date("Y-m-1");  /**獲取當前月份的第一天 */
$firstDayTime=strtotime($firstDay); /**將 $firstDay 轉換為時間戳，這樣方便進行日期計算。 */
$firstDayWeek=date("w",strtotime(date("Y-m-1"))); /**獲取 $firstDay 是星期幾，返回值範圍是 0（星期日）到 6（星期六）。 */

for($i=0;$i<6;$i++){
   echo "<tr>";
   echo "<td>";
   echo $i+1;  /**輸出行數，顯示當前的行索引（從 1 開始） */
   echo "</td>";
   for ($j=0;$j<7;$j++){
       echo "<td>";
       $cell=$i*7+$j -$firstDayWeek; /**計算出當前儲存格對應的天數 */
                                      /**-$firstDayWeek：減去第一天是星期幾的值，以便正確對齊日曆。 */
       $theDayTime=strtotime("$cell days".$firstDay);
                       /**通過 $cell 計算出該天的時間戳，得到從 $firstDay 開始計算的日期。 */

      // 所需樣式CSS判斷
      $w=date("w",$theDayTime);

      $theMonth=(date("m",$theDayTime)==date("m"))?' ':'grey-text';

      $isToday=(date("Y-m-d",$theDayTime)==date("Y-m-d"))?'today':'';

      $isHoliday=($w==0 || $w=6)?'holiday':'';


      // if($w==0 || $w=6){
      //   echo "<td class = 'holiday'>";
      //   echo date("d",$theDayTime);
      //   echo "</td>";
      // }else{


       echo "<td class = '$theMonth $isToday'>";
       echo date("d",$theDayTime);
       echo "</td>";

      }


       echo date("Y-m-d", $theDayTime); /**格式化並輸出計算出的日期。 */

       echo "</td>";

   }
   echo "</tr>";

   


?>


<p>&nbsp;</p>
<p>&nbsp;</p>







</body>
</html>