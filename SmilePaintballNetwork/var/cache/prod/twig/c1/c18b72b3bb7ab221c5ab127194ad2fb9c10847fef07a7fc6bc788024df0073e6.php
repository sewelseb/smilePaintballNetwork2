<?php

/* @Skynet/Default/dashboard.html.twig */
class __TwigTemplate_c72210b1f0515333bcb22dadd70b4de945427a527c2bb0ee56ab653b54bb5302 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "@Skynet/Default/dashboard.html.twig", 1);
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
        return "@Skynet/Default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 45,  98 => 44,  92 => 47,  90 => 44,  82 => 39,  63 => 23,  52 => 15,  43 => 8,  40 => 7,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Skynet/Default/dashboard.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\SkynetBundle\\Resources\\views\\Default\\dashboard.html.twig");
    }
}
