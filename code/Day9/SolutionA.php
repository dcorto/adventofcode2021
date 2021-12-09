<?php

namespace Advent\Day9;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Advent\Common;

class SolutionA extends Common {

    protected static $defaultName = 'solution:9:a';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $input = $this->loadInput(__DIR__."/input.txt");

        $data = [];
        foreach ($input as $line) {
            $data[] = str_split(trim($line));
        }

        $solution = $this->findLow($data);
        $this->printSolution((string) $solution);

        return Command::SUCCESS;
    }

    private function findLow(array $matrix): int
    {
        $solution = 0;

        for($i=0;$i<count($matrix);$i++) {
            for($j=0;$j<count($matrix[$i]);$j++) {

                $left = PHP_INT_MAX;
                $right = PHP_INT_MAX;
                $up = PHP_INT_MAX;
                $down = PHP_INT_MAX;

                $current = $matrix[$i][$j];

                if(isset($matrix[$i][$j-1])){
                    $left = $matrix[$i][$j-1];
                }

                if(isset($matrix[$i][$j+1])){
                    $right = $matrix[$i][$j+1];
                }

                if(isset($matrix[$i-1][$j])){
                    $up = $matrix[$i-1][$j];
                }

                if(isset($matrix[$i+1][$j])){
                    $down = $matrix[$i+1][$j];
                }

                if($current < $left && $current < $right && $current < $up && $current < $down) {                    
                    $solution = $solution + ($current+1);
                }


            }
        }

        return $solution;
    }
}
