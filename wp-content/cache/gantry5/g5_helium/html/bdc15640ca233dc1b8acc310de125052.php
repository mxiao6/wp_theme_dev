<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '5919cb011251f5.17295234',
    'content' => '<div class="g-content g-particle">
                            
    <div class="">
        <h2 class="g-title">Content Tabs</h2>
        <div class="g-contenttabs">
            <div id="g-contenttabs-contenttabs-6740" class="g-contenttabs-container">
                <ul class="g-contenttabs-tab-wrapper-container">

                                            <li class="g-contenttabs-tab-wrapper">
                            <span class="g-contenttabs-tab-wrapper-head">
                                <a class="g-contenttabs-tab" href="#g-contenttabs-item-1">
                                    <span class="g-contenttabs-tab-title">Simple</span>
                                </a>
                            </span>
                        </li>
                                            <li class="g-contenttabs-tab-wrapper">
                            <span class="g-contenttabs-tab-wrapper-head">
                                <a class="g-contenttabs-tab" href="#g-contenttabs-item-2">
                                    <span class="g-contenttabs-tab-title">Efficient</span>
                                </a>
                            </span>
                        </li>
                                            <li class="g-contenttabs-tab-wrapper">
                            <span class="g-contenttabs-tab-wrapper-head">
                                <a class="g-contenttabs-tab" href="#g-contenttabs-item-3">
                                    <span class="g-contenttabs-tab-title">Flexible</span>
                                </a>
                            </span>
                        </li>
                    
                </ul>

                <div class="clearfix"></div>

                <ul class="g-contenttabs-content-wrapper-container">

                                            <li class="g-contenttabs-tab-wrapper">
                            <div class="g-contenttabs-tab-wrapper-body">
                                <div id="g-contenttabs-item-1" class="g-contenttabs-content">
                                    The Content Tab particle is incredibly easy to set up and deploy in your website. You can create a new tab with a single click, name it, and enter its content in plain text or HTML to create a look and feel that meets your needs.
                                </div>
                            </div>
                        </li>
                                            <li class="g-contenttabs-tab-wrapper">
                            <div class="g-contenttabs-tab-wrapper-body">
                                <div id="g-contenttabs-item-2" class="g-contenttabs-content">
                                    The Content Tabs particle makes it possible to pack a lot of content into a small space, without sacrificing ease of use. Your visitors can browse between labeled tabs and explore your content without having to scroll through a wall of text.
                                </div>
                            </div>
                        </li>
                                            <li class="g-contenttabs-tab-wrapper">
                            <div class="g-contenttabs-tab-wrapper-body">
                                <div id="g-contenttabs-item-3" class="g-contenttabs-content">
                                    Create as few or as many tabs as you need, apply custom CSS classes, and position this particle wherever you would like it to go. The Content Tabs particle looks as good on a large desktop as it does on a mobile phone.
                                </div>
                            </div>
                        </li>
                    
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

            
    </div>',
    'frameworks' => [
        'jquery' => 1
    ],
    'scripts' => [
        'head' => [
            'b10edbabc26f378cc79f61df74a0bb6f69383e225e9f057f26a3a207c5ae78755f13aa1b' => [
                ':type' => 'file',
                ':priority' => 0,
                'src' => 'http://localhost/gantry_wp/wp-content/themes/g5_helium/js/juitabs.js',
                'type' => 'text/javascript',
                'defer' => false,
                'async' => false,
                'handle' => ''
            ]
        ],
        'footer' => [
            'f1c6464f18c22c2acf915adecf8049ed09c93c5e5495cb7d7137a455cda5918b5169c71f' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
        jQuery(window).load(function() {
            jQuery(\'#g-contenttabs-contenttabs-6740\').tabs({
                show: {
                                        effect: \'fade\',
                                        duration: 500
                }
            });
        });
    ',
                'type' => 'text/javascript'
            ]
        ]
    ]
];
