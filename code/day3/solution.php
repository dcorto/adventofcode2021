<?php

$input = getInput();

foreach($input as $command) {
    echo $command;
}

$solution = "TODO";

echo "Solution: " . $solution . PHP_EOL;

function getInput(): array {
    $lines = [];
    $fp = fopen("input.txt", "r") or die ('Unable to open file');

    while(!feof($fp)) {
        $lines[] = fgets($fp);
    }

    return $lines;
}