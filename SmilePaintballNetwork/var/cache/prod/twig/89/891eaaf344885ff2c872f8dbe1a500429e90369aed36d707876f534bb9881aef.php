<?php

/* SkynetBundle:Group:showGroup.html.twig */
class __TwigTemplate_8b0bc19dfd0674a919564fa96f77f34602d2f695b6240350bb1e2ee4972402fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SkynetBundle::Default/dashboard.html.twig", "SkynetBundle:Group:showGroup.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'rightCollumn' => array($this, 'block_rightCollumn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SkynetBundle::Default/dashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c4ba8c5e98068595c8bf796a15c97c7736be7bcf7fdb50db3b422d8ffb1cb24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c4ba8c5e98068595c8bf796a15c97c7736be7bcf7fdb50db3b422d8ffb1cb24->enter($__internal_0c4ba8c5e98068595c8bf796a15c97c7736be7bcf7fdb50db3b422d8ffb1cb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SkynetBundle:Group:showGroup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c4ba8c5e98068595c8bf796a15c97c7736be7bcf7fdb50db3b422d8ffb1cb24->leave($__internal_0c4ba8c5e98068595c8bf796a15c97c7736be7bcf7fdb50db3b422d8ffb1cb24_prof);

    }

    // line 2
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_216d2fa2c141b74d99a1ebda299a2988baa0b5e4900aab8cbebd0d8e54c21e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216d2fa2c141b74d99a1ebda299a2988baa0b5e4900aab8cbebd0d8e54c21e64->enter($__internal_216d2fa2c141b74d99a1ebda299a2988baa0b5e4900aab8cbebd0d8e54c21e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 3
        echo "    <h1 class=\"page-header\">
        Groups
    </h1>
";
        
        $__internal_216d2fa2c141b74d99a1ebda299a2988baa0b5e4900aab8cbebd0d8e54c21e64->leave($__internal_216d2fa2c141b74d99a1ebda299a2988baa0b5e4900aab8cbebd0d8e54c21e64_prof);

    }

    // line 8
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_6a3f1635d3d10e946c11199488c1e73d2637db4625b7fdcb8f6affd11fd206ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3f1635d3d10e946c11199488c1e73d2637db4625b7fdcb8f6affd11fd206ab->enter($__internal_6a3f1635d3d10e946c11199488c1e73d2637db4625b7fdcb8f6affd11fd206ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 9
        echo "    ";
        $this->loadTemplate("SkynetBundle::Group/blocs/addGroups.html.twig", "SkynetBundle:Group:showGroup.html.twig", 9)->display($context);
        
        $__internal_6a3f1635d3d10e946c11199488c1e73d2637db4625b7fdcb8f6affd11fd206ab->leave($__internal_6a3f1635d3d10e946c11199488c1e73d2637db4625b7fdcb8f6affd11fd206ab_prof);

    }

    public function getTemplateName()
    {
        return "SkynetBundle:Group:showGroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  51 => 8,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"SkynetBundle::Default/dashboard.html.twig\" %}
{% block pageHeader %}
    <h1 class=\"page-header\">
        Groups
    </h1>
{% endblock %}

{% block rightCollumn %}
    {%  include('SkynetBundle::Group/blocs/addGroups.html.twig') %}
{% endblock %}";
    }
}
