<?php

namespace Advent\Day3;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Advent\Common;

class SolutionA extends Common {
    
    protected static $defaultName = 'solution:3:a';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $input = $this->loadInput(__DIR__."/input.txt");
        $solution = 0;

        $this->printSolution((string) $solution);

        return Command::SUCCESS;
    }
}
