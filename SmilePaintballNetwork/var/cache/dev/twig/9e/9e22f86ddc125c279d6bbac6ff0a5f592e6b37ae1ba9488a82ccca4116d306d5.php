<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_de20803e7ec2214a39b04d45a84c170864adc173163ddf64d0239aad5725ef73 extends Twig_Template
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
        $__internal_558cf4f2165a6fd45f64f202fc4a361be85045d6fd542bf7e71f1874a82a105f = $this->env->getExtension("native_profiler");
        $__internal_558cf4f2165a6fd45f64f202fc4a361be85045d6fd542bf7e71f1874a82a105f->enter($__internal_558cf4f2165a6fd45f64f202fc4a361be85045d6fd542bf7e71f1874a82a105f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_558cf4f2165a6fd45f64f202fc4a361be85045d6fd542bf7e71f1874a82a105f->leave($__internal_558cf4f2165a6fd45f64f202fc4a361be85045d6fd542bf7e71f1874a82a105f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
