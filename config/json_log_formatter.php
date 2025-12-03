<?php

return [
    'app_name' => env('LOG_APP_NAME', config('app.name', 'laravel')),
    'app_env' => env('LOG_APP_ENV', env('APP_ENV', 'production')),
    'schema_version' => 1,
];
