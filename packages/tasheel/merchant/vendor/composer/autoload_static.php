<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbca49da7f5a096f4618ed75d00558a72
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tasheel\\Merchant\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tasheel\\Merchant\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbca49da7f5a096f4618ed75d00558a72::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbca49da7f5a096f4618ed75d00558a72::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
