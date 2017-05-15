<?php

/* partials/content-page.html.twig */
class __TwigTemplate_1f0d87402314463734803a87439d360c79a39140f0a3a154d155bdf6d204c336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<article class=\"post-type-";
        echo $this->getAttribute(($context["post"] ?? null), "post_type", array());
        echo " ";
        echo $this->getAttribute(($context["post"] ?? null), "class", array());
        echo "\" id=\"post-";
        echo $this->getAttribute(($context["post"] ?? null), "ID", array());
        echo "\">

    ";
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "
</article>
";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
        ";
        // line 6
        echo "        <section class=\"entry-header\">

            ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".title.enabled"), 1 => "1"), "method")) {
            // line 9
            echo "                ";
            // line 10
            echo "                <h2 class=\"entry-title\">
                    ";
            // line 11
            if ($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".title.link"), 1 => "0"), "method")) {
                // line 12
                echo "                        <a href=\"";
                echo $this->getAttribute(($context["post"] ?? null), "link", array());
                echo "\" title=\"";
                echo $this->getAttribute(($context["post"] ?? null), "title", array());
                echo "\">";
                echo $this->getAttribute(($context["post"] ?? null), "title", array());
                echo "</a>
                    ";
            } else {
                // line 14
                echo "                        ";
                echo $this->getAttribute(($context["post"] ?? null), "title", array());
                echo "
                    ";
            }
            // line 16
            echo "                </h2>
                ";
            // line 18
            echo "            ";
        }
        // line 19
        echo "
            ";
        // line 21
        echo "            ";
        if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-date.enabled"), 1 => "1"), "method") || $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".meta-author.enabled"), 1 => "1"), "method"))) {
            // line 22
            echo "                ";
            $this->loadTemplate(array(0 => (("partials/meta-" . ($context["scope"] ?? null)) . ".html.twig"), 1 => "partials/meta.html.twig"), "partials/content-page.html.twig", 22)->display($context);
            // line 23
            echo "            ";
        }
        // line 24
        echo "            ";
        // line 25
        echo "
        </section>
        ";
        // line 28
        echo "
        ";
        // line 30
        echo "        ";
        if ( !call_user_func_array($this->env->getFunction('function')->getCallable(), array("post_password_required", $this->getAttribute(($context["post"] ?? null), "ID", array())))) {
            // line 31
            echo "
            ";
            // line 33
            echo "            <section class=\"entry-content\">

                ";
            // line 36
            echo "                ";
            if (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.enabled"), 1 => "1"), "method") && $this->getAttribute($this->getAttribute(($context["post"] ?? null), "thumbnail", array()), "src", array()))) {
                // line 37
                echo "                    ";
                $context["position"] = ((($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.position"), 1 => "none"), "method") == "none")) ? ("") : (("float-" . $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.position"), 1 => "none"), "method"))));
                // line 38
                echo "                    <a href=\"";
                echo $this->getAttribute(($context["post"] ?? null), "link", array());
                echo "\" class=\"post-thumbnail\" aria-hidden=\"true\">
                        <img src=\"";
                // line 39
                echo Timber\ImageHelper::resize($this->getAttribute($this->getAttribute(($context["post"] ?? null), "thumbnail", array()), "src", array()), $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.width"), 1 => "1200"), "method"), $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("content." . ($context["scope"] ?? null)) . ".featured-image.height"), 1 => "350"), "method"));
                echo "\" class=\"featured-image tease-featured-image ";
                echo ($context["position"] ?? null);
                echo "\" alt=\"";
                echo $this->getAttribute(($context["post"] ?? null), "title", array());
                echo "\" />
                    </a>
                ";
            }
            // line 42
            echo "                ";
            // line 43
            echo "
                ";
            // line 45
            echo "                ";
            echo $this->getAttribute(($context["post"] ?? null), "content", array());
            echo "

                ";
            // line 47
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), array("wp_link_pages", array("before" => "<div class=\"page-links\" itemprop=\"pagination\">", "after" => "</div>", "link_before" => "<span class=\"page-number page-numbers\">", "link_after" => "</span>", "echo" => 0)));
            echo "
                ";
            // line 49
            echo "
                ";
            // line 51
            echo "                ";
            echo call_user_func_array($this->env->getFunction('function')->getCallable(), array("edit_post_link", call_user_func_array($this->env->getFunction('__')->getCallable(), array("Edit", "g5_helium")), "<span class=\"edit-link\">", "</span>"));
            echo "
                ";
            // line 53
            echo "
            </section>
            ";
            // line 56
            echo "
        ";
        } else {
            // line 58
            echo "
            ";
            // line 60
            echo "            <div class=\"password-form\">

                ";
            // line 63
            echo "                ";
            $this->loadTemplate("partials/password-form.html.twig", "partials/content-page.html.twig", 63)->display($context);
            // line 64
            echo "
            </div>
            ";
            // line 67
            echo "
        ";
        }
        // line 69
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "partials/content-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 69,  176 => 67,  172 => 64,  169 => 63,  165 => 60,  162 => 58,  158 => 56,  154 => 53,  149 => 51,  146 => 49,  142 => 47,  136 => 45,  133 => 43,  131 => 42,  121 => 39,  116 => 38,  113 => 37,  110 => 36,  106 => 33,  103 => 31,  100 => 30,  97 => 28,  93 => 25,  91 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 19,  76 => 18,  73 => 16,  67 => 14,  57 => 12,  55 => 11,  52 => 10,  50 => 9,  48 => 8,  44 => 6,  41 => 4,  38 => 3,  32 => 71,  30 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/content-page.html.twig", "/Users/XMZ/EnterpriseWorks/gantry_wp/wp-content/themes/g5_helium/views/partials/content-page.html.twig");
    }
}
