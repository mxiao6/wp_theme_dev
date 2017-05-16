<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/gantry_wp//wp-content/themes/g5_helium/blueprints/content/blog/title.yaml',
    'modified' => 1494945110,
    'data' => [
        'name' => 'Post Title',
        'description' => 'Options for displaying title',
        'type' => 'blog',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Title',
                    'description' => 'Display post titles.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Title',
                    'description' => 'Link titles to the posts.',
                    'default' => 0
                ]
            ]
        ]
    ]
];
