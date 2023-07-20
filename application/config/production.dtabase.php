<?php

return [
    'default-connection' => 'concrete',
    'connections' => [
        'concrete' => [
            'driver' => 'concrete_pdo_mysql',
            'server' => '127.0.0.1',
            'database' => 'cms',
            'username' => 'cms',
            'password' => 'P@ssw0rdP@ssw0rd',
            'character_set' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
        ],
    ],
];
