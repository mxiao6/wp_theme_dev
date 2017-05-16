<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_0eeba70d5862960e2b96ce91794cab8237b90c40b779008434bbf3698ed156d3 extends Twig_Template
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
        if ((is_string($__internal_b14ccdd476a8f216d7cb227f7f505401af01c08e03e2dec72f6e56657e2174f7 = ($context["php_version"] ?? null)) && is_string($__internal_88c6074980418f41b479b8d4d74d7d490c2dbac25190878469580f75f2cc1405 = "5.4") && ('' === $__internal_88c6074980418f41b479b8d4d74d7d490c2dbac25190878469580f75f2cc1405 || 0 === strpos($__internal_b14ccdd476a8f216d7cb227f7f505401af01c08e03e2dec72f6e56657e2174f7, $__internal_88c6074980418f41b479b8d4d74d7d490c2dbac25190878469580f75f2cc1405)))) {
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
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/Applications/MAMP/htdocs/gantry_wp/wp-content/plugins/gantry5/admin/templates/partials/php_unsupported.html.twig");
    }
}
