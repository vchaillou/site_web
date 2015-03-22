<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

$loader->add('Doctrine\\Common\\DataFixtures', __DIR__.'/../vendor/doctrine-fixtures/lib');
$loader->add('Doctrine\\Common',__DIR__.'/../vendor/doctrine-common/lib');

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
