<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1ac375a19b84793628369f399d29074b1a66d10f1787b989684c7396e0cb0878 extends Twig_Template
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
        $__internal_73bf10bbdf22323dab424cc220e9480219b12e4fa549114ae11ceb7f58a4d642 = $this->env->getExtension("native_profiler");
        $__internal_73bf10bbdf22323dab424cc220e9480219b12e4fa549114ae11ceb7f58a4d642->enter($__internal_73bf10bbdf22323dab424cc220e9480219b12e4fa549114ae11ceb7f58a4d642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73bf10bbdf22323dab424cc220e9480219b12e4fa549114ae11ceb7f58a4d642->leave($__internal_73bf10bbdf22323dab424cc220e9480219b12e4fa549114ae11ceb7f58a4d642_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2bdefc102a803281385556cc7a3c1ccd346845861aa12f727e53ebf3b20996f2 = $this->env->getExtension("native_profiler");
        $__internal_2bdefc102a803281385556cc7a3c1ccd346845861aa12f727e53ebf3b20996f2->enter($__internal_2bdefc102a803281385556cc7a3c1ccd346845861aa12f727e53ebf3b20996f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2bdefc102a803281385556cc7a3c1ccd346845861aa12f727e53ebf3b20996f2->leave($__internal_2bdefc102a803281385556cc7a3c1ccd346845861aa12f727e53ebf3b20996f2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e6e164b928a3ebc80c62d9eb36f9d1e1023103644c6e2f4722d5d35f5ceae348 = $this->env->getExtension("native_profiler");
        $__internal_e6e164b928a3ebc80c62d9eb36f9d1e1023103644c6e2f4722d5d35f5ceae348->enter($__internal_e6e164b928a3ebc80c62d9eb36f9d1e1023103644c6e2f4722d5d35f5ceae348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e6e164b928a3ebc80c62d9eb36f9d1e1023103644c6e2f4722d5d35f5ceae348->leave($__internal_e6e164b928a3ebc80c62d9eb36f9d1e1023103644c6e2f4722d5d35f5ceae348_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd7a5eb3db8d8f6eaf8e88f44fd00b6acafb07aa07433779d5e9d1db3b0d4b27 = $this->env->getExtension("native_profiler");
        $__internal_bd7a5eb3db8d8f6eaf8e88f44fd00b6acafb07aa07433779d5e9d1db3b0d4b27->enter($__internal_bd7a5eb3db8d8f6eaf8e88f44fd00b6acafb07aa07433779d5e9d1db3b0d4b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bd7a5eb3db8d8f6eaf8e88f44fd00b6acafb07aa07433779d5e9d1db3b0d4b27->leave($__internal_bd7a5eb3db8d8f6eaf8e88f44fd00b6acafb07aa07433779d5e9d1db3b0d4b27_prof);

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
