<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6daa0f20c8ea556c6d7d8f364b06992b
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6daa0f20c8ea556c6d7d8f364b06992b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6daa0f20c8ea556c6d7d8f364b06992b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6daa0f20c8ea556c6d7d8f364b06992b::$classMap;

        }, null, ClassLoader::class);
    }
}
