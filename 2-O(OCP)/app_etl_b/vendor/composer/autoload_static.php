<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3b62eb9083ed069cabb2643edf3553ab
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
        'src\\Leitor' => __DIR__ . '/../..' . '/src/Leitor.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3b62eb9083ed069cabb2643edf3553ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3b62eb9083ed069cabb2643edf3553ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3b62eb9083ed069cabb2643edf3553ab::$classMap;

        }, null, ClassLoader::class);
    }
}
