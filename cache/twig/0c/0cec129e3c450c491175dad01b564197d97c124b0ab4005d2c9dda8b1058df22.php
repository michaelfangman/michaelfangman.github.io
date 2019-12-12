<?php

/* modular/project-description.html.twig */
class __TwigTemplate_5751b43ca405c26d7956efc1a57b0f415c069fc1b89b29b792a9d67ef51fb594 extends Twig_Template
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
        echo "<section class=\"project-desc\">
\t<div class=\"project-desc-container\" data-start=\"opacity:0;\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">

\t\t<div class=\"project-desc-main-container\">
\t\t\t<h3>";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h3>
\t\t\t<p>";
        // line 6
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</p>
\t\t</div>

\t\t<div class=\"project-desc-side-container\">
\t\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "project_attributes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
            // line 11
            echo "\t\t\t\t<div class=\"project-desc-attribute\">
\t\t\t\t\t";
            // line 12
            if ($this->getAttribute($context["attribute"], "title", array())) {
                // line 13
                echo "\t\t\t\t\t\t<h6>";
                echo $this->getAttribute($context["attribute"], "title", array());
                echo "</h6>
\t\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t\t";
            if ($this->getAttribute($context["attribute"], "description", array())) {
                // line 16
                echo "\t\t\t\t\t\t<p>";
                echo $this->getAttribute($context["attribute"], "description", array());
                echo "</p>
\t\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t</div>
\t</div>
</section>

";
    }

    public function getTemplateName()
    {
        return "modular/project-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  60 => 18,  54 => 16,  51 => 15,  45 => 13,  43 => 12,  40 => 11,  36 => 10,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <section class="project-desc">*/
/* 	<div class="project-desc-container" data-start="opacity:0;" data--60-bottom-top="opacity:0;" data-center-top="opacity:1;">*/
/* */
/* 		<div class="project-desc-main-container">*/
/* 			<h3>{{ page.title }}</h3>*/
/* 			<p>{{ content }}</p>*/
/* 		</div>*/
/* */
/* 		<div class="project-desc-side-container">*/
/* 			{% for attribute in page.header.project_attributes %}*/
/* 				<div class="project-desc-attribute">*/
/* 					{% if attribute.title %}*/
/* 						<h6>{{ attribute.title }}</h6>*/
/* 					{% endif %}*/
/* 					{% if attribute.description %}*/
/* 						<p>{{ attribute.description }}</p>*/
/* 					{% endif %}*/
/* 				</div>*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* </section>*/
/* */
/* */
