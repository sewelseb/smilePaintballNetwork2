<?php

/* SmilePlatformBundle::Default/Blocs/postViews.html.twig */
class __TwigTemplate_ff15bbc0368161a8b77bd6bba2e8fe2ebb6264238498e9ed216e3a27b072c4ff extends Twig_Template
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
        $__internal_f99353cd9db8a18697acaa7d438dbd29ab637f3f53667a7342abc2ebb1d5ce4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f99353cd9db8a18697acaa7d438dbd29ab637f3f53667a7342abc2ebb1d5ce4a->enter($__internal_f99353cd9db8a18697acaa7d438dbd29ab637f3f53667a7342abc2ebb1d5ce4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/Blocs/postViews.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($context["totalViews"] ?? $this->getContext($context, "totalViews")), "html", null, true);
        echo " total post views.";
        
        $__internal_f99353cd9db8a18697acaa7d438dbd29ab637f3f53667a7342abc2ebb1d5ce4a->leave($__internal_f99353cd9db8a18697acaa7d438dbd29ab637f3f53667a7342abc2ebb1d5ce4a_prof);

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
        return new Twig_Source("{{ totalViews }} total post views.", "SmilePlatformBundle::Default/Blocs/postViews.html.twig", "C:\\wamp64\\www\\bamsell\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/Blocs/postViews.html.twig");
    }
}
