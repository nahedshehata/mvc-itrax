<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcc22a98e89526d9bfcc6eb092cb56eed
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitcc22a98e89526d9bfcc6eb092cb56eed', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcc22a98e89526d9bfcc6eb092cb56eed', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcc22a98e89526d9bfcc6eb092cb56eed::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
