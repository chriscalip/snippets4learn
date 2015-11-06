<?php
/**
 * use of method pushHandler()
 * @see
 * Definition Unlocked
 * http://knpuniversity.com/screencast/symfony-journey-di/definition-unlocked
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
$loggerDefinition->addMethodCall('pushHandler', array(
  new Reference('logger.std_out_logger')
));
$loggerDefinition->addMethodCall('debug', array(
  'The logger just got started'
));
$container->setDefinition('logger', $loggerDefinition);

$handlerDefinition = new Definition('Monolog\Handler\StreamHandler');
$handlerDefinition->setArguments(array(
  __DIR__ . '/dino.log'
));
$container->setDefinition('logger.stream_handler', $handlerDefinition);

$stdOutLoggerDefinition = new Definition('Monolog\Handler\StreamHandler');
$stdOutLoggerDefinition->setArguments(array(
  'php://stdout'
));
$container->setDefinition('logger.std_out_logger', $stdOutLoggerDefinition);
runApp($container);

function runApp(ContainerBuilder $container)
{
  $container->get('logger')->info('ROOOOOOOOOOAR');
}
