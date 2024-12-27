<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php

$a=[2,4,6,1,8];
echo "<per>";
print_r($a);
echo "</per>";

for($i=0; $i<floor(count($a)/2);$i++){
    $temp=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$temp;
    

    // $a[0]  $a[count($a)-1-$i] 5-1-0 ->4
    // $a[1]  $a[count($a)-1-$i] 5-1-1 ->3
    // $a[2]  $a[count($a)-1-$i] 5-1-2 ->2
    // $a[3]  $a[count($a)-1-$i] 5-1-3 ->1
    // $a[4]  $a[count($a)-1-$i] 5-1-4 ->0


   
}





// count(floor($n%2))  /**floor 無條件捨去 */



?>


</body>
</html>