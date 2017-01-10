<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f39683c72ec33dcb74413e23f7978ac89c20b736523f7c04721647764b964cee extends Twig_Template
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
        $__internal_e38d07d5de42dc3a46e676caebabdfec02a930d51a35b048e653fd0bb2472e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38d07d5de42dc3a46e676caebabdfec02a930d51a35b048e653fd0bb2472e46->enter($__internal_e38d07d5de42dc3a46e676caebabdfec02a930d51a35b048e653fd0bb2472e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e38d07d5de42dc3a46e676caebabdfec02a930d51a35b048e653fd0bb2472e46->leave($__internal_e38d07d5de42dc3a46e676caebabdfec02a930d51a35b048e653fd0bb2472e46_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0311c0fa4f016391d197ef926d7cfff5bbdc7c8ec13483428b8d678c678d9af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0311c0fa4f016391d197ef926d7cfff5bbdc7c8ec13483428b8d678c678d9af0->enter($__internal_0311c0fa4f016391d197ef926d7cfff5bbdc7c8ec13483428b8d678c678d9af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0311c0fa4f016391d197ef926d7cfff5bbdc7c8ec13483428b8d678c678d9af0->leave($__internal_0311c0fa4f016391d197ef926d7cfff5bbdc7c8ec13483428b8d678c678d9af0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4c3205edbd3228aeddad35958dd6d3cb80ae9682870bfa15cb1d38e04754bc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4c3205edbd3228aeddad35958dd6d3cb80ae9682870bfa15cb1d38e04754bc7->enter($__internal_e4c3205edbd3228aeddad35958dd6d3cb80ae9682870bfa15cb1d38e04754bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e4c3205edbd3228aeddad35958dd6d3cb80ae9682870bfa15cb1d38e04754bc7->leave($__internal_e4c3205edbd3228aeddad35958dd6d3cb80ae9682870bfa15cb1d38e04754bc7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_536cebdd2fa6b38c11653ae444dbc54b58ec2271c42c275b20948194ecbd7134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_536cebdd2fa6b38c11653ae444dbc54b58ec2271c42c275b20948194ecbd7134->enter($__internal_536cebdd2fa6b38c11653ae444dbc54b58ec2271c42c275b20948194ecbd7134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_536cebdd2fa6b38c11653ae444dbc54b58ec2271c42c275b20948194ecbd7134->leave($__internal_536cebdd2fa6b38c11653ae444dbc54b58ec2271c42c275b20948194ecbd7134_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
