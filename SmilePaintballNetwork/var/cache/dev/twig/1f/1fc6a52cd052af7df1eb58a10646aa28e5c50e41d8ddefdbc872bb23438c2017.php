<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_060f8c2bc56f3f8f87cc9d2b55af0602aecd8e0d4c3b17be1c30509d0ecde1d8 extends Twig_Template
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
        $__internal_9869e83bb8ba793024bd29f2f62e1adeb2df10d0bae99f09a4c5e6f23fcf8eb9 = $this->env->getExtension("native_profiler");
        $__internal_9869e83bb8ba793024bd29f2f62e1adeb2df10d0bae99f09a4c5e6f23fcf8eb9->enter($__internal_9869e83bb8ba793024bd29f2f62e1adeb2df10d0bae99f09a4c5e6f23fcf8eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9869e83bb8ba793024bd29f2f62e1adeb2df10d0bae99f09a4c5e6f23fcf8eb9->leave($__internal_9869e83bb8ba793024bd29f2f62e1adeb2df10d0bae99f09a4c5e6f23fcf8eb9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
