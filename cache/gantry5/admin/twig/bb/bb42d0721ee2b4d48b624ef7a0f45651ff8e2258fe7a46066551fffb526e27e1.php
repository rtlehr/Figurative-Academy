<?php

/* forms/fields/input/icon.html.twig */
class __TwigTemplate_8c2b50f05689ebc66adf213475999b905f54eda9c2f6578d751de5832e79a48a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'input' => array($this, 'block_input'),
            'reset_field' => array($this, 'block_reset_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((((isset($context["default"]) ? $context["default"] : null)) ? ("partials/field.html.twig") : ((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"))), "forms/fields/input/icon.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_input($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"g-icons\">
        <div class=\"input-group append\">
            <input
                    ";
        // line 8
        echo "                    type=\"text\"
                    name=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))), "html", null, true);
        echo "\"
                    value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["value"]) ? $context["value"] : null), ", "), "html", null, true);
        echo "\"
                    ";
        // line 12
        echo "                    ";
        $this->displayBlock("global_attributes", $context, $blocks);
        echo "
                    ";
        // line 14
        echo "                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autocomplete", array()), "html", null, true);
            echo "\"";
        }
        // line 15
        echo "                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 16
        echo "                    ";
        if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "disabled=\"disabled\"";
        }
        // line 17
        echo "                    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "list", array(), "any", true, true)) {
            echo "list=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "list", array()), "html", null, true);
            echo "\"";
        }
        // line 18
        echo "                    />
            ";
        // line 19
        $context["picker"] = (("input[name=\"" . twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null))))) . "\"]");
        // line 20
        echo "             <span class=\"input-group-btn\">
                <button class=\"button\" type=\"button\" aria-label=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_SELECT"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "GANTRY5_FORM_FIELD", (isset($context["scope"]) ? $context["scope"] : null), (isset($context["name"]) ? $context["name"] : null), "LABEL"), "html", null, true);
        echo "\" data-g5-iconpicker=\"";
        echo twig_escape_filter($this->env, (isset($context["picker"]) ? $context["picker"] : null), "html_attr");
        echo "\">
                    <i class=\"";
        // line 22
        echo twig_escape_filter($this->env, ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : null), "fa fa-hand-o-up picker")) : ("fa fa-hand-o-up picker")), "html_attr");
        echo "\"></i>
                </button>
            </span>
            ";
        // line 25
        $this->displayBlock('reset_field', $context, $blocks);
        // line 26
        echo "        </div>
    </div>
";
    }

    // line 25
    public function block_reset_field($context, array $blocks = array())
    {
        $this->displayParentBlock("reset_field", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "forms/fields/input/icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  100 => 26,  98 => 25,  92 => 22,  84 => 21,  81 => 20,  79 => 19,  76 => 18,  69 => 17,  64 => 16,  59 => 15,  52 => 14,  47 => 12,  43 => 10,  39 => 9,  36 => 8,  31 => 4,  28 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/input/icon.html.twig", "/opt/bitnami/apps/joomla/htdocs/administrator/components/com_gantry5/templates/forms/fields/input/icon.html.twig");
    }
}
