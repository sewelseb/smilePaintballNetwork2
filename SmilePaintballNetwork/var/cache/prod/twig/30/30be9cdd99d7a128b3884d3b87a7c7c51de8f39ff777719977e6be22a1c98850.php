<?php

/* SmilePlatformBundle::Default/Blocs/postViews.html.twig */
class __TwigTemplate_111b66994a17c1018deba50c08b237b68151d537797aef55a4ba18289c4f857e extends Twig_Template
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
        $__internal_758d4261392437799693828ef7cad48655e18eae28aab3b0675c7cccb183a62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758d4261392437799693828ef7cad48655e18eae28aab3b0675c7cccb183a62d->enter($__internal_758d4261392437799693828ef7cad48655e18eae28aab3b0675c7cccb183a62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/Blocs/postViews.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($context["totalViews"] ?? $this->getContext($context, "totalViews")), "html", null, true);
        echo " total post views.";
        
        $__internal_758d4261392437799693828ef7cad48655e18eae28aab3b0675c7cccb183a62d->leave($__internal_758d4261392437799693828ef7cad48655e18eae28aab3b0675c7cccb183a62d_prof);

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
