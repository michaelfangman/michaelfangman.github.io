<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/themes/fangman-v1/blueprints.yaml',
    'modified' => 1458507917,
    'data' => [
        'name' => 'Fangman',
        'version' => '1.0.0',
        'description' => 'description here...',
        'icon' => 'empire',
        'author' => [
            'name' => 'Michael Fangman',
            'email' => 'hello@michaelfangman.com',
            'url' => 'http://michaelfangman.com'
        ],
        'homepage' => NULL,
        'demo' => NULL,
        'keywords' => 'theme, core, modern, fast, responsive, html5, css3',
        'bugs' => NULL,
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'default_lang' => [
                    'type' => 'text',
                    'size' => 'x-small',
                    'label' => 'Default lang',
                    'default' => 'en',
                    'validate' => [
                        'type' => 'text'
                    ]
                ],
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
