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
        $__internal_36eb9352cb13e7a7224265b8c05c0eb506eeeb509853c2463a2c097c1a0c40e9 = $this->env->getExtension("native_profiler");
        $__internal_36eb9352cb13e7a7224265b8c05c0eb506eeeb509853c2463a2c097c1a0c40e9->enter($__internal_36eb9352cb13e7a7224265b8c05c0eb506eeeb509853c2463a2c097c1a0c40e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36eb9352cb13e7a7224265b8c05c0eb506eeeb509853c2463a2c097c1a0c40e9->leave($__internal_36eb9352cb13e7a7224265b8c05c0eb506eeeb509853c2463a2c097c1a0c40e9_prof);

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
