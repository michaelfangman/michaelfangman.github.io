<?php

/* modular/project-next-link.html.twig */
class __TwigTemplate_eae986e38e7ef8e6882196c6217de5e90c3d9cce1402c3eb4ff7e6eae0f4bf4f extends Twig_Template
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
        echo "<section class=\"project-next-link\">
\t<a href=\"";
        // line 2
        echo (isset($context["base_url"]) ? $context["base_url"] : null);
        echo "/";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_nl_project_link", array());
        echo "\" class=\"link project-nl-container\">
\t\t
\t\t<div class=\"project-nl-info\" data--60-bottom-top=\"opacity:0;\" data-center-top=\"opacity:1;\" data-end=\"opacity:1;\">
\t\t\t<p class=\"subhead\">Next Up</p>
\t\t\t<h3>";
        // line 6
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</h3>
\t\t</div>

\t</a>
\t<div class=\"project-nl-bkg-image\" style=\"background-image: url(' ";
        // line 10
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array(0 => true), "method");
        echo "/";
        echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "project_nl_bkg_image", array());
        echo "');\"></div>
</section>

";
    }

    public function getTemplateName()
    {
        return "modular/project-next-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 10,  31 => 6,  22 => 2,  19 => 1,);
    }
}
/* <section class="project-next-link">*/
/* 	<a href="{{ base_url }}/{{ header.project_nl_project_link }}" class="link project-nl-container">*/
/* 		*/
/* 		<div class="project-nl-info" data--60-bottom-top="opacity:0;" data-center-top="opacity:1;" data-end="opacity:1;">*/
/* 			<p class="subhead">Next Up</p>*/
/* 			<h3>{{ page.title }}</h3>*/
/* 		</div>*/
/* */
/* 	</a>*/
/* 	<div class="project-nl-bkg-image" style="background-image: url(' {{ page.url(true) }}/{{ header.project_nl_bkg_image }}');"></div>*/
/* </section>*/
/* */
/* */
