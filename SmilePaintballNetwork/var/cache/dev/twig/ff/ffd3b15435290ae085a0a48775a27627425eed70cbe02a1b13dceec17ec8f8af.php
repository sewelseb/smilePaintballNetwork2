<?php

/* SmilePlatformBundle:Default:index.html.twig */
class __TwigTemplate_91551340ed9d830c8e579864de6333980f2f709d8b2d2a976156270c48097833 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle:Default:index.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d1b1647fe03eb58e4c1f2ee56ddbbea869050c7609ea9adf3fc7d8a13a9f0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d1b1647fe03eb58e4c1f2ee56ddbbea869050c7609ea9adf3fc7d8a13a9f0ec->enter($__internal_9d1b1647fe03eb58e4c1f2ee56ddbbea869050c7609ea9adf3fc7d8a13a9f0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d1b1647fe03eb58e4c1f2ee56ddbbea869050c7609ea9adf3fc7d8a13a9f0ec->leave($__internal_9d1b1647fe03eb58e4c1f2ee56ddbbea869050c7609ea9adf3fc7d8a13a9f0ec_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"SmilePlatformBundle::Default/layout.html.twig\" %}


", "SmilePlatformBundle:Default:index.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
