<?php 

$a = ['a', 'b' => 'c'];

echo "<pre>";
print_r($a);
echo "</pre>";

echo property_exists((object) $a, 'a');

echo property_exists((object) $a, 'b');
