<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6d672d23cbcddab74937623479c2f182b44ab54678c926343a2e94cb6284df4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56a924d782a990910777bef61926a479b4b637391bde219e33bae81b5344ed11 = $this->env->getExtension("native_profiler");
        $__internal_56a924d782a990910777bef61926a479b4b637391bde219e33bae81b5344ed11->enter($__internal_56a924d782a990910777bef61926a479b4b637391bde219e33bae81b5344ed11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56a924d782a990910777bef61926a479b4b637391bde219e33bae81b5344ed11->leave($__internal_56a924d782a990910777bef61926a479b4b637391bde219e33bae81b5344ed11_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0b2125f3692bf0649b3b239ad46a4a9a1fe8f0f6b9d36c6b0096f7237e3c9315 = $this->env->getExtension("native_profiler");
        $__internal_0b2125f3692bf0649b3b239ad46a4a9a1fe8f0f6b9d36c6b0096f7237e3c9315->enter($__internal_0b2125f3692bf0649b3b239ad46a4a9a1fe8f0f6b9d36c6b0096f7237e3c9315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_0b2125f3692bf0649b3b239ad46a4a9a1fe8f0f6b9d36c6b0096f7237e3c9315->leave($__internal_0b2125f3692bf0649b3b239ad46a4a9a1fe8f0f6b9d36c6b0096f7237e3c9315_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
