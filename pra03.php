<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>document</title>

    <style>
           *{font-family:'courier New',Courier,monospace;
           }

    </style>

</head>
<body>
<h1>test</h1>
<h2> 正直角三角形 </h2>
 <?php 
 


for($i=0; $i<5 ; $i++){
    for($j=0; $j<=$i ; $j++){
    echo "*";
    }

    echo "<br>";
}

echo "<hr>";

for($i=0; $i<5 ; $i++){
    for($j=0; $j<($i+1) ; $j++){
    echo "*";
    }
    echo "<br>";
}

echo "<hr>";
echo "<h2>倒直角三角形</h2>";

for($i=5; $i>0 ; $i--){
    for($j=0; $j<$i ; $j++){
    echo "*";
    }
    echo "<br>";
}
?>


<h2> 正直角三角形 </h2>
 <?php 
 

for($i=0; $i<5 ; $i++){

    for($k=0; $k<4-$i ; $k++){
        echo "&nbsp;";
    }

    for($j=0; $j<(2*$i+1) ; $j++){
    echo "*";
    }
    echo "<br>";
}

?>

<h2> 正直角三角形 </h2>
 <?php 
 

for($i=0; $i<5 ; $i++){

    for($k=0; $k<4-$i ; $k++){
        echo "&nbsp;";
    }

    for($j=0; $j<(2*$i+1) ; $j++){
    echo "*";
    }
    echo "<br>";
}

?>




<h2> 倒正三角形 -改外圈，內圈不變 </h2>
 <?php 
 

for($i=4; $i>=0 ; $i--){
 
    for($k=0; $k<4-$i ; $k++){
        echo "&nbsp;";
    }

   
    for($j=0; $j<(2*$i+1) ; $j++){
    echo "*";
    }
    echo "<br>";
}

?>


<h2> 倒正三角形-改內圈，不改外圈</h2>
 <?php 
 

for($i=0; $i<5 ; $i++){

    for($k=0; $k<$i ; $k++){
        echo "&nbsp;";
    }

    for($j=0; $j<(((4-$i)*2)+1) ; $j++){
    echo "*";
    }
    echo "<br>";
}


?>

<h2> 菱形對角線 </h2>
 <?php 
$size = 21;
for($i=0; $i<floor($size/2) ; $i++){
    if($i>10){
        $k1=$i-$floor(size/2);
        $j1=2*($i-(2*($i-$floor(size/2))))+1;
    }else{
        $k1=floor($size/2)-$i;
        $j1=(2*$i+1);
    }

        for($k=0; $k<$k1 ; $k++){
            echo "&nbsp;";
        }
       
        for($j=0; $j<$j1; $j++){
        echo "*";
        }
        echo "<br>";      
}

?>






<h2> 矩形練習 </h2>
 <?php 
for ($i=0;$i<5;$i++){
    for ($j=0;$j<5;$j++){
        if($i==0 || $i==4){
            echo "*";  
        }else if ($j==0 || $j==4){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>

<h2> 矩形含對角線練習 </h2>
 <?php 
for ($i=0;$i<5;$i++){
    for ($j=0;$j<5;$j++){
        if($i==0 || $i==4){
            echo "*";  
        }else if ($j==0 || $j==4){
            echo "*";
        }else if ($j==$i || $j==(4-$i)){
            echo "*";
        
            
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>


<?php 
for ($i=0;$i<6;$i++){
    for ($j=0;$j<6;$j++){
        if($i==0 || $i==5){
            echo "*";  
        }else if ($j==0 || $j==5){
            echo "*";
        }else if ($j==$i || $j==(5-$i)){
            echo "*";
        
            
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>


<h2> 矩形練習-代數版 </h2>
 <?php 

 $width=10;

for ($i=0;$i<$width;$i++){
    for ($j=0;$j<$width;$j++){
        if($i==0 || $i==$width-1){
            echo "*";  
        }else if ($j==0 || $j==$width-1){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>


<h2> 矩形含對角線練習-代數版 </h2>
 <?php 

 $width=10;
for ($i=0;$i<$width;$i++){
    for ($j=0;$j<$width;$j++){
        if($i==0 || $i==$width-1){
            echo "*";  
        }else if ($j==0 || $j==$width-1){
            echo "*";
        }else if ($j==$i || $j==($width-1-$i)){
            echo "*";
        
            
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
?>



<h2> 菱形對角線 </h2>
 <?php 

$size=21;
for($i=0; $i<$size ; $i++){
    if($i>(floor($size/2))){
        $k1=$i-(floor($size/2));
        $j1=2*($i-(2*($i-(floor($size/2)))))+1;
    }else{
        $k1=(floor($size/2))-$i;
        $j1=(2*$i+1);
    }
        for($k=0; $k<$k1 ; $k++){
            echo "&nbsp;";
        }
       
        for($j=0; $j<$j1; $j++){
            if($j==0 || $j==$j1-1 || $i==(floor($size/2) )|| $j==(($j1-1)/2)){
                echo "*";
            }else{
                echo "&nbsp;";
            }
            
        
        }
        echo "<br>";      

    }
?>






</body>
</html>