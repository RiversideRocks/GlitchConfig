<?php

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

$climate->out($argv[1]);
