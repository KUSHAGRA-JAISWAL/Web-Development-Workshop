<?php
echo "Error 404";
function facto($num){
    $product = 1;

    for($i=$num; $i>=1; $i--){
        $product = $product * $i;
    }
    return $product;
}
echo facto(5);
?>
