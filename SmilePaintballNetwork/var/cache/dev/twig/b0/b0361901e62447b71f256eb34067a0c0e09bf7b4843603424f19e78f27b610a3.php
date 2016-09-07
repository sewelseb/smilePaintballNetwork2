<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_1c07fe8e97312b68b68e57b24c3447758d36780c28dffe880273eb1b07e80719 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_ab6e5f6425b3344f488d40a4841385af8c04fcfd85da8a1775c6ae2f0596d2ed = $this->env->getExtension("native_profiler");
        $__internal_ab6e5f6425b3344f488d40a4841385af8c04fcfd85da8a1775c6ae2f0596d2ed->enter($__internal_ab6e5f6425b3344f488d40a4841385af8c04fcfd85da8a1775c6ae2f0596d2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab6e5f6425b3344f488d40a4841385af8c04fcfd85da8a1775c6ae2f0596d2ed->leave($__internal_ab6e5f6425b3344f488d40a4841385af8c04fcfd85da8a1775c6ae2f0596d2ed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c38edc7b2e4ab006323003a32cc6a9f0c8a069fb6da3bf19154bc31dc7ddf73c = $this->env->getExtension("native_profiler");
        $__internal_c38edc7b2e4ab006323003a32cc6a9f0c8a069fb6da3bf19154bc31dc7ddf73c->enter($__internal_c38edc7b2e4ab006323003a32cc6a9f0c8a069fb6da3bf19154bc31dc7ddf73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_c38edc7b2e4ab006323003a32cc6a9f0c8a069fb6da3bf19154bc31dc7ddf73c->leave($__internal_c38edc7b2e4ab006323003a32cc6a9f0c8a069fb6da3bf19154bc31dc7ddf73c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
