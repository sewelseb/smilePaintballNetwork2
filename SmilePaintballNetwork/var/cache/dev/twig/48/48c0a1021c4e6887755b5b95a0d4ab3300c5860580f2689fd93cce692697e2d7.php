<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_64ddbfafc7660f5bad6f65423a5c4cdbe0563e9f6dd9d9a62dcec81feee8cb0c extends Twig_Template
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
        $__internal_18732388431a2c3ab8c7582812977de95a93ad36f259721e43661fa62abb78de = $this->env->getExtension("native_profiler");
        $__internal_18732388431a2c3ab8c7582812977de95a93ad36f259721e43661fa62abb78de->enter($__internal_18732388431a2c3ab8c7582812977de95a93ad36f259721e43661fa62abb78de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_18732388431a2c3ab8c7582812977de95a93ad36f259721e43661fa62abb78de->leave($__internal_18732388431a2c3ab8c7582812977de95a93ad36f259721e43661fa62abb78de_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
