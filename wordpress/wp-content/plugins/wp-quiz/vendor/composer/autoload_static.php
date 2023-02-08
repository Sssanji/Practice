<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfaa925701d3765493f2a04bdc54376d8
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPQuiz\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPQuiz\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WP_Async_Request' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-async-request.php',
        'WP_Background_Process' => __DIR__ . '/..' . '/a5hleyrich/wp-background-processing/classes/wp-background-process.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfaa925701d3765493f2a04bdc54376d8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfaa925701d3765493f2a04bdc54376d8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfaa925701d3765493f2a04bdc54376d8::$classMap;

        }, null, ClassLoader::class);
    }
}
