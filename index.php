<?php

require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

$output = $bessie->say();
echo $output;


$bessie->setEyes('oO')
    ->setTongue('U');
    echo $bessie;