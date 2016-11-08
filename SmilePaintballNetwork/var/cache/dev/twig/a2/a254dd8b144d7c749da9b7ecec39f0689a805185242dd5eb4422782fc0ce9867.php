<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_df821d70e12b4b285bc4dbaf34254da70e18bc2781a8e6d7841567cd4ecf4819 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7302dafb3564d70c86c1960fa8efc0f5e3f4f2d4c05682150ca8be03387c58c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7302dafb3564d70c86c1960fa8efc0f5e3f4f2d4c05682150ca8be03387c58c0->enter($__internal_7302dafb3564d70c86c1960fa8efc0f5e3f4f2d4c05682150ca8be03387c58c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7302dafb3564d70c86c1960fa8efc0f5e3f4f2d4c05682150ca8be03387c58c0->leave($__internal_7302dafb3564d70c86c1960fa8efc0f5e3f4f2d4c05682150ca8be03387c58c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_103813f8fa68b2bce59234a4b536dd854e4179c19b7b5d6c3173f1d9b1679b55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103813f8fa68b2bce59234a4b536dd854e4179c19b7b5d6c3173f1d9b1679b55->enter($__internal_103813f8fa68b2bce59234a4b536dd854e4179c19b7b5d6c3173f1d9b1679b55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_103813f8fa68b2bce59234a4b536dd854e4179c19b7b5d6c3173f1d9b1679b55->leave($__internal_103813f8fa68b2bce59234a4b536dd854e4179c19b7b5d6c3173f1d9b1679b55_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bb67831007c352ffa5deef21b65e513cef8d4838df319e82c2f3f8ae75d309b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb67831007c352ffa5deef21b65e513cef8d4838df319e82c2f3f8ae75d309b->enter($__internal_3bb67831007c352ffa5deef21b65e513cef8d4838df319e82c2f3f8ae75d309b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3bb67831007c352ffa5deef21b65e513cef8d4838df319e82c2f3f8ae75d309b->leave($__internal_3bb67831007c352ffa5deef21b65e513cef8d4838df319e82c2f3f8ae75d309b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ba4a4bc6b4340dacd2405bda1fce29deff610eb7b67cfa033f93b1ee32b8c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ba4a4bc6b4340dacd2405bda1fce29deff610eb7b67cfa033f93b1ee32b8c29->enter($__internal_4ba4a4bc6b4340dacd2405bda1fce29deff610eb7b67cfa033f93b1ee32b8c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4ba4a4bc6b4340dacd2405bda1fce29deff610eb7b67cfa033f93b1ee32b8c29->leave($__internal_4ba4a4bc6b4340dacd2405bda1fce29deff610eb7b67cfa033f93b1ee32b8c29_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
