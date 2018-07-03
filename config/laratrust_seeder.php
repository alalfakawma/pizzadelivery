<?php

return [
    'role_structure' => [
        'superadmin' => [
            'users' => 'c,r,u,d',
            'orders' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'admin' => [
            'users' => 'c,r,u,d',
            'orders' => 'r,u,d',
            'profile' => 'r,u'
        ],
        'employee' => [
            'orders' => 'r,u',
            'profile' => 'r,u'
        ],
        'customer' => [
            'profile' => 'r,u',
            'orders' => 'c,d'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ]
];
