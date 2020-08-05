<?php

function __($msg, $context) {
    $lang = key($context);
    $text = $context[$lang];
    return isset($text[$msg][$lang])?$text[$msg][$lang]:'';
}
