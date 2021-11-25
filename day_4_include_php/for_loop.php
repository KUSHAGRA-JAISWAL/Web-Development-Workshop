<?php
function even($x){
        $b=0;
        while ($b<=$x){
            if($b%2==0){
                echo $b." is even number<br>";
            }
            else{
                echo $b." is odd number<br>";
            }
            $b++;
        }
    }
        even(10);

        ?>