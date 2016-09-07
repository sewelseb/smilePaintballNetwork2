<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_8879eed1f8525eaebbba733a8e3f08ff7a21843f982360ec5ea512f14a30eb96 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_aa9c5c9718ab0e5cdb0ba9a822f28fed8d9409c0575e089037a7528f6d305ede = $this->env->getExtension("native_profiler");
        $__internal_aa9c5c9718ab0e5cdb0ba9a822f28fed8d9409c0575e089037a7528f6d305ede->enter($__internal_aa9c5c9718ab0e5cdb0ba9a822f28fed8d9409c0575e089037a7528f6d305ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa9c5c9718ab0e5cdb0ba9a822f28fed8d9409c0575e089037a7528f6d305ede->leave($__internal_aa9c5c9718ab0e5cdb0ba9a822f28fed8d9409c0575e089037a7528f6d305ede_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a4abd25f3bfba1d0e3fbf8e1cb798a7a14cbcd2b3670f34bb54e81ca07438c5c = $this->env->getExtension("native_profiler");
        $__internal_a4abd25f3bfba1d0e3fbf8e1cb798a7a14cbcd2b3670f34bb54e81ca07438c5c->enter($__internal_a4abd25f3bfba1d0e3fbf8e1cb798a7a14cbcd2b3670f34bb54e81ca07438c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_a4abd25f3bfba1d0e3fbf8e1cb798a7a14cbcd2b3670f34bb54e81ca07438c5c->leave($__internal_a4abd25f3bfba1d0e3fbf8e1cb798a7a14cbcd2b3670f34bb54e81ca07438c5c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
