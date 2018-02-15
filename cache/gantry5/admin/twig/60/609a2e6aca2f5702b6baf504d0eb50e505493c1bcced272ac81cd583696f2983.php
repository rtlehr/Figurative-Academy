<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_e114426380c9c1f06a3c95cc80f2a49c75b7cd9498d7350d3e3bcb4a1e885ff3 extends Twig_Template
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
        if ((is_string($__internal_2c2136a9dc5367a05ffe49d9faa75cc20fec88141468ae18dbdff7424f8a8d71 = (isset($context["php_version"]) ? $context["php_version"] : null)) && is_string($__internal_8ba46606faa51e7748a2856b25ed3c4db4bf5650412f4ea2e5c08871cb2f8ae3 = "5.4") && ('' === $__internal_8ba46606faa51e7748a2856b25ed3c4db4bf5650412f4ea2e5c08871cb2f8ae3 || 0 === strpos($__internal_2c2136a9dc5367a05ffe49d9faa75cc20fec88141468ae18dbdff7424f8a8d71, $__internal_8ba46606faa51e7748a2856b25ed3c4db4bf5650412f4ea2e5c08871cb2f8ae3)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", (isset($context["php_version"]) ? $context["php_version"] : null));
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
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "/opt/bitnami/apps/joomla/htdocs/administrator/components/com_gantry5/templates/partials/php_unsupported.html.twig");
    }
}
