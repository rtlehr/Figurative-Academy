<?php

/* forms/fields/collection/list.html.twig */
class __TwigTemplate_73e15699960f0f86ccefdddaaf5688953aed35462a1b12d10ca754cffcf93b75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'input' => array($this, 'block_input'),
            'collection_fields' => array($this, 'block_collection_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("forms/" . ((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "field")) : ("field"))) . ".html.twig"), "forms/fields/collection/list.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["value"] = (((( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()) && twig_test_iterable((isset($context["value"]) ? $context["value"] : null))) && twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)))) ? ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->valuesFilter((isset($context["value"]) ? $context["value"] : null))) : ((isset($context["value"]) ? $context["value"] : null)));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_field($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "is_current", array())) {
            // line 8
            echo "        ";
            // line 9
            echo "        ";
            $context["name"] = "";
            // line 10
            echo "        <div class=\"g-filter-actions\">
            <div class=\"g-panel-filters\" data-g-global-filter=\"\">
                <div class=\"search settings-block\">
                    ";
            // line 13
            $context["filter"] = array("element" => ".settings-param", "title" => ".settings-param-title, h4 .g-title", "fallback" => true);
            // line 14
            echo "                    <input type=\"text\" data-g-collapse-filter=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["filter"]) ? $context["filter"] : null)), "html_attr");
            echo "\" placeholder=\"";
            echo twig_escape_filter($this->env, (($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FILTER") . " ") . twig_capitalize_string_filter($this->env, (isset($context["group"]) ? $context["group"] : null))), "html", null, true);
            echo "...\" aria-label=\"";
            echo twig_escape_filter($this->env, (($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_FILTER") . " ") . twig_capitalize_string_filter($this->env, (isset($context["group"]) ? $context["group"] : null))), "html", null, true);
            echo "...\" role=\"search\">
                    <i class=\"fa fa-fw fa-search\" aria-hidden=\"true\"></i>
                </div>
                <button class=\"button\" type=\"button\" data-g-collapse-all=\"true\"><i class=\"fa fa-fw fa-toggle-up\" aria-hidden=\"true\"></i> ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_COLLAPSE_ALL"), "html", null, true);
            echo "</button>
                <button class=\"button\" type=\"button\" data-g-collapse-all=\"false\"><i class=\"fa fa-fw fa-toggle-down\" aria-hidden=\"true\"></i> ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EXPAND_ALL"), "html", null, true);
            echo "</button>
            </div>
        </div>
        <div class=\"cards-wrapper g-grid\">
            ";
            // line 22
            $context["labels"] = array("collapse" => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_COLLAPSE"), "expand" => $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EXPAND"));
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 24
                echo "                ";
                $context["title"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) == $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()))) ? ($context["key"]) : ($this->getAttribute($context["val"], $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), array(), "array")));
                // line 25
                echo "                ";
                $context["id"] = (((((isset($context["route"]) ? $context["route"] : null) . ".") . $context["key"]) . ".") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()));
                // line 26
                echo "                <div class=\"card settings-block\">
                    <h4
                        data-g-collapse=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["labels"]) ? $context["labels"] : null), array("collapsed" => false, "id" => (isset($context["id"]) ? $context["id"] : null), "store" => false, "target" => "~ .inner-params"))), "html_attr");
                echo "\"
                    >
                        <span class=\"g-collapse\" data-title=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "collapse", array()), "html", null, true);
                echo "\" data-tip=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "collapse", array()), "html", null, true);
                echo "\" data-tip-place=\"top-right\"><i class=\"fa fa-fw fa-caret-up\" aria-hidden=\"true\"></i></span>
                        <span data-title-editable=\"";
                // line 31
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "\" data-collection-key=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter((((((isset($context["scope"]) ? $context["scope"] : null) . ".") . $context["key"]) . ".") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()))), "html", null, true);
                echo "\" class=\"g-title\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
                echo "</span>
                        <i class=\"fa fa-pencil font-small\" aria-hidden=\"true\"  tabindex=\"0\" aria-label=\"";
                // line 32
                echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE"), array("%s" => (isset($context["title"]) ? $context["title"] : null))), "html", null, true);
                echo "\" data-title-edit=\"\"></i>
                    </h4>
                    <div class=\"inner-params\">
                        ";
                // line 35
                $this->displayBlock("collection_fields", $context, $blocks);
                echo "
                    </div>
                </div>
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        </div>
    ";
        } else {
            // line 41
            echo "
        ";
            // line 42
            $context["can_reorder"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "reorder", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "reorder", array())))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "reorder", array())) : (true));
            // line 43
            echo "        ";
            $context["can_remove"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "deletion", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "deletion", array())))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "deletion", array())) : (true));
            // line 44
            echo "        ";
            $context["can_addnew"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "add_new", array(), "any", true, true) &&  !(null === $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "add_new", array())))) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "add_new", array())) : (true));
            // line 45
            echo "        <div class=\"settings-param ";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()), ".", "-"), "html", null, true);
            echo "\">
            ";
            // line 46
            if ((((isset($context["overrideable"]) ? $context["overrideable"] : null) && (( !$this->getAttribute((isset($context["field"]) ? $context["field"] : null), "overridable", array(), "any", true, true) || ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "overridable", array()) == true)) || (isset($context["has_value"]) ? $context["has_value"] : null))) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type", array()) != "container.set"))) {
                // line 47
                echo "                ";
                $this->loadTemplate("forms/override.html.twig", "forms/fields/collection/list.html.twig", 47)->display(array_merge($context, array("scope" => (isset($context["scope"]) ? $context["scope"] : null), "name" => (isset($context["name"]) ? $context["name"] : null), "field" => (isset($context["field"]) ? $context["field"] : null))));
                // line 48
                echo "            ";
            }
            // line 49
            echo "            ";
            $this->displayBlock('contents', $context, $blocks);
            // line 127
            echo "        </div>
    ";
        }
    }

    // line 49
    public function block_contents($context, array $blocks = array())
    {
        // line 50
        echo "                ";
        $context["field_route"] = twig_replace_filter(((((isset($context["route"]) ? $context["route"] : null) . ".") . (((isset($context["prefix"]) ? $context["prefix"] : null)) ? (((isset($context["prefix"]) ? $context["prefix"] : null) . ".")) : (""))) . (isset($context["name"]) ? $context["name"] : null)), ".", "/");
        // line 51
        echo "                <span class=\"settings-param-title float-left\">
                    ";
        // line 52
        $this->displayBlock('label', $context, $blocks);
        // line 61
        echo "                </span>
                <div class=\"settings-param-field\" data-field-name=\"";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "\">
                    ";
        // line 63
        $this->displayBlock('input', $context, $blocks);
        // line 125
        echo "                </div>
            ";
    }

    // line 52
    public function block_label($context, array $blocks = array())
    {
        // line 53
        echo "                        ";
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array())) {
            // line 54
            echo "                            ";
            $context["description"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "description", array()), "GANTRY5_FORM_FIELD", (isset($context["scope"]) ? $context["scope"] : null), (isset($context["name"]) ? $context["name"] : null), "DESC");
            // line 55
            echo "                            <span aria-label=\"";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : null), "html", null, true);
            echo "\" data-tip=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" data-tip-place=\"top-right\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "GANTRY5_FORM_FIELD", (isset($context["scope"]) ? $context["scope"] : null), (isset($context["name"]) ? $context["name"] : null), "LABEL"), "html", null, true);
            echo "</span>
                        ";
        } else {
            // line 57
            echo "                            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transKeyFilter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()), "GANTRY5_FORM_FIELD", (isset($context["scope"]) ? $context["scope"] : null), (isset($context["name"]) ? $context["name"] : null), "LABEL"), "html", null, true);
            echo "
                        ";
        }
        // line 59
        echo "                        ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                    ";
    }

    // line 63
    public function block_input($context, array $blocks = array())
    {
        // line 64
        echo "<div class=\"g5-collection-wrapper\">
                        <ul>";
        // line 66
        if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array())) {
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : null));
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
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 68
                echo "                                    ";
                if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "ajax", array()) == true)) {
                    // line 69
                    echo "                                        <li data-collection-item=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "html", null, true);
                    echo "\">
                                            ";
                    // line 70
                    $context["itemValue"] = ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) == $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "key", array()))) ? ($context["key"]) : ($this->getAttribute($context["val"], $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), array(), "array")));
                    // line 71
                    echo "                                            ";
                    if ((isset($context["can_reorder"]) ? $context["can_reorder"] : null)) {
                        echo "<i class=\"fa fa-reorder font-small item-reorder\" aria-hidden=\"true\"></i>";
                    }
                    // line 72
                    echo "                                            <a class=\"config-cog\" href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (((isset($context["field_route"]) ? $context["field_route"] : null) . "/") . $context["key"])), "method"), "html", null, true);
                    echo "\"><span data-title-editable=\"";
                    echo twig_escape_filter($this->env, (isset($context["itemValue"]) ? $context["itemValue"] : null), "html", null, true);
                    echo "\" class=\"g-title\">";
                    echo twig_escape_filter($this->env, (isset($context["itemValue"]) ? $context["itemValue"] : null), "html", null, true);
                    echo "</span></a>
                                            ";
                    // line 73
                    if ((isset($context["can_remove"]) ? $context["can_remove"] : null)) {
                        echo "<i class=\"fa fa-fw fa-trash font-small\" aria-hidden=\"true\" data-collection-remove=\"\"></i>";
                    }
                    // line 74
                    echo "                                            ";
                    if ((isset($context["can_addnew"]) ? $context["can_addnew"] : null)) {
                        echo "<i class=\"fa fa-files-o font-small\" aria-hidden=\"true\" data-collection-duplicate=\"\"></i>";
                    }
                    // line 75
                    echo "                                            <i class=\"fa fa-fw fa-pencil font-small\" aria-hidden=\"true\" tabindex=\"0\" aria-label=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EDIT_TITLE", (isset($context["itemValue"]) ? $context["itemValue"] : null)), "html", null, true);
                    echo "\" data-title-edit=\"\"></i>
                                        </li>
                                    ";
                } else {
                    // line 78
                    echo "                                        ";
                    $this->displayBlock('collection_fields', $context, $blocks);
                    // line 105
                    echo "                                    ";
                }
                // line 106
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 108
        echo "</ul>
                    </div>
                    <div>
                        <ul style=\"display: none\">
                            <li data-collection-nosort=\"\" data-collection-template=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "html", null, true);
        echo "\" style=\"display: none;\">
                                ";
        // line 113
        if ((isset($context["can_reorder"]) ? $context["can_reorder"] : null)) {
            echo "<i class=\"fa fa-reorder font-small item-reorder\" aria-hidden=\"true\"></i>";
        }
        // line 114
        echo "                                <a class=\"config-cog\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => ((isset($context["field_route"]) ? $context["field_route"] : null) . "/%id%")), "method"), "html", null, true);
        echo "\"><span data-title-editable=\"New item\" class=\"title\">New item</span></a>
                                ";
        // line 115
        if ((isset($context["can_remove"]) ? $context["can_remove"] : null)) {
            echo "<i class=\"fa fa-fw fa-trash font-small\" aria-hidden=\"true\" data-collection-remove=\"\"></i>";
        }
        // line 116
        echo "                                ";
        if ((isset($context["can_addnew"]) ? $context["can_addnew"] : null)) {
            echo "<i class=\"fa fa-files-o font-small\" aria-hidden=\"true\" data-collection-duplicate=\"\"></i>";
        }
        // line 117
        echo "                                <i class=\"fa fa-fw fa-pencil font-small\" aria-hidden=\"true\" data-title-edit=\"\"></i>
                            </li>
                        </ul>
                        ";
        // line 120
        if ((isset($context["can_addnew"]) ? $context["can_addnew"] : null)) {
            echo "<span class=\"collection-addnew button button-simple\" data-collection-addnew=\"\" title=\"Add new item\"><i class=\"fa fa-plus font-small\" aria-hidden=\"true\"></i></span>";
        }
        // line 121
        echo "                        <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "route", array(0 => (isset($context["field_route"]) ? $context["field_route"] : null)), "method"), "html", null, true);
        echo "\" class=\"collection-editall button button-simple\" data-collection-editall=\"\" title=\"Edit all items\" ";
        if ((twig_length_filter($this->env, (isset($context["value"]) ? $context["value"] : null)) <= 1)) {
            echo "style=\"display: none;\"";
        }
        echo "><i class=\"fa fa-th-large font-small\" aria-hidden=\"true\"></i></a>
                    </div>
                    <input data-collection-data=\"\" name=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->fieldNameFilter((((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)) . "._json")), "html", null, true);
        echo "\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : null), array())) : (array())), twig_constant("JSON_UNESCAPED_SLASHES")), "html_attr");
        echo "\"/>
                    ";
    }

    // line 78
    public function block_collection_fields($context, array $blocks = array())
    {
        // line 79
        echo "                                            <div data-g5-collections=\"\">
                                                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fields", array()));
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
        foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
            // line 81
            echo "                                                    ";
            $context["container"] = (is_string($__internal_a0f0eff2a7cc61243535d3b7ab6861391730c6fc7ba15d8a48ca1c3fd6574640 = $this->getAttribute($context["child"], "type", array())) && is_string($__internal_a685899f6cfa17ceb90c3b36fadb8ac3ee7dda991446a1464c940e738928b8e4 = "container.") && ('' === $__internal_a685899f6cfa17ceb90c3b36fadb8ac3ee7dda991446a1464c940e738928b8e4 || 0 === strpos($__internal_a0f0eff2a7cc61243535d3b7ab6861391730c6fc7ba15d8a48ca1c3fd6574640, $__internal_a685899f6cfa17ceb90c3b36fadb8ac3ee7dda991446a1464c940e738928b8e4)));
            // line 82
            echo "                                                    ";
            if ((is_string($__internal_b2df32543291a769de929632217e812e962e4068f65df94e8e21d65ad3f6f2c1 = $context["childName"]) && is_string($__internal_8a643f57e198ddb8943250d9a44374dc831108b49fa4469681c727bd2982b2ba = ".") && ('' === $__internal_8a643f57e198ddb8943250d9a44374dc831108b49fa4469681c727bd2982b2ba || 0 === strpos($__internal_b2df32543291a769de929632217e812e962e4068f65df94e8e21d65ad3f6f2c1, $__internal_8a643f57e198ddb8943250d9a44374dc831108b49fa4469681c727bd2982b2ba)))) {
                // line 83
                echo "                                                        ";
                $context["childKey"] = twig_trim_filter($context["childName"], ".");
                // line 84
                echo "                                                        ";
                $context["childValue"] = (((isset($context["container"]) ? $context["container"] : null)) ? ((isset($context["val"]) ? $context["val"] : null)) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc((isset($context["val"]) ? $context["val"] : null), (isset($context["childKey"]) ? $context["childKey"] : null))));
                // line 85
                echo "                                                        ";
                $context["childName"] = ((((isset($context["name"]) ? $context["name"] : null) . ".") . (isset($context["key"]) ? $context["key"] : null)) . $context["childName"]);
                // line 86
                echo "                                                    ";
            } else {
                // line 87
                echo "                                                        ";
                $context["childKey"] = $context["childName"];
                // line 88
                echo "                                                        ";
                $context["childValue"] = (((isset($context["container"]) ? $context["container"] : null)) ? ((isset($context["val"]) ? $context["val"] : null)) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->nestedFunc((isset($context["data"]) ? $context["data"] : null), ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["childKey"]) ? $context["childKey"] : null)))));
                // line 89
                echo "                                                        ";
                $context["childName"] = twig_replace_filter($context["childName"], array("*" => (isset($context["key"]) ? $context["key"] : null)));
                // line 90
                echo "                                                        ";
                $context["childParent"] = ((($context["childName"] == (isset($context["childKey"]) ? $context["childKey"] : null))) ? ((("." . (isset($context["key"]) ? $context["key"] : null)) . ".")) : (""));
                // line 91
                echo "                                                    ";
            }
            // line 92
            echo "
                                                    ";
            // line 93
            if (((!twig_in_filter($context["childName"], (isset($context["skip"]) ? $context["skip"] : null)) &&  !$this->getAttribute($context["child"], "skip", array())) && ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()) != (isset($context["childKey"]) ? $context["childKey"] : null)))) {
                // line 94
                echo "                                                         ";
                if (($this->getAttribute($context["child"], "type", array()) == "key")) {
                    // line 95
                    echo "                                                             ";
                    $this->loadTemplate("forms/fields/key/key.html.twig", "forms/fields/collection/list.html.twig", 95)->display(array_merge($context, array("name" =>                     // line 96
$context["childName"], "field" => $context["child"], "value" => (isset($context["key"]) ? $context["key"] : null), "current_value" => null, "default_value" => null, "parent" => (isset($context["childParent"]) ? $context["childParent"] : null))));
                    // line 97
                    echo "                                                         ";
                } elseif ($this->getAttribute($context["child"], "type", array())) {
                    // line 98
                    echo "                                                             ";
                    $this->loadTemplate(array(0 => (("forms/fields/" . twig_replace_filter($this->getAttribute($context["child"], "type", array()), ".", "/")) . ".html.twig"), 1 => "forms/fields/unknown/unknown.html.twig"), "forms/fields/collection/list.html.twig", 98)->display(array_merge($context, array("name" =>                     // line 99
$context["childName"], "field" => $context["child"], "value" => null, "current_value" => (isset($context["childValue"]) ? $context["childValue"] : null), "default_value" => null, "parent_field" => (isset($context["childParent"]) ? $context["childParent"] : null))));
                    // line 100
                    echo "                                                        ";
                }
                // line 101
                echo "                                                    ";
            }
            // line 102
            echo "                                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['childName'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                                            </div>
                                        ";
    }

    public function getTemplateName()
    {
        return "forms/fields/collection/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 103,  463 => 102,  460 => 101,  457 => 100,  455 => 99,  453 => 98,  450 => 97,  448 => 96,  446 => 95,  443 => 94,  441 => 93,  438 => 92,  435 => 91,  432 => 90,  429 => 89,  426 => 88,  423 => 87,  420 => 86,  417 => 85,  414 => 84,  411 => 83,  408 => 82,  405 => 81,  388 => 80,  385 => 79,  382 => 78,  374 => 123,  364 => 121,  360 => 120,  355 => 117,  350 => 116,  346 => 115,  341 => 114,  337 => 113,  333 => 112,  327 => 108,  312 => 106,  309 => 105,  306 => 78,  299 => 75,  294 => 74,  290 => 73,  281 => 72,  276 => 71,  274 => 70,  269 => 69,  266 => 68,  249 => 67,  247 => 66,  244 => 64,  241 => 63,  234 => 59,  228 => 57,  218 => 55,  215 => 54,  212 => 53,  209 => 52,  204 => 125,  202 => 63,  198 => 62,  195 => 61,  193 => 52,  190 => 51,  187 => 50,  184 => 49,  178 => 127,  175 => 49,  172 => 48,  169 => 47,  167 => 46,  162 => 45,  159 => 44,  156 => 43,  154 => 42,  151 => 41,  147 => 39,  129 => 35,  123 => 32,  115 => 31,  109 => 30,  104 => 28,  100 => 26,  97 => 25,  94 => 24,  76 => 23,  74 => 22,  67 => 18,  63 => 17,  52 => 14,  50 => 13,  45 => 10,  42 => 9,  40 => 8,  37 => 7,  34 => 6,  30 => 1,  28 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forms/fields/collection/list.html.twig", "/opt/bitnami/apps/joomla/htdocs/administrator/components/com_gantry5/templates/forms/fields/collection/list.html.twig");
    }
}
