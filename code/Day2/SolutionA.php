<?php

namespace Advent\Day2;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Advent\Common;

class SolutionA extends Common {
    private const FORWARD = "forward";
    private const DOWN = "down";
    private const UP = "up";

    protected static $defaultName = 'solution:2:a';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $input = $this->loadInput(__DIR__."/input.txt");
        
        $position = [0,0];
        $solution = 0;

        foreach($input as $command) {
            $position = $this->calculatePosition($position, $command);
        }
                
        $solution = $position[0]*$position[1];        
        $this->printSolution((string) $solution);

        return Command::SUCCESS;
    }

    private function calculatePosition(array $position, string $command): array {
        $found = strpos($command, self::FORWARD);
        if ($found !== false) {
            $units = (int) substr($command, strlen(self::FORWARD)+1);
            return $this->goForward($position, $units);    
        }
    
        $found = strpos($command, self::UP);
        if ($found !== false) {
            $units = (int) substr($command, strlen(self::UP)+1);
            return $this->goUp($position, $units);    
        }
    
        $found = strpos($command, self::DOWN);
        if ($found !== false) {
            $units = (int) substr($command, strlen(self::DOWN)+1);
            return $this->goDown($position, $units);    
        }
    
        return $position;
    }
     
    private function goForward(array $current, int $units): array {
        $new = $current;
        $new[0] = $new[0] + $units;    
        return $new;
    }
    
    private function goUp(array $current, int $units): array {
        $new = $current;
        $new[1] = $new[1] - $units;        
        return $new;
    }
    
    private function goDown(array $current, int $units): array {    
        $new = $current;
        $new[1] = $new[1] + $units;        
        return $new;
    }
}
