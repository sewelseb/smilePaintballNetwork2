<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_ce0199695d3437f1762450fe3aa2bf8fed67d6e887dcb30cacad27113b6f752d extends Twig_Template
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
        $__internal_fcc73c6a184ea8f63336c87f92417545a2a14e59f633c6ae7b926d63a3b2a2c8 = $this->env->getExtension("native_profiler");
        $__internal_fcc73c6a184ea8f63336c87f92417545a2a14e59f633c6ae7b926d63a3b2a2c8->enter($__internal_fcc73c6a184ea8f63336c87f92417545a2a14e59f633c6ae7b926d63a3b2a2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_fcc73c6a184ea8f63336c87f92417545a2a14e59f633c6ae7b926d63a3b2a2c8->leave($__internal_fcc73c6a184ea8f63336c87f92417545a2a14e59f633c6ae7b926d63a3b2a2c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
