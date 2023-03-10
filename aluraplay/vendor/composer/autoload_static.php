<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf798193d24424523608b77b60beb3b9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Mvc\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Mvc\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf798193d24424523608b77b60beb3b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf798193d24424523608b77b60beb3b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf798193d24424523608b77b60beb3b9::$classMap;

        }, null, ClassLoader::class);
    }
}
