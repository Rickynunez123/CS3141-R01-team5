<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf6ba80660ef19480d6a6d4b3da572d87
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

        spl_autoload_register(array('ComposerAutoloaderInitf6ba80660ef19480d6a6d4b3da572d87', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf6ba80660ef19480d6a6d4b3da572d87', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf6ba80660ef19480d6a6d4b3da572d87::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
