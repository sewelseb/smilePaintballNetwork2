<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_6030098a9c624ceb211c1f6373c56abcbf99924032a8ec3c8a83ff3c9f678414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_5e0b8b5dae62c268c1b2f0e5639056e8054d41b2fada83ca70bfa73722b56f64 = $this->env->getExtension("native_profiler");
        $__internal_5e0b8b5dae62c268c1b2f0e5639056e8054d41b2fada83ca70bfa73722b56f64->enter($__internal_5e0b8b5dae62c268c1b2f0e5639056e8054d41b2fada83ca70bfa73722b56f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e0b8b5dae62c268c1b2f0e5639056e8054d41b2fada83ca70bfa73722b56f64->leave($__internal_5e0b8b5dae62c268c1b2f0e5639056e8054d41b2fada83ca70bfa73722b56f64_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2d09a995339f26bf8bc1b9085e4e4175e8610702f0a2833eec0600c8e7df60a = $this->env->getExtension("native_profiler");
        $__internal_a2d09a995339f26bf8bc1b9085e4e4175e8610702f0a2833eec0600c8e7df60a->enter($__internal_a2d09a995339f26bf8bc1b9085e4e4175e8610702f0a2833eec0600c8e7df60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_a2d09a995339f26bf8bc1b9085e4e4175e8610702f0a2833eec0600c8e7df60a->leave($__internal_a2d09a995339f26bf8bc1b9085e4e4175e8610702f0a2833eec0600c8e7df60a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
