<?php

 $string = "PHP 7.1";
 $regexp = "/\S/";

 preg_match_all($regexp, $string, $result);

 print_r($result);