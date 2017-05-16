<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/wp_gantry/wp-content/themes/g5_helium/custom/config/left_custom/layout.yaml',
    'modified' => 1494945110,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1468340932
        ],
        'layout' => [
            'navigation' => [
                
            ],
            'header' => [
                
            ],
            'intro' => [
                
            ],
            'features' => [
                
            ],
            'utility' => [
                
            ],
            'above' => [
                
            ],
            'testimonials' => [
                
            ],
            'expanded' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'sidebar 25' => [
                            
                        ]
                    ],
                    1 => [
                        'mainbar 75' => [
                            0 => [
                                0 => 'contentarray-8482'
                            ]
                        ]
                    ]
                ]
            ],
            'footer' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'navigation' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'header' => [
                'inherit' => [
                    'outline' => 'left_sidebar',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'intro' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'left_sidebar',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'features' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'left_sidebar',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'utility' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'left_sidebar',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'above' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'left_sidebar',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'testimonials' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'left_sidebar',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'left_sidebar',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'inherit' => [
                    'outline' => 'left_sidebar',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main',
                'attributes' => [
                    'class' => ''
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children',
                        1 => 'attributes'
                    ]
                ]
            ]
        ],
        'content' => [
            'contentarray-8482' => [
                'title' => 'WordPress Posts',
                'attributes' => [
                    'post' => [
                        'filter' => [
                            'categories' => '1',
                            'sticky' => ''
                        ],
                        'limit' => [
                            'total' => '6',
                            'columns' => '3',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'date',
                            'ordering' => 'DESC'
                        ],
                        'display' => [
                            'image' => [
                                'enabled' => 'show'
                            ],
                            'title' => [
                                'enabled' => 'show',
                                'limit' => '20'
                            ],
                            'read_more' => [
                                'enabled' => 'show',
                                'css' => 'cus_button'
                            ],
                            'category' => [
                                'enabled' => ''
                            ],
                            'comments' => [
                                'enabled' => ''
                            ],
                            'text' => [
                                'type' => 'content',
                                'limit' => '100'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
