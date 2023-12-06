<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ccdc6ac09ffc4796ccdf962a0280227
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mh3yad\\Db\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mh3yad\\Db\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ccdc6ac09ffc4796ccdf962a0280227::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ccdc6ac09ffc4796ccdf962a0280227::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ccdc6ac09ffc4796ccdf962a0280227::$classMap;

        }, null, ClassLoader::class);
    }
}
