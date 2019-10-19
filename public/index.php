<?php

use  App\Example\Example;

require_once dirname(__DIR__) . '/vendor/autoload.php';

$hello = new Example();
$hello->announce();
