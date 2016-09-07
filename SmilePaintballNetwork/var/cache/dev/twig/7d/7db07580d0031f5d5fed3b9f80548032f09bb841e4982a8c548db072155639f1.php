<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_f0a88e0f10eaa23cfec3ad8bb6757ba0dbda4cc366ad81db7c66e41e99c642e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_5010c8865107546a8197991af5325cbfca50cf7c25fc4df6bded592b08cc3411 = $this->env->getExtension("native_profiler");
        $__internal_5010c8865107546a8197991af5325cbfca50cf7c25fc4df6bded592b08cc3411->enter($__internal_5010c8865107546a8197991af5325cbfca50cf7c25fc4df6bded592b08cc3411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5010c8865107546a8197991af5325cbfca50cf7c25fc4df6bded592b08cc3411->leave($__internal_5010c8865107546a8197991af5325cbfca50cf7c25fc4df6bded592b08cc3411_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d87f7f0099d768fb2aba2e37e33cd24c717a84d39be58981cfe872785633fdd = $this->env->getExtension("native_profiler");
        $__internal_5d87f7f0099d768fb2aba2e37e33cd24c717a84d39be58981cfe872785633fdd->enter($__internal_5d87f7f0099d768fb2aba2e37e33cd24c717a84d39be58981cfe872785633fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_5d87f7f0099d768fb2aba2e37e33cd24c717a84d39be58981cfe872785633fdd->leave($__internal_5d87f7f0099d768fb2aba2e37e33cd24c717a84d39be58981cfe872785633fdd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
