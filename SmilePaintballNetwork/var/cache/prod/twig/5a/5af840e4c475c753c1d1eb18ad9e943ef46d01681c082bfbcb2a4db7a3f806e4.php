<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_64fd3c80695ea40437a106a3982312727679ee7f181326ebe034490d8995c4ae extends Twig_Template
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
        $__internal_dc54d67e87431bfaf293faa240ba9f8303cae209392ed50f4e73c6cabee6f256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc54d67e87431bfaf293faa240ba9f8303cae209392ed50f4e73c6cabee6f256->enter($__internal_dc54d67e87431bfaf293faa240ba9f8303cae209392ed50f4e73c6cabee6f256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc54d67e87431bfaf293faa240ba9f8303cae209392ed50f4e73c6cabee6f256->leave($__internal_dc54d67e87431bfaf293faa240ba9f8303cae209392ed50f4e73c6cabee6f256_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_946d3ee74da16b8129728f71ab8b02dd5e0a900fe459a3d31ff624f08c2247b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946d3ee74da16b8129728f71ab8b02dd5e0a900fe459a3d31ff624f08c2247b7->enter($__internal_946d3ee74da16b8129728f71ab8b02dd5e0a900fe459a3d31ff624f08c2247b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_946d3ee74da16b8129728f71ab8b02dd5e0a900fe459a3d31ff624f08c2247b7->leave($__internal_946d3ee74da16b8129728f71ab8b02dd5e0a900fe459a3d31ff624f08c2247b7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_14dc4eab5d460b06bff4f96cf352f1b4c236af99dbbfa6a7e58ac9e8772e1bab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14dc4eab5d460b06bff4f96cf352f1b4c236af99dbbfa6a7e58ac9e8772e1bab->enter($__internal_14dc4eab5d460b06bff4f96cf352f1b4c236af99dbbfa6a7e58ac9e8772e1bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_14dc4eab5d460b06bff4f96cf352f1b4c236af99dbbfa6a7e58ac9e8772e1bab->leave($__internal_14dc4eab5d460b06bff4f96cf352f1b4c236af99dbbfa6a7e58ac9e8772e1bab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_556b6f71b75d0ee58b7a351692dd6fd2741ef033c3bf5704407660326548a73b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_556b6f71b75d0ee58b7a351692dd6fd2741ef033c3bf5704407660326548a73b->enter($__internal_556b6f71b75d0ee58b7a351692dd6fd2741ef033c3bf5704407660326548a73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_556b6f71b75d0ee58b7a351692dd6fd2741ef033c3bf5704407660326548a73b->leave($__internal_556b6f71b75d0ee58b7a351692dd6fd2741ef033c3bf5704407660326548a73b_prof);

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
