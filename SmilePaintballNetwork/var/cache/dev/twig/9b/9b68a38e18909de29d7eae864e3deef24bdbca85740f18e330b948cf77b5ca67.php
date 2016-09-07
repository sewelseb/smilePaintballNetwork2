<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_a8853158e45b4f112431675dbb96f637885030b96dd0481e57ae16080b4e23a8 extends Twig_Template
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
        $__internal_1badcc1900374cde48d320e51fb6e7003e1d030619e7d684daebfd6cf292a7d0 = $this->env->getExtension("native_profiler");
        $__internal_1badcc1900374cde48d320e51fb6e7003e1d030619e7d684daebfd6cf292a7d0->enter($__internal_1badcc1900374cde48d320e51fb6e7003e1d030619e7d684daebfd6cf292a7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1badcc1900374cde48d320e51fb6e7003e1d030619e7d684daebfd6cf292a7d0->leave($__internal_1badcc1900374cde48d320e51fb6e7003e1d030619e7d684daebfd6cf292a7d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
