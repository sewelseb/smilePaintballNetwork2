<?php

/* SkynetBundle::Default/dashboard.html.twig */
class __TwigTemplate_8f4932e3c87785deef5cf073f8d7ca8d344d4878d2b03b3c34343845d73a803a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SkynetBundle::Default/dashboard.html.twig", 1);
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
        $__internal_f87c79c9be66452d63dd235aaf6487a14365202e94268a2908382e6f3d76ef92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f87c79c9be66452d63dd235aaf6487a14365202e94268a2908382e6f3d76ef92->enter($__internal_f87c79c9be66452d63dd235aaf6487a14365202e94268a2908382e6f3d76ef92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SkynetBundle::Default/dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f87c79c9be66452d63dd235aaf6487a14365202e94268a2908382e6f3d76ef92->leave($__internal_f87c79c9be66452d63dd235aaf6487a14365202e94268a2908382e6f3d76ef92_prof);

    }

    // line 2
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_e7ae8a50dff791b6096fdcb892753de9f58cce9244ca2541cac970cb5dd99222 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ae8a50dff791b6096fdcb892753de9f58cce9244ca2541cac970cb5dd99222->enter($__internal_e7ae8a50dff791b6096fdcb892753de9f58cce9244ca2541cac970cb5dd99222_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 3
        echo "    <h1 class=\"page-header\">
        Skynet Dashboard
    </h1>
";
        
        $__internal_e7ae8a50dff791b6096fdcb892753de9f58cce9244ca2541cac970cb5dd99222->leave($__internal_e7ae8a50dff791b6096fdcb892753de9f58cce9244ca2541cac970cb5dd99222_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_fd119d9cff893a194147370d65d801080949a583a322962a364c1eb50c8e1d45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd119d9cff893a194147370d65d801080949a583a322962a364c1eb50c8e1d45->enter($__internal_fd119d9cff893a194147370d65d801080949a583a322962a364c1eb50c8e1d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    Operations
                </div>
                <div class=\"panel-body\">
                    <a href=\"#\">Show operations</a>
                </div>
            </div>
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    Accounts
                </div>
                <div class=\"panel-body\">
                    <a href=\"#\">Show Accounts</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-9\">
            ";
        // line 44
        $this->displayBlock('rightCollumn', $context, $blocks);
        // line 47
        echo "        </div>
    </div>
";
        
        $__internal_fd119d9cff893a194147370d65d801080949a583a322962a364c1eb50c8e1d45->leave($__internal_fd119d9cff893a194147370d65d801080949a583a322962a364c1eb50c8e1d45_prof);

    }

    // line 44
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_6abc4421654e5145b6bc7c87095c3f23c40585dee31e1148eb63c8ae7167324e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abc4421654e5145b6bc7c87095c3f23c40585dee31e1148eb63c8ae7167324e->enter($__internal_6abc4421654e5145b6bc7c87095c3f23c40585dee31e1148eb63c8ae7167324e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 45
        echo "                Content
            ";
        
        $__internal_6abc4421654e5145b6bc7c87095c3f23c40585dee31e1148eb63c8ae7167324e->leave($__internal_6abc4421654e5145b6bc7c87095c3f23c40585dee31e1148eb63c8ae7167324e_prof);

    }

    public function getTemplateName()
    {
        return "SkynetBundle::Default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 45,  113 => 44,  104 => 47,  102 => 44,  78 => 23,  67 => 15,  58 => 8,  52 => 7,  42 => 3,  36 => 2,  11 => 1,);
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
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    Operations
                </div>
                <div class=\"panel-body\">
                    <a href=\"#\">Show operations</a>
                </div>
            </div>
            <div class=\"panel panel-success\">
                <div class=\"panel-heading\">
                    Accounts
                </div>
                <div class=\"panel-body\">
                    <a href=\"#\">Show Accounts</a>
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
