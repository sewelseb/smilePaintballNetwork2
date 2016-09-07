<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_2803fddcb592583131faedef47a8bc437562fec3cb0b07b59951f89cb6050b6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_5a161dc025f1b2bdd7e323261de8910d0cc2b9f071742ec7c89c68aef31122b7 = $this->env->getExtension("native_profiler");
        $__internal_5a161dc025f1b2bdd7e323261de8910d0cc2b9f071742ec7c89c68aef31122b7->enter($__internal_5a161dc025f1b2bdd7e323261de8910d0cc2b9f071742ec7c89c68aef31122b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a161dc025f1b2bdd7e323261de8910d0cc2b9f071742ec7c89c68aef31122b7->leave($__internal_5a161dc025f1b2bdd7e323261de8910d0cc2b9f071742ec7c89c68aef31122b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_86a7e7c30ca00aa31a83259be0d3d937477eadfb6c38edc6a70fa50232c8d610 = $this->env->getExtension("native_profiler");
        $__internal_86a7e7c30ca00aa31a83259be0d3d937477eadfb6c38edc6a70fa50232c8d610->enter($__internal_86a7e7c30ca00aa31a83259be0d3d937477eadfb6c38edc6a70fa50232c8d610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_86a7e7c30ca00aa31a83259be0d3d937477eadfb6c38edc6a70fa50232c8d610->leave($__internal_86a7e7c30ca00aa31a83259be0d3d937477eadfb6c38edc6a70fa50232c8d610_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
