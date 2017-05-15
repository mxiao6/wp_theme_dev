<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1494885292,
    'checksum' => 'ef87fe0c29b635d278670d14f042a7e1',
    'files' => [
        'wp-content/themes/g5_helium/custom/config/left_custom' => [
            'assignments' => [
                'file' => 'wp-content/themes/g5_helium/custom/config/left_custom/assignments.yaml',
                'modified' => 1494873337
            ],
            'index' => [
                'file' => 'wp-content/themes/g5_helium/custom/config/left_custom/index.yaml',
                'modified' => 1494885275
            ],
            'layout' => [
                'file' => 'wp-content/themes/g5_helium/custom/config/left_custom/layout.yaml',
                'modified' => 1494885275
            ],
            'styles' => [
                'file' => 'wp-content/themes/g5_helium/custom/config/left_custom/styles.yaml',
                'modified' => 1494866904
            ]
        ]
    ],
    'data' => [
        'assignments' => [
            'context' => [
                
            ],
            'menu' => [
                
            ],
            'post' => [
                'page' => [
                    149 => true
                ]
            ],
            'taxonomy' => [
                
            ],
            'archive' => [
                
            ]
        ],
        'index' => [
            'name' => 'left_custom',
            'timestamp' => 1494885275,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1468340932
            ],
            'positions' => [
                
            ],
            'sections' => [
                'navigation' => 'Navigation',
                'intro' => 'Intro',
                'features' => 'Features',
                'utility' => 'Utility',
                'above' => 'Above',
                'testimonials' => 'Testimonials',
                'expanded' => 'Expanded',
                'header' => 'Header',
                'sidebar' => 'Sidebar',
                'mainbar' => 'Mainbar',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-3589' => 'Logo / Image',
                    'logo-7431' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-9952' => 'Menu'
                ],
                'social' => [
                    'social-4917' => 'Social'
                ],
                'custom' => [
                    'custom-5323' => 'Header',
                    'custom-2543' => 'Left Sidebar',
                    'custom-6150' => 'Flexible Layouts'
                ],
                'contentarray' => [
                    'contentarray-8482' => 'WordPress Posts'
                ],
                'copyright' => [
                    'copyright-7553' => 'Copyright'
                ],
                'horizontalmenu' => [
                    'horizontalmenu-4400' => 'Horizontal Menu'
                ],
                'totop' => [
                    'totop-9371' => 'To Top'
                ],
                'mobile-menu' => [
                    'mobile-menu-9585' => 'Mobile-menu'
                ]
            ],
            'inherit' => [
                'default' => [
                    'navigation' => 'navigation',
                    'logo-3589' => 'logo-9608',
                    'menu-9952' => 'menu-6409',
                    'social-4917' => 'social-3171',
                    'footer' => 'footer',
                    'logo-7431' => 'logo-9571',
                    'copyright-7553' => 'copyright-1736',
                    'horizontalmenu-4400' => 'horizontalmenu-9034',
                    'totop-9371' => 'totop-8670',
                    'offcanvas' => 'offcanvas',
                    'mobile-menu-9585' => 'mobile-menu-5697'
                ],
                'left_sidebar' => [
                    'header' => 'header',
                    'custom-5323' => 'custom-6833',
                    'intro' => 'intro',
                    'features' => 'features',
                    'utility' => 'utility',
                    'above' => 'above',
                    'testimonials' => 'testimonials',
                    'expanded' => 'expanded',
                    'sidebar' => 'sidebar',
                    'custom-2543' => 'custom-6361',
                    'custom-6150' => 'custom-9374'
                ]
            ]
        ],
        'layout' => [
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
                        ],
                        'css' => [
                            'class' => 'cus_div'
                        ]
                    ]
                ]
            ]
        ],
        'styles' => [
            'preset' => 'preset1'
        ]
    ]
];
