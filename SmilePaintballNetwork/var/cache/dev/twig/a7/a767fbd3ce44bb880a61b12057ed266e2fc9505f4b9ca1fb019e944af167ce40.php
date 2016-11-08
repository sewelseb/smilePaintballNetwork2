<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cfcdebc23865a9af96e33c7abd8e8b5b4dae201fa37d163cc7e4568ed05add02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8437c7c83d1bdcc3a0bce508304af3428bc95462f2bab16d84fbc0f6daaa6fc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8437c7c83d1bdcc3a0bce508304af3428bc95462f2bab16d84fbc0f6daaa6fc0->enter($__internal_8437c7c83d1bdcc3a0bce508304af3428bc95462f2bab16d84fbc0f6daaa6fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8437c7c83d1bdcc3a0bce508304af3428bc95462f2bab16d84fbc0f6daaa6fc0->leave($__internal_8437c7c83d1bdcc3a0bce508304af3428bc95462f2bab16d84fbc0f6daaa6fc0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e2b8018b9b0ac5edcc5bf26ab902831cf6eb5d40fafb1cccc1eb4c97ec854f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b8018b9b0ac5edcc5bf26ab902831cf6eb5d40fafb1cccc1eb4c97ec854f17->enter($__internal_e2b8018b9b0ac5edcc5bf26ab902831cf6eb5d40fafb1cccc1eb4c97ec854f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e2b8018b9b0ac5edcc5bf26ab902831cf6eb5d40fafb1cccc1eb4c97ec854f17->leave($__internal_e2b8018b9b0ac5edcc5bf26ab902831cf6eb5d40fafb1cccc1eb4c97ec854f17_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40672553a8c8461b4a1a47e3be014b4cb8bd81c6ce3dba510b32840a21793636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40672553a8c8461b4a1a47e3be014b4cb8bd81c6ce3dba510b32840a21793636->enter($__internal_40672553a8c8461b4a1a47e3be014b4cb8bd81c6ce3dba510b32840a21793636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_40672553a8c8461b4a1a47e3be014b4cb8bd81c6ce3dba510b32840a21793636->leave($__internal_40672553a8c8461b4a1a47e3be014b4cb8bd81c6ce3dba510b32840a21793636_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d2ef35561c506e18990bf87a552bc6a3cefa4ddead8cf2016e887ccd9378ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2ef35561c506e18990bf87a552bc6a3cefa4ddead8cf2016e887ccd9378ee7->enter($__internal_0d2ef35561c506e18990bf87a552bc6a3cefa4ddead8cf2016e887ccd9378ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d2ef35561c506e18990bf87a552bc6a3cefa4ddead8cf2016e887ccd9378ee7->leave($__internal_0d2ef35561c506e18990bf87a552bc6a3cefa4ddead8cf2016e887ccd9378ee7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
