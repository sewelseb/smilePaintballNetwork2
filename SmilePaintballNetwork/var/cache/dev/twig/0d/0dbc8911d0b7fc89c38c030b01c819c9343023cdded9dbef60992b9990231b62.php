<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_1703c605d5cfce04977b9f902d29f38684a400809b3b19446653123ab3dc80e0 extends Twig_Template
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
        $__internal_6cd9688925ad64983a2401b78b256ef9e673b7a98e04b96d5f4c527e2f212afa = $this->env->getExtension("native_profiler");
        $__internal_6cd9688925ad64983a2401b78b256ef9e673b7a98e04b96d5f4c527e2f212afa->enter($__internal_6cd9688925ad64983a2401b78b256ef9e673b7a98e04b96d5f4c527e2f212afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_6cd9688925ad64983a2401b78b256ef9e673b7a98e04b96d5f4c527e2f212afa->leave($__internal_6cd9688925ad64983a2401b78b256ef9e673b7a98e04b96d5f4c527e2f212afa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
