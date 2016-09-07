<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1541ad67cdcbae0f7301f6e46ed541b36c0a80321497926f094f57a9e4e9170c extends Twig_Template
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
        $__internal_26b75e70f0dfa5c9ebaa16675657469f8246882db20f8227fb2ff732adc355b8 = $this->env->getExtension("native_profiler");
        $__internal_26b75e70f0dfa5c9ebaa16675657469f8246882db20f8227fb2ff732adc355b8->enter($__internal_26b75e70f0dfa5c9ebaa16675657469f8246882db20f8227fb2ff732adc355b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_26b75e70f0dfa5c9ebaa16675657469f8246882db20f8227fb2ff732adc355b8->leave($__internal_26b75e70f0dfa5c9ebaa16675657469f8246882db20f8227fb2ff732adc355b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
