<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式語言基礎/github 操作練習</title>
</head>
<body style='text-align:center'>
<?php

define("PI",3.1415);


$price=100;
echo $price;

echo"<br>";echo"<br>";


$name="喔嗨唷";
echo $name;

echo"<br>";echo"<br>";

$total=1000*5+32/10*3;
echo $total;

echo"<br>";echo"<br>";


$num=rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49).",".rand(1,49);
echo $num;

echo"<br>";echo"<br>";

echo"圓周率是".PI;

// define("PI",0.6128);
// echo "<br>";
// echo  "圓周率是",PI;

echo"<br>";
echo"<br>";

?>

<?php

$a=10;
$b=50;
$tmp=$a;

$a=$b;
$b=$tmp;

echo "\$a=$a, \$b=$b"; 
unset($tmp);

echo"<br>";
echo"<br>";


?>  


</body>
</html>