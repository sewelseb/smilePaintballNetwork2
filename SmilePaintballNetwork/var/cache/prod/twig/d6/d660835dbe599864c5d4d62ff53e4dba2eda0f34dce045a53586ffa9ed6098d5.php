<?php

/* SkynetBundle::Default/dashboard.html.twig */
class __TwigTemplate_7e01bd17f6c73308c583a075b552219596b9f606410b8f75415d4b60f17735e3 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 3
        echo "    <h1 class=\"page-header\">
        Skynet Dashboard
    </h1>
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
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
    }

    // line 44
    public function block_rightCollumn($context, array $blocks = array())
    {
        // line 45
        echo "                Content
            ";
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
        return array (  98 => 45,  95 => 44,  89 => 47,  87 => 44,  63 => 23,  52 => 15,  43 => 8,  40 => 7,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
