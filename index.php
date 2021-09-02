<?php

function orderBy($arr){
   return sort($arr);
}


$arr = [3,2,1];

var_dump(orderBy(&arr));