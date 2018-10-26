<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3524860ea029747574de345ace2c067d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Abraham\\TwitterOAuth\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Abraham\\TwitterOAuth\\' => 
        array (
            0 => __DIR__ . '/..' . '/abraham/twitteroauth/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3524860ea029747574de345ace2c067d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3524860ea029747574de345ace2c067d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
