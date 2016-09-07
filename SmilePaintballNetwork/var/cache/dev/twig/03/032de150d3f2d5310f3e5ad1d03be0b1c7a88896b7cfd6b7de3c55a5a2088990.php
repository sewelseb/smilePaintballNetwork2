<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fa3fdffdeb9b02d22ee0b891da29af34cea0ae6c310b08f04cecf037b1bf31ab extends Twig_Template
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
        $__internal_26f9e9ca2573c214efb6d1287a14f06f87dd9e500e1460f4d73791f4e6af6635 = $this->env->getExtension("native_profiler");
        $__internal_26f9e9ca2573c214efb6d1287a14f06f87dd9e500e1460f4d73791f4e6af6635->enter($__internal_26f9e9ca2573c214efb6d1287a14f06f87dd9e500e1460f4d73791f4e6af6635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f9e9ca2573c214efb6d1287a14f06f87dd9e500e1460f4d73791f4e6af6635->leave($__internal_26f9e9ca2573c214efb6d1287a14f06f87dd9e500e1460f4d73791f4e6af6635_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1e8d7c265b62aa946f24dbffc58d68e62c9323c3a8af75c13b6141749eca2b85 = $this->env->getExtension("native_profiler");
        $__internal_1e8d7c265b62aa946f24dbffc58d68e62c9323c3a8af75c13b6141749eca2b85->enter($__internal_1e8d7c265b62aa946f24dbffc58d68e62c9323c3a8af75c13b6141749eca2b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1e8d7c265b62aa946f24dbffc58d68e62c9323c3a8af75c13b6141749eca2b85->leave($__internal_1e8d7c265b62aa946f24dbffc58d68e62c9323c3a8af75c13b6141749eca2b85_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d63f215b0a8bcfb42067de96c9e36bf3eeee4f7f358bf9390524b0b50ebd8c6 = $this->env->getExtension("native_profiler");
        $__internal_5d63f215b0a8bcfb42067de96c9e36bf3eeee4f7f358bf9390524b0b50ebd8c6->enter($__internal_5d63f215b0a8bcfb42067de96c9e36bf3eeee4f7f358bf9390524b0b50ebd8c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5d63f215b0a8bcfb42067de96c9e36bf3eeee4f7f358bf9390524b0b50ebd8c6->leave($__internal_5d63f215b0a8bcfb42067de96c9e36bf3eeee4f7f358bf9390524b0b50ebd8c6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4169b0d8af56051dabb44b1766696a8db8321c060595f1b8703cc04fb6ccee0 = $this->env->getExtension("native_profiler");
        $__internal_f4169b0d8af56051dabb44b1766696a8db8321c060595f1b8703cc04fb6ccee0->enter($__internal_f4169b0d8af56051dabb44b1766696a8db8321c060595f1b8703cc04fb6ccee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f4169b0d8af56051dabb44b1766696a8db8321c060595f1b8703cc04fb6ccee0->leave($__internal_f4169b0d8af56051dabb44b1766696a8db8321c060595f1b8703cc04fb6ccee0_prof);

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
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
