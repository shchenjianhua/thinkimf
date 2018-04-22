<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit758808083d63fd5bc439a68b7dd42a9f
{
    public static $files = array (
        'f04f8f12be659595d41ed38b5bb9869f' => __DIR__ . '/../..' . '/core/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Swoole\\Libs\\' => 12,
            'Swoole\\Controller\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Swoole\\Libs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/libs',
        ),
        'Swoole\\Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controller',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit758808083d63fd5bc439a68b7dd42a9f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit758808083d63fd5bc439a68b7dd42a9f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
