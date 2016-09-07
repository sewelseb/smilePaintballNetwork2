<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_70375d34b7d5e23066798bd72c8030dbabebd213b44c711ddae81189865e4ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a6d62148ce79f5d2f96fe4d9dbec368fcc2c0d8cf8cda4a635f85ae6d0f19d4 = $this->env->getExtension("native_profiler");
        $__internal_1a6d62148ce79f5d2f96fe4d9dbec368fcc2c0d8cf8cda4a635f85ae6d0f19d4->enter($__internal_1a6d62148ce79f5d2f96fe4d9dbec368fcc2c0d8cf8cda4a635f85ae6d0f19d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1a6d62148ce79f5d2f96fe4d9dbec368fcc2c0d8cf8cda4a635f85ae6d0f19d4->leave($__internal_1a6d62148ce79f5d2f96fe4d9dbec368fcc2c0d8cf8cda4a635f85ae6d0f19d4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_026878720a51a9c211e5e6dba246cabc83a128ead6b1e18825d764c8a41b5fbc = $this->env->getExtension("native_profiler");
        $__internal_026878720a51a9c211e5e6dba246cabc83a128ead6b1e18825d764c8a41b5fbc->enter($__internal_026878720a51a9c211e5e6dba246cabc83a128ead6b1e18825d764c8a41b5fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_026878720a51a9c211e5e6dba246cabc83a128ead6b1e18825d764c8a41b5fbc->leave($__internal_026878720a51a9c211e5e6dba246cabc83a128ead6b1e18825d764c8a41b5fbc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
