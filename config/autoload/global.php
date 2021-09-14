<?php

/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'db' => [
        'driver' => 'Pdo_Mysql',
        'host' => 'localhost',
        'database' => 'zf3_helpdesk',
        'username' => 'root',
        'password' => 'admin'
    ],
    'mail' => [
        'name'              => 'smtp.mailtrap.io',
        'host'              => 'smtp.mailtrap.io',
        'port'              => 2525,
        'connection_class'  => 'crammd5',
        'connection_config' => [
            'username' => '8742c0194b4c97',
            'password' => 'bdea4f03e2cc10',
        ],
    ]
];
