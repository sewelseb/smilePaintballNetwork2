<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e61aa23a28f33e07d74ca50d55394efbf2e0162790f21df7d9b16f773fa1680d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_1e5c20bccdc9f2f967e80d2e6d80e7aa4d4c72ca032f3555a1d84eb638da4e33 = $this->env->getExtension("native_profiler");
        $__internal_1e5c20bccdc9f2f967e80d2e6d80e7aa4d4c72ca032f3555a1d84eb638da4e33->enter($__internal_1e5c20bccdc9f2f967e80d2e6d80e7aa4d4c72ca032f3555a1d84eb638da4e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e5c20bccdc9f2f967e80d2e6d80e7aa4d4c72ca032f3555a1d84eb638da4e33->leave($__internal_1e5c20bccdc9f2f967e80d2e6d80e7aa4d4c72ca032f3555a1d84eb638da4e33_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f2d1ad1bb48414314e3f5d1d1b6ccdc79143e3c0389fcbb5e7abf8aa16513b3 = $this->env->getExtension("native_profiler");
        $__internal_9f2d1ad1bb48414314e3f5d1d1b6ccdc79143e3c0389fcbb5e7abf8aa16513b3->enter($__internal_9f2d1ad1bb48414314e3f5d1d1b6ccdc79143e3c0389fcbb5e7abf8aa16513b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_9f2d1ad1bb48414314e3f5d1d1b6ccdc79143e3c0389fcbb5e7abf8aa16513b3->leave($__internal_9f2d1ad1bb48414314e3f5d1d1b6ccdc79143e3c0389fcbb5e7abf8aa16513b3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
