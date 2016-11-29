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
        $__internal_137b834b7556fa9dc5a0be2f6acb5d95420bd9111add9f8117c73789b85cc602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_137b834b7556fa9dc5a0be2f6acb5d95420bd9111add9f8117c73789b85cc602->enter($__internal_137b834b7556fa9dc5a0be2f6acb5d95420bd9111add9f8117c73789b85cc602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SkynetBundle:Default:dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_137b834b7556fa9dc5a0be2f6acb5d95420bd9111add9f8117c73789b85cc602->leave($__internal_137b834b7556fa9dc5a0be2f6acb5d95420bd9111add9f8117c73789b85cc602_prof);

    }

    // line 2
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_eeff729e231a76ab7d99fd0702175434ba79758003f9b86cd33425362fc406b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeff729e231a76ab7d99fd0702175434ba79758003f9b86cd33425362fc406b2->enter($__internal_eeff729e231a76ab7d99fd0702175434ba79758003f9b86cd33425362fc406b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 3
        echo "    <h1 class=\"page-header\">
        Skynet Dashboard
    </h1>
";
        
        $__internal_eeff729e231a76ab7d99fd0702175434ba79758003f9b86cd33425362fc406b2->leave($__internal_eeff729e231a76ab7d99fd0702175434ba79758003f9b86cd33425362fc406b2_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_2a791bf5d9fffe251c7bcac7369a6f61186c935c5a06ae7d6cf398bf4fd50054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a791bf5d9fffe251c7bcac7369a6f61186c935c5a06ae7d6cf398bf4fd50054->enter($__internal_2a791bf5d9fffe251c7bcac7369a6f61186c935c5a06ae7d6cf398bf4fd50054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                    Facebook accounts
                </div>
                <div class=\"panel-body\">
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("skynet_facebookUser_listUser");
        echo "\">Show Accounts</a>
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
        
        $__internal_2a791bf5d9fffe251c7bcac7369a6f61186c935c5a06ae7d6cf398bf4fd50054->leave($__internal_2a791bf5d9fffe251c7bcac7369a6f61186c935c5a06ae7d6cf398bf4fd50054_prof);

    }

    // line 44
    public function block_rightCollumn($context, array $blocks = array())
    {
        $__internal_a8a0e696a60c6ba0cb90f7f942e98deab857a5121733474b40cadff91a1d4e2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8a0e696a60c6ba0cb90f7f942e98deab857a5121733474b40cadff91a1d4e2b->enter($__internal_a8a0e696a60c6ba0cb90f7f942e98deab857a5121733474b40cadff91a1d4e2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightCollumn"));

        // line 45
        echo "                Content
            ";
        
        $__internal_a8a0e696a60c6ba0cb90f7f942e98deab857a5121733474b40cadff91a1d4e2b->leave($__internal_a8a0e696a60c6ba0cb90f7f942e98deab857a5121733474b40cadff91a1d4e2b_prof);

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
        return array (  122 => 45,  116 => 44,  107 => 47,  105 => 44,  97 => 39,  78 => 23,  67 => 15,  58 => 8,  52 => 7,  42 => 3,  36 => 2,  11 => 1,);
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
                    Facebook accounts
                </div>
                <div class=\"panel-body\">
                    <a href=\"{{ path('skynet_facebookUser_listUser') }}\">Show Accounts</a>
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
