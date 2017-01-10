<?php

/* SmilePlatformBundle:Default:index.html.twig */
class __TwigTemplate_e3bea9aa9950685428f1f4228c3824b9cd3ce00c50d708dbdef9c25a29b9da6f extends Twig_Template
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
        $__internal_23fba5c43cc417a2831543f18fb5ae0d9673e236d74a0c20871d89fba126b7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fba5c43cc417a2831543f18fb5ae0d9673e236d74a0c20871d89fba126b7fe->enter($__internal_23fba5c43cc417a2831543f18fb5ae0d9673e236d74a0c20871d89fba126b7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23fba5c43cc417a2831543f18fb5ae0d9673e236d74a0c20871d89fba126b7fe->leave($__internal_23fba5c43cc417a2831543f18fb5ae0d9673e236d74a0c20871d89fba126b7fe_prof);

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

    public function getSource()
    {
        return "
{% extends \"SmilePlatformBundle::Default/layout.html.twig\" %}


";
    }
}
