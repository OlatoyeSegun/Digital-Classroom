<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb95eb0e058a37e8af62b569984d4fb3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'B' => 
        array (
            'Box\\Spout\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Box\\Spout\\' => 
        array (
            0 => __DIR__ . '/..' . '/box/spout/src/Spout',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb95eb0e058a37e8af62b569984d4fb3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb95eb0e058a37e8af62b569984d4fb3::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
