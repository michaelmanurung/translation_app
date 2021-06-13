<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3fd748a009f4dd4fb80882ef5c07e4fb
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Statickidz\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Statickidz\\' => 
        array (
            0 => __DIR__ . '/..' . '/statickidz/php-google-translate-free/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3fd748a009f4dd4fb80882ef5c07e4fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3fd748a009f4dd4fb80882ef5c07e4fb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3fd748a009f4dd4fb80882ef5c07e4fb::$classMap;

        }, null, ClassLoader::class);
    }
}