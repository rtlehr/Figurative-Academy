<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/opt/bitnami/apps/joomla/htdocs/templates/g5_helium/blueprints/styles/expanded.yaml',
    'modified' => 1514751596,
    'data' => [
        'name' => 'Expanded Styles',
        'description' => 'Expanded section content styles for the Helium theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#424753'
                ]
            ]
        ]
    ]
];
