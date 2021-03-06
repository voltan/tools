<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt New BSD License
 */

/**
 * @author Hossein Azizabadi <azizabadi@faragostaresh.com>
 */
return [
    // Admin section
    'admin' => [
        'token'  => [
            'title'  => _a('Token'),
            'access' => [//'admin',
            ],
        ],
        'user'   => [
            'title'  => _a('User'),
            'access' => [//'admin',
            ],
        ],
        'social' => [
            'title'  => _a('Social'),
            'access' => [//'admin',
            ],
        ],
        'oauth'  => [
            'title'  => _a('oAuth'),
            'access' => [//'admin',
            ],
        ],
        'cron'   => [
            'title'  => _a('Cron'),
            'access' => [//'admin',
            ],
        ],
    ],
];