<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0d188091926f93a65e3b1b78c8205b84
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0d188091926f93a65e3b1b78c8205b84::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0d188091926f93a65e3b1b78c8205b84::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}