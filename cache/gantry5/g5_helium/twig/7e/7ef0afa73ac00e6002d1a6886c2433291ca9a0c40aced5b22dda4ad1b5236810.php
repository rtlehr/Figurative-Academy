<?php

/* @nucleus/layout/section.html.twig */
class __TwigTemplate_c9722edad34ffe80a629038fa631feebe695645d0f3936ac5c8229c84f029619 extends Twig_Template
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
        $context["tag_type"] = (($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "subtype", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "subtype", array()), "section")) : ("section"));
        // line 2
        $context["attr_id"] = (($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "id", array())) ? ($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "id", array())) : (("g-" . $this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "id", array()))));
        // line 3
        $context["attr_class"] = $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "class", array());
        // line 4
        $context["attr_extra"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "extra", array()));
        // line 5
        $context["boxed"] = $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "boxed", array());
        // line 6
        if ( !(null === (isset($context["boxed"]) ? $context["boxed"] : null))) {
            // line 7
            echo "    ";
            $context["boxed"] = (((twig_trim_filter((isset($context["boxed"]) ? $context["boxed"] : null)) == "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "page", array()), "body", array()), "layout", array()), "sections", array())) : ((isset($context["boxed"]) ? $context["boxed"] : null)));
        }
        // line 10
        ob_start();
        // line 11
        echo "    ";
        if ($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "children", array())) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["segments"]) ? $context["segments"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["segment"]) {
                // line 13
                echo "            ";
                $this->loadTemplate((("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", array())) . ".html.twig"), "@nucleus/layout/section.html.twig", 13)->display(array_merge($context, array("segments" => $this->getAttribute($context["segment"], "children", array()))));
                // line 14
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['segment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 18
        if (($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "sticky", array()) || twig_trim_filter((isset($context["html"]) ? $context["html"] : null)))) {
            // line 19
            if (( !(null === (isset($context["boxed"]) ? $context["boxed"] : null)) && (((isset($context["boxed"]) ? $context["boxed"] : null) == 0) || ((isset($context["boxed"]) ? $context["boxed"] : null) == 2)))) {
                // line 20
                echo "        ";
                ob_start();
                // line 21
                echo "        <div class=\"g-container\">";
                echo (isset($context["html"]) ? $context["html"] : null);
                echo "</div>
        ";
                $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 23
                echo "    ";
            }
            // line 24
            echo "
    ";
            // line 25
            ob_start();
            // line 26
            echo "    ";
            if (((isset($context["boxed"]) ? $context["boxed"] : null) == 2)) {
                $context["attr_class"] = ((isset($context["attr_class"]) ? $context["attr_class"] : null) . " g-flushed");
            }
            // line 27
            echo "    ";
            $context["attr_class"] = (((isset($context["attr_class"]) ? $context["attr_class"] : null)) ? (((" class=\"" . twig_trim_filter((isset($context["attr_class"]) ? $context["attr_class"] : null))) . "\"")) : (""));
            // line 28
            echo "<";
            echo twig_escape_filter($this->env, (isset($context["tag_type"]) ? $context["tag_type"] : null), "html", null, true);
            echo " id=\"";
            echo twig_escape_filter($this->env, (isset($context["attr_id"]) ? $context["attr_id"] : null), "html", null, true);
            echo "\"";
            echo (isset($context["attr_class"]) ? $context["attr_class"] : null);
            echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
            echo ">
        ";
            // line 29
            echo (isset($context["html"]) ? $context["html"] : null);
            echo "
    </";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["tag_type"]) ? $context["tag_type"] : null), "html", null, true);
            echo ">";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 33
            if (((isset($context["boxed"]) ? $context["boxed"] : null) == 1)) {
                // line 34
                echo "    <div class=\"g-container\">";
                echo (isset($context["html"]) ? $context["html"] : null);
                echo "</div>
    ";
            } else {
                // line 36
                echo "    ";
                echo (isset($context["html"]) ? $context["html"] : null);
                echo "
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/layout/section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 36,  128 => 34,  126 => 33,  122 => 30,  118 => 29,  108 => 28,  105 => 27,  100 => 26,  98 => 25,  95 => 24,  92 => 23,  86 => 21,  83 => 20,  81 => 19,  79 => 18,  75 => 15,  61 => 14,  58 => 13,  40 => 12,  37 => 11,  35 => 10,  31 => 7,  29 => 6,  27 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set tag_type = segment.subtype|default('section') %}
{% set attr_id = segment.attributes.id ?: 'g-' ~ segment.id %}
{% set attr_class = segment.attributes.class %}
{% set attr_extra = segment.attributes.extra|attribute_array %}
{% set boxed = segment.attributes.boxed %}
{% if boxed is not null %}
    {% set boxed = boxed|trim == '' ? gantry.config.page.body.layout.sections : boxed %}
{% endif %}

{%- set html %}
    {% if segment.children %}
        {% for segment in segments %}
            {% include '@nucleus/layout/' ~ segment.type ~ '.html.twig' with { 'segments':segment.children } %}
        {% endfor %}
    {% endif %}
{% endset %}

{%- if segment.attributes.sticky or html|trim %}
    {%- if boxed is not null and (boxed == 0 or boxed == 2) %}
        {% set html %}
        <div class=\"g-container\">{{ html|raw }}</div>
        {% endset %}
    {% endif %}

    {% set html %}
    {% if boxed == 2 %}{% set attr_class = attr_class ~ ' g-flushed' %}{% endif %}
    {% set attr_class = attr_class ? ' class=\"' ~ attr_class|trim ~ '\"' -%}
    <{{ tag_type }} id=\"{{ attr_id }}\"{{ attr_class|raw }} {{- attr_extra|raw }}>
        {{ html|raw }}
    </{{ tag_type }}>
    {%- endset %}

    {%- if boxed == 1 %}
    <div class=\"g-container\">{{ html|raw }}</div>
    {% else %}
    {{ html|raw }}
    {% endif %}
{% endif %}
", "@nucleus/layout/section.html.twig", "/opt/bitnami/apps/joomla/htdocs/media/gantry5/engines/nucleus/templates/layout/section.html.twig");
    }
}
