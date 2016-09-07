<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_b9e1437cb155f9ecf49b56ce844d9ff4111c89032dc47d0eed60acd563294acf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_ca86b6c65c602646a02cd19b9df0b78062418df0c6b35f4c2fadff2545185c73 = $this->env->getExtension("native_profiler");
        $__internal_ca86b6c65c602646a02cd19b9df0b78062418df0c6b35f4c2fadff2545185c73->enter($__internal_ca86b6c65c602646a02cd19b9df0b78062418df0c6b35f4c2fadff2545185c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca86b6c65c602646a02cd19b9df0b78062418df0c6b35f4c2fadff2545185c73->leave($__internal_ca86b6c65c602646a02cd19b9df0b78062418df0c6b35f4c2fadff2545185c73_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_07c7fc14fa003d56c5017e94a5cf33f1acef6ec9d2c6805b4809ce278f727e8b = $this->env->getExtension("native_profiler");
        $__internal_07c7fc14fa003d56c5017e94a5cf33f1acef6ec9d2c6805b4809ce278f727e8b->enter($__internal_07c7fc14fa003d56c5017e94a5cf33f1acef6ec9d2c6805b4809ce278f727e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_07c7fc14fa003d56c5017e94a5cf33f1acef6ec9d2c6805b4809ce278f727e8b->leave($__internal_07c7fc14fa003d56c5017e94a5cf33f1acef6ec9d2c6805b4809ce278f727e8b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
