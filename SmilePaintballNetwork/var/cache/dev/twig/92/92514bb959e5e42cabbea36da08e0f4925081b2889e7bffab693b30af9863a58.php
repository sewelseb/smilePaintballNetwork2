<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_1de4da418efc35bf5c4f2d8e250bb8ea9e4c5c4307175293c06e53f7448297df extends Twig_Template
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
        $__internal_64afffa81bd331fc55d153f80d9b608076a50484b25140f6cc7c1edb3bbb3d98 = $this->env->getExtension("native_profiler");
        $__internal_64afffa81bd331fc55d153f80d9b608076a50484b25140f6cc7c1edb3bbb3d98->enter($__internal_64afffa81bd331fc55d153f80d9b608076a50484b25140f6cc7c1edb3bbb3d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_64afffa81bd331fc55d153f80d9b608076a50484b25140f6cc7c1edb3bbb3d98->leave($__internal_64afffa81bd331fc55d153f80d9b608076a50484b25140f6cc7c1edb3bbb3d98_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_19becfac81d0e1bf86b45cd1fb15ff8c1c340c8e3a5c36343b018483e5296b16 = $this->env->getExtension("native_profiler");
        $__internal_19becfac81d0e1bf86b45cd1fb15ff8c1c340c8e3a5c36343b018483e5296b16->enter($__internal_19becfac81d0e1bf86b45cd1fb15ff8c1c340c8e3a5c36343b018483e5296b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_19becfac81d0e1bf86b45cd1fb15ff8c1c340c8e3a5c36343b018483e5296b16->leave($__internal_19becfac81d0e1bf86b45cd1fb15ff8c1c340c8e3a5c36343b018483e5296b16_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4ae59531204b2259a2fefbb2d8299c996bf99d892c36eeafaa614265fa060369 = $this->env->getExtension("native_profiler");
        $__internal_4ae59531204b2259a2fefbb2d8299c996bf99d892c36eeafaa614265fa060369->enter($__internal_4ae59531204b2259a2fefbb2d8299c996bf99d892c36eeafaa614265fa060369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4ae59531204b2259a2fefbb2d8299c996bf99d892c36eeafaa614265fa060369->leave($__internal_4ae59531204b2259a2fefbb2d8299c996bf99d892c36eeafaa614265fa060369_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_df2d31a786b79eecd974f0c47b628994998493603b0fdd9016cfe340360bf210 = $this->env->getExtension("native_profiler");
        $__internal_df2d31a786b79eecd974f0c47b628994998493603b0fdd9016cfe340360bf210->enter($__internal_df2d31a786b79eecd974f0c47b628994998493603b0fdd9016cfe340360bf210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_df2d31a786b79eecd974f0c47b628994998493603b0fdd9016cfe340360bf210->leave($__internal_df2d31a786b79eecd974f0c47b628994998493603b0fdd9016cfe340360bf210_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
