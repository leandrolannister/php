<?php

//It will print letter, full stop or space

 $string = "PHP 7.1";
 $regexp = "/\D/";

 preg_match_all($regexp, $string, $result);

 print_r($result);