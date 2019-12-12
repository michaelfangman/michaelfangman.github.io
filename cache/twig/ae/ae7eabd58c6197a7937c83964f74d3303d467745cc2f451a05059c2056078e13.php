<?php

/* modular/project-phone-slider.html.twig */
class __TwigTemplate_90816feceb0d2637bfa8705b3c1a0f596cab5777b5cece7630caab37d0223d3c extends Twig_Template
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
        echo "<section class=\"project-ps\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-ps-container\">
\t\t<div class=\"project-ps-phone-container\">
\t\t\t";
        // line 10
        echo "
\t\t\t<div class=\"project-ps-slider\">
\t\t\t  \t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "project_ps_slides", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 13
            echo "\t\t\t\t  \t<a href=\"";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute($context["slide"], "image", array());
            echo "\" class=\"project-ps-slide\">
\t\t\t\t  \t\t<div class=\"project-ps-slide-image\">
\t\t\t\t  \t\t\t<img src=\"";
            // line 15
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
            echo "/";
            echo $this->getAttribute($context["slide"], "image", array());
            echo "\" alt=\"";
            echo $this->getAttribute((isset($context["slider"]) ? $context["slider"] : null), "alt", array());
            echo "\">
\t\t\t\t  \t\t</div>
\t\t\t\t  \t</a>
\t\t\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t\t</div>
\t\t</div>



\t\t<div class=\"project-ps-content-container\">
\t\t\t<div class=\"project-ps-content-inner-container\">
\t\t\t\t<h3>";
        // line 26
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h3>
\t\t\t\t<p>";
        // line 27
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</p>
\t\t\t\t";
        // line 28
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_ps_button_link", array())) {
            // line 29
            echo "\t\t\t\t\t<a href=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_ps_button_link", array());
            echo "\" target=\"_blank\" class=\"btn btn-arrow-r\">";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_ps_button_text", array());
            echo "</a>
\t\t\t\t";
        }
        // line 31
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"project-ps-background\" style=\"background-image: url(' ";
        // line 35
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_ps_background_image", array());
        echo "');\"></div>
</section>

";
    }

    public function getTemplateName()
    {
        return "modular/project-phone-slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 35,  81 => 31,  73 => 29,  71 => 28,  67 => 27,  63 => 26,  54 => 19,  40 => 15,  32 => 13,  28 => 12,  24 => 10,  19 => 1,);
    }
}
/* <section class="project-ps" data--60-bottom-top="opacity:0;" data-center-top="opacity:1;">*/
/* 	<div class="project-ps-container">*/
/* 		<div class="project-ps-phone-container">*/
/* 			{# <div class="project-ps-phone">*/
/* 				{% if header.project_ps_iframe %}*/
/* 					<iframe src="{{ page.url(true) }}/{{ header.project_ps_iframe }}"></iframe>*/
/* 				{% endif %}*/
/* 				<div class="project-ps-phone-image" style="background-image: url(' {{ page.url(true) }}/{{ header.project_ps_phoneimg }}')"></div>*/
/* 			</div> #}*/
/* */
/* 			<div class="project-ps-slider">*/
/* 			  	{% for slide in page.header.project_ps_slides %}*/
/* 				  	<a href="{{ page.url(true) }}/{{ slide.image }}" class="project-ps-slide">*/
/* 				  		<div class="project-ps-slide-image">*/
/* 				  			<img src="{{ page.url(true) }}/{{ slide.image }}" alt="{{ slider.alt }}">*/
/* 				  		</div>*/
/* 				  	</a>*/
/* 			  	{% endfor %}*/
/* 			</div>*/
/* 		</div>*/
/* */
/* */
/* */
/* 		<div class="project-ps-content-container">*/
/* 			<div class="project-ps-content-inner-container">*/
/* 				<h3>{{ page.title }}</h3>*/
/* 				<p>{{ content }}</p>*/
/* 				{% if header.project_ps_button_link %}*/
/* 					<a href="{{ header.project_ps_button_link }}" target="_blank" class="btn btn-arrow-r">{{ header.project_ps_button_text }}</a>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="project-ps-background" style="background-image: url(' {{ page.url(true) }}/{{ header.project_ps_background_image }}');"></div>*/
/* </section>*/
/* */
/* */
