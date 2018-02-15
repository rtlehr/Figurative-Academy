<?php

/* @nucleus/layout/block.html.twig */
class __TwigTemplate_bc9f1570cd759be2c48e66e7dac9a7dd7e9e3afcfed325d666a2b5300444e8f5 extends Twig_Template
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
        $context["attr_extra"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->attributeArrayFilter($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "extra", array()));
        // line 2
        echo "
";
        // line 3
        $context["class"] = ((("g-block " . call_user_func_array($this->env->getFilter('toGrid')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "size", array())))) . (($this->getAttribute($this->getAttribute(        // line 4
(isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "variations", array())) ? ((" " . twig_join_filter($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "variations", array()), " "))) : (""))) . (($this->getAttribute($this->getAttribute(        // line 5
(isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "class", array())) ? ((" " . twig_join_filter($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "class", array()), " "))) : ("")));
        // line 6
        echo "
";
        // line 7
        ob_start();
        // line 8
        echo "    ";
        if ($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "children", array())) {
            // line 9
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
                // line 10
                echo "            ";
                if ($this->getAttribute($context["segment"], "content", array())) {
                    // line 11
                    echo "                ";
                    echo $this->getAttribute($context["segment"], "content", array());
                    echo "
            ";
                } else {
                    // line 13
                    echo "                ";
                    $this->loadTemplate(array(0 => (("@nucleus/content/" . $this->getAttribute($context["segment"], "type", array())) . ".html.twig"), 1 => (("@nucleus/layout/" . $this->getAttribute($context["segment"], "type", array())) . ".html.twig")), "@nucleus/layout/block.html.twig", 13)->display(array_merge($context, array("segments" => $this->getAttribute($context["segment"], "children", array()))));
                    // line 14
                    echo "            ";
                }
                // line 15
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
            // line 16
            echo "    ";
        }
        $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 19
        if (twig_trim_filter((isset($context["html"]) ? $context["html"] : null))) {
            // line 20
            echo "        <div ";
            if ($this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "id", array())) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["segment"]) ? $context["segment"] : null), "attributes", array()), "id", array()), "html", null, true);
                echo "\" ";
            }
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            echo "\"";
            echo (isset($context["attr_extra"]) ? $context["attr_extra"] : null);
            echo ">
             ";
            // line 21
            echo twig_trim_filter((isset($context["html"]) ? $context["html"] : null));
            echo "
        </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@nucleus/layout/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 21,  89 => 20,  87 => 19,  83 => 16,  69 => 15,  66 => 14,  63 => 13,  57 => 11,  54 => 10,  36 => 9,  33 => 8,  31 => 7,  28 => 6,  26 => 5,  25 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set attr_extra = segment.attributes.extra|attribute_array %}

{% set class = 'g-block ' ~ segment.attributes.size|toGrid
    ~ (segment.attributes.variations ? ' ' ~ segment.attributes.variations|join(' '))
    ~ (segment.attributes.class ? ' ' ~ segment.attributes.class|join(' ')) %}

{% set html %}
    {% if segment.children %}
        {% for segment in segments %}
            {% if segment.content %}
                {{ segment.content|raw }}
            {% else %}
                {% include ['@nucleus/content/' ~ segment.type ~ '.html.twig', '@nucleus/layout/' ~ segment.type ~ '.html.twig'] with { 'segments': segment.children } %}
            {% endif %}
        {% endfor %}
    {% endif %}
{% endset %}

{%- if html|trim %}
        <div {% if segment.attributes.id %}id=\"{{ segment.attributes.id }}\" {% endif %}class=\"{{ class }}\" {{- attr_extra|raw }}>
             {{ html|trim|raw }}
        </div>
{% endif -%}
", "@nucleus/layout/block.html.twig", "/opt/bitnami/apps/joomla/htdocs/media/gantry5/engines/nucleus/templates/layout/block.html.twig");
    }
}
