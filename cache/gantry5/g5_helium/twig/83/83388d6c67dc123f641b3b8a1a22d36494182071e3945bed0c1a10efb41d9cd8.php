<?php

/* @nucleus/content/atom.html.twig */
class __TwigTemplate_18dcbf644903666f9ea915673ff12093d2b433963c275c02b89746dbf738b6a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/content/particle.html.twig", "@nucleus/content/atom.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/content/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "@nucleus/content/atom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@nucleus/content/particle.html.twig' %}

{# Handle atoms, which are special case of particles #}
", "@nucleus/content/atom.html.twig", "/opt/bitnami/apps/joomla/htdocs/media/gantry5/engines/nucleus/templates/content/atom.html.twig");
    }
}
