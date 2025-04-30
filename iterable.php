<?php
function printIterable(iterable $myIterable) {
    foreach($myIterable as $item){
    echo $item;
}
}
$arr=["b","m","w"];
printIterable($arr);
?>

