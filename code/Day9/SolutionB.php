<?php

namespace Advent\Day9;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Advent\Common;

class SolutionB extends Common {

    protected static $defaultName = 'solution:9:b';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->printSolution("TODO");
        return Command::SUCCESS;
    }
}
