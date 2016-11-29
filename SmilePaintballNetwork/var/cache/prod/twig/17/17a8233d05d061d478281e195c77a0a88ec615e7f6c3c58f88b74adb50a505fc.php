<?php

/* SkynetBundle:Group:showGroup.html.twig */
class __TwigTemplate_f21a7bd8778cf2deb7aeef5d44aff96abb1fe77b01a188a079402f4ad222ea46 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 3
        echo "    <h1 class=\"page-header\">
        Groups
    </h1>
";
    }

    // line 8
    public function block_rightCollumn($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->loadTemplate("SkynetBundle::Group/blocs/addGroups.html.twig", "SkynetBundle:Group:showGroup.html.twig", 9)->display($context);
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
        return array (  42 => 9,  39 => 8,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
