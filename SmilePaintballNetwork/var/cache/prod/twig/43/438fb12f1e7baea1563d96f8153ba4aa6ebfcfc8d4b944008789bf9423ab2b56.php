<?php

/* SkynetBundle:Group:showGroup.html.twig */
class __TwigTemplate_0d80528ff5f92a95ffd65179e142160b38b0173ccecaf0033876037072335705 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SkynetBundle:Group:showGroup.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\SkynetBundle/Resources/views/Group/showGroup.html.twig");
    }
}
