<?php

/*

An iterable is any value which can be looped through with a foreach() loop.

*/

function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

$arr = ["a", "b", "c"];
printIterable($arr);
?>