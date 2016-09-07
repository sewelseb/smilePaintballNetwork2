<?php

/* ::base.html.twig */
class __TwigTemplate_babc3f134ffbe9c5c1a98aa6a67c09636b43dde3f1c8c1069ff57a612aff1f3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c62d38ce054be22a7131af17eebc7e8526ef7bc8e9ab26a8b5f6058973a896c = $this->env->getExtension("native_profiler");
        $__internal_3c62d38ce054be22a7131af17eebc7e8526ef7bc8e9ab26a8b5f6058973a896c->enter($__internal_3c62d38ce054be22a7131af17eebc7e8526ef7bc8e9ab26a8b5f6058973a896c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_3c62d38ce054be22a7131af17eebc7e8526ef7bc8e9ab26a8b5f6058973a896c->leave($__internal_3c62d38ce054be22a7131af17eebc7e8526ef7bc8e9ab26a8b5f6058973a896c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_adfbf41392328b52d8d65d72e64d171dd0cdb3057ea9a284a44584f820c2b60e = $this->env->getExtension("native_profiler");
        $__internal_adfbf41392328b52d8d65d72e64d171dd0cdb3057ea9a284a44584f820c2b60e->enter($__internal_adfbf41392328b52d8d65d72e64d171dd0cdb3057ea9a284a44584f820c2b60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_adfbf41392328b52d8d65d72e64d171dd0cdb3057ea9a284a44584f820c2b60e->leave($__internal_adfbf41392328b52d8d65d72e64d171dd0cdb3057ea9a284a44584f820c2b60e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_278ca379b09defdfee443103fb531026f61848c80fb108d1c855d3c4b9e660ae = $this->env->getExtension("native_profiler");
        $__internal_278ca379b09defdfee443103fb531026f61848c80fb108d1c855d3c4b9e660ae->enter($__internal_278ca379b09defdfee443103fb531026f61848c80fb108d1c855d3c4b9e660ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_278ca379b09defdfee443103fb531026f61848c80fb108d1c855d3c4b9e660ae->leave($__internal_278ca379b09defdfee443103fb531026f61848c80fb108d1c855d3c4b9e660ae_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e2d6fa314e5cdca0e1bfd3880677c9be4d13244f6f09314bfcc5c48e4d99d76 = $this->env->getExtension("native_profiler");
        $__internal_9e2d6fa314e5cdca0e1bfd3880677c9be4d13244f6f09314bfcc5c48e4d99d76->enter($__internal_9e2d6fa314e5cdca0e1bfd3880677c9be4d13244f6f09314bfcc5c48e4d99d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9e2d6fa314e5cdca0e1bfd3880677c9be4d13244f6f09314bfcc5c48e4d99d76->leave($__internal_9e2d6fa314e5cdca0e1bfd3880677c9be4d13244f6f09314bfcc5c48e4d99d76_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_35c49a168156a78ebe1965901467d87916d47838e6136dda94423fbc2c898b14 = $this->env->getExtension("native_profiler");
        $__internal_35c49a168156a78ebe1965901467d87916d47838e6136dda94423fbc2c898b14->enter($__internal_35c49a168156a78ebe1965901467d87916d47838e6136dda94423fbc2c898b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_35c49a168156a78ebe1965901467d87916d47838e6136dda94423fbc2c898b14->leave($__internal_35c49a168156a78ebe1965901467d87916d47838e6136dda94423fbc2c898b14_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
