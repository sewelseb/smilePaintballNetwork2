<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_25fe9e15d572ee5bc79b2e7f3b6ecd8aa2df7b121a712ba5ce19a9d3536e98a3 extends Twig_Template
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
        $__internal_dec1ca8712d25052291b952571e31d705ad91d25bc462c6cd40e59c04862c261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec1ca8712d25052291b952571e31d705ad91d25bc462c6cd40e59c04862c261->enter($__internal_dec1ca8712d25052291b952571e31d705ad91d25bc462c6cd40e59c04862c261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dec1ca8712d25052291b952571e31d705ad91d25bc462c6cd40e59c04862c261->leave($__internal_dec1ca8712d25052291b952571e31d705ad91d25bc462c6cd40e59c04862c261_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c29bc1a8f50f71a88bf1f242d88754d910b024f0639c018211301211a863bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c29bc1a8f50f71a88bf1f242d88754d910b024f0639c018211301211a863bc2->enter($__internal_5c29bc1a8f50f71a88bf1f242d88754d910b024f0639c018211301211a863bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5c29bc1a8f50f71a88bf1f242d88754d910b024f0639c018211301211a863bc2->leave($__internal_5c29bc1a8f50f71a88bf1f242d88754d910b024f0639c018211301211a863bc2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b8ea10588297689630acabdfc69ba3bd94b4d2e6794c2c89e2055549b2fdb94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8ea10588297689630acabdfc69ba3bd94b4d2e6794c2c89e2055549b2fdb94->enter($__internal_4b8ea10588297689630acabdfc69ba3bd94b4d2e6794c2c89e2055549b2fdb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4b8ea10588297689630acabdfc69ba3bd94b4d2e6794c2c89e2055549b2fdb94->leave($__internal_4b8ea10588297689630acabdfc69ba3bd94b4d2e6794c2c89e2055549b2fdb94_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_63ccd7c77ce17e01372f4164dc57717c92c53695ed85941fd220d48e2ad97055 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63ccd7c77ce17e01372f4164dc57717c92c53695ed85941fd220d48e2ad97055->enter($__internal_63ccd7c77ce17e01372f4164dc57717c92c53695ed85941fd220d48e2ad97055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_63ccd7c77ce17e01372f4164dc57717c92c53695ed85941fd220d48e2ad97055->leave($__internal_63ccd7c77ce17e01372f4164dc57717c92c53695ed85941fd220d48e2ad97055_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\bamsell\\smilePaintballNetwork2\\SmilePaintballNetwork\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
