<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_b12f9ca5d4710dbb0db727ad1fb17b6dff6c05ec5e4939b390acddc8e2983d29 extends Twig_Template
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
        $__internal_1bd97e53f327a58a208bbf57929eeda10b56efef7a77b2de10313a8758f99c83 = $this->env->getExtension("native_profiler");
        $__internal_1bd97e53f327a58a208bbf57929eeda10b56efef7a77b2de10313a8758f99c83->enter($__internal_1bd97e53f327a58a208bbf57929eeda10b56efef7a77b2de10313a8758f99c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1bd97e53f327a58a208bbf57929eeda10b56efef7a77b2de10313a8758f99c83->leave($__internal_1bd97e53f327a58a208bbf57929eeda10b56efef7a77b2de10313a8758f99c83_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
