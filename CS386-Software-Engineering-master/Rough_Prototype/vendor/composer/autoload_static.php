<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit61c14bb3b65f569c43b284031b1045d4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit61c14bb3b65f569c43b284031b1045d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit61c14bb3b65f569c43b284031b1045d4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}