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
        $__internal_3a93c6f2206483b04ec6aec52ad657858aa4df077853b3ee34413798ba61c89d = $this->env->getExtension("native_profiler");
        $__internal_3a93c6f2206483b04ec6aec52ad657858aa4df077853b3ee34413798ba61c89d->enter($__internal_3a93c6f2206483b04ec6aec52ad657858aa4df077853b3ee34413798ba61c89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a93c6f2206483b04ec6aec52ad657858aa4df077853b3ee34413798ba61c89d->leave($__internal_3a93c6f2206483b04ec6aec52ad657858aa4df077853b3ee34413798ba61c89d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5bfaf6556d8fa0f7a0e210a4d7dee6f356cb05e101d3eed311224f80c0637387 = $this->env->getExtension("native_profiler");
        $__internal_5bfaf6556d8fa0f7a0e210a4d7dee6f356cb05e101d3eed311224f80c0637387->enter($__internal_5bfaf6556d8fa0f7a0e210a4d7dee6f356cb05e101d3eed311224f80c0637387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5bfaf6556d8fa0f7a0e210a4d7dee6f356cb05e101d3eed311224f80c0637387->leave($__internal_5bfaf6556d8fa0f7a0e210a4d7dee6f356cb05e101d3eed311224f80c0637387_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5afa7a5e3a4a20fe3d49af6097444f6bf5f7864e3fcab37eed7248ae75cc81b6 = $this->env->getExtension("native_profiler");
        $__internal_5afa7a5e3a4a20fe3d49af6097444f6bf5f7864e3fcab37eed7248ae75cc81b6->enter($__internal_5afa7a5e3a4a20fe3d49af6097444f6bf5f7864e3fcab37eed7248ae75cc81b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5afa7a5e3a4a20fe3d49af6097444f6bf5f7864e3fcab37eed7248ae75cc81b6->leave($__internal_5afa7a5e3a4a20fe3d49af6097444f6bf5f7864e3fcab37eed7248ae75cc81b6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b9cbc90c8f07190a6a45d51b9989c80b29c18eb84e369c9dd31daead98a9090 = $this->env->getExtension("native_profiler");
        $__internal_9b9cbc90c8f07190a6a45d51b9989c80b29c18eb84e369c9dd31daead98a9090->enter($__internal_9b9cbc90c8f07190a6a45d51b9989c80b29c18eb84e369c9dd31daead98a9090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9b9cbc90c8f07190a6a45d51b9989c80b29c18eb84e369c9dd31daead98a9090->leave($__internal_9b9cbc90c8f07190a6a45d51b9989c80b29c18eb84e369c9dd31daead98a9090_prof);

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
