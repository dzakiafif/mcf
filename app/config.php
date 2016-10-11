<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 05/10/16
 * Time: 16:32
 */

return [
  'common' => [
      'monolog.logfile' => __DIR__ . '/../app/logs/development.log',
      'asset.path' => __DIR__ . '/../public/assets'
  ],
    'db' => [
        'db.options' => [
            'driver' => 'pdo_mysql',
            'host' => '127.0.0.1',
            'username' => 'root',
            'password' => 'menara34',
            'dbname' => 'dbmcf'
        ],
    ],
    'twig' => [
        'twig.path' => __DIR__ . '/../src/Templates',
        'twig.options' => [
            'cache' => __DIR__ . '/cache/app_template',
            'auto_reload' => true
        ]
    ],
    'orm' => [
        'orm.em.options' => [
            'mappings' => [
                [
                    'type' => 'annotation',
                    'namespace' => 'Malang\Mcf\Domain\Entity',
                    'path' => __DIR__ . '/../src/Domain/Entity'
                ]
            ],
        ],
    ],
    'oauth' => [
        'oauth.services' => [
            'facebook' => [
                'key' => '699584760190296',
                'secret' => '2abcf3c6f8c6a11919f8aea93c8756af',
                'scope' => array('email'),
                'user_endpoint' => 'ttps://graph.facebook.com/me'
            ]
        ]
    ]
];