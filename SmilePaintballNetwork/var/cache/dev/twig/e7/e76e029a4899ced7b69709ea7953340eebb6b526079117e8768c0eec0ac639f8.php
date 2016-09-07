<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_583b90ffefde3c35d1c0bb36c1c9865d85b5e1ccfe9f54d74fb55d817328c7bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47d07b302a5019e863561f7aa8340173c198ebc99fa6609d07397b294e2ddd35 = $this->env->getExtension("native_profiler");
        $__internal_47d07b302a5019e863561f7aa8340173c198ebc99fa6609d07397b294e2ddd35->enter($__internal_47d07b302a5019e863561f7aa8340173c198ebc99fa6609d07397b294e2ddd35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47d07b302a5019e863561f7aa8340173c198ebc99fa6609d07397b294e2ddd35->leave($__internal_47d07b302a5019e863561f7aa8340173c198ebc99fa6609d07397b294e2ddd35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8aff9bf867f7139967bc204629c8817dabf7e3401883428decb6740e72fce77 = $this->env->getExtension("native_profiler");
        $__internal_b8aff9bf867f7139967bc204629c8817dabf7e3401883428decb6740e72fce77->enter($__internal_b8aff9bf867f7139967bc204629c8817dabf7e3401883428decb6740e72fce77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_b8aff9bf867f7139967bc204629c8817dabf7e3401883428decb6740e72fce77->leave($__internal_b8aff9bf867f7139967bc204629c8817dabf7e3401883428decb6740e72fce77_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
