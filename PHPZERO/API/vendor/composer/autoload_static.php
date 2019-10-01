<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c63125fed1b47c45fa6e39161290b39
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
        'C' => 
        array (
            'Core\\' => 5,
            'Controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Models',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Controllers',
        ),
    );

    public static $classMap = array (
        'Controllers\\HomeController' => __DIR__ . '/../..' . '/Controllers/HomeController.class.php',
        'Controllers\\NotfoundController' => __DIR__ . '/../..' . '/Controllers/NotfoundController.class.php',
        'Controllers\\TodoController' => __DIR__ . '/../..' . '/Controllers/TodoController.class.php',
        'Core\\Controller' => __DIR__ . '/../..' . '/Core/Controller.class.php',
        'Core\\Core' => __DIR__ . '/../..' . '/Core/Core.class.php',
        'Core\\Model' => __DIR__ . '/../..' . '/Core/Model.class.php',
        'Models\\Tarefas' => __DIR__ . '/../..' . '/Models/Tarefas.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c63125fed1b47c45fa6e39161290b39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c63125fed1b47c45fa6e39161290b39::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c63125fed1b47c45fa6e39161290b39::$classMap;

        }, null, ClassLoader::class);
    }
}
