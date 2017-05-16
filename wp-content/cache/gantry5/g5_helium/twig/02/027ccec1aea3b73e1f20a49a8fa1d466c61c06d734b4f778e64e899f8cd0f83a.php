<?php

/* @particles/contentarray.html.twig */
class __TwigTemplate_181e14ee57797592f64540f9d1a853472a154eb103365a78b3735902fd039806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/contentarray.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["attr_extra"] = "";
        // line 4
        if ($this->getAttribute(($context["particle"] ?? null), "extra", array())) {
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["particle"] ?? null), "extra", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["attributes"]) {
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attributes"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 7
                    $context["attr_extra"] = (((((($context["attr_extra"] ?? null) . " ") . twig_escape_filter($this->env, $context["key"])) . "=\"") . twig_escape_filter($this->env, $context["value"], "html_attr")) . "\"");
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attributes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 12
    public function block_particle($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $context["post_settings"] = $this->getAttribute(($context["particle"] ?? null), "post", array());
        // line 14
        echo "    ";
        $context["filter"] = $this->getAttribute(($context["post_settings"] ?? null), "filter", array());
        // line 15
        echo "    ";
        $context["sort"] = $this->getAttribute(($context["post_settings"] ?? null), "sort", array());
        // line 16
        echo "    ";
        $context["limit"] = $this->getAttribute(($context["post_settings"] ?? null), "limit", array());
        // line 17
        echo "    ";
        $context["display"] = $this->getAttribute(($context["post_settings"] ?? null), "display", array());
        // line 18
        echo "
    ";
        // line 20
        echo "    ";
        $context["sticky_posts"] = (($this->getAttribute(($context["filter"] ?? null), "sticky", array())) ? (false) : (true));
        // line 21
        echo "
    ";
        // line 23
        echo "    ";
        $context["query_parameters"] = array("cat" => twig_replace_filter($this->getAttribute(        // line 24
($context["filter"] ?? null), "categories", array()), " ", ","), "posts_per_page" => (($this->getAttribute(        // line 25
($context["limit"] ?? null), "total", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["limit"] ?? null), "total", array()), "-1")) : ("-1")), "offset" => (($this->getAttribute(        // line 26
($context["limit"] ?? null), "start", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["limit"] ?? null), "start", array()), "0")) : ("0")), "orderby" => $this->getAttribute(        // line 27
($context["sort"] ?? null), "orderby", array()), "order" => $this->getAttribute(        // line 28
($context["sort"] ?? null), "ordering", array()), "ignore_sticky_posts" =>         // line 29
($context["sticky_posts"] ?? null));
        // line 31
        echo "
    ";
        // line 32
        $context["posts"] = $this->getAttribute(($context["wordpress"] ?? null), "call", array(0 => "Timber::get_posts", 1 => ($context["query_parameters"] ?? null)), "method");
        // line 33
        echo "
    ";
        // line 35
        echo "    <div class=\"g-content-array g-wordpress-posts";
        if ($this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", array()), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["particle"] ?? null), "css", array()), "class", array()), "html", null, true);
        }
        echo "\" ";
        if ($this->getAttribute(($context["particle"] ?? null), "extra", array())) {
            echo ($context["attr_extra"] ?? null);
        }
        echo ">

        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["posts"] ?? null), $this->getAttribute(($context["limit"] ?? null), "columns", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 38
            echo "            <div class=\"g-grid\">
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["column"]);
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 40
                echo "
                    <div class=\"g-block\">
                        <div class=\"g-content\">
                            <div class=\"g-array-item\">
                                ";
                // line 44
                if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "image", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($context["post"], "thumbnail", array()), "src", array()))) {
                    // line 45
                    echo "                                    <div class=\"g-array-item-image\">
                                        <a href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "link", array()), "html", null, true);
                    echo "\">
                                            <img src=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($this->getAttribute($context["post"], "thumbnail", array()), "src", array())), "html", null, true);
                    echo "\" />
                                        </a>
                                    </div>
                                ";
                }
                // line 51
                echo "
                                ";
                // line 52
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "enabled", array())) {
                    // line 53
                    echo "                                    <div class=\"g-array-item-title\">
                                        <h3 class=\"g-item-title\">
                                            <a href=\"";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "link", array()), "html", null, true);
                    echo "\">
                                                ";
                    // line 56
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "limit", array())) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText($this->getAttribute($context["post"], "title", array()), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "title", array()), "limit", array()))) : ($this->getAttribute($context["post"], "title", array()))), "html", null, true);
                    echo "
                                            </a>
                                        </h3>
                                    </div>
                                ";
                }
                // line 61
                echo "
                                ";
                // line 62
                if (((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "enabled", array()) || $this->getAttribute($this->getAttribute(($context["display"] ?? null), "author", array()), "enabled", array())) || $this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", array()), "enabled", array())) || $this->getAttribute($this->getAttribute(($context["display"] ?? null), "comments", array()), "enabled", array()))) {
                    // line 63
                    echo "                                    <div class=\"g-array-item-details\">
                                        ";
                    // line 64
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "enabled", array())) {
                        // line 65
                        echo "                                            <span class=\"g-array-item-date\">
                                                ";
                        // line 66
                        if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "enabled", array()) == "modified")) {
                            // line 67
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->getAttribute($context["post"], "post_modified", array()), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "format", array()))), "html", null, true);
                            echo "
                                                ";
                        } else {
                            // line 69
                            echo "                                                    <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('date')->getCallable(), array($this->getAttribute($context["post"], "post_date", array()), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "date", array()), "format", array()))), "html", null, true);
                            echo "
                                                ";
                        }
                        // line 71
                        echo "                                            </span>
                                        ";
                    }
                    // line 73
                    echo "
                                        ";
                    // line 74
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "author", array()), "enabled", array())) {
                        // line 75
                        echo "                                            <span class=\"g-array-item-author\">
                                                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>";
                        // line 76
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "author", array()), "name", array()), "html", null, true);
                        echo "
                                            </span>
                                        ";
                    }
                    // line 79
                    echo "
                                        ";
                    // line 80
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", array()), "enabled", array())) {
                        // line 81
                        echo "                                            ";
                        $context["category_link"] = ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "category", array()), "enabled", array()) == "link");
                        // line 82
                        ob_start();
                        // line 83
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
                        $context['loop'] = array(
                          'parent' => $context['_parent'],
                          'index0' => 0,
                          'index'  => 1,
                          'first'  => true,
                        );
                        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                            $length = count($context['_seq']);
                            $context['loop']['revindex0'] = $length - 1;
                            $context['loop']['revindex'] = $length;
                            $context['loop']['length'] = $length;
                            $context['loop']['last'] = 1 === $length;
                        }
                        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                            // line 84
                            if (($context["category_link"] ?? null)) {
                                // line 85
                                echo "<a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "link", array()), "html", null, true);
                                echo "\">
                                                            ";
                                // line 86
                                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                                echo "
                                                        </a>";
                            } else {
                                // line 89
                                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
                            }
                            // line 91
                            if ( !$this->getAttribute($context["loop"], "last", array())) {
                                echo twig_escape_filter($this->env, twig_trim_filter(","), "html", null, true);
                            }
                            // line 92
                            echo "                                                ";
                            ++$context['loop']['index0'];
                            ++$context['loop']['index'];
                            $context['loop']['first'] = false;
                            if (isset($context['loop']['length'])) {
                                --$context['loop']['revindex0'];
                                --$context['loop']['revindex'];
                                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        $context["post_categories"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 95
                        echo "<span class=\"g-array-item-category\">
                                                <i class=\"fa fa-folder-open\" aria-hidden=\"true\"></i>";
                        // line 96
                        echo ($context["post_categories"] ?? null);
                        echo "
                                            </span>
                                        ";
                    }
                    // line 99
                    echo "
                                        ";
                    // line 100
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "comments", array()), "enabled", array())) {
                        // line 101
                        ob_start();
                        // line 102
                        if (($this->getAttribute($context["post"], "comment_count", array()) == "0")) {
                            // line 103
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('__')->getCallable(), array("No comments", "gantry5")), "html", null, true);
                        } elseif (($this->getAttribute(                        // line 104
$context["post"], "comment_count", array()) == "1")) {
                            // line 105
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["post"], "comment_count", array()) . " ") . call_user_func_array($this->env->getFunction('__')->getCallable(), array("Comment", "gantry5"))), "html", null, true);
                        } else {
                            // line 107
                            echo twig_escape_filter($this->env, (($this->getAttribute($context["post"], "comment_count", array()) . " ") . call_user_func_array($this->env->getFunction('__')->getCallable(), array("Comments", "gantry5"))), "html", null, true);
                        }
                        $context["comment_count"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                        // line 111
                        echo "<span class=\"g-array-item-comments\">
                                                <i class=\"fa fa-comments\" aria-hidden=\"true\"></i>";
                        // line 112
                        echo twig_escape_filter($this->env, ($context["comment_count"] ?? null), "html", null, true);
                        echo "
                                            </span>
                                        ";
                    }
                    // line 115
                    echo "                                    </div>
                                ";
                }
                // line 117
                echo "
                                ";
                // line 118
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "type", array())) {
                    // line 119
                    echo "                                    ";
                    $context["post_text"] = ((($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "type", array()) == "excerpt")) ? ($this->getAttribute($context["post"], "post_excerpt", array())) : ($this->getAttribute($context["post"], "content", array())));
                    // line 120
                    echo "                                    <div class=\"g-array-item-text\">
                                        ";
                    // line 121
                    if (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "formatting", array()) == "text")) {
                        // line 122
                        echo "                                            ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateText(($context["post_text"] ?? null), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "limit", array()));
                        echo "
                                        ";
                    } else {
                        // line 124
                        echo "                                            ";
                        echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->truncateHtml(($context["post_text"] ?? null), $this->getAttribute($this->getAttribute(($context["display"] ?? null), "text", array()), "limit", array()));
                        echo "
                                        ";
                    }
                    // line 126
                    echo "                                    </div>
                                ";
                }
                // line 128
                echo "
                                ";
                // line 129
                if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array()), "enabled", array())) {
                    // line 130
                    echo "                                    <div class=\"g-array-item-read-more\">
                                        <a href=\"";
                    // line 131
                    echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "link", array()), "html", null, true);
                    echo "\">
                                            <button class=\"button";
                    // line 132
                    if ($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array()), "css", array())) {
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array()), "css", array()), "html", null, true);
                    }
                    echo "\">";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["display"] ?? null), "read_more", array(), "any", false, true), "label", array()), "Read More...")) : ("Read More...")), "html", null, true);
                    echo "</button>
                                        </a>
                                    </div>
                                ";
                }
                // line 136
                echo "                            </div>
                        </div>
                    </div>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 141
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "@particles/contentarray.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 143,  374 => 141,  364 => 136,  352 => 132,  348 => 131,  345 => 130,  343 => 129,  340 => 128,  336 => 126,  330 => 124,  324 => 122,  322 => 121,  319 => 120,  316 => 119,  314 => 118,  311 => 117,  307 => 115,  301 => 112,  298 => 111,  294 => 107,  291 => 105,  289 => 104,  287 => 103,  285 => 102,  283 => 101,  281 => 100,  278 => 99,  272 => 96,  269 => 95,  254 => 92,  250 => 91,  247 => 89,  242 => 86,  237 => 85,  235 => 84,  218 => 83,  216 => 82,  213 => 81,  211 => 80,  208 => 79,  202 => 76,  199 => 75,  197 => 74,  194 => 73,  190 => 71,  184 => 69,  178 => 67,  176 => 66,  173 => 65,  171 => 64,  168 => 63,  166 => 62,  163 => 61,  155 => 56,  151 => 55,  147 => 53,  145 => 52,  142 => 51,  135 => 47,  131 => 46,  128 => 45,  126 => 44,  120 => 40,  116 => 39,  113 => 38,  109 => 37,  96 => 35,  93 => 33,  91 => 32,  88 => 31,  86 => 29,  85 => 28,  84 => 27,  83 => 26,  82 => 25,  81 => 24,  79 => 23,  76 => 21,  73 => 20,  70 => 18,  67 => 17,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  48 => 1,  37 => 7,  33 => 6,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/contentarray.html.twig", "/Applications/MAMP/htdocs/wp_gantry/wp-content/plugins/gantry5/engines/nucleus/particles/contentarray.html.twig");
    }
}
