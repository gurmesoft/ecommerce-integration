<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8adb7065d4694d243bb4797117b0e616
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPShopify\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPShopify\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpclassic/php-shopify/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8adb7065d4694d243bb4797117b0e616::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8adb7065d4694d243bb4797117b0e616::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8adb7065d4694d243bb4797117b0e616::$classMap;

        }, null, ClassLoader::class);
    }
}
