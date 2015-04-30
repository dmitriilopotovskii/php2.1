<?php

function my_autoload($class)
{
    $paths = [
        __DIR__ . '/classes',
        __DIR__ . '/controllers',
        __DIR__ . '/models',
    ];

    foreach ($paths as $path) {
        $fileName = $path . '/' . $class . '.php';
        if (file_exists($fileName)) {
            require $fileName;
            return true;
        }
    }
    return false;

}
spl_autoload_register('my_autoload');
require __DIR__.'/vendor/autoload.php';