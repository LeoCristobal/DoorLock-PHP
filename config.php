<?php

$env = parse_ini_file(__DIR__ . '/.env');
return [
    'database' => [
        'host' => $env['host'],
        'port' => $env['port'],
        'dbname' => $env['dbname'],
        'charset' => $env['charset'],
    ],
];
