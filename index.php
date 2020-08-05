<?php

include './functions.php';

$lang = 'en';
$text = array(
  'x' => array('en' => 'X')
);

echo __('x', [$lang => $text]);

