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
        $__internal_130428a5b7e3628f26db639c2d43c01ea106a77660d2fd1cc6807cfc2d90cf12 = $this->env->getExtension("native_profiler");
        $__internal_130428a5b7e3628f26db639c2d43c01ea106a77660d2fd1cc6807cfc2d90cf12->enter($__internal_130428a5b7e3628f26db639c2d43c01ea106a77660d2fd1cc6807cfc2d90cf12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_130428a5b7e3628f26db639c2d43c01ea106a77660d2fd1cc6807cfc2d90cf12->leave($__internal_130428a5b7e3628f26db639c2d43c01ea106a77660d2fd1cc6807cfc2d90cf12_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_91d036f7ad606f74277a56f68155b192882afbcd3b2ad54ad11ee17b8c650b72 = $this->env->getExtension("native_profiler");
        $__internal_91d036f7ad606f74277a56f68155b192882afbcd3b2ad54ad11ee17b8c650b72->enter($__internal_91d036f7ad606f74277a56f68155b192882afbcd3b2ad54ad11ee17b8c650b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_91d036f7ad606f74277a56f68155b192882afbcd3b2ad54ad11ee17b8c650b72->leave($__internal_91d036f7ad606f74277a56f68155b192882afbcd3b2ad54ad11ee17b8c650b72_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bc25f2ee61c4a7972084a79c900f18d3a04a6ff8f238e51177f4787b05620760 = $this->env->getExtension("native_profiler");
        $__internal_bc25f2ee61c4a7972084a79c900f18d3a04a6ff8f238e51177f4787b05620760->enter($__internal_bc25f2ee61c4a7972084a79c900f18d3a04a6ff8f238e51177f4787b05620760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bc25f2ee61c4a7972084a79c900f18d3a04a6ff8f238e51177f4787b05620760->leave($__internal_bc25f2ee61c4a7972084a79c900f18d3a04a6ff8f238e51177f4787b05620760_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e434c4fb032c49120f939c971860e05b5b81ede92120bc288a9d95a4d7912d51 = $this->env->getExtension("native_profiler");
        $__internal_e434c4fb032c49120f939c971860e05b5b81ede92120bc288a9d95a4d7912d51->enter($__internal_e434c4fb032c49120f939c971860e05b5b81ede92120bc288a9d95a4d7912d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e434c4fb032c49120f939c971860e05b5b81ede92120bc288a9d95a4d7912d51->leave($__internal_e434c4fb032c49120f939c971860e05b5b81ede92120bc288a9d95a4d7912d51_prof);

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
