<?php

/* forms/fields/pagemediaselect/pagemediaselect.html.twig */
class __TwigTemplate_1a1720aeb8c21e1dec69d3c9a1187d7ce5816b7942373b171374d8271499680d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/pagemediaselect/pagemediaselect.html.twig", 1);
        $this->blocks = array(
            'global_attributes' => array($this, 'block_global_attributes'),
            'input' => array($this, 'block_input'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["options"] = array("" => "No file");
        // line 4
        $context["files"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "page", array()), "media", array()), "all", array());
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : null));
        foreach ($context['_seq'] as $context["index"] => $context["media"]) {
            // line 6
            $context["option"] = array($context["index"] => $context["index"]);
            // line 7
            $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : null), (isset($context["option"]) ? $context["option"] : null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 11
        echo "    data-grav-selectize=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array(), "any", true, true)) ? ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "selectize", array())) : (array()))), "html_attr");
        echo "\"
    data-grav-field=\"select\"
    data-grav-disabled=\"";
        // line 13
        echo ((twig_test_empty((isset($context["files"]) ? $context["files"] : null))) ? ("true") : ("false"));
        echo "\"
    data-grav-default=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "default", array())), "html_attr");
        echo "\"
";
    }

    // line 17
    public function block_input($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if (((isset($context["theme"]) ? $context["theme"] : null) || (isset($context["plugin"]) ? $context["plugin"] : null))) {
            // line 19
            echo "        The \"pagemediaselect\" field cannot be used in Themes or Plugins Blueprints. It's intended to be used for Pages blueprints.
        Use the \"file\" type instead.
    ";
        } else {
            // line 22
            echo "        <div class=\"form-select-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "size", array()), "html", null, true);
            echo "\">
            <select name=\"";
            // line 23
            echo twig_escape_filter($this->env, ($this->env->getExtension('GravTwigExtension')->fieldNameFilter(((isset($context["scope"]) ? $context["scope"] : null) . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name", array()))) . (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? ("[]") : (""))), "html", null, true);
            echo "\"
                    ";
            // line 24
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array(), "any", true, true)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "classes", array()), "html", null, true);
                echo "\" ";
            }
            // line 25
            echo "                    ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array(), "any", true, true)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
                echo "\" ";
            }
            // line 26
            echo "                    ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array(), "any", true, true)) {
                echo "style=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "style", array()));
                echo "\" ";
            }
            // line 27
            echo "                    ";
            if ((($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "disabled", array()) || twig_test_empty((isset($context["files"]) ? $context["files"] : null))) || (isset($context["isDisabledToggleable"]) ? $context["isDisabledToggleable"] : null))) {
                echo "disabled=\"disabled\"";
            }
            // line 28
            echo "                    ";
            if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "autofocus=\"autofocus\"";
            }
            // line 29
            echo "                    ";
            if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "novalidate=\"novalidate\"";
            }
            // line 30
            echo "                    ";
            if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "required=\"required\"";
            }
            // line 31
            echo "                    ";
            if (twig_in_filter($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array()), array(0 => "on", 1 => "true", 2 => 1))) {
                echo "multiple=\"multiple\"";
            }
            // line 32
            echo "                    ";
            if ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "form", array())) {
                echo "form=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "form", array()), "html", null, true);
                echo "\"";
            }
            // line 33
            echo "            >
                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["text"]) {
                // line 35
                echo "                    <option ";
                if ((($context["key"] == (isset($context["value"]) ? $context["value"] : null)) || ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array()) && twig_in_filter($context["text"], (isset($context["value"]) ? $context["value"] : null))))) {
                    echo "selected=\"selected\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "multiple", array())) ? ($context["text"]) : ($context["key"])), "html", null, true);
                echo "\">";
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["grav"]) ? $context["grav"] : null), "twig", array(), "any", false, true), "twig", array(), "any", false, true), "filters", array(), "any", false, true), "tu", array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('AdminTwigExtension')->tuFilter($context["text"]), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('GravTwigExtension')->translate($context["text"]), "html", null, true);
                }
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </select>
        </div>
        ";
            // line 39
            if (twig_test_empty((isset($context["files"]) ? $context["files"] : null))) {
                echo "Add files through the page media, or by dropping them in the page folder";
            }
            // line 40
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/pagemediaselect/pagemediaselect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 40,  167 => 39,  163 => 37,  144 => 35,  140 => 34,  137 => 33,  130 => 32,  125 => 31,  120 => 30,  115 => 29,  110 => 28,  105 => 27,  98 => 26,  91 => 25,  85 => 24,  81 => 23,  76 => 22,  71 => 19,  68 => 18,  65 => 17,  59 => 14,  55 => 13,  49 => 11,  46 => 10,  42 => 1,  36 => 7,  34 => 6,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends "forms/field.html.twig" %}*/
/* */
/* {% set options = {'': 'No file'} %}*/
/* {% set files = admin.page.media.all %}*/
/* {% for index, media in files %}*/
/*     {% set option = {(index): index} %}*/
/*     {% set options = options|merge(option) %}*/
/* {% endfor %}*/
/* */
/* {% block global_attributes %}*/
/*     data-grav-selectize="{{ (field.selectize is defined ? field.selectize : {})|json_encode()|e('html_attr') }}"*/
/*     data-grav-field="select"*/
/*     data-grav-disabled="{{ files is empty ? 'true' : 'false' }}"*/
/*     data-grav-default="{{ field.default|json_encode()|e('html_attr') }}"*/
/* {% endblock %}*/
/* */
/* {% block input %}*/
/*     {% if theme or plugin %}*/
/*         The "pagemediaselect" field cannot be used in Themes or Plugins Blueprints. It's intended to be used for Pages blueprints.*/
/*         Use the "file" type instead.*/
/*     {% else %}*/
/*         <div class="form-select-wrapper {{ field.size }}">*/
/*             <select name="{{ (scope ~ field.name)|fieldName ~ (field.multiple ? '[]' : '') }}"*/
/*                     {% if field.classes is defined %}class="{{ field.classes }}" {% endif %}*/
/*                     {% if field.id is defined %}id="{{ field.id|e }}" {% endif %}*/
/*                     {% if field.style is defined %}style="{{ field.style|e }}" {% endif %}*/
/*                     {% if field.disabled or files is empty or isDisabledToggleable %}disabled="disabled"{% endif %}*/
/*                     {% if field.autofocus in ['on', 'true', 1] %}autofocus="autofocus"{% endif %}*/
/*                     {% if field.novalidate in ['on', 'true', 1] %}novalidate="novalidate"{% endif %}*/
/*                     {% if field.validate.required in ['on', 'true', 1] %}required="required"{% endif %}*/
/*                     {% if field.multiple in ['on', 'true', 1] %}multiple="multiple"{% endif %}*/
/*                     {% if field.form %}form="{{ field.form }}"{% endif %}*/
/*             >*/
/*                 {% for key, text in options %}*/
/*                     <option {% if key == value or (field.multiple and text in value) %}selected="selected"{% endif %} value="{{ field.multiple ? text : key }}">{% if grav.twig.twig.filters['tu'] is defined %}{{ text|tu }}{% else %}{{ text|t }}{% endif %}</option>*/
/*                 {% endfor %}*/
/*             </select>*/
/*         </div>*/
/*         {% if files is empty %}Add files through the page media, or by dropping them in the page folder{% endif %}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
