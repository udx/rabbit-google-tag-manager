<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb8f168a41c9ee7b46b95b62c287af0b0
{
    public static $files = array (
        'dc2858566100c4d5b4b336054e275979' => __DIR__ . '/..' . '/felixarntz/leavesandlove-wp-plugin-util/leavesandlove-wp-plugin-loader.php',
        '95ae107def7ad3f3d476e268a7799720' => __DIR__ . '/..' . '/felixarntz/leavesandlove-wp-plugin-util/leavesandlove-wp-plugin.php',
        '29beb5655e1bbf5a04d6c4dc08724b9a' => __DIR__ . '/..' . '/felixarntz/leavesandlove-wp-plugin-util/leavesandlove-wp-plugin-util.php',
        '1b799000d9fa55f70f166b2730aec1ef' => __DIR__ . '/..' . '/felixarntz/options-definitely/inc/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPOD\\' => 5,
            'WPDLib\\' => 7,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPOD\\' => 
        array (
            0 => __DIR__ . '/..' . '/felixarntz/options-definitely/inc/WPOD',
        ),
        'WPDLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/felixarntz/wpdlib/inc/WPDLib',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb8f168a41c9ee7b46b95b62c287af0b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb8f168a41c9ee7b46b95b62c287af0b0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
