<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6cdb6e7a451ba16d81890eb7b017fa53b4b018d0117d43c4e87fcb17347c0a30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_16ccc7b1f4f4986172a29f550653d934ba1e1413f06e0584f76bfe7f3477ede2 = $this->env->getExtension("native_profiler");
        $__internal_16ccc7b1f4f4986172a29f550653d934ba1e1413f06e0584f76bfe7f3477ede2->enter($__internal_16ccc7b1f4f4986172a29f550653d934ba1e1413f06e0584f76bfe7f3477ede2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16ccc7b1f4f4986172a29f550653d934ba1e1413f06e0584f76bfe7f3477ede2->leave($__internal_16ccc7b1f4f4986172a29f550653d934ba1e1413f06e0584f76bfe7f3477ede2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d3c1ee5128824049fe258865f5361f14ff79d50e7f653c471ffa5164c7127403 = $this->env->getExtension("native_profiler");
        $__internal_d3c1ee5128824049fe258865f5361f14ff79d50e7f653c471ffa5164c7127403->enter($__internal_d3c1ee5128824049fe258865f5361f14ff79d50e7f653c471ffa5164c7127403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d3c1ee5128824049fe258865f5361f14ff79d50e7f653c471ffa5164c7127403->leave($__internal_d3c1ee5128824049fe258865f5361f14ff79d50e7f653c471ffa5164c7127403_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_791d0e227e30aa439993a9ad35ddbff91a2e0541ad9a51120f46917cab24c915 = $this->env->getExtension("native_profiler");
        $__internal_791d0e227e30aa439993a9ad35ddbff91a2e0541ad9a51120f46917cab24c915->enter($__internal_791d0e227e30aa439993a9ad35ddbff91a2e0541ad9a51120f46917cab24c915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_791d0e227e30aa439993a9ad35ddbff91a2e0541ad9a51120f46917cab24c915->leave($__internal_791d0e227e30aa439993a9ad35ddbff91a2e0541ad9a51120f46917cab24c915_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d767655a3c4469ae7188041c8fba21faa59405c40979a1bfbc1c6be3cd964a4b = $this->env->getExtension("native_profiler");
        $__internal_d767655a3c4469ae7188041c8fba21faa59405c40979a1bfbc1c6be3cd964a4b->enter($__internal_d767655a3c4469ae7188041c8fba21faa59405c40979a1bfbc1c6be3cd964a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d767655a3c4469ae7188041c8fba21faa59405c40979a1bfbc1c6be3cd964a4b->leave($__internal_d767655a3c4469ae7188041c8fba21faa59405c40979a1bfbc1c6be3cd964a4b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
