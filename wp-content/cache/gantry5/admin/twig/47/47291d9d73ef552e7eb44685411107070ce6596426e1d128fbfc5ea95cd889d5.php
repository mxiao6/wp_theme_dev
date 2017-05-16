<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_f39a4eb894c15e9ec9d80935d4466d97fd1fc9ce2101146c6642911d97bccb14 extends Twig_Template
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
        if ((is_string($__internal_5b70d43190afe5f062dd1fdb805a2511c24ef1543e1647990d2b603f5a84d894 = ($context["php_version"] ?? null)) && is_string($__internal_9b69cb99d47f93729c67b5cd17897cfb9a6486a89c80080ce5f535934a005f30 = "5.4") && ('' === $__internal_9b69cb99d47f93729c67b5cd17897cfb9a6486a89c80080ce5f535934a005f30 || 0 === strpos($__internal_5b70d43190afe5f062dd1fdb805a2511c24ef1543e1647990d2b603f5a84d894, $__internal_9b69cb99d47f93729c67b5cd17897cfb9a6486a89c80080ce5f535934a005f30)))) {
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
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/Applications/MAMP/htdocs/wp_theme_dev/wp-content/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
