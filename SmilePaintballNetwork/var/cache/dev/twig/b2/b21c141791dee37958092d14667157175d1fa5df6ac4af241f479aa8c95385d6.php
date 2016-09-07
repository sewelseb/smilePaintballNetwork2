<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_3e419cfb56d176ada52b6eecaea4c6d60cf1a76e36d3e78b91e92aee11db44d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_da7dd8024e2be57d3bcb5cad9e46bda7610f1bdda90520d63c1f0a248829a842 = $this->env->getExtension("native_profiler");
        $__internal_da7dd8024e2be57d3bcb5cad9e46bda7610f1bdda90520d63c1f0a248829a842->enter($__internal_da7dd8024e2be57d3bcb5cad9e46bda7610f1bdda90520d63c1f0a248829a842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da7dd8024e2be57d3bcb5cad9e46bda7610f1bdda90520d63c1f0a248829a842->leave($__internal_da7dd8024e2be57d3bcb5cad9e46bda7610f1bdda90520d63c1f0a248829a842_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9631bb0bb1895649493429c191c5a4fb6df3d54c115f8e210e9c519823413241 = $this->env->getExtension("native_profiler");
        $__internal_9631bb0bb1895649493429c191c5a4fb6df3d54c115f8e210e9c519823413241->enter($__internal_9631bb0bb1895649493429c191c5a4fb6df3d54c115f8e210e9c519823413241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_9631bb0bb1895649493429c191c5a4fb6df3d54c115f8e210e9c519823413241->leave($__internal_9631bb0bb1895649493429c191c5a4fb6df3d54c115f8e210e9c519823413241_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
