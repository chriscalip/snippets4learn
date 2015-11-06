<?php
/**
 * Added D.I. order management.
 * Notice that actual service classes (Logger,StreamHandler)
 * were not instantiated.
 *
 * Container is basically an associative array that holds service objects.
 *
 * @see
 * Definitions: Teach the Container
 * http://knpuniversity.com/screencast/symfony-journey-di/definition#play
 */
namespace Dino\Play;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

require __DIR__ . '/../vendor/autoload.php';

$container = new ContainerBuilder();

$loggerDefinition = new Definition('Monolog\Logger');
$loggerDefinition->setArguments(array(
  'main',
  array(new Reference('logger.stream_handler')),
));
$container->setDefinition('logger', $loggerDefinition);

$handlerDefinition = new Definition('Monolog\Handler\StreamHandler');
$handlerDefinition->setArguments(array(
  __DIR__ . '/dino.log'
));
$container->setDefinition('logger.stream_handler', $handlerDefinition);

runApp($container);

function runApp(ContainerBuilder $container)
{
  $container->get('logger')->info('ROOOOOOOOOOAR');
}
