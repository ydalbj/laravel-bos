## Requirement

* PHP >= 7.1

## Install
``` shell
$ composer require ydalbj/laravel-bos
```

## Configuration

Edit `config\filesystems.php`

Add bos configuration
```php
    'disks' => [

        ...

        'bos' => [
            'driver' => 'bos',
            'bucket' => env('BOS_BUCKET'),
            'options' => [
                'credentials' => [
                    'ak' => env('BOS_KEY'),
                    'sk' => env('BOS_SECRET'),
                ],
                'endpoint' => env('BOS_ENDPOINT', 'http://bj.bcebos.com'),
            ]
        ]
    ]
```
