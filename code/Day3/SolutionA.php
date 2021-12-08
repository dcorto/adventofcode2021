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

        $gamma = [];
        $epsilon = [];

        $zeros = [];
        $ones = [];

        foreach($input as $mask) {            
            $array = str_split(trim($mask));

            foreach($array as $key => $bit) {                
                if((string) $bit === "0" ) {
                    if(isset($zeros[$key])) {                        
                        $zeros[$key] = ++$zeros[$key]; 
                    }
                    else {
                        $zeros[$key] = 1;
                    }
                }

                if((string) $bit === "1" ) {
                    if(isset($ones[$key])) {
                        $ones[$key] = ++$ones[$key]; 
                    }
                    else {
                        $ones[$key] = 1;
                    }
                }
            }                
        }

        for($i=0;$i<count($zeros);$i++) {
            if($zeros[$i] > $ones[$i]) {
                $gamma[$i] = 0;
                $epsilon[$i] = 1;
            }
            else{
                $gamma[$i] = 1;
                $epsilon[$i] = 0; 
            }
        }

        $powerConsumption = bindec(implode($gamma)) * bindec(implode($epsilon));

        $this->printSolution((string) $powerConsumption);

        return Command::SUCCESS;
    }
}
