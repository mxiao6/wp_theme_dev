<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/wp_theme_dev/wp-content/themes/g5_helium/blueprints/content/blog/read-more.yaml',
    'modified' => 1494945110,
    'data' => [
        'name' => 'Read More Button',
        'description' => 'Options for displaying Read More button',
        'type' => 'blog',
        'form' => [
            'fields' => [
                'label' => [
                    'type' => 'input.text',
                    'label' => 'Button Label',
                    'description' => 'Default Read More button label.',
                    'default' => 'Read More'
                ],
                'mode' => [
                    'type' => 'select.select',
                    'label' => 'Display Mode',
                    'description' => 'When set to Auto - theme detects <!--more--> tag inside of the post content.',
                    'default' => 'auto',
                    'options' => [
                        'auto' => 'Auto',
                        'always' => 'Always',
                        'never' => 'Never'
                    ]
                ]
            ]
        ]
    ]
];