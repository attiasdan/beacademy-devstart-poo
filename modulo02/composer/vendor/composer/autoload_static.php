<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff6bae737344ab0a4d6d9b957f19bf7a
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Danie\\Composer\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Danie\\Composer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitff6bae737344ab0a4d6d9b957f19bf7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff6bae737344ab0a4d6d9b957f19bf7a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitff6bae737344ab0a4d6d9b957f19bf7a::$classMap;

        }, null, ClassLoader::class);
    }
}
