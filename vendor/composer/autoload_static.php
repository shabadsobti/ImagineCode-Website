<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8631ffdd3c297c48ca7611f05c00c59d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8631ffdd3c297c48ca7611f05c00c59d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8631ffdd3c297c48ca7611f05c00c59d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
