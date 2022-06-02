<?php 

$str = "å";
$chr = '';
echo mb_convert_encoding($str, 'UTF-8');   