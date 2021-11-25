<?php

function swap($a,$b){
    echo "before swaping a=".$a." b= ".$b."<br>";
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;
echo "after swaping a=".$a." b= ".$b."<br>";
}
swap(10,20);
?>