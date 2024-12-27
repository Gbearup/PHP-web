<?php

$n=100;
$count=0;

echo "n=".$n."<br>";
for ($i=3; $i<=$n ; $i++ ){
     $t=true;
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $t=false;
        }          
        $count++;
    }
    
    if ($t==true){
        echo "$i 是質數<br>";
    }
    
}
echo "<br>";
echo $count ;


//$i如果可以被任一個$i的數整除的話，那$i就不是質數
//echo "$i不是質數<br>";



echo "<br>";
echo "n=".$n."<br>";
for ($i=3; $i<=$n ; $i++ ){
     $t=true;
    for($j=2;$j<=($i/2);$j++){
        if($i%$j==0){
            $t=false;
        }          
        $count++;
    }
    
    if ($t==true){
        echo "$i 是質數<br>";
    }
    
}
echo "<br>";
echo $count ;


echo "<br>";
echo "n=".$n."<br>";
for ($i=3; $i<=$n ; $i++ ){
     $t=true;
    for($j=2;$j<=sqrt($i/2);$j++){
        if($i%$j==0){
            $t=false;
        }          
        $count++;
    }
    
    if ($t==true){
        echo "$i;";
    }
    
}
echo "<br>";
echo $count ;


?>


<h2>九九乘法表</h2>

<?php

echo"<table border=1>";

for($j=1; $j<=$i; $j++){
    echo"<tr>";

    for($i=1;$i<=9;$i++){
        echo"<td>";
        echo "$i x $j = ".($i*$j);
        echo"</td>";
    }
  
    echo"</tr>";

}

echo"</table>";
echo "<br>";
echo"<table border=1>";
echo "<tr>";

?>
<style>
.nine{
    border-collapse:collapse;
    margin:20px;

}
.nine td{
    border:1px solid #aaa;
    width:30px;
    height:30px;
    text-align: center;

}
.nine tr:nth-child(1),
.nine td:nth-child(1){
    background:blue;
    color:white

}

</style>


<?php
echo "<table class='nine'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
        for($i=0;$i<=9;$i++){
        echo "<td>";
        if($j==0 && $i==0){
            echo ""; 
        }else if ($j==0){
            echo $i;
        }else if ($i==0){
            echo $j;
        }else{    
            echo ($j*$i);
        }
        
        echo "</td>";
               
    }
    echo "</tr>";
}
echo "</table>";

?>

</style>
<h2> 九九乘法表 </h2>
<?php
echo "<table class='nine'>";
for($j=0;$j<=9;$j++){
    echo "<tr>";
    for($i=0;$i<=9;$i++){
        echo "<td>";
        if($j==0 && $i==0){
            echo "";
        }else if($j==0){
            echo $i;
        }else if($i==0){
            echo $j;
        }else{
            if($j<=$i){
                echo ($j*$i);
            }
            
        }

        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>






