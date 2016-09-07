<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_cf650f5d26a8e14deb5ce67e66c9e2db79ca7ab19f7c64db1d456b3d22d9cca6 extends Twig_Template
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
        $__internal_aea1ee7a9c88ba7f19bb5838a9a3723d3df59d9dff9bc6c310f5b6592400ee51 = $this->env->getExtension("native_profiler");
        $__internal_aea1ee7a9c88ba7f19bb5838a9a3723d3df59d9dff9bc6c310f5b6592400ee51->enter($__internal_aea1ee7a9c88ba7f19bb5838a9a3723d3df59d9dff9bc6c310f5b6592400ee51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_aea1ee7a9c88ba7f19bb5838a9a3723d3df59d9dff9bc6c310f5b6592400ee51->leave($__internal_aea1ee7a9c88ba7f19bb5838a9a3723d3df59d9dff9bc6c310f5b6592400ee51_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
