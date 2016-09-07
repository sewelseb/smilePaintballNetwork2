<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_eb18cac1825b1a881ecb36e5e25dd3623eabbe68297c8e3443413f5df5ea953b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_4ff954e80a3e961243a5999870f5a325d996e3720ad842a80eab3ec6aa1d0ac4 = $this->env->getExtension("native_profiler");
        $__internal_4ff954e80a3e961243a5999870f5a325d996e3720ad842a80eab3ec6aa1d0ac4->enter($__internal_4ff954e80a3e961243a5999870f5a325d996e3720ad842a80eab3ec6aa1d0ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ff954e80a3e961243a5999870f5a325d996e3720ad842a80eab3ec6aa1d0ac4->leave($__internal_4ff954e80a3e961243a5999870f5a325d996e3720ad842a80eab3ec6aa1d0ac4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5337d56be8c9d11a44e7336b2493e9ac6ef8e4e080bf63ddf59601f7b8c27a6b = $this->env->getExtension("native_profiler");
        $__internal_5337d56be8c9d11a44e7336b2493e9ac6ef8e4e080bf63ddf59601f7b8c27a6b->enter($__internal_5337d56be8c9d11a44e7336b2493e9ac6ef8e4e080bf63ddf59601f7b8c27a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_5337d56be8c9d11a44e7336b2493e9ac6ef8e4e080bf63ddf59601f7b8c27a6b->leave($__internal_5337d56be8c9d11a44e7336b2493e9ac6ef8e4e080bf63ddf59601f7b8c27a6b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
