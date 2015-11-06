<?php
/**
 * @see
 * Creating a Container in the Wild
 * http://knpuniversity.com/screencast/symfony-journey-di/container-in-the-wild
 */
namespace Dino\Play;

use Monolog\Logger;
require __DIR__ . '/../vendor/autoload.php';

$logger = new Logger('main');
$logger->info('roar');
