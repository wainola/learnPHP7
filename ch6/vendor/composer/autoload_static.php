<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6f9f613ac0fc61ebbf9894a26232ad1
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'B' => 
        array (
            'Bookstore\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Bookstore\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6f9f613ac0fc61ebbf9894a26232ad1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6f9f613ac0fc61ebbf9894a26232ad1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita6f9f613ac0fc61ebbf9894a26232ad1::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}