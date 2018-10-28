<?php

require __DIR__ . '/vendor/autoload.php';

exit(Autumn\Boot\AutumnApplication::run($argc, $argv));

/* OR
namespace market;

use \Autumn\Boot\AutumnApplication;

class Application
{
    public static function main($argc, $argv)
    {
        return ApplicationApplication::run(Application::class, $argc, $argv);
    }
}

exit(market\Application::main($argc, $argv));
*/