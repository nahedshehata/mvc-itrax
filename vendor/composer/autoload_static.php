<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcc22a98e89526d9bfcc6eb092cb56eed
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rakit\\Validation\\' => 17,
        ),
        'M' => 
        array (
            'Mvc\\' => 4,
        ),
        'D' => 
        array (
            'Dcblogdev\\PdoWrapper\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rakit\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/rakit/validation/src',
        ),
        'Mvc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Dcblogdev\\PdoWrapper\\' => 
        array (
            0 => __DIR__ . '/..' . '/dcblogdev/pdo-wrapper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcc22a98e89526d9bfcc6eb092cb56eed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcc22a98e89526d9bfcc6eb092cb56eed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcc22a98e89526d9bfcc6eb092cb56eed::$classMap;

        }, null, ClassLoader::class);
    }
}
