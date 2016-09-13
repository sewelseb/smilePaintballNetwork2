<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6fce031692f5bf7db8070f6bc14f297caf410d6a62ab90597eed362df2829384 extends Twig_Template
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
        $__internal_bc7e17d1fdaeecee55fab1a3b9382c779493734cc7584a31aff29db8d8fc9b95 = $this->env->getExtension("native_profiler");
        $__internal_bc7e17d1fdaeecee55fab1a3b9382c779493734cc7584a31aff29db8d8fc9b95->enter($__internal_bc7e17d1fdaeecee55fab1a3b9382c779493734cc7584a31aff29db8d8fc9b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc7e17d1fdaeecee55fab1a3b9382c779493734cc7584a31aff29db8d8fc9b95->leave($__internal_bc7e17d1fdaeecee55fab1a3b9382c779493734cc7584a31aff29db8d8fc9b95_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e406a85a6ecbbc3857328c7e9f983d7182128f07fa070d844cef34e70c676ba1 = $this->env->getExtension("native_profiler");
        $__internal_e406a85a6ecbbc3857328c7e9f983d7182128f07fa070d844cef34e70c676ba1->enter($__internal_e406a85a6ecbbc3857328c7e9f983d7182128f07fa070d844cef34e70c676ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e406a85a6ecbbc3857328c7e9f983d7182128f07fa070d844cef34e70c676ba1->leave($__internal_e406a85a6ecbbc3857328c7e9f983d7182128f07fa070d844cef34e70c676ba1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_02167d32a11ba3639f3d90a4cdc97421eab643aba23c15db04f8ff10d14fcb05 = $this->env->getExtension("native_profiler");
        $__internal_02167d32a11ba3639f3d90a4cdc97421eab643aba23c15db04f8ff10d14fcb05->enter($__internal_02167d32a11ba3639f3d90a4cdc97421eab643aba23c15db04f8ff10d14fcb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02167d32a11ba3639f3d90a4cdc97421eab643aba23c15db04f8ff10d14fcb05->leave($__internal_02167d32a11ba3639f3d90a4cdc97421eab643aba23c15db04f8ff10d14fcb05_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_46219a948f7c3a410e39f16469accf307acb645ede8562ad257c17d1c3689f75 = $this->env->getExtension("native_profiler");
        $__internal_46219a948f7c3a410e39f16469accf307acb645ede8562ad257c17d1c3689f75->enter($__internal_46219a948f7c3a410e39f16469accf307acb645ede8562ad257c17d1c3689f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_46219a948f7c3a410e39f16469accf307acb645ede8562ad257c17d1c3689f75->leave($__internal_46219a948f7c3a410e39f16469accf307acb645ede8562ad257c17d1c3689f75_prof);

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
