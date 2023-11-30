<?php

include_once(__DIR__ . "/../vendor/autoload.php");

use App\SystemServices\MonologFactory;

MonologFactory::getInstance()->info("testando monolog:)");

echo "";
