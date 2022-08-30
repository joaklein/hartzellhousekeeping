<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd1f81dcebfda42f3250d8d7b01066d39
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd1f81dcebfda42f3250d8d7b01066d39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd1f81dcebfda42f3250d8d7b01066d39::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd1f81dcebfda42f3250d8d7b01066d39::$classMap;

        }, null, ClassLoader::class);
    }
}
