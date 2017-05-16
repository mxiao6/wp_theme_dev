<?php

/* @gantry-admin/pages/configurations/layouts/particle-card.html.twig */
class __TwigTemplate_ddba38c95c94950e3584e1a35c8c91e7808eb5771f054dbdee0d46240ba6416c extends Twig_Template
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
        echo "<div class=\"card settings-block\">
    <h4>
        ";
        // line 3
        if (($context["editable"] ?? null)) {
            // line 4
            echo "            <span data-title-editable=\"";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["item"] ?? null), "title", array())), "html", null, true);
            echo "\" class=\"title\">";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["item"] ?? null), "title", array())), "html", null, true);
            echo "</span>
            <i class=\"fa fa-pencil font-small\" aria-hidden=\"true\" tabindex=\"0\" aria-label=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", twig_trim_filter($this->getAttribute(($context["item"] ?? null), "title", array()))), "html", null, true);
            echo "\" data-title-edit=\"\"></i>
        ";
        } else {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "
        ";
        }
        // line 9
        echo "
        ";
        // line 10
        if (($context["item"] ?? null)) {
            // line 11
            echo "            <span class=\"badge font-small\">";
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["item"] ?? null), "subtype", array())) ? ($this->getAttribute(($context["item"] ?? null), "subtype", array())) : ($this->getAttribute(($context["item"] ?? null), "type", array()))), "html", null, true);
            echo "</span>
            ";
            // line 12
            if ($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "fields", array()), "enabled", array())) {
                // line 13
                echo "                ";
                $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/configurations/layouts/particle-card.html.twig", 13)->display(array_merge($context, array("name" => (("particles." . (($this->getAttribute(($context["item"] ?? null), "subtype", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["item"] ?? null), "subtype", array()), $this->getAttribute(($context["item"] ?? null), "type", array()))) : ($this->getAttribute(($context["item"] ?? null), "type", array())))) . ".enabled"), "field" => $this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "fields", array()), "enabled", array()), "value" => $this->getAttribute($this->getAttribute(($context["item"] ?? null), "attributes", array()), "enabled", array()), "default" => 1, "disabled" =>  !$this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "config", array()), "get", array(0 => (("particles." . $this->getAttribute(($context["item"] ?? null), "subtype", array())) . ".enabled"), 1 => true), "method"))));
                // line 14
                echo "            ";
            }
            // line 15
            echo "        ";
        }
        // line 16
        echo "    </h4>

    <div class=\"inner-params\">
        ";
        // line 19
        $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/configurations/layouts/particle-card.html.twig", 19)->display($context);
        // line 20
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/layouts/particle-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  69 => 19,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  53 => 12,  48 => 11,  46 => 10,  43 => 9,  37 => 7,  32 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/pages/configurations/layouts/particle-card.html.twig", "/Applications/MAMP/htdocs/gantry_wp/wp-content/plugins/gantry5/admin/templates/pages/configurations/layouts/particle-card.html.twig");
    }
}
