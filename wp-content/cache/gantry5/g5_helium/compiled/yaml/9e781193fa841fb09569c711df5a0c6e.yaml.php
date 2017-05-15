<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Users/XMZ/EnterpriseWorks/gantry_wp//wp-content/themes/g5_helium/blueprints/content/archive/meta-author.yaml',
    'modified' => 1493222622,
    'data' => [
        'name' => 'Author Meta',
        'description' => 'Options for displaying author meta',
        'type' => 'archive',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Author',
                    'description' => 'Display author.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Author',
                    'description' => 'Link author to his archives.',
                    'default' => 1
                ],
                'prefix' => [
                    'type' => 'input.text',
                    'label' => 'Author Prefix',
                    'description' => 'Display text directly before the author name.'
                ]
            ]
        ]
    ]
];
