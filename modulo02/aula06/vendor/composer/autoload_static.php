<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3f6b2a85e795cd94d2b22b2783ac0c6
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modulo02\\Aula06\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modulo02\\Aula06\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3f6b2a85e795cd94d2b22b2783ac0c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3f6b2a85e795cd94d2b22b2783ac0c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd3f6b2a85e795cd94d2b22b2783ac0c6::$classMap;

        }, null, ClassLoader::class);
    }
}