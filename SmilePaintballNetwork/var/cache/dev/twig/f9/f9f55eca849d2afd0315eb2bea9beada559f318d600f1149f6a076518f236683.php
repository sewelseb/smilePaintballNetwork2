<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c5fe87d490dd6d39fa2903e98d6388cbc2515bac9532c024e2440c9f56de2dda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7c94ad5cdb4059bf50aae5246abf0fea15843ffb35c63801b346e76991aa98c = $this->env->getExtension("native_profiler");
        $__internal_f7c94ad5cdb4059bf50aae5246abf0fea15843ffb35c63801b346e76991aa98c->enter($__internal_f7c94ad5cdb4059bf50aae5246abf0fea15843ffb35c63801b346e76991aa98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_f7c94ad5cdb4059bf50aae5246abf0fea15843ffb35c63801b346e76991aa98c->leave($__internal_f7c94ad5cdb4059bf50aae5246abf0fea15843ffb35c63801b346e76991aa98c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
