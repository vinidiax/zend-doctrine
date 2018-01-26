<?php

use \User\Entity\User;


return [
    'doctrine' => [
        'connection' => [
        // default connection name
            'orm_default' => [
                'driverClass' => \Doctrine\DBAL\Driver\Mysqli\Driver::class,
                'params' => [
                        'host'     => 'mysql.vinidiax.kinghost.net',
                        'port'     => '3306',
                        'user'     => 'vinidiax',
                        'password' => 'adere134',
                        'dbname'   => 'vinidiax',
                ],
            ],
        ],
        'authentication' => [
            'orm_default' => [
                'object_manager' => \Doctrine\ORM\EntityManager::class,
                'identity_class' => User::class,
                'identity_property' => 'user_login',
                'credential_property' => 'user_password',
                'credential_callable' => function (User $user, $passwordSent) {
                    return password_verify($passwordSent, $user->getUserPassword());
                }
            ]
        ]
    ],
];