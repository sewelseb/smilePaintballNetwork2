<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5bfeee3a47753c04da0d254a96477eb53abb3707f44f6d7d778084a440f04e65 extends Twig_Template
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
        $__internal_244b05eb9f7218a9d00a10e01e4110babf790e6878ca55a271604ef3babe942b = $this->env->getExtension("native_profiler");
        $__internal_244b05eb9f7218a9d00a10e01e4110babf790e6878ca55a271604ef3babe942b->enter($__internal_244b05eb9f7218a9d00a10e01e4110babf790e6878ca55a271604ef3babe942b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_244b05eb9f7218a9d00a10e01e4110babf790e6878ca55a271604ef3babe942b->leave($__internal_244b05eb9f7218a9d00a10e01e4110babf790e6878ca55a271604ef3babe942b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
