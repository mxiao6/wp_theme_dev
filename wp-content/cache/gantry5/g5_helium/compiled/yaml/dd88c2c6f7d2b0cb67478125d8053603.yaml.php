<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/gantry_wp/wp-content/plugins/gantry5/engines/nucleus/particles/widget.yaml',
    'modified' => 1494945110,
    'data' => [
        'name' => 'Widget',
        'description' => 'Display a single widget.',
        'icon' => 'fa-object-ungroup',
        'type' => 'position',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable widget particle.',
                    'default' => true
                ],
                'widget' => [
                    'type' => 'gantry.widget',
                    'label' => 'Widget',
                    'class' => 'g-urltemplate input-small',
                    'picker_label' => 'Pick a Widget',
                    'pattern' => '[a-z0-9_-]+',
                    'overridable' => false
                ],
                'chrome' => [
                    'type' => 'input.text',
                    'label' => 'Chrome',
                    'description' => 'Widget chrome.',
                    'placeholder' => 'gantry'
                ]
            ]
        ]
    ]
];
