<?php

/* modular/project-phone-feature.html.twig */
class __TwigTemplate_608fcd4b555a42a0c12dacd97b76b60a9a21a97d5e52dd6f24d0ae457c0407e9 extends Twig_Template
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
        echo "<section class=\"project-pf\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\">
\t<div class=\"project-pf-container\">
\t\t<div class=\"project-pf-phone-container\">
\t\t\t<div class=\"project-pf-phone\">
\t\t\t\t";
        // line 5
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_pf_iframe", array())) {
            // line 6
            echo "\t\t\t\t\t<iframe src=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_pf_iframe", array());
            echo "\"></iframe>
\t\t\t\t";
        }
        // line 8
        echo "\t\t\t\t<div class=\"project-pf-phone-image\" style=\"background-image: url(' ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_pf_phoneimg", array());
        echo "')\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"project-pf-content-container\">
\t\t\t<div class=\"project-pf-content-inner-container\">
\t\t\t\t<h3>";
        // line 13
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h3>
\t\t\t\t<p>";
        // line 14
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "</p>
\t\t\t\t";
        // line 15
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_pf_button_link", array())) {
            // line 16
            echo "\t\t\t\t\t<a href=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_pf_button_link", array());
            echo "\" target=\"_blank\" class=\"btn btn-arrow-r\">";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_pf_button_text", array());
            echo "</a>
\t\t\t\t";
        }
        // line 18
        echo "\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"project-pf-background\" style=\"background-image: url(' ";
        // line 22
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_pf_background_image", array());
        echo "');\"></div>
</section>

";
    }

    public function getTemplateName()
    {
        return "modular/project-phone-feature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  62 => 18,  54 => 16,  52 => 15,  48 => 14,  44 => 13,  33 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <section class="project-pf" data--60-bottom-top="opacity:0;" data-center-top="opacity:1;">*/
/* 	<div class="project-pf-container">*/
/* 		<div class="project-pf-phone-container">*/
/* 			<div class="project-pf-phone">*/
/* 				{% if header.project_pf_iframe %}*/
/* 					<iframe src="{{ header.project_pf_iframe }}"></iframe>*/
/* 				{% endif %}*/
/* 				<div class="project-pf-phone-image" style="background-image: url(' {{ page.url(true) }}/{{ header.project_pf_phoneimg }}')"></div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<div class="project-pf-content-container">*/
/* 			<div class="project-pf-content-inner-container">*/
/* 				<h3>{{ page.title }}</h3>*/
/* 				<p>{{ content }}</p>*/
/* 				{% if header.project_pf_button_link %}*/
/* 					<a href="{{ header.project_pf_button_link }}" target="_blank" class="btn btn-arrow-r">{{ header.project_pf_button_text }}</a>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="project-pf-background" style="background-image: url(' {{ page.url(true) }}/{{ header.project_pf_background_image }}');"></div>*/
/* </section>*/
/* */
/* */
