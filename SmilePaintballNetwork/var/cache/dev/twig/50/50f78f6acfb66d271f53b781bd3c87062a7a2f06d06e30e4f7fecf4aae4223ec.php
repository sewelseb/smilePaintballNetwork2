<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_b1cfe723419e39a1c017daf6bc5d40201df105aff474adc0e4d9c318865e5ce3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86b7ff80e0456b4e440242688a2c1a9f0152869a48ac22b973fcf958b37bd7e9 = $this->env->getExtension("native_profiler");
        $__internal_86b7ff80e0456b4e440242688a2c1a9f0152869a48ac22b973fcf958b37bd7e9->enter($__internal_86b7ff80e0456b4e440242688a2c1a9f0152869a48ac22b973fcf958b37bd7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86b7ff80e0456b4e440242688a2c1a9f0152869a48ac22b973fcf958b37bd7e9->leave($__internal_86b7ff80e0456b4e440242688a2c1a9f0152869a48ac22b973fcf958b37bd7e9_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d61d2ebc5979daa5681632104dd8632d7120060d6b05b83821e12b3153f28d2e = $this->env->getExtension("native_profiler");
        $__internal_d61d2ebc5979daa5681632104dd8632d7120060d6b05b83821e12b3153f28d2e->enter($__internal_d61d2ebc5979daa5681632104dd8632d7120060d6b05b83821e12b3153f28d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d61d2ebc5979daa5681632104dd8632d7120060d6b05b83821e12b3153f28d2e->leave($__internal_d61d2ebc5979daa5681632104dd8632d7120060d6b05b83821e12b3153f28d2e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
