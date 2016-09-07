<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_5a571a73dce8c6ae51d7d4deb7ae6497563fe5d42be50cb8378b99ce9e52a911 extends Twig_Template
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
        $__internal_862b0a05c95986c1bdebb9deaed31688d591d951e18a455578d80957381c3fb6 = $this->env->getExtension("native_profiler");
        $__internal_862b0a05c95986c1bdebb9deaed31688d591d951e18a455578d80957381c3fb6->enter($__internal_862b0a05c95986c1bdebb9deaed31688d591d951e18a455578d80957381c3fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_862b0a05c95986c1bdebb9deaed31688d591d951e18a455578d80957381c3fb6->leave($__internal_862b0a05c95986c1bdebb9deaed31688d591d951e18a455578d80957381c3fb6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
