<?php

namespace Advent;

use Symfony\Component\Console\Command\Command;

abstract class Common extends Command {

    protected function loadInput($filename): array {
        $lines = [];
        $fp = fopen($filename, "r") or die ('Unable to open file ' . $filename);

        while(!feof($fp)) {
            $lines[] = fgets($fp);
        }

        return $lines;
    }

    protected function printSolution(string $solution): void {
        echo "Solution is: " . $solution . PHP_EOL;
    }
}