<?php 

$email = 'leandrohendrixgmail.com';

if(filter_var($email, FILTER_VALIDATE_EMAIL)):
  echo "ok";
endif;  