<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_dc8e71fc321c07775852e14d60d8b161c18aa60a33ca2d38e60f0bcc4e770456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39c1af5d184e3a6006e7ce4b136c8487377b0864b9fa1f0aff1c5a1707e10fab = $this->env->getExtension("native_profiler");
        $__internal_39c1af5d184e3a6006e7ce4b136c8487377b0864b9fa1f0aff1c5a1707e10fab->enter($__internal_39c1af5d184e3a6006e7ce4b136c8487377b0864b9fa1f0aff1c5a1707e10fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_39c1af5d184e3a6006e7ce4b136c8487377b0864b9fa1f0aff1c5a1707e10fab->leave($__internal_39c1af5d184e3a6006e7ce4b136c8487377b0864b9fa1f0aff1c5a1707e10fab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
