<?php

namespace Advent\Day1;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Advent\Common;

class SolutionB extends Common {

    protected static $defaultName = 'solution:1:b';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $mesurements = $this->loadInput(__DIR__."/input.txt");
        
        $solution = 0;
        
        for($i=3; $i<count($mesurements); $i++) {
            $current = $mesurements[$i] + $mesurements[$i-1] + $mesurements[$i-2];
            $previous = $mesurements[$i-1] + $mesurements[$i-2] + $mesurements[$i-3];
             
            if($current > $previous) {
                $solution++;
            }
        }
        
        $this->printSolution((string) $solution);

        return Command::SUCCESS;
    }
}
