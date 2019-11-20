<?php

include '../vendor/autoload.php';

$kirby = new Kirby([
    'roots' => [
        'index'    => __DIR__,
        'base'     => $base    = dirname(__DIR__),
        'site'     => $base . '/site',
        'storage'  => $storage = $base . '/storage',
        'content'  => $storage . '/content',
        'accounts' => $storage . '/accounts',
        'cache'    => $storage . '/cache',
        'media'    => $storage . '/media', // NOTE: needs symlink /public/media to /storage/media
        'sessions' => $storage . '/sessions',
    ]
]);

echo $kirby->render();
