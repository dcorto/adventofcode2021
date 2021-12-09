#!/usr/bin/env php

<?php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use Advent\Day1;
use Advent\Day2;
use Advent\Day3;
use Advent\Day9;

$application = new Application();

$application->add(new Day1\SolutionA());
$application->add(new Day1\SolutionB());

$application->add(new Day2\SolutionA());
$application->add(new Day2\SolutionB());

$application->add(new Day3\SolutionA());
$application->add(new Day3\SolutionB());

$application->add(new Day9\SolutionA());
$application->add(new Day9\SolutionB());

$application->run();
