<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit47dedb9e656920734e71dc945b6b6739
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vectorface\\Whip\\' => 16,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vectorface\\Whip\\' => 
        array (
            0 => __DIR__ . '/..' . '/vectorface/whip/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit47dedb9e656920734e71dc945b6b6739::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit47dedb9e656920734e71dc945b6b6739::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}