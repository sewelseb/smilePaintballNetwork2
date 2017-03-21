<?php

/* SkynetBundle:Group/Blocs:addGroups.html.twig */
class __TwigTemplate_1cf476935e2d9db6ce9eae831663ea48623c93bac1062d93e2780cd855887dab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"row\">
    <H1>Add Groups</H1>
    <form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("skynet_group_addcsv");
        echo "\" method=\"post\">
        <div class=\"form-group\">
            <strong>Copy past the csv:</strong>
            <textarea name=\"csvFile\" class=\"form-control\"></textarea>
        </div>
        <div class=\"form-group\">
            <strong>GMT+</strong>
            <input class=\"form-control\" name=\"gmt\" type=\"number\">
        </div>
        <div class=\"form-group\">
            <input class=\"btn btn-primary\" type=\"submit\">
        </div>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "SkynetBundle:Group/Blocs:addGroups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SkynetBundle:Group/Blocs:addGroups.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\SkynetBundle/Resources/views/Group/Blocs/addGroups.html.twig");
    }
}
