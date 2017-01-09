<?php

/* SmilePlatformBundle:Default:index.html.twig */
class __TwigTemplate_2aae19b94e91c7ab9e3da27e8c95f93a70a29a6fb4ae6bd77fa9e6b316bbb7a9 extends Twig_Template
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
        $__internal_fd7472a40868a6e540687d415a4af22f17fa6dfb012838e225026a48386bb137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd7472a40868a6e540687d415a4af22f17fa6dfb012838e225026a48386bb137->enter($__internal_fd7472a40868a6e540687d415a4af22f17fa6dfb012838e225026a48386bb137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd7472a40868a6e540687d415a4af22f17fa6dfb012838e225026a48386bb137->leave($__internal_fd7472a40868a6e540687d415a4af22f17fa6dfb012838e225026a48386bb137_prof);

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


", "SmilePlatformBundle:Default:index.html.twig", "C:\\wamp64\\www\\bamsell\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
