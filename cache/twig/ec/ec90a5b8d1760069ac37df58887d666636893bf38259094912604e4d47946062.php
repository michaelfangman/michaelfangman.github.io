<?php

/* modular/project-desktop-slider.html.twig */
class __TwigTemplate_ecbdebca3e495c26ec66d243f15d4a72de7f35039d5d6fa4af6779ea8cd92c2d extends Twig_Template
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
        echo "<section class=\"project-ds\">
\t<div class=\"project-ds-container\">
\t\t<div class=\"project-ds-content-container\">
\t\t\t<div class=\"project-ds-content-inner-container\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t\t\t\t<h3>";
        // line 5
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h3>
\t\t\t\t<p>";
        // line 6
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</p>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"project-ds-slider-container\">
\t
\t\t\t<div class=\"project-ds-slider\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t\t\t  \t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "project_ds_slides", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slider"]) {
            // line 14
            echo "\t\t\t\t  \t<a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute($context["slider"], "image", array());
            echo "\" class=\"project-ds-slide\">
\t\t\t\t  \t\t<div class=\"project-ds-slide-image\">
\t\t\t\t  \t\t\t<img src=\"";
            // line 16
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute($context["slider"], "image", array());
            echo "\" alt=\"";
            echo $this->getAttribute($context["slider"], "alt", array());
            echo "\">
\t\t\t\t  \t\t</div>
\t\t\t\t  \t</a>
\t\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "\t\t\t</div>
\t\t</div>

\t</div>
\t<div class=\"project-ds-background\" style=\"background-image: url(' ";
        // line 24
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_ds_background_image", array());
        echo "');\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:0.05;\"></div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/project-desktop-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  65 => 20,  51 => 16,  43 => 14,  39 => 13,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <section class="project-ds">*/
/* 	<div class="project-ds-container">*/
/* 		<div class="project-ds-content-container">*/
/* 			<div class="project-ds-content-inner-container" data--60-bottom-top="opacity:0;" data-center-top="opacity:1;">*/
/* 				<h3>{{ page.title }}</h3>*/
/* 				<p>{{ content }}</p>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<div class="project-ds-slider-container">*/
/* 	*/
/* 			<div class="project-ds-slider" data--60-bottom-top="opacity:0;" data-center-top="opacity:1;">*/
/* 			  	{% for slider in page.header.project_ds_slides %}*/
/* 				  	<a href="{{ page.url(true) }}/{{ slider.image }}" class="project-ds-slide">*/
/* 				  		<div class="project-ds-slide-image">*/
/* 				  			<img src="{{ page.url(true) }}/{{ slider.image }}" alt="{{ slider.alt }}">*/
/* 				  		</div>*/
/* 				  	</a>*/
/* 			  	{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* 	<div class="project-ds-background" style="background-image: url(' {{ page.url(true) }}/{{ header.project_ds_background_image }}');" data--60-bottom-top="opacity:0;" data-center-top="opacity:0.05;"></div>*/
/* </section>*/
