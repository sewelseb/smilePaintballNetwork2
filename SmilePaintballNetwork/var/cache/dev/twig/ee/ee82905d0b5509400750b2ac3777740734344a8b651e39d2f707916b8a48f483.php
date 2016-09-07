<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_b7294bec15027ad9b82e98491ca627001a9b8176fa3fb5b7e18462156af771e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_254a4e117cc093d85454a664f3d213868895d6219de183dfa3a087ab82662923 = $this->env->getExtension("native_profiler");
        $__internal_254a4e117cc093d85454a664f3d213868895d6219de183dfa3a087ab82662923->enter($__internal_254a4e117cc093d85454a664f3d213868895d6219de183dfa3a087ab82662923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_254a4e117cc093d85454a664f3d213868895d6219de183dfa3a087ab82662923->leave($__internal_254a4e117cc093d85454a664f3d213868895d6219de183dfa3a087ab82662923_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5580c137ff14e6f3c60a252d5c3c88643933fd2676960a9df0e6db0d74fea620 = $this->env->getExtension("native_profiler");
        $__internal_5580c137ff14e6f3c60a252d5c3c88643933fd2676960a9df0e6db0d74fea620->enter($__internal_5580c137ff14e6f3c60a252d5c3c88643933fd2676960a9df0e6db0d74fea620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_5580c137ff14e6f3c60a252d5c3c88643933fd2676960a9df0e6db0d74fea620->leave($__internal_5580c137ff14e6f3c60a252d5c3c88643933fd2676960a9df0e6db0d74fea620_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
