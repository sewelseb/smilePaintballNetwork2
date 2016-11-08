<?php

/* SmilePlatformBundle:Default:index.html.twig */
class __TwigTemplate_3e6427661ea1d5543b80d75407f918d073c2f38caffc057d3023199260288484 extends Twig_Template
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
        $__internal_df9fb85a70119f9b6d90b385dd159e3dd83bc4311c6cc57a5e5c3309c79edeb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9fb85a70119f9b6d90b385dd159e3dd83bc4311c6cc57a5e5c3309c79edeb0->enter($__internal_df9fb85a70119f9b6d90b385dd159e3dd83bc4311c6cc57a5e5c3309c79edeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df9fb85a70119f9b6d90b385dd159e3dd83bc4311c6cc57a5e5c3309c79edeb0->leave($__internal_df9fb85a70119f9b6d90b385dd159e3dd83bc4311c6cc57a5e5c3309c79edeb0_prof);

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
