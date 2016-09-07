<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_563d10c0ef9b15e556b4650796dd66d7bb6cc8b3f971cc3e3df86a97b080bf17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_c8d767aeff995859c6407ef210704f3802fe74981947454d2149db7cf90ebee2 = $this->env->getExtension("native_profiler");
        $__internal_c8d767aeff995859c6407ef210704f3802fe74981947454d2149db7cf90ebee2->enter($__internal_c8d767aeff995859c6407ef210704f3802fe74981947454d2149db7cf90ebee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8d767aeff995859c6407ef210704f3802fe74981947454d2149db7cf90ebee2->leave($__internal_c8d767aeff995859c6407ef210704f3802fe74981947454d2149db7cf90ebee2_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24fa42fad5177c3b0229a25693801c596655b8f79c1a6d2343157c7beb3cdd2a = $this->env->getExtension("native_profiler");
        $__internal_24fa42fad5177c3b0229a25693801c596655b8f79c1a6d2343157c7beb3cdd2a->enter($__internal_24fa42fad5177c3b0229a25693801c596655b8f79c1a6d2343157c7beb3cdd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_24fa42fad5177c3b0229a25693801c596655b8f79c1a6d2343157c7beb3cdd2a->leave($__internal_24fa42fad5177c3b0229a25693801c596655b8f79c1a6d2343157c7beb3cdd2a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
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
