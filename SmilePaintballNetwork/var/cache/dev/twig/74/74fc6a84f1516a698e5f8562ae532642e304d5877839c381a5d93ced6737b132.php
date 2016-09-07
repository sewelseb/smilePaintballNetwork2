<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_d65e174d431b0d018c59d175eb49f975203efbc36ce5ece6e8ae0b7f4e42af2f extends Twig_Template
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
        $__internal_1e5e965de343a68e8e6f008b55e7df67808206512486d3731c589f015b940a5a = $this->env->getExtension("native_profiler");
        $__internal_1e5e965de343a68e8e6f008b55e7df67808206512486d3731c589f015b940a5a->enter($__internal_1e5e965de343a68e8e6f008b55e7df67808206512486d3731c589f015b940a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1e5e965de343a68e8e6f008b55e7df67808206512486d3731c589f015b940a5a->leave($__internal_1e5e965de343a68e8e6f008b55e7df67808206512486d3731c589f015b940a5a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
