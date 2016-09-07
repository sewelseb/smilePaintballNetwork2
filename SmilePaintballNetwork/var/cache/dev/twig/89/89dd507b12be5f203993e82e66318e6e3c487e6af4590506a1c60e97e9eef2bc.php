<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_8a7a61174c300a1888f83fad70b68f2662fd99538fdb6f3e33160f505ca17b03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_2246cf7c87e58588bc21b575d3edfa37742f5e06e20eae5e7b13e3fba072390b = $this->env->getExtension("native_profiler");
        $__internal_2246cf7c87e58588bc21b575d3edfa37742f5e06e20eae5e7b13e3fba072390b->enter($__internal_2246cf7c87e58588bc21b575d3edfa37742f5e06e20eae5e7b13e3fba072390b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2246cf7c87e58588bc21b575d3edfa37742f5e06e20eae5e7b13e3fba072390b->leave($__internal_2246cf7c87e58588bc21b575d3edfa37742f5e06e20eae5e7b13e3fba072390b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_747b5611e1522fe534fa2675ea124a717b7b71d45878e3ada706ba7d15f9d99e = $this->env->getExtension("native_profiler");
        $__internal_747b5611e1522fe534fa2675ea124a717b7b71d45878e3ada706ba7d15f9d99e->enter($__internal_747b5611e1522fe534fa2675ea124a717b7b71d45878e3ada706ba7d15f9d99e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_747b5611e1522fe534fa2675ea124a717b7b71d45878e3ada706ba7d15f9d99e->leave($__internal_747b5611e1522fe534fa2675ea124a717b7b71d45878e3ada706ba7d15f9d99e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
