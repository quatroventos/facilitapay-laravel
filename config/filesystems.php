<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

        'avatars' => [
            'driver' => 'local',
            'root' => storage_path('app/public/avatars'),
            'url' => env('APP_URL').'/avatars',
            'visibility' => 'public',
        ],

        'items' => [
            'driver' => 'local',
            'root' => storage_path('app/public/items'),
            'url' => env('APP_URL').'/items',
            'visibility' => 'public',
        ],

        'courses' => [
            'driver' => 'local',
            'root' => storage_path('app/public/courses'),
            'url' => env('APP_URL').'/courses',
            'visibility' => 'public',
        ],

        'units' => [
            'driver' => 'local',
            'root' => storage_path('app/public/units'),
            'url' => env('APP_URL').'/units',
            'visibility' => 'public',
        ],

        'projects' => [
            'driver' => 'local',
            'root' => storage_path('app/public/projects'),
            'url' => env('APP_URL').'/projects',
            'visibility' => 'public',
        ],

        'teachers' => [
            'driver' => 'local',
            'root' => storage_path('app/public/teachers'),
            'url' => env('APP_URL').'/teachers',
            'visibility' => 'public',
        ],

        'blocks' => [
            'driver' => 'local',
            'root' => storage_path('app/public/blocks'),
            'url' => env('APP_URL').'/blocks',
            'visibility' => 'public',
        ],

        'team' => [
            'driver' => 'local',
            'root' => storage_path('app/public/team'),
            'url' => env('APP_URL').'/team',
            'visibility' => 'public',
        ],

        'partners' => [
            'driver' => 'local',
            'root' => storage_path('app/public/partners'),
            'url' => env('APP_URL').'/partners',
            'visibility' => 'public',
        ],

        'category' => [
            'driver' => 'local',
            'root' => storage_path('app/public/category'),
            'url' => env('APP_URL').'/category',
            'visibility' => 'public',
        ],


    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        // public_path('storage') => storage_path('app/public'),
        public_path('avatars') => storage_path('app/public/avatars'),
        public_path('items') => storage_path('app/public/items'),
        public_path('courses') => storage_path('app/public/courses'),
        public_path('units') => storage_path('app/public/units'),
        public_path('projects') => storage_path('app/public/projects'),
        public_path('teachers') => storage_path('app/public/teachers'),
        public_path('blocks') => storage_path('app/public/blocks'),
        public_path('team') => storage_path('app/public/team'),
        public_path('partners') => storage_path('app/public/partners'),
        public_path('category') => storage_path('app/public/category'),
    ],

];

