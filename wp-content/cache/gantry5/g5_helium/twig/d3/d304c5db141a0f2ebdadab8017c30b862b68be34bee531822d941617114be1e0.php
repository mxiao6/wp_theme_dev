<?php

/* partials/pagination.html.twig */
class __TwigTemplate_3c80593e4e045fc5c631298c17a0ed45b85516a3e68d5022847cdb548cd45689 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pagination' => array($this, 'block_pagination'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["twigTemplate"] = "pagination.html.twig";
        // line 2
        echo "
<div class=\"pagination\">

    ";
        // line 5
        $this->displayBlock('pagination', $context, $blocks);
        // line 43
        echo "
</div>
";
    }

    // line 5
    public function block_pagination($context, array $blocks = array())
    {
        // line 6
        echo "
        <p class=\"counter pull-right\">
            ";
        // line 8
        $context["current_page"] = "1";
        // line 9
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pagination"] ?? null), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 10
            echo "                ";
            if ($this->getAttribute($context["page"], "current", array())) {
                // line 11
                echo "                    ";
                $context["current_page"] = $this->getAttribute($context["page"], "title", array());
                // line 12
                echo "                ";
            }
            // line 13
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
            ";
        // line 15
        echo sprintf(call_user_func_array($this->env->getFunction('__')->getCallable(), array("Page %1\$s of %2\$s", "g5_helium")), ($context["current_page"] ?? null), $this->getAttribute(twig_last($this->env, $this->getAttribute(($context["pagination"] ?? null), "pages", array())), "name", array()));
        echo "
        </p>

        <ul class=\"pagination-list\">
            ";
        // line 19
        if ($this->getAttribute(($context["pagination"] ?? null), "prev", array())) {
            // line 20
            echo "                <li class=\"pagination-list-item pagination-prev ";
            echo ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["pagination"] ?? null), "prev", array()), "link", array()))) ? ("") : ("hide"));
            echo "\">
                    <a href=\"";
            // line 21
            echo $this->getAttribute($this->getAttribute(($context["pagination"] ?? null), "prev", array()), "link", array());
            echo "\" class=\"prev\">";
            echo call_user_func_array($this->env->getFunction('__')->getCallable(), array("Prev", "g5_helium"));
            echo "</a>
                </li>
            ";
        }
        // line 24
        echo "
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pagination"] ?? null), "pages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                <li class=\"pagination-list-item ";
            echo (($this->getAttribute($context["page"], "current", array())) ? ("current-item") : (""));
            echo "\">
                    ";
            // line 27
            if ($this->getAttribute($context["page"], "link", array())) {
                // line 28
                echo "                        <a href=\"";
                echo $this->getAttribute($context["page"], "link", array());
                echo "\" class=\"";
                echo $this->getAttribute($context["page"], "class", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "title", array());
                echo "</a>
                    ";
            } else {
                // line 30
                echo "                        <span class=\"";
                echo $this->getAttribute($context["page"], "class", array());
                echo "\">";
                echo $this->getAttribute($context["page"], "title", array());
                echo "</span>
                    ";
            }
            // line 32
            echo "                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
            ";
        // line 35
        if ($this->getAttribute(($context["pagination"] ?? null), "next", array())) {
            // line 36
            echo "                <li class=\"pagination-list-item pagination-next ";
            echo ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["pagination"] ?? null), "next", array()), "link", array()))) ? ("") : ("hide"));
            echo "\">
                    <a href=\"";
            // line 37
            echo $this->getAttribute($this->getAttribute(($context["pagination"] ?? null), "next", array()), "link", array());
            echo "\" class=\"next\">";
            echo call_user_func_array($this->env->getFunction('__')->getCallable(), array("Next", "g5_helium"));
            echo "</a>
                </li>
            ";
        }
        // line 40
        echo "        </ul>

    ";
    }

    public function getTemplateName()
    {
        return "partials/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 40,  138 => 37,  133 => 36,  131 => 35,  128 => 34,  121 => 32,  113 => 30,  103 => 28,  101 => 27,  96 => 26,  92 => 25,  89 => 24,  81 => 21,  76 => 20,  74 => 19,  67 => 15,  64 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 43,  27 => 5,  22 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "partials/pagination.html.twig", "/Users/XMZ/EnterpriseWorks/gantry_wp/wp-content/themes/g5_helium/views/partials/pagination.html.twig");
    }
}
