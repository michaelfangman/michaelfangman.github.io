<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/plugins/view/blueprints.yaml',
    'modified' => 1458509293,
    'data' => [
        'name' => 'View',
        'version' => '1.3.2',
        'description' => 'A plugin that allows you to pass a page collection to a template.',
        'icon' => 'cog',
        'author' => [
            'name' => 'Elliot Mitchum',
            'email' => 'elliot.mitchum@ellioseven.com',
            'url' => 'https://github.com/ellioseven'
        ],
        'homepage' => 'https://github.com/ellioseven/grav-plugin-view',
        'demo' => '-',
        'keywords' => 'view, collection, modular',
        'bugs' => 'https://github.com/ellioseven/grav-plugin-view/issues',
        'license' => 'MIT',
        'form' => [
            'fields' => [
                'template' => [
                    'type' => 'text',
                    'label' => 'Default Modular Template',
                    'placeholder' => 'eg: partials/view',
                    'help' => 'Specify a default template to use display view collection'
                ]
            ]
        ]
    ]
];
