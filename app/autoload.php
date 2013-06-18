<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var $loader ClassLoader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

/*
$loader->registerPrefixes(array(
    'Barcode_' => __DIR__.'/../vendor/barcode/lib',
));
*/

$loader->add('Barcode_', __DIR__.'/../vendor/barcode/library');
set_include_path(__DIR__.'/../vendor/barcode/library'.PATH_SEPARATOR.get_include_path());



AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
