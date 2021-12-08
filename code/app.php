#!/usr/bin/env php

<?php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use Advent\Day1;
use Advent\Day2;

$application = new Application();

$application->add(new Day1\Solution());
$application->add(new Day2\SolutionA());
$application->add(new Day2\SolutionB());

$application->run();
