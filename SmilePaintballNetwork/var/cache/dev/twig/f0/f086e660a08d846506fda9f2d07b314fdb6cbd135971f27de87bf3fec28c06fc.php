<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_9e36451d7e3fcad4ed2f527c34b0436216b84f0dcbffc2291ecd5e279fd5f60d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_443bac394ca69c97566fb90885e53b96ba861f307d6beadff70e2c9a7ded890f = $this->env->getExtension("native_profiler");
        $__internal_443bac394ca69c97566fb90885e53b96ba861f307d6beadff70e2c9a7ded890f->enter($__internal_443bac394ca69c97566fb90885e53b96ba861f307d6beadff70e2c9a7ded890f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_443bac394ca69c97566fb90885e53b96ba861f307d6beadff70e2c9a7ded890f->leave($__internal_443bac394ca69c97566fb90885e53b96ba861f307d6beadff70e2c9a7ded890f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_59e7accb938055e74a2604ffe24358d41335809c8c7f4714bd480386e04035bd = $this->env->getExtension("native_profiler");
        $__internal_59e7accb938055e74a2604ffe24358d41335809c8c7f4714bd480386e04035bd->enter($__internal_59e7accb938055e74a2604ffe24358d41335809c8c7f4714bd480386e04035bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_59e7accb938055e74a2604ffe24358d41335809c8c7f4714bd480386e04035bd->leave($__internal_59e7accb938055e74a2604ffe24358d41335809c8c7f4714bd480386e04035bd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2b0c8b07f6a0a172f7aedfb513ac4cb305d9d8e8ffb23db214445344c0076957 = $this->env->getExtension("native_profiler");
        $__internal_2b0c8b07f6a0a172f7aedfb513ac4cb305d9d8e8ffb23db214445344c0076957->enter($__internal_2b0c8b07f6a0a172f7aedfb513ac4cb305d9d8e8ffb23db214445344c0076957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2b0c8b07f6a0a172f7aedfb513ac4cb305d9d8e8ffb23db214445344c0076957->leave($__internal_2b0c8b07f6a0a172f7aedfb513ac4cb305d9d8e8ffb23db214445344c0076957_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3045de8aac7b85375808a5bd7bc487a85ced9b26cb0e5b104d00b75ed9a18043 = $this->env->getExtension("native_profiler");
        $__internal_3045de8aac7b85375808a5bd7bc487a85ced9b26cb0e5b104d00b75ed9a18043->enter($__internal_3045de8aac7b85375808a5bd7bc487a85ced9b26cb0e5b104d00b75ed9a18043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3045de8aac7b85375808a5bd7bc487a85ced9b26cb0e5b104d00b75ed9a18043->leave($__internal_3045de8aac7b85375808a5bd7bc487a85ced9b26cb0e5b104d00b75ed9a18043_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
