<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_3c30bf7a5002a91c46e2dd542198399dc05561910bc437c156366788a4ce62fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_38315ffa5e92f26de00e1df21763958544ef6a4f61a03c1004d7b1c3f2e844f0 = ($context["php_version"] ?? null)) && is_string($__internal_d1782612879fafc42eb38a3420f6863690cf060d160b75724c9d7f677f1a610e = "5.4") && ('' === $__internal_d1782612879fafc42eb38a3420f6863690cf060d160b75724c9d7f677f1a610e || 0 === strpos($__internal_38315ffa5e92f26de00e1df21763958544ef6a4f61a03c1004d7b1c3f2e844f0, $__internal_d1782612879fafc42eb38a3420f6863690cf060d160b75724c9d7f677f1a610e)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/Users/XMZ/EnterpriseWorks/gantry_wp/wp-content/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
