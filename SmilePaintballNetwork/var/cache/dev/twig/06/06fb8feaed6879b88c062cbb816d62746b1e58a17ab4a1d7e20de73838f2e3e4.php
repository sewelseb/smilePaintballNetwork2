<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b5ef266c1efebbfe5724daa1951b6203e10076eb6d665419abb705bea9ec2466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_a1247289c31ea0e8362e3e4d1a7c5d5d3811402602a66479ac5b01b92cc0d096 = $this->env->getExtension("native_profiler");
        $__internal_a1247289c31ea0e8362e3e4d1a7c5d5d3811402602a66479ac5b01b92cc0d096->enter($__internal_a1247289c31ea0e8362e3e4d1a7c5d5d3811402602a66479ac5b01b92cc0d096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1247289c31ea0e8362e3e4d1a7c5d5d3811402602a66479ac5b01b92cc0d096->leave($__internal_a1247289c31ea0e8362e3e4d1a7c5d5d3811402602a66479ac5b01b92cc0d096_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8e57e58fb11e72a8b5729052c6d4eff3afbe1f6593cb8edd618dc4c154bb680 = $this->env->getExtension("native_profiler");
        $__internal_e8e57e58fb11e72a8b5729052c6d4eff3afbe1f6593cb8edd618dc4c154bb680->enter($__internal_e8e57e58fb11e72a8b5729052c6d4eff3afbe1f6593cb8edd618dc4c154bb680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e8e57e58fb11e72a8b5729052c6d4eff3afbe1f6593cb8edd618dc4c154bb680->leave($__internal_e8e57e58fb11e72a8b5729052c6d4eff3afbe1f6593cb8edd618dc4c154bb680_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
