<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_0500ffbd9bfc0e7e2a578627b99b706742c7dd9948245bcf44a45c61b8a811c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_8d0e9878f8a31a28fd402b838685f3e1d5cb5d664f3d4dbe66d9fc1a573c8132 = $this->env->getExtension("native_profiler");
        $__internal_8d0e9878f8a31a28fd402b838685f3e1d5cb5d664f3d4dbe66d9fc1a573c8132->enter($__internal_8d0e9878f8a31a28fd402b838685f3e1d5cb5d664f3d4dbe66d9fc1a573c8132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d0e9878f8a31a28fd402b838685f3e1d5cb5d664f3d4dbe66d9fc1a573c8132->leave($__internal_8d0e9878f8a31a28fd402b838685f3e1d5cb5d664f3d4dbe66d9fc1a573c8132_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38869acf9b1617d02d86d06020b88fe93e4c922c0979f39309310d1db6cf36ba = $this->env->getExtension("native_profiler");
        $__internal_38869acf9b1617d02d86d06020b88fe93e4c922c0979f39309310d1db6cf36ba->enter($__internal_38869acf9b1617d02d86d06020b88fe93e4c922c0979f39309310d1db6cf36ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_38869acf9b1617d02d86d06020b88fe93e4c922c0979f39309310d1db6cf36ba->leave($__internal_38869acf9b1617d02d86d06020b88fe93e4c922c0979f39309310d1db6cf36ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
