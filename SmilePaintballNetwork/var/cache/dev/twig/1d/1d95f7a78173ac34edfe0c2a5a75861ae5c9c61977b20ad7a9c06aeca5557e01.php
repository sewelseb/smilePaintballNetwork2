<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_94be2e91ab4ea1bbb5d181d8bab6af0e280287409f2c6dae424570343487e9db extends Twig_Template
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
        $__internal_39f8aef3da845966637d2b018f6039bf07a2e71fd3621b5cb18206858da6838b = $this->env->getExtension("native_profiler");
        $__internal_39f8aef3da845966637d2b018f6039bf07a2e71fd3621b5cb18206858da6838b->enter($__internal_39f8aef3da845966637d2b018f6039bf07a2e71fd3621b5cb18206858da6838b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_39f8aef3da845966637d2b018f6039bf07a2e71fd3621b5cb18206858da6838b->leave($__internal_39f8aef3da845966637d2b018f6039bf07a2e71fd3621b5cb18206858da6838b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4c19d621473dd193a297fabc20b28432edb1d20495ca14bb209967738b44759f = $this->env->getExtension("native_profiler");
        $__internal_4c19d621473dd193a297fabc20b28432edb1d20495ca14bb209967738b44759f->enter($__internal_4c19d621473dd193a297fabc20b28432edb1d20495ca14bb209967738b44759f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_4c19d621473dd193a297fabc20b28432edb1d20495ca14bb209967738b44759f->leave($__internal_4c19d621473dd193a297fabc20b28432edb1d20495ca14bb209967738b44759f_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_58875fe13855a78ed03d9b93d6d7345c114fd8ec9166d0ef9ce1e7a092ae34af = $this->env->getExtension("native_profiler");
        $__internal_58875fe13855a78ed03d9b93d6d7345c114fd8ec9166d0ef9ce1e7a092ae34af->enter($__internal_58875fe13855a78ed03d9b93d6d7345c114fd8ec9166d0ef9ce1e7a092ae34af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_58875fe13855a78ed03d9b93d6d7345c114fd8ec9166d0ef9ce1e7a092ae34af->leave($__internal_58875fe13855a78ed03d9b93d6d7345c114fd8ec9166d0ef9ce1e7a092ae34af_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6ebfaac9b737fb5a66af61576eec8ee93d8b20870c7709e3f1107f5b27edb0ef = $this->env->getExtension("native_profiler");
        $__internal_6ebfaac9b737fb5a66af61576eec8ee93d8b20870c7709e3f1107f5b27edb0ef->enter($__internal_6ebfaac9b737fb5a66af61576eec8ee93d8b20870c7709e3f1107f5b27edb0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6ebfaac9b737fb5a66af61576eec8ee93d8b20870c7709e3f1107f5b27edb0ef->leave($__internal_6ebfaac9b737fb5a66af61576eec8ee93d8b20870c7709e3f1107f5b27edb0ef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
