<?php
/**
 * @see
 * Creating a Container in the Wild
 * http://knpuniversity.com/screencast/symfony-journey-di/container-in-the-wild
 */
namespace Dino\Play;

use Monolog\Logger;
require __DIR__ . '/../vendor/autoload.php';

$container = new ContainerBuilder();

$logger = new Logger('main');
$container->set('logger', $logger);

runApp($container);

function runapp(ContainerBuilder $container) {
  $container->get('logger')->info('roar v11');
}
