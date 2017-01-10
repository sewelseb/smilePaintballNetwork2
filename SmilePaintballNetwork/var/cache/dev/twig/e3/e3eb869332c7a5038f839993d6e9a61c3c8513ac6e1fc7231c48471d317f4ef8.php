<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e6c47d78b57595f4096c2f7d21b3e47f04fd3573d94766c83da47d2d053ec87c extends Twig_Template
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
        $__internal_753dba486422ea224cd2d9d279729707987574fc6328b9971407ab7e2210d59f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753dba486422ea224cd2d9d279729707987574fc6328b9971407ab7e2210d59f->enter($__internal_753dba486422ea224cd2d9d279729707987574fc6328b9971407ab7e2210d59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_753dba486422ea224cd2d9d279729707987574fc6328b9971407ab7e2210d59f->leave($__internal_753dba486422ea224cd2d9d279729707987574fc6328b9971407ab7e2210d59f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_663110229cf46d70972b3e60db5d2b814444a7962ac6b80a74a7a7bb724cb587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663110229cf46d70972b3e60db5d2b814444a7962ac6b80a74a7a7bb724cb587->enter($__internal_663110229cf46d70972b3e60db5d2b814444a7962ac6b80a74a7a7bb724cb587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_663110229cf46d70972b3e60db5d2b814444a7962ac6b80a74a7a7bb724cb587->leave($__internal_663110229cf46d70972b3e60db5d2b814444a7962ac6b80a74a7a7bb724cb587_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_de05523dbe7c2791275f42d8395fa1bffc608ec44f1a1f9dec649d7a52c26b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de05523dbe7c2791275f42d8395fa1bffc608ec44f1a1f9dec649d7a52c26b2d->enter($__internal_de05523dbe7c2791275f42d8395fa1bffc608ec44f1a1f9dec649d7a52c26b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_de05523dbe7c2791275f42d8395fa1bffc608ec44f1a1f9dec649d7a52c26b2d->leave($__internal_de05523dbe7c2791275f42d8395fa1bffc608ec44f1a1f9dec649d7a52c26b2d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7b04e8c5d947a7af9e70ca046cea2e0f7b4a25d9f181957dbcc2f70ace615d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b04e8c5d947a7af9e70ca046cea2e0f7b4a25d9f181957dbcc2f70ace615d4->enter($__internal_b7b04e8c5d947a7af9e70ca046cea2e0f7b4a25d9f181957dbcc2f70ace615d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b7b04e8c5d947a7af9e70ca046cea2e0f7b4a25d9f181957dbcc2f70ace615d4->leave($__internal_b7b04e8c5d947a7af9e70ca046cea2e0f7b4a25d9f181957dbcc2f70ace615d4_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
