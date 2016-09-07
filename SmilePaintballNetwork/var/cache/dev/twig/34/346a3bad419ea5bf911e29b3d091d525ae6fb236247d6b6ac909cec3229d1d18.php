<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_15e9a29893d888b41e025408746b6ec205cfabb8d2081272b8385e05bd2f67e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8d122218d6045b3c16cc5426903ae38e7cfdbb627c261af0e3896b18b5306647 = $this->env->getExtension("native_profiler");
        $__internal_8d122218d6045b3c16cc5426903ae38e7cfdbb627c261af0e3896b18b5306647->enter($__internal_8d122218d6045b3c16cc5426903ae38e7cfdbb627c261af0e3896b18b5306647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d122218d6045b3c16cc5426903ae38e7cfdbb627c261af0e3896b18b5306647->leave($__internal_8d122218d6045b3c16cc5426903ae38e7cfdbb627c261af0e3896b18b5306647_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94b9377c231d9e9e3a838b313a30d1bc3a5a71221fdcb5c408a33fb700480691 = $this->env->getExtension("native_profiler");
        $__internal_94b9377c231d9e9e3a838b313a30d1bc3a5a71221fdcb5c408a33fb700480691->enter($__internal_94b9377c231d9e9e3a838b313a30d1bc3a5a71221fdcb5c408a33fb700480691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_94b9377c231d9e9e3a838b313a30d1bc3a5a71221fdcb5c408a33fb700480691->leave($__internal_94b9377c231d9e9e3a838b313a30d1bc3a5a71221fdcb5c408a33fb700480691_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
