## Requirement

* PHP >= 7.1

## Install
``` shell
$ composer require ydalbj/laravel-bos
```

## Configuration

### Add bos configuration 

* Edit `config\filesystems.php`
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

### Define environment variables

* Edit `.env`
```php
BOS_BUCKET=your bucket
BOS_KEY=your bos access key id
BOS_SECRET=your bos secret key id
BOS_ENDPOINT=your bos endpoint
```
