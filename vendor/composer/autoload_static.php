<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0913d31411f8c3c67797a90c8bce975c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0913d31411f8c3c67797a90c8bce975c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0913d31411f8c3c67797a90c8bce975c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}