<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd961dcee88a3c02152b85c921876fccb
{
    public static $files = array (
        '08eca214f4d3690babeee667e1bd7ede' => __DIR__ . '/../..' . '/src/php/includes/deprecated.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'CyrToLat\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CyrToLat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/php',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'CyrToLat\\Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/../..' . '/libs/polyfill-mbstring/Mbstring.php',
        'CyrToLat\\WP_Background_Processing\\WP_Async_Request' => __DIR__ . '/../..' . '/libs/wp-background-processing/wp-async-request.php',
        'CyrToLat\\WP_Background_Processing\\WP_Background_Process' => __DIR__ . '/../..' . '/libs/wp-background-processing/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd961dcee88a3c02152b85c921876fccb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd961dcee88a3c02152b85c921876fccb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd961dcee88a3c02152b85c921876fccb::$classMap;

        }, null, ClassLoader::class);
    }
}
