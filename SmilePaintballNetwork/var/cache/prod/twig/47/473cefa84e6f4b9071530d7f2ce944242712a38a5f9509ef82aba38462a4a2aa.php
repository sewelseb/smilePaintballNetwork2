<?php

/* SmilePlatformBundle:Default:index.html.twig */
class __TwigTemplate_883294aea3aaf5db2a9d94efe32cd9c2389b75ba182cbe46d060eea4af656b39 extends Twig_Template
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
        $__internal_03798c342dfbff6bfeae107aa8c1c6a88ef3a967e7a8a327299c6004374adc56 = $this->env->getExtension("native_profiler");
        $__internal_03798c342dfbff6bfeae107aa8c1c6a88ef3a967e7a8a327299c6004374adc56->enter($__internal_03798c342dfbff6bfeae107aa8c1c6a88ef3a967e7a8a327299c6004374adc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03798c342dfbff6bfeae107aa8c1c6a88ef3a967e7a8a327299c6004374adc56->leave($__internal_03798c342dfbff6bfeae107aa8c1c6a88ef3a967e7a8a327299c6004374adc56_prof);

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
