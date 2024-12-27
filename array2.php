<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>威力彩電腦選號沒有重覆號碼(利用while迴圈)</h1>


<ul>
    <li>使用亂數函式rand($a,$b)來產生號碼</li>
    <li>將產生的號碼順序存入陣列中</li>
    <li>每次存入陣列中時會先檢查陣列中的資料有沒有重覆</li>
    <li>完成選號後將陣列內容印出</li>
</ul>

<?php

$nums=[];

while(count($nums)<6){
    $n=rand(1,38);

    if ( !in_array($n,$nums)){   /**rand (1,38)是否有在$nums 裡面 */
        
        $nums[]=$n;
    }
}

foreach ($nums as $num){
    echo "$num, ";
}

echo "<br>";
sort($nums);      /**排序 */
foreach ($nums as $num){
    echo "$num, ";
}


echo "<hr>";
echo join(",",$nums);






$leap = [];

for ($i=2024;$i<=2524;$i++){
   if($i % 4==0 && ($i % 100 != 0 || $i % 400 == 0)){
    $leap[]=$i;
}
//     echo "西元";
//     echo $year;
//     echo "是閏年";
// }else{
//     echo "西元";
//     echo $year;
//     echo "是平年";

echo "<pre>";
print_r($leap);
echo "</pre>";
}

?>


<?Php

$sky = ["甲", "乙", "丙", "丁", "戊", "己", "庚", "辛", "壬", "癸"];
$land = ["子", "丑", "寅", "卯", "辰", "巳", "午", "未", "申", "酉", "戌", "亥"];

$s1=[];
for($i=0;$i<6;$i++){
    for($j=0;$j<10;$j++){
        $cellnum=10*$i+$j;
        $landIndex=$cellnum%12;
        echo $sky[$j];
        echo $land[$landIndex];
    }

}
$year=2032;
echo $s1[($year-4) % 60];


?>
// for ($i = 0; $i < 60; $i++) {
//     $tv = $i % 10; // 天干索引
//     $dv = $i % 12; // 地支索引
//     echo "$t[$tv]"."$d[$dv]";
   
// }

//


<!-- echo "<table>";
for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<10;$j++){
        $cellnum=10*$i+$j;
        $landIndex=$cellnum%12;
        echo "<td>";
        echo $sky[$j];
        echo $land[$landIndex];
        echo "</td>";
    }
echo "</tr>";
}

echo "</table>"; -->
















</body>
</html>