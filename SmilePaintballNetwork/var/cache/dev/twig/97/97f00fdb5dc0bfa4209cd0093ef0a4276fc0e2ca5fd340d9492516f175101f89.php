<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_ff5bcebc42037f76153c50e382a5016d148de5a1b4f9b2353b8df7560b939596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_59b68a8ae0689761744be0e07c4e90b4aa9f96c29c72df34bf6c223f47a72a17 = $this->env->getExtension("native_profiler");
        $__internal_59b68a8ae0689761744be0e07c4e90b4aa9f96c29c72df34bf6c223f47a72a17->enter($__internal_59b68a8ae0689761744be0e07c4e90b4aa9f96c29c72df34bf6c223f47a72a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59b68a8ae0689761744be0e07c4e90b4aa9f96c29c72df34bf6c223f47a72a17->leave($__internal_59b68a8ae0689761744be0e07c4e90b4aa9f96c29c72df34bf6c223f47a72a17_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1393ad7570bd028be270d62dca736364c87d103cf68ca67ea4e1ef70660540cf = $this->env->getExtension("native_profiler");
        $__internal_1393ad7570bd028be270d62dca736364c87d103cf68ca67ea4e1ef70660540cf->enter($__internal_1393ad7570bd028be270d62dca736364c87d103cf68ca67ea4e1ef70660540cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1393ad7570bd028be270d62dca736364c87d103cf68ca67ea4e1ef70660540cf->leave($__internal_1393ad7570bd028be270d62dca736364c87d103cf68ca67ea4e1ef70660540cf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
