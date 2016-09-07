<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_cee67086227ab32d79f726cca3ff08850baae24e9ff18ebe554ef6628450ae74 extends Twig_Template
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
        $__internal_127b90ed8c014b2e99afae89d507a162513c1069f54fe4a99139bf1aa7f6a222 = $this->env->getExtension("native_profiler");
        $__internal_127b90ed8c014b2e99afae89d507a162513c1069f54fe4a99139bf1aa7f6a222->enter($__internal_127b90ed8c014b2e99afae89d507a162513c1069f54fe4a99139bf1aa7f6a222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_127b90ed8c014b2e99afae89d507a162513c1069f54fe4a99139bf1aa7f6a222->leave($__internal_127b90ed8c014b2e99afae89d507a162513c1069f54fe4a99139bf1aa7f6a222_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
