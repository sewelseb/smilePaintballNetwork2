<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_253ba495b3c9e2be376d997fc6e2d6dc4977ac26c99c43693079b8dbb7f0cb74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_13428125bfe479a319a04258671fccc64767afcb3cb4e7508d88b80115cf26e5 = $this->env->getExtension("native_profiler");
        $__internal_13428125bfe479a319a04258671fccc64767afcb3cb4e7508d88b80115cf26e5->enter($__internal_13428125bfe479a319a04258671fccc64767afcb3cb4e7508d88b80115cf26e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13428125bfe479a319a04258671fccc64767afcb3cb4e7508d88b80115cf26e5->leave($__internal_13428125bfe479a319a04258671fccc64767afcb3cb4e7508d88b80115cf26e5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7d09e6d4d9cd451c2cd8e6e037e1d9e5eef27239b9aa97c97433c35dc489e04a = $this->env->getExtension("native_profiler");
        $__internal_7d09e6d4d9cd451c2cd8e6e037e1d9e5eef27239b9aa97c97433c35dc489e04a->enter($__internal_7d09e6d4d9cd451c2cd8e6e037e1d9e5eef27239b9aa97c97433c35dc489e04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7d09e6d4d9cd451c2cd8e6e037e1d9e5eef27239b9aa97c97433c35dc489e04a->leave($__internal_7d09e6d4d9cd451c2cd8e6e037e1d9e5eef27239b9aa97c97433c35dc489e04a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_81b1653712c778bceffdacd31e70772ff7235a4982f6feb39f1799f8c4571878 = $this->env->getExtension("native_profiler");
        $__internal_81b1653712c778bceffdacd31e70772ff7235a4982f6feb39f1799f8c4571878->enter($__internal_81b1653712c778bceffdacd31e70772ff7235a4982f6feb39f1799f8c4571878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_81b1653712c778bceffdacd31e70772ff7235a4982f6feb39f1799f8c4571878->leave($__internal_81b1653712c778bceffdacd31e70772ff7235a4982f6feb39f1799f8c4571878_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_afbe3ec161727f276f030fcce2cca2b2f465921b801cdd21b0c11dbe5b11dd7c = $this->env->getExtension("native_profiler");
        $__internal_afbe3ec161727f276f030fcce2cca2b2f465921b801cdd21b0c11dbe5b11dd7c->enter($__internal_afbe3ec161727f276f030fcce2cca2b2f465921b801cdd21b0c11dbe5b11dd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_afbe3ec161727f276f030fcce2cca2b2f465921b801cdd21b0c11dbe5b11dd7c->leave($__internal_afbe3ec161727f276f030fcce2cca2b2f465921b801cdd21b0c11dbe5b11dd7c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
