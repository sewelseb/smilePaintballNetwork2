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
        $__internal_d3945d0331a01e9b422261c6e298e10d2822894087f215d6bccae0a717191e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3945d0331a01e9b422261c6e298e10d2822894087f215d6bccae0a717191e29->enter($__internal_d3945d0331a01e9b422261c6e298e10d2822894087f215d6bccae0a717191e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SkynetBundle:Group:showGroup.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3945d0331a01e9b422261c6e298e10d2822894087f215d6bccae0a717191e29->leave($__internal_d3945d0331a01e9b422261c6e298e10d2822894087f215d6bccae0a717191e29_prof);

    }

    // line 2
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_85435f797c9609faa40d6dca3b1cc6e3c4fbdd9557a3c2491204a9fabe7c3da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85435f797c9609faa40d6dca3b1cc6e3c4fbdd9557a3c2491204a9fabe7c3da7->enter($__internal_85435f797c9609faa40d6dca3b1cc6e3c4fbdd9557a3c2491204a9fabe7c3da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 3
        echo "    <h1 class=\"page-header\">
        Groups
    </h1>
";
        
        $__internal_85435f797c9609faa40d6dca3b1cc6e3c4fbdd9557a3c2491204a9fabe7c3da7->leave($__internal_85435f797c9609faa40d6dca3b1cc6e3c4fbdd9557a3c2491204a9fabe7c3da7_prof);

    }

    // line 8
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_ce99b0efdf74780298ac6243645fcbbebf9bd3104ed4bafb46f96cec80a16ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce99b0efdf74780298ac6243645fcbbebf9bd3104ed4bafb46f96cec80a16ea0->enter($__internal_ce99b0efdf74780298ac6243645fcbbebf9bd3104ed4bafb46f96cec80a16ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 9
        echo "    groups
";
        
        $__internal_ce99b0efdf74780298ac6243645fcbbebf9bd3104ed4bafb46f96cec80a16ea0->leave($__internal_ce99b0efdf74780298ac6243645fcbbebf9bd3104ed4bafb46f96cec80a16ea0_prof);

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
    groups
{% endblock %}";
    }
}
