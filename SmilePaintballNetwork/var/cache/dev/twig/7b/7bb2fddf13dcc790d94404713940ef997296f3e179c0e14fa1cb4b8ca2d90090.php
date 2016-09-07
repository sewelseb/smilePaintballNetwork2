<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_155ba611477d2c241af807423b7ef91946365800f3d4c63ff449fc39fe4b8012 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_c552c6bd4e90c55476b8959a44e6ee6794819cf4aa02e855d48cfe4dfa463c23 = $this->env->getExtension("native_profiler");
        $__internal_c552c6bd4e90c55476b8959a44e6ee6794819cf4aa02e855d48cfe4dfa463c23->enter($__internal_c552c6bd4e90c55476b8959a44e6ee6794819cf4aa02e855d48cfe4dfa463c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c552c6bd4e90c55476b8959a44e6ee6794819cf4aa02e855d48cfe4dfa463c23->leave($__internal_c552c6bd4e90c55476b8959a44e6ee6794819cf4aa02e855d48cfe4dfa463c23_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b45f3cd65a83652638181bd6ee795387d1edb071a7cd492d935d04c5e1c5d856 = $this->env->getExtension("native_profiler");
        $__internal_b45f3cd65a83652638181bd6ee795387d1edb071a7cd492d935d04c5e1c5d856->enter($__internal_b45f3cd65a83652638181bd6ee795387d1edb071a7cd492d935d04c5e1c5d856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b45f3cd65a83652638181bd6ee795387d1edb071a7cd492d935d04c5e1c5d856->leave($__internal_b45f3cd65a83652638181bd6ee795387d1edb071a7cd492d935d04c5e1c5d856_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
