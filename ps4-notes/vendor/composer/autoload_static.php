<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit204c0d2545b27fce364dfdaf623706d2
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVCNiklas\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVCNiklas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit204c0d2545b27fce364dfdaf623706d2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit204c0d2545b27fce364dfdaf623706d2::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
