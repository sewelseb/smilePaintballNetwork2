<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_9fc6401184ae043f593b069d0e90318b5b16d597387558737665ce236b38f844 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_486c3bf65656b4ed09bf9b7be20976752df3e035ca46a73eda80e57a30bbf8e8 = $this->env->getExtension("native_profiler");
        $__internal_486c3bf65656b4ed09bf9b7be20976752df3e035ca46a73eda80e57a30bbf8e8->enter($__internal_486c3bf65656b4ed09bf9b7be20976752df3e035ca46a73eda80e57a30bbf8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_486c3bf65656b4ed09bf9b7be20976752df3e035ca46a73eda80e57a30bbf8e8->leave($__internal_486c3bf65656b4ed09bf9b7be20976752df3e035ca46a73eda80e57a30bbf8e8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d8db93ad1e6c51d1183142bdf10a6f12fe04e68f44b99037277914ae0dda31e8 = $this->env->getExtension("native_profiler");
        $__internal_d8db93ad1e6c51d1183142bdf10a6f12fe04e68f44b99037277914ae0dda31e8->enter($__internal_d8db93ad1e6c51d1183142bdf10a6f12fe04e68f44b99037277914ae0dda31e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_d8db93ad1e6c51d1183142bdf10a6f12fe04e68f44b99037277914ae0dda31e8->leave($__internal_d8db93ad1e6c51d1183142bdf10a6f12fe04e68f44b99037277914ae0dda31e8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
