<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_d21f21e47c17a5e9e57d61411e30fda0c95742fa5ad79c9055c77e4eb64d2dcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5c3085df56c787b6350be65458bfcecebaa23f01a85ca081781b1167babff58 = $this->env->getExtension("native_profiler");
        $__internal_b5c3085df56c787b6350be65458bfcecebaa23f01a85ca081781b1167babff58->enter($__internal_b5c3085df56c787b6350be65458bfcecebaa23f01a85ca081781b1167babff58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b5c3085df56c787b6350be65458bfcecebaa23f01a85ca081781b1167babff58->leave($__internal_b5c3085df56c787b6350be65458bfcecebaa23f01a85ca081781b1167babff58_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_58df0ccae1da44ab0b740beb321a9e085ddf06fd9613982a9843ea9ad978fe89 = $this->env->getExtension("native_profiler");
        $__internal_58df0ccae1da44ab0b740beb321a9e085ddf06fd9613982a9843ea9ad978fe89->enter($__internal_58df0ccae1da44ab0b740beb321a9e085ddf06fd9613982a9843ea9ad978fe89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_58df0ccae1da44ab0b740beb321a9e085ddf06fd9613982a9843ea9ad978fe89->leave($__internal_58df0ccae1da44ab0b740beb321a9e085ddf06fd9613982a9843ea9ad978fe89_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_77f0650233ac1af9aa3ebb1518fa1fb6a6cbc8647477876480bb9862a910429f = $this->env->getExtension("native_profiler");
        $__internal_77f0650233ac1af9aa3ebb1518fa1fb6a6cbc8647477876480bb9862a910429f->enter($__internal_77f0650233ac1af9aa3ebb1518fa1fb6a6cbc8647477876480bb9862a910429f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_77f0650233ac1af9aa3ebb1518fa1fb6a6cbc8647477876480bb9862a910429f->leave($__internal_77f0650233ac1af9aa3ebb1518fa1fb6a6cbc8647477876480bb9862a910429f_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_141d31c1197b514b282490e50f28487a3db426963a196defebcb04938ad25882 = $this->env->getExtension("native_profiler");
        $__internal_141d31c1197b514b282490e50f28487a3db426963a196defebcb04938ad25882->enter($__internal_141d31c1197b514b282490e50f28487a3db426963a196defebcb04938ad25882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_141d31c1197b514b282490e50f28487a3db426963a196defebcb04938ad25882->leave($__internal_141d31c1197b514b282490e50f28487a3db426963a196defebcb04938ad25882_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
