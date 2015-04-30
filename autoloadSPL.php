<?php

function my_autoload($class)
{


    if (false !== strpos($class, '\\')) {
        $classNamePart = explode('\\', $class);
        if ('App' == $classNamePart[0]) {
            unset($classNamePart[0]);

            $classFileName = __DIR__ . '/' . implode('/', $classNamePart) . '.php';
            if (file_exists($classFileName)) {
                require $classFileName;
                return true;
            }
        }
        return false;
    }


    $paths = [
        __DIR__ . '/classes',
        __DIR__ . '/Controllers',
        __DIR__ . '/Models',
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
require __DIR__ . '/vendor/autoload.php';