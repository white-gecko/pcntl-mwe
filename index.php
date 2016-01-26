<?php

require 'vendor/autoload.php';

$fork = new \duncan3dc\Helpers\Fork;
$fork->call(function() {
    for($i = 1; $i <= 3; $i++) {
        echo "Process A - " . $i . "\n";
        sleep(1);
    }
});

