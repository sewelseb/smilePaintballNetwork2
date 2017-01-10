<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_e2774a6a506847f4574d1b032e2a916a231226e7e1dddac506e5ceadeb47d40a extends Twig_Template
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
        $__internal_5df1cf9bb8d4d4ef028c0454450eec81017a9e311aaa34f9d5b514b1856b705d = $this->env->getExtension("native_profiler");
        $__internal_5df1cf9bb8d4d4ef028c0454450eec81017a9e311aaa34f9d5b514b1856b705d->enter($__internal_5df1cf9bb8d4d4ef028c0454450eec81017a9e311aaa34f9d5b514b1856b705d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5df1cf9bb8d4d4ef028c0454450eec81017a9e311aaa34f9d5b514b1856b705d->leave($__internal_5df1cf9bb8d4d4ef028c0454450eec81017a9e311aaa34f9d5b514b1856b705d_prof);

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
