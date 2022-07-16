<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d445fe7687e00abf14a357dcbebfb57
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d445fe7687e00abf14a357dcbebfb57::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d445fe7687e00abf14a357dcbebfb57::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d445fe7687e00abf14a357dcbebfb57::$classMap;

        }, null, ClassLoader::class);
    }
}
