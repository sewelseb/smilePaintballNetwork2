<?php

/* @SmilePlatform/Default/index.html.twig */
class __TwigTemplate_29c68e02b6a994e289979c3abcf3d04d960a80322501df90e72e2de6e31ee46b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "@SmilePlatform/Default/index.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83905aa630f74473a79454e2fe4858aa4dd16d78ed8525d96e2d193c37cb02d9 = $this->env->getExtension("native_profiler");
        $__internal_83905aa630f74473a79454e2fe4858aa4dd16d78ed8525d96e2d193c37cb02d9->enter($__internal_83905aa630f74473a79454e2fe4858aa4dd16d78ed8525d96e2d193c37cb02d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SmilePlatform/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83905aa630f74473a79454e2fe4858aa4dd16d78ed8525d96e2d193c37cb02d9->leave($__internal_83905aa630f74473a79454e2fe4858aa4dd16d78ed8525d96e2d193c37cb02d9_prof);

    }

    public function getTemplateName()
    {
        return "@SmilePlatform/Default/index.html.twig";
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
