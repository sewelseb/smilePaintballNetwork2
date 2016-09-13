<?php

/* SmilePlatformBundle:Default:index.html.twig */
class __TwigTemplate_6a91262aaae7c5bea36e85f13b67e1a175a9be6b80e5e79d6c74699d1fbe3848 extends Twig_Template
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
        $__internal_a8f0b1f82c170b4ce7651227653ba691063d87d04abee22d42bc00b55b8c3808 = $this->env->getExtension("native_profiler");
        $__internal_a8f0b1f82c170b4ce7651227653ba691063d87d04abee22d42bc00b55b8c3808->enter($__internal_a8f0b1f82c170b4ce7651227653ba691063d87d04abee22d42bc00b55b8c3808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8f0b1f82c170b4ce7651227653ba691063d87d04abee22d42bc00b55b8c3808->leave($__internal_a8f0b1f82c170b4ce7651227653ba691063d87d04abee22d42bc00b55b8c3808_prof);

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
}
/* */
/* {% extends "SmilePlatformBundle::Default/layout.html.twig" %}*/
/* */
/* */
/* */
