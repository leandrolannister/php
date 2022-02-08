<?php 

$today = date_create(date("Y/m/d"));
$date2=date_create("2022-01-05");

$diff=date_diff($date2,$today)->format("%d");
