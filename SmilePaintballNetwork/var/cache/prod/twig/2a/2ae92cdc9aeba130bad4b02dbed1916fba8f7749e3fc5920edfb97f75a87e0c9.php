<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dcef75dacdc0440afa5133ce289d27a6b0eee45bbb3425127ccad6ea2d7b5160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_075887841a890aa7ca002590cbb71030b6685cce7e6891524ae01fd76bfadb68 = $this->env->getExtension("native_profiler");
        $__internal_075887841a890aa7ca002590cbb71030b6685cce7e6891524ae01fd76bfadb68->enter($__internal_075887841a890aa7ca002590cbb71030b6685cce7e6891524ae01fd76bfadb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_075887841a890aa7ca002590cbb71030b6685cce7e6891524ae01fd76bfadb68->leave($__internal_075887841a890aa7ca002590cbb71030b6685cce7e6891524ae01fd76bfadb68_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2bc38167fd538b92ccca90c8342517316cff2fa3c8334336f1b6e48586ef6de8 = $this->env->getExtension("native_profiler");
        $__internal_2bc38167fd538b92ccca90c8342517316cff2fa3c8334336f1b6e48586ef6de8->enter($__internal_2bc38167fd538b92ccca90c8342517316cff2fa3c8334336f1b6e48586ef6de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2bc38167fd538b92ccca90c8342517316cff2fa3c8334336f1b6e48586ef6de8->leave($__internal_2bc38167fd538b92ccca90c8342517316cff2fa3c8334336f1b6e48586ef6de8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8ea979d7fc4336296c17f103c44813a8a379c6669c7a98f4d7be93787d57bbd = $this->env->getExtension("native_profiler");
        $__internal_d8ea979d7fc4336296c17f103c44813a8a379c6669c7a98f4d7be93787d57bbd->enter($__internal_d8ea979d7fc4336296c17f103c44813a8a379c6669c7a98f4d7be93787d57bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d8ea979d7fc4336296c17f103c44813a8a379c6669c7a98f4d7be93787d57bbd->leave($__internal_d8ea979d7fc4336296c17f103c44813a8a379c6669c7a98f4d7be93787d57bbd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b3ce3ad03606c32f8eb41796dd1ff7b027184d312d3d7b9eb427d1f9305f873 = $this->env->getExtension("native_profiler");
        $__internal_6b3ce3ad03606c32f8eb41796dd1ff7b027184d312d3d7b9eb427d1f9305f873->enter($__internal_6b3ce3ad03606c32f8eb41796dd1ff7b027184d312d3d7b9eb427d1f9305f873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6b3ce3ad03606c32f8eb41796dd1ff7b027184d312d3d7b9eb427d1f9305f873->leave($__internal_6b3ce3ad03606c32f8eb41796dd1ff7b027184d312d3d7b9eb427d1f9305f873_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
