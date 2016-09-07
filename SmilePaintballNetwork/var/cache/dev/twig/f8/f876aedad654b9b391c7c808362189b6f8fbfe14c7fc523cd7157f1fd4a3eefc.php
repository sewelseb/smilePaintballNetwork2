<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_d0af3213282b9bbe488f8126b1eb11d7282514916c15e8d5a462033baab7161b extends Twig_Template
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
        $__internal_9cea300536cb705299f08db95701420169c1c45a87c0e17275f03972443acaeb = $this->env->getExtension("native_profiler");
        $__internal_9cea300536cb705299f08db95701420169c1c45a87c0e17275f03972443acaeb->enter($__internal_9cea300536cb705299f08db95701420169c1c45a87c0e17275f03972443acaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9cea300536cb705299f08db95701420169c1c45a87c0e17275f03972443acaeb->leave($__internal_9cea300536cb705299f08db95701420169c1c45a87c0e17275f03972443acaeb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d96b61389e0d20521e8cd8740373590dae7568f2dcacb593e54b5d877b0e3302 = $this->env->getExtension("native_profiler");
        $__internal_d96b61389e0d20521e8cd8740373590dae7568f2dcacb593e54b5d877b0e3302->enter($__internal_d96b61389e0d20521e8cd8740373590dae7568f2dcacb593e54b5d877b0e3302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d96b61389e0d20521e8cd8740373590dae7568f2dcacb593e54b5d877b0e3302->leave($__internal_d96b61389e0d20521e8cd8740373590dae7568f2dcacb593e54b5d877b0e3302_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4e3c65d4ca41f95f0cd3af95b0450ae4eac95a8c400fcb71c9251f105a7509fc = $this->env->getExtension("native_profiler");
        $__internal_4e3c65d4ca41f95f0cd3af95b0450ae4eac95a8c400fcb71c9251f105a7509fc->enter($__internal_4e3c65d4ca41f95f0cd3af95b0450ae4eac95a8c400fcb71c9251f105a7509fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4e3c65d4ca41f95f0cd3af95b0450ae4eac95a8c400fcb71c9251f105a7509fc->leave($__internal_4e3c65d4ca41f95f0cd3af95b0450ae4eac95a8c400fcb71c9251f105a7509fc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1ea7bbcf8cff855f3639a9fd39668d90fbc57ca47f59a1c25fb095f9604cd217 = $this->env->getExtension("native_profiler");
        $__internal_1ea7bbcf8cff855f3639a9fd39668d90fbc57ca47f59a1c25fb095f9604cd217->enter($__internal_1ea7bbcf8cff855f3639a9fd39668d90fbc57ca47f59a1c25fb095f9604cd217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_1ea7bbcf8cff855f3639a9fd39668d90fbc57ca47f59a1c25fb095f9604cd217->leave($__internal_1ea7bbcf8cff855f3639a9fd39668d90fbc57ca47f59a1c25fb095f9604cd217_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
