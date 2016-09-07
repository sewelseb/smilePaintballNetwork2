<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_49c41197c6b0b38041c594efa2dee3cc3767bebff5fc2e2ccbbd0a0e4f9fde65 extends Twig_Template
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
        $__internal_ec9782d4621f333972aac648d8cfc05665f25e16c275eaa7749dc5bbb184f441 = $this->env->getExtension("native_profiler");
        $__internal_ec9782d4621f333972aac648d8cfc05665f25e16c275eaa7749dc5bbb184f441->enter($__internal_ec9782d4621f333972aac648d8cfc05665f25e16c275eaa7749dc5bbb184f441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ec9782d4621f333972aac648d8cfc05665f25e16c275eaa7749dc5bbb184f441->leave($__internal_ec9782d4621f333972aac648d8cfc05665f25e16c275eaa7749dc5bbb184f441_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
