<?php

namespace Advent\Day1;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Advent\Common;

class Solution extends Common {

    protected static $defaultName = 'solution:1';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $input = $this->loadInput(__DIR__."/input.txt");
        
        //Part one
        $solution = 0;
        $last = null;
        foreach ($input as $measure) {

            if(is_null($last)) {
                $last = $measure;
                continue;
            }
        
            if ($measure > $last) {
                $solution++;
            }
        
            $last = $measure;
        }

        $this->printSolutionOne((string) $solution);

        return Command::SUCCESS;
    }
}
