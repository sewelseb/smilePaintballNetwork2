<?php

/* SmilePlatformBundle::Default/Blocs/postViews.html.twig */
class __TwigTemplate_3cc42e76e78b0f43e8112c51e3f022e2f2e77e43b5977c3464ec83dfbcccd76f extends Twig_Template
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
        $__internal_0b028fe516e7d7dafcdf3b9b02621130d13c1ef8efebe827ca7aca71496fadc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b028fe516e7d7dafcdf3b9b02621130d13c1ef8efebe827ca7aca71496fadc7->enter($__internal_0b028fe516e7d7dafcdf3b9b02621130d13c1ef8efebe827ca7aca71496fadc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/Blocs/postViews.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($context["totalViews"] ?? $this->getContext($context, "totalViews")), "html", null, true);
        echo " total post views.";
        
        $__internal_0b028fe516e7d7dafcdf3b9b02621130d13c1ef8efebe827ca7aca71496fadc7->leave($__internal_0b028fe516e7d7dafcdf3b9b02621130d13c1ef8efebe827ca7aca71496fadc7_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/Blocs/postViews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ totalViews }} total post views.", "SmilePlatformBundle::Default/Blocs/postViews.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/Blocs/postViews.html.twig");
    }
}
