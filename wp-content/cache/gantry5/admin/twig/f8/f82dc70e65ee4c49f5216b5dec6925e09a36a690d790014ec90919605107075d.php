<?php

/* @gantry-admin/error.html.twig */
class __TwigTemplate_ad2eb6c667b05676c8f1de8934450cc430aaaa87571aba94e5217a180ae192ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'gantry' => array($this, 'block_gantry'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((($context["ajax"] ?? null) - ($context["suffix"] ?? null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/error.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>

    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_OOPS"), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "getMessage", array()), "html", null, true);
        echo ".</p>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/error.html.twig", "/Users/XMZ/EnterpriseWorks/gantry_wp/wp-content/plugins/gantry5/admin/templates/error.html.twig");
    }
}
