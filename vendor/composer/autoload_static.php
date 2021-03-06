<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit64c207df70c8b4b269df6ac47657df02
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Stopwatch\\' => 28,
            'Stati\\Plugin\\Profiler\\Tests\\' => 28,
            'Stati\\Plugin\\Profiler\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Stopwatch\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/stopwatch',
        ),
        'Stati\\Plugin\\Profiler\\Tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'Stati\\Plugin\\Profiler\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit64c207df70c8b4b269df6ac47657df02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit64c207df70c8b4b269df6ac47657df02::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
