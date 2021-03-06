<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4233f76e6739b791567a7b8d30d5c2cc
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'antoninval\\PackageComposer\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'antoninval\\PackageComposer\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit4233f76e6739b791567a7b8d30d5c2cc::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4233f76e6739b791567a7b8d30d5c2cc::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4233f76e6739b791567a7b8d30d5c2cc::$classMap;

        }, null, ClassLoader::class);
    }
}
