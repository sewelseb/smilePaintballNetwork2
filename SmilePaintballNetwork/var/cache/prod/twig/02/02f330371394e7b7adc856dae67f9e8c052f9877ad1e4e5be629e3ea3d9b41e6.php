<?php

/* SkynetBundle::Group/blocs/addGroups.html.twig */
class __TwigTemplate_ce55871abae95f7671daeaff94bc1199552daf4c9f5cc7684d60b86e463aa541 extends Twig_Template
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
        $__internal_605a87656f287f169c1ac2d02cf08fa8678be0243ed3f3ff7abe0523f787e554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_605a87656f287f169c1ac2d02cf08fa8678be0243ed3f3ff7abe0523f787e554->enter($__internal_605a87656f287f169c1ac2d02cf08fa8678be0243ed3f3ff7abe0523f787e554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SkynetBundle::Group/blocs/addGroups.html.twig"));

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
        
        $__internal_605a87656f287f169c1ac2d02cf08fa8678be0243ed3f3ff7abe0523f787e554->leave($__internal_605a87656f287f169c1ac2d02cf08fa8678be0243ed3f3ff7abe0523f787e554_prof);

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
        return array (  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"row\">
    <H1>Add Groups</H1>
    <form action=\"{{ path('skynet_group_addcsv') }}\" method=\"post\">
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
}
