<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3b5f23c13b23cd3273026324693ff35feb8376efabc4c00b64b0b3bcc29741cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_34d7f113244d1f56d504eff19bf6a70713cd1b47cebf93c43cb27ceb5ac362c5 = $this->env->getExtension("native_profiler");
        $__internal_34d7f113244d1f56d504eff19bf6a70713cd1b47cebf93c43cb27ceb5ac362c5->enter($__internal_34d7f113244d1f56d504eff19bf6a70713cd1b47cebf93c43cb27ceb5ac362c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34d7f113244d1f56d504eff19bf6a70713cd1b47cebf93c43cb27ceb5ac362c5->leave($__internal_34d7f113244d1f56d504eff19bf6a70713cd1b47cebf93c43cb27ceb5ac362c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c4e11b018221019750a8c0e7e02afbb876e771b43d2428f345054634bb2925f = $this->env->getExtension("native_profiler");
        $__internal_5c4e11b018221019750a8c0e7e02afbb876e771b43d2428f345054634bb2925f->enter($__internal_5c4e11b018221019750a8c0e7e02afbb876e771b43d2428f345054634bb2925f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_5c4e11b018221019750a8c0e7e02afbb876e771b43d2428f345054634bb2925f->leave($__internal_5c4e11b018221019750a8c0e7e02afbb876e771b43d2428f345054634bb2925f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b6a28e9c9725b4ae7c32445092e18227a53c7ec783807973579d761763b2dbb6 = $this->env->getExtension("native_profiler");
        $__internal_b6a28e9c9725b4ae7c32445092e18227a53c7ec783807973579d761763b2dbb6->enter($__internal_b6a28e9c9725b4ae7c32445092e18227a53c7ec783807973579d761763b2dbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_b6a28e9c9725b4ae7c32445092e18227a53c7ec783807973579d761763b2dbb6->leave($__internal_b6a28e9c9725b4ae7c32445092e18227a53c7ec783807973579d761763b2dbb6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d24ae79ed616b178a3dfeaf58777d79c46d5150c616a4163ba3f782594cdae41 = $this->env->getExtension("native_profiler");
        $__internal_d24ae79ed616b178a3dfeaf58777d79c46d5150c616a4163ba3f782594cdae41->enter($__internal_d24ae79ed616b178a3dfeaf58777d79c46d5150c616a4163ba3f782594cdae41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d24ae79ed616b178a3dfeaf58777d79c46d5150c616a4163ba3f782594cdae41->leave($__internal_d24ae79ed616b178a3dfeaf58777d79c46d5150c616a4163ba3f782594cdae41_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
