<?php
$a="20";

if($a%2==0){
    echo "$a is even number";
}
else{
    echo "$a is odd number";
    
}
$i="0";
    $sum="0";
    $odd="0";
    for($i=0;$i<=100;$i++){
        if($i%2==0){
            echo  $i." is even number<br>";
            $sum=$sum+$i;
        }
        else{
            echo $i." is odd number<br>";
            $odd=$odd+$i;
        }
    }
    echo $sum." sum of even" ;
    echo $odd." sum of odd" ;
    
    for($i=0;$i<=100;$i++){
        if($i/2)*2{
            echo  $i." is even number<br>";
        }
        else{
            echo $i." is odd number<br>";
           
        }
    

?>