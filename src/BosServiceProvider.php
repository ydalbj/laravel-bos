<?php
namespace Ydalbj\Bos;

use League\Flysystem\Filesystem;
use Illuminate\Support\ServiceProvider;
use Ydalbj\Flysystem\Bos\BosAdapter;
use BaiduBce\Services\Bos\BosClient;
use Storage;

class BosServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Storage::extend('bos', function ($app, $config) {
            $client = new BosClient($config['options']);

            $filesystem = new Filesystem(new BosAdapter($client, $config['bucket']));

            return $filesystem;
        });
    }

    public function register()
    {
        //
    }
}
