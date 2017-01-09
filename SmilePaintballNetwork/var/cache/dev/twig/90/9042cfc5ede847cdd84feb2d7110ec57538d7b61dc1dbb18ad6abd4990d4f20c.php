<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ea925427358b9d98f1ebfaaba7a53fa08827ab720351aa67f237c1429ffc2d49 extends Twig_Template
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
        $__internal_a0ed7af8c65a6c6523343160c2214314dd4b5121c3710dc2c8411cc906343c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ed7af8c65a6c6523343160c2214314dd4b5121c3710dc2c8411cc906343c8c->enter($__internal_a0ed7af8c65a6c6523343160c2214314dd4b5121c3710dc2c8411cc906343c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0ed7af8c65a6c6523343160c2214314dd4b5121c3710dc2c8411cc906343c8c->leave($__internal_a0ed7af8c65a6c6523343160c2214314dd4b5121c3710dc2c8411cc906343c8c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c897cfdb3b90eefa6cd0c1fe9fc054ffee0088f2c07b3e8250d9e9e64d323d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c897cfdb3b90eefa6cd0c1fe9fc054ffee0088f2c07b3e8250d9e9e64d323d9->enter($__internal_5c897cfdb3b90eefa6cd0c1fe9fc054ffee0088f2c07b3e8250d9e9e64d323d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c897cfdb3b90eefa6cd0c1fe9fc054ffee0088f2c07b3e8250d9e9e64d323d9->leave($__internal_5c897cfdb3b90eefa6cd0c1fe9fc054ffee0088f2c07b3e8250d9e9e64d323d9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_028a62ba31ba8c36778f89f7db61cba13ca48abb2fd842feab1db21534934d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_028a62ba31ba8c36778f89f7db61cba13ca48abb2fd842feab1db21534934d4e->enter($__internal_028a62ba31ba8c36778f89f7db61cba13ca48abb2fd842feab1db21534934d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_028a62ba31ba8c36778f89f7db61cba13ca48abb2fd842feab1db21534934d4e->leave($__internal_028a62ba31ba8c36778f89f7db61cba13ca48abb2fd842feab1db21534934d4e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbb239f25a2e26628c118eeb3567af49ca359745b77bd31fbb4b9be8120ab428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb239f25a2e26628c118eeb3567af49ca359745b77bd31fbb4b9be8120ab428->enter($__internal_cbb239f25a2e26628c118eeb3567af49ca359745b77bd31fbb4b9be8120ab428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cbb239f25a2e26628c118eeb3567af49ca359745b77bd31fbb4b9be8120ab428->leave($__internal_cbb239f25a2e26628c118eeb3567af49ca359745b77bd31fbb4b9be8120ab428_prof);

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
