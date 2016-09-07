<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_bfe097c9d06f039ade23171218083275316cead18d755a29f3662e148be0269d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_a3741c0894ebff62fc2076f688a06804b7a7caad099c74b2489ffdca410d749d = $this->env->getExtension("native_profiler");
        $__internal_a3741c0894ebff62fc2076f688a06804b7a7caad099c74b2489ffdca410d749d->enter($__internal_a3741c0894ebff62fc2076f688a06804b7a7caad099c74b2489ffdca410d749d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3741c0894ebff62fc2076f688a06804b7a7caad099c74b2489ffdca410d749d->leave($__internal_a3741c0894ebff62fc2076f688a06804b7a7caad099c74b2489ffdca410d749d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbf1db412bb3c3f7863e7b516f1db89addb273c9d353c1404d4c45e5b4c28fcf = $this->env->getExtension("native_profiler");
        $__internal_dbf1db412bb3c3f7863e7b516f1db89addb273c9d353c1404d4c45e5b4c28fcf->enter($__internal_dbf1db412bb3c3f7863e7b516f1db89addb273c9d353c1404d4c45e5b4c28fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_dbf1db412bb3c3f7863e7b516f1db89addb273c9d353c1404d4c45e5b4c28fcf->leave($__internal_dbf1db412bb3c3f7863e7b516f1db89addb273c9d353c1404d4c45e5b4c28fcf_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
