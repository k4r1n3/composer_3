<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite93276d90b188062be39c48d44066747
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CowSay\\Traits\\' => 14,
            'CowSay\\Core\\' => 12,
            'CowSay\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CowSay\\Traits\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Traits',
        ),
        'CowSay\\Core\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Core',
        ),
        'CowSay\\' => 
        array (
            0 => __DIR__ . '/..' . '/gipetto/cowsay/src/Carcases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite93276d90b188062be39c48d44066747::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite93276d90b188062be39c48d44066747::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite93276d90b188062be39c48d44066747::$classMap;

        }, null, ClassLoader::class);
    }
}
