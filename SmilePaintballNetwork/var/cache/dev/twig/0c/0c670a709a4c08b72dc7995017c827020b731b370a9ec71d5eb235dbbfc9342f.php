<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b1e548808007a46bebb88adb1e3d6817e3d4ce744cc88c5c12933e334a048902 extends Twig_Template
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
        $__internal_b68ad04201fd3b7c380de9d58a216fbd394383d7ded73c99e8e8f0baab752628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b68ad04201fd3b7c380de9d58a216fbd394383d7ded73c99e8e8f0baab752628->enter($__internal_b68ad04201fd3b7c380de9d58a216fbd394383d7ded73c99e8e8f0baab752628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b68ad04201fd3b7c380de9d58a216fbd394383d7ded73c99e8e8f0baab752628->leave($__internal_b68ad04201fd3b7c380de9d58a216fbd394383d7ded73c99e8e8f0baab752628_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fd14063f408802e9082487e485df7f5f53224290c31107ad1fb4015df6094b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd14063f408802e9082487e485df7f5f53224290c31107ad1fb4015df6094b2b->enter($__internal_fd14063f408802e9082487e485df7f5f53224290c31107ad1fb4015df6094b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fd14063f408802e9082487e485df7f5f53224290c31107ad1fb4015df6094b2b->leave($__internal_fd14063f408802e9082487e485df7f5f53224290c31107ad1fb4015df6094b2b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_16e019afc6cc19a3d952a878d37fd9042a33cc25762ffc033698c197c576e560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e019afc6cc19a3d952a878d37fd9042a33cc25762ffc033698c197c576e560->enter($__internal_16e019afc6cc19a3d952a878d37fd9042a33cc25762ffc033698c197c576e560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_16e019afc6cc19a3d952a878d37fd9042a33cc25762ffc033698c197c576e560->leave($__internal_16e019afc6cc19a3d952a878d37fd9042a33cc25762ffc033698c197c576e560_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_934252948bd228687d7bf50023025989b16ee70757f2607e80bd5e2911d4c6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934252948bd228687d7bf50023025989b16ee70757f2607e80bd5e2911d4c6b2->enter($__internal_934252948bd228687d7bf50023025989b16ee70757f2607e80bd5e2911d4c6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_934252948bd228687d7bf50023025989b16ee70757f2607e80bd5e2911d4c6b2->leave($__internal_934252948bd228687d7bf50023025989b16ee70757f2607e80bd5e2911d4c6b2_prof);

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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\bamsell\\smilePaintballNetwork2\\SmilePaintballNetwork\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
