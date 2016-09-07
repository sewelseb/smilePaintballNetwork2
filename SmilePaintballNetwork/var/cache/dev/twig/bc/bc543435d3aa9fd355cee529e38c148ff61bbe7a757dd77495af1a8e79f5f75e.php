<?php

/* SmilePlatformBundle:Default:index.html.twig */
class __TwigTemplate_3fc0b19c764edb1c76d914795530b5183d763a60461aeb7f876ff5b53b7e4e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle:Default:index.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_140669be60d40e196986c261d3e88bde72388937e272d2731bd08f9db17bb32e = $this->env->getExtension("native_profiler");
        $__internal_140669be60d40e196986c261d3e88bde72388937e272d2731bd08f9db17bb32e->enter($__internal_140669be60d40e196986c261d3e88bde72388937e272d2731bd08f9db17bb32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_140669be60d40e196986c261d3e88bde72388937e272d2731bd08f9db17bb32e->leave($__internal_140669be60d40e196986c261d3e88bde72388937e272d2731bd08f9db17bb32e_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }
}
/* */
/* {% extends "SmilePlatformBundle::Default/layout.html.twig" %}*/
/* */
/* */
/* */
