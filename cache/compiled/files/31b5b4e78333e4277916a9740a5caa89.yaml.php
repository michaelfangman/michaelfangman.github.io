<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/portfolio-grav-2016/user/themes/fangman-v1/blueprints/modular/project-desktop-slider.yaml',
    'modified' => 1462935126,
    'data' => [
        'title' => 'Project Desktop Slider',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'fields' => [
                                'header.project_ds_background_image' => [
                                    'type' => 'pagemediaselect',
                                    'size' => 'large',
                                    'label' => 'Background Image'
                                ],
                                'header.project_ds_slides' => [
                                    'name' => 'Desktop Slider Slides',
                                    'type' => 'list',
                                    'label' => 'Desktop Slider Slides',
                                    'fields' => [
                                        '.image' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'Project Image Laptop'
                                        ],
                                        '.alt' => [
                                            'type' => 'text',
                                            'label' => 'Project Image Alt Text'
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
