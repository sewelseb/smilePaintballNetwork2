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
        $__internal_70d7b5218f8ed663fe55486adf757c6f4f9e1cf7d44bcc6fae39ffea957a2f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d7b5218f8ed663fe55486adf757c6f4f9e1cf7d44bcc6fae39ffea957a2f30->enter($__internal_70d7b5218f8ed663fe55486adf757c6f4f9e1cf7d44bcc6fae39ffea957a2f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70d7b5218f8ed663fe55486adf757c6f4f9e1cf7d44bcc6fae39ffea957a2f30->leave($__internal_70d7b5218f8ed663fe55486adf757c6f4f9e1cf7d44bcc6fae39ffea957a2f30_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c38b1f2e08acc2cb828c65004c4abbd67fcf87243cccb1b6232d9f7dadff9754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38b1f2e08acc2cb828c65004c4abbd67fcf87243cccb1b6232d9f7dadff9754->enter($__internal_c38b1f2e08acc2cb828c65004c4abbd67fcf87243cccb1b6232d9f7dadff9754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c38b1f2e08acc2cb828c65004c4abbd67fcf87243cccb1b6232d9f7dadff9754->leave($__internal_c38b1f2e08acc2cb828c65004c4abbd67fcf87243cccb1b6232d9f7dadff9754_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b66f627fb7999e39249b0588d262b3c27c2ed45c76af321c8bfbdc8b47d87b29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b66f627fb7999e39249b0588d262b3c27c2ed45c76af321c8bfbdc8b47d87b29->enter($__internal_b66f627fb7999e39249b0588d262b3c27c2ed45c76af321c8bfbdc8b47d87b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b66f627fb7999e39249b0588d262b3c27c2ed45c76af321c8bfbdc8b47d87b29->leave($__internal_b66f627fb7999e39249b0588d262b3c27c2ed45c76af321c8bfbdc8b47d87b29_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c5fe9da5f8db2012c22dab9cc3d125b7fa27a932f2f926596fbb1b31973008c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c5fe9da5f8db2012c22dab9cc3d125b7fa27a932f2f926596fbb1b31973008c->enter($__internal_3c5fe9da5f8db2012c22dab9cc3d125b7fa27a932f2f926596fbb1b31973008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3c5fe9da5f8db2012c22dab9cc3d125b7fa27a932f2f926596fbb1b31973008c->leave($__internal_3c5fe9da5f8db2012c22dab9cc3d125b7fa27a932f2f926596fbb1b31973008c_prof);

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
