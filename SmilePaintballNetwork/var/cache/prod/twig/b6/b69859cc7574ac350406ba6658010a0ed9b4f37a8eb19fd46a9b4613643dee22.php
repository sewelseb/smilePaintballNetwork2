<?php

/* SkynetBundle:Group:csv.html.twig */
class __TwigTemplate_7fdb697f49998e9792f142ee6aa57b5e99d970cbf7f16462764f978c4243424f extends Twig_Template
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
        $__internal_eb4739f1f3546b95b8d4353778f362dba1e3d30d7777276f2b802f8622e2c1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb4739f1f3546b95b8d4353778f362dba1e3d30d7777276f2b802f8622e2c1cf->enter($__internal_eb4739f1f3546b95b8d4353778f362dba1e3d30d7777276f2b802f8622e2c1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SkynetBundle:Group:csv.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["csv"]) ? $context["csv"] : $this->getContext($context, "csv")));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["line"]);
            foreach ($context['_seq'] as $context["_key"] => $context["collumn"]) {
                // line 3
                echo "        ";
                echo twig_escape_filter($this->env, twig_join_filter($context["collumn"]), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collumn'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_eb4739f1f3546b95b8d4353778f362dba1e3d30d7777276f2b802f8622e2c1cf->leave($__internal_eb4739f1f3546b95b8d4353778f362dba1e3d30d7777276f2b802f8622e2c1cf_prof);

    }

    public function getTemplateName()
    {
        return "SkynetBundle:Group:csv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  26 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% for line in csv %}
    {% for collumn in line %}
        {{ collumn|join }}
    {% endfor %}
{% endfor %}";
    }
}
