<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_39c8e01d7eceea08e8d34121821941900323440b429d3b0617387d91da530a48 extends Twig_Template
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
        $__internal_c4afbf08be3d21fb657a03b9de45fe2083450ba55e74c6402e066d617c3bfc36 = $this->env->getExtension("native_profiler");
        $__internal_c4afbf08be3d21fb657a03b9de45fe2083450ba55e74c6402e066d617c3bfc36->enter($__internal_c4afbf08be3d21fb657a03b9de45fe2083450ba55e74c6402e066d617c3bfc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_c4afbf08be3d21fb657a03b9de45fe2083450ba55e74c6402e066d617c3bfc36->leave($__internal_c4afbf08be3d21fb657a03b9de45fe2083450ba55e74c6402e066d617c3bfc36_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
