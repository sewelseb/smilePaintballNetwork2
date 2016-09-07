<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_7902a809c25536ea347df9f89d2c5e92ab31c3c75338a43dd6ea729a18894a64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_8e80a30eb5b7034b8bb9638a62c5017d2b956e6aeb12caaeb863961481b733d0 = $this->env->getExtension("native_profiler");
        $__internal_8e80a30eb5b7034b8bb9638a62c5017d2b956e6aeb12caaeb863961481b733d0->enter($__internal_8e80a30eb5b7034b8bb9638a62c5017d2b956e6aeb12caaeb863961481b733d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e80a30eb5b7034b8bb9638a62c5017d2b956e6aeb12caaeb863961481b733d0->leave($__internal_8e80a30eb5b7034b8bb9638a62c5017d2b956e6aeb12caaeb863961481b733d0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_53176fcecaa95e19d91b50055cdb51a61c844639efc230cb7f3b41a800cceebb = $this->env->getExtension("native_profiler");
        $__internal_53176fcecaa95e19d91b50055cdb51a61c844639efc230cb7f3b41a800cceebb->enter($__internal_53176fcecaa95e19d91b50055cdb51a61c844639efc230cb7f3b41a800cceebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_53176fcecaa95e19d91b50055cdb51a61c844639efc230cb7f3b41a800cceebb->leave($__internal_53176fcecaa95e19d91b50055cdb51a61c844639efc230cb7f3b41a800cceebb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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
