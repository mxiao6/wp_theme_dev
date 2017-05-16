<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/wp_theme_dev/wp-content/themes/g5_helium/blueprints/styles/link.yaml',
    'modified' => 1494945110,
    'data' => [
        'name' => 'Link Colors',
        'description' => 'Link colors for the Helium theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'regular' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Link Color',
                    'default' => '#4db2b3'
                ],
                'hover' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Hover Color',
                    'default' => '#424753'
                ]
            ]
        ]
    ]
];