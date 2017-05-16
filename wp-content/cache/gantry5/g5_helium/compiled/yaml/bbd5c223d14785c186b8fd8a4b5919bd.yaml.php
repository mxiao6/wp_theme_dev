<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/wp_theme_dev/wp-content/themes/g5_helium/blueprints/content/general/wpautop.yaml',
    'modified' => 1494945110,
    'data' => [
        'name' => 'wpautop Enabled',
        'description' => 'Enables the wpautop WordPress core filter',
        'type' => 'general',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable wpautop.',
                    'default' => 1
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'Enables the wpautop WordPress core filter that auto adds paragraphs and break lines to your post/page content.'
                ]
            ]
        ]
    ]
];
