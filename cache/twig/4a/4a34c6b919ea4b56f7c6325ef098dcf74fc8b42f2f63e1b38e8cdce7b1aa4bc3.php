<?php

/* modular.html.twig */
class __TwigTemplate_cdf0d71b1e8fbe81832fc46d632484d3b2a7348398b3e23bf620fc026575fe74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 6
            echo "        ";
            echo $this->getAttribute($context["module"], "content", array());
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    ";
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  40 => 6,  36 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'partials/base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     {{ page.content }}*/
/*     {% for module in page.collection() %}*/
/*         {{ module.content }}*/
/*     {% endfor %}*/
/*     {# <section class="project-foot">*/
/* 		<div class="project-foot-container">*/
/* 			<a href="{{ page.taxonomy.category('work').nextSibling.url }}" class="project-foot-prev project-foot-arrow">Previous Project</a>*/
/* 			*/
/* 			<a href="{{ base_url }}/#work-anchor" class="project-foot-back">*/
/* 				<div class="project-foot-back-icon"></div>*/
/* 				<span>All Work</span>*/
/* 			</a>*/
/* */
/* 			<a href="{{ page.adjacentSibling(-1).url }}" class="project-foot-next project-foot-arrow">Next Project</a>*/
/* 		</div>*/
/* */
/* */
/* 	</section> #}*/
/* {% endblock %}*/
