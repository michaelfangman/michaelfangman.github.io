<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/config/plugins/private.yaml',
    'modified' => 1470969620,
    'data' => [
        'enabled' => true,
        'routes' => [
            'login' => '/login',
            'logout' => '/logout'
        ],
        'session_ss' => 'random_value',
        'private_site' => true,
        'private_tag' => 'hidden',
        'enable_username' => false,
        'users' => [
            'no_user' => '3674951ec264a72168cb2d89a5f634e512f6629d'
        ],
        'texts' => [
            'h1' => 'Hello.',
            'h2' => 'This is a private site, please enter a password to proceed.'
        ],
        'fields' => [
            'username' => [
                'label' => 'Username',
                'placeholder' => 'Enter your username'
            ],
            'password' => [
                'label' => 'Password',
                'placeholder' => 'Password'
            ],
            'antispam' => [
                'label' => 'Antispam',
                'placeholder' => 'Please leave this field empty for Antispam'
            ],
            'login' => [
                'label' => 'Enter'
            ]
        ],
        'messages' => [
            'success' => 'You are logged.',
            'error' => 'Oops! The password you entered is incorrect. Feel free to send me a <a href=\'mailto:hello@michaelfangmn.com\'>message</a> if you\'re having trouble or would like access.',
            'fail' => 'Oops! The password you entered is incorrect. Feel free to send me a <a href=\'mailto:hello@michaelfangmn.com\'>message</a> if you\'re having trouble or would like access.'
        ]
    ]
];
