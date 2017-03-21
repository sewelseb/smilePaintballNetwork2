<?php

/* SmilePlatformBundle:Default:index.html.twig */
class __TwigTemplate_2ac60ef83b621e9fbb87aa5501b364e063715ecc5cda4466a0deb124ecfe65b7 extends Twig_Template
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
        $__internal_baa6c466e106114229df5adce6345c5e2f23e04101b209054f4afe5dc5a77075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa6c466e106114229df5adce6345c5e2f23e04101b209054f4afe5dc5a77075->enter($__internal_baa6c466e106114229df5adce6345c5e2f23e04101b209054f4afe5dc5a77075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baa6c466e106114229df5adce6345c5e2f23e04101b209054f4afe5dc5a77075->leave($__internal_baa6c466e106114229df5adce6345c5e2f23e04101b209054f4afe5dc5a77075_prof);

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
