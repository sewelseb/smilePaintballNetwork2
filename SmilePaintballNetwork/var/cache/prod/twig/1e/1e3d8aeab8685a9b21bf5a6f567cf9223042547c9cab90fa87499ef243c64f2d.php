<?php

/* SkynetBundle::Group/blocs/addGroups.html.twig */
class __TwigTemplate_269701934a47eef884c2cf805a5620ecea780850997017b655b6e6f779f5d19d extends Twig_Template
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
        return "SkynetBundle::Group/blocs/addGroups.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
