<?php

/* SkynetBundle:Default:dashboard.html.twig */
class __TwigTemplate_8f4932e3c87785deef5cf073f8d7ca8d344d4878d2b03b3c34343845d73a803a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SkynetBundle:Default:dashboard.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'content' => array($this, 'block_content'),
            'rightCollumn' => array($this, 'block_rightCollumn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd7646cc78e98eb4f985e776ee15aad18c98e0988c3845bece6f3ad8f2ccec72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7646cc78e98eb4f985e776ee15aad18c98e0988c3845bece6f3ad8f2ccec72->enter($__internal_bd7646cc78e98eb4f985e776ee15aad18c98e0988c3845bece6f3ad8f2ccec72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SkynetBundle:Default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd7646cc78e98eb4f985e776ee15aad18c98e0988c3845bece6f3ad8f2ccec72->leave($__internal_bd7646cc78e98eb4f985e776ee15aad18c98e0988c3845bece6f3ad8f2ccec72_prof);

    }

    // line 2
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_b606fa880fd6af2a94b8278904c545680f527676ce9f8f18282b931a8d4f91f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b606fa880fd6af2a94b8278904c545680f527676ce9f8f18282b931a8d4f91f2->enter($__internal_b606fa880fd6af2a94b8278904c545680f527676ce9f8f18282b931a8d4f91f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 3
        echo "    <h1 class=\"page-header\">
        Skynet Dashboard
    </h1>
";
        
        $__internal_b606fa880fd6af2a94b8278904c545680f527676ce9f8f18282b931a8d4f91f2->leave($__internal_b606fa880fd6af2a94b8278904c545680f527676ce9f8f18282b931a8d4f91f2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_a1abbf60296e8c583ca136b075bb511441487481bd5ce8df10a2339076eccd86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1abbf60296e8c583ca136b075bb511441487481bd5ce8df10a2339076eccd86->enter($__internal_a1abbf60296e8c583ca136b075bb511441487481bd5ce8df10a2339076eccd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    Dashboard
                </div>
                <div class=\"panel-body\">
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("skynet_dashboard");
        echo "\">Dashboard</a>
                </div>
            </div>
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    Groups
                </div>
                <div class=\"panel-body\">
                    <a href=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("skynet_group_listGroups");
        echo "\">Show groups</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-9\">
            ";
        // line 28
        $this->displayBlock('rightCollumn', $context, $blocks);
        // line 31
        echo "        </div>
    </div>
";
        
        $__internal_a1abbf60296e8c583ca136b075bb511441487481bd5ce8df10a2339076eccd86->leave($__internal_a1abbf60296e8c583ca136b075bb511441487481bd5ce8df10a2339076eccd86_prof);

    }

    // line 28
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_fc05e6bfbbb7f0afdf03066de0428b1ff9f4585ed8d780c02ebf4ced82f612c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc05e6bfbbb7f0afdf03066de0428b1ff9f4585ed8d780c02ebf4ced82f612c1->enter($__internal_fc05e6bfbbb7f0afdf03066de0428b1ff9f4585ed8d780c02ebf4ced82f612c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 29
        echo "                Content
            ";
        
        $__internal_fc05e6bfbbb7f0afdf03066de0428b1ff9f4585ed8d780c02ebf4ced82f612c1->leave($__internal_fc05e6bfbbb7f0afdf03066de0428b1ff9f4585ed8d780c02ebf4ced82f612c1_prof);

    }

    public function getTemplateName()
    {
        return "SkynetBundle:Default:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 29,  97 => 28,  88 => 31,  86 => 28,  78 => 23,  67 => 15,  58 => 8,  52 => 7,  42 => 3,  36 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"SmilePlatformBundle::Default/layout.html.twig\" %}
{% block pageHeader %}
    <h1 class=\"page-header\">
        Skynet Dashboard
    </h1>
{% endblock %}
{% block content %}
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    Dashboard
                </div>
                <div class=\"panel-body\">
                    <a href=\"{{  path('skynet_dashboard') }}\">Dashboard</a>
                </div>
            </div>
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    Groups
                </div>
                <div class=\"panel-body\">
                    <a href=\"{{  path('skynet_group_listGroups') }}\">Show groups</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-9\">
            {% block rightCollumn %}
                Content
            {% endblock %}
        </div>
    </div>
{% endblock %}

";
    }
}
