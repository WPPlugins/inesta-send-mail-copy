<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4098fcba203683ea4bbf6422e57dea07
{
    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr0 = ComposerStaticInit4098fcba203683ea4bbf6422e57dea07::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}
