<?php
namespace Challenge;
require '../vendor/autoload.php';

$input = array(
    new Numbers(100)
);

$results = new PrintNumbers($input);
echo $results->output();