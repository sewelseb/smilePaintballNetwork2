<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_44818e0cba43992a5c45245e613ce394d33694a006bc508b056f5182dabf9975 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_0ed0124e0e33d012c5d7a20f9fcf3cb0c1c26f0f6d6d1befd45af47b0761aa10 = $this->env->getExtension("native_profiler");
        $__internal_0ed0124e0e33d012c5d7a20f9fcf3cb0c1c26f0f6d6d1befd45af47b0761aa10->enter($__internal_0ed0124e0e33d012c5d7a20f9fcf3cb0c1c26f0f6d6d1befd45af47b0761aa10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ed0124e0e33d012c5d7a20f9fcf3cb0c1c26f0f6d6d1befd45af47b0761aa10->leave($__internal_0ed0124e0e33d012c5d7a20f9fcf3cb0c1c26f0f6d6d1befd45af47b0761aa10_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e9caa3c91a7f329cca8d662aa462b6bf330a2c69b281a7ad97270b28d802e28 = $this->env->getExtension("native_profiler");
        $__internal_8e9caa3c91a7f329cca8d662aa462b6bf330a2c69b281a7ad97270b28d802e28->enter($__internal_8e9caa3c91a7f329cca8d662aa462b6bf330a2c69b281a7ad97270b28d802e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_8e9caa3c91a7f329cca8d662aa462b6bf330a2c69b281a7ad97270b28d802e28->leave($__internal_8e9caa3c91a7f329cca8d662aa462b6bf330a2c69b281a7ad97270b28d802e28_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
