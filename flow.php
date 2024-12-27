<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>流程-if-else</h1>


<?php 
$score =50;
if($score >=60){
    echo "及格";
}else{
    echo "不及格"; 
}

echo '<br>';
echo '<br>';

?>

<h1>switch case </h1>

echo 'asdf $score addf';
echo "asdf{$score}addf";

<?php


$level="A";
switch($level){
    case "A":
          echo "表現優良，請繼續保持";
    case "B":
        echo "值得肯定，還有進步空間";
  break;
  case "C":
    echo "需要更多的練習";
  break;
  case "D":
    echo "需要加強基本功";
  break;
  default:
  echo "是否無心學業";
}
?>


<h1> 三元運算子 </h1>

<?php
$score=55;
echo ($score>=60)?"及格":"不及格";
?>
//以上程式碼相當於
$score =60;
if($score >=60){
    echo "及格";
}else{
    echo "不及格"; 
}






</body>
</html>