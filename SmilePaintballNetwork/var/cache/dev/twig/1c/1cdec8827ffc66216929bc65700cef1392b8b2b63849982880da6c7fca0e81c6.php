<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_003a597f255ba22c2578ebca8a3ab9bb30a21524cc242c3575e580ce813f5ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_4121d61b366c04ab154c240acb9379630498df538c0fb38bc7aa87e2c70ffc52 = $this->env->getExtension("native_profiler");
        $__internal_4121d61b366c04ab154c240acb9379630498df538c0fb38bc7aa87e2c70ffc52->enter($__internal_4121d61b366c04ab154c240acb9379630498df538c0fb38bc7aa87e2c70ffc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4121d61b366c04ab154c240acb9379630498df538c0fb38bc7aa87e2c70ffc52->leave($__internal_4121d61b366c04ab154c240acb9379630498df538c0fb38bc7aa87e2c70ffc52_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ca778bd730b36270d804d6cb387a44eb9ae3fad27e949c5abaf4ab3ac08a36d = $this->env->getExtension("native_profiler");
        $__internal_0ca778bd730b36270d804d6cb387a44eb9ae3fad27e949c5abaf4ab3ac08a36d->enter($__internal_0ca778bd730b36270d804d6cb387a44eb9ae3fad27e949c5abaf4ab3ac08a36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_0ca778bd730b36270d804d6cb387a44eb9ae3fad27e949c5abaf4ab3ac08a36d->leave($__internal_0ca778bd730b36270d804d6cb387a44eb9ae3fad27e949c5abaf4ab3ac08a36d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
