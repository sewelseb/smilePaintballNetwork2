<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_ed3b147c4f2dac240af6de7e99b236ef5dc3c9d9c42d51fb9dd7bd934eb834b2 extends Twig_Template
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
        $__internal_052b90bb6435b8bbc23c96354e82d655e9d685d3c747ac5a3ff223aedd46772e = $this->env->getExtension("native_profiler");
        $__internal_052b90bb6435b8bbc23c96354e82d655e9d685d3c747ac5a3ff223aedd46772e->enter($__internal_052b90bb6435b8bbc23c96354e82d655e9d685d3c747ac5a3ff223aedd46772e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_052b90bb6435b8bbc23c96354e82d655e9d685d3c747ac5a3ff223aedd46772e->leave($__internal_052b90bb6435b8bbc23c96354e82d655e9d685d3c747ac5a3ff223aedd46772e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
