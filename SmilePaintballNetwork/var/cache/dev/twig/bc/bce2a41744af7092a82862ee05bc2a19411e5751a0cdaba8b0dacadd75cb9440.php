<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_afb4762866725c40e717b1c515df2d20e58a4dc19f489294cad68d880f2c8f72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f492cbdab3657f9e83397e32622bcc41ff5d7deb4c928fc89eb1de342bf9305 = $this->env->getExtension("native_profiler");
        $__internal_5f492cbdab3657f9e83397e32622bcc41ff5d7deb4c928fc89eb1de342bf9305->enter($__internal_5f492cbdab3657f9e83397e32622bcc41ff5d7deb4c928fc89eb1de342bf9305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5f492cbdab3657f9e83397e32622bcc41ff5d7deb4c928fc89eb1de342bf9305->leave($__internal_5f492cbdab3657f9e83397e32622bcc41ff5d7deb4c928fc89eb1de342bf9305_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
