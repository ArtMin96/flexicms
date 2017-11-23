<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf18486ed4d0525b56e8fea339bf0d377
{
    public static $files = array (
        '1bedf084a3e192a3bfbdc7d01137bf5d' => __DIR__ . '/../..' . '/Flexi/Functions/functions.php',
        'f4f92ab223ee85f05c5f0a55d3ccf88e' => __DIR__ . '/../..' . '/Flexi/Functions/localization.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Plugin\\' => 7,
        ),
        'M' => 
        array (
            'Modules\\' => 8,
        ),
        'F' => 
        array (
            'Flexi\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Plugin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/content/plugins',
        ),
        'Modules\\' => 
        array (
            0 => __DIR__ . '/../..' . '/modules',
        ),
        'Flexi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Flexi',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf18486ed4d0525b56e8fea339bf0d377::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf18486ed4d0525b56e8fea339bf0d377::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
