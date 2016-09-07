<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1dad31c69f79402ad1285da185ed3af841124759569c44b273491f12a13b4c73 extends Twig_Template
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
        $__internal_6de72c2f9970011db564aa44d38e9facbcfc05212ea0f953d653a2b6df029276 = $this->env->getExtension("native_profiler");
        $__internal_6de72c2f9970011db564aa44d38e9facbcfc05212ea0f953d653a2b6df029276->enter($__internal_6de72c2f9970011db564aa44d38e9facbcfc05212ea0f953d653a2b6df029276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_6de72c2f9970011db564aa44d38e9facbcfc05212ea0f953d653a2b6df029276->leave($__internal_6de72c2f9970011db564aa44d38e9facbcfc05212ea0f953d653a2b6df029276_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
