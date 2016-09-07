<?php

/* SmilePlatformBundle::Default/form/addNewPost.html.twig */
class __TwigTemplate_4194c7909cee61a408471cf4b6c7de72dbcf28ddf9c6ef59547f16e534d981d9 extends Twig_Template
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
        $__internal_7764cdfa619d6a46daa5a7b9515831a255a414673d542de98120f8741e32ec38 = $this->env->getExtension("native_profiler");
        $__internal_7764cdfa619d6a46daa5a7b9515831a255a414673d542de98120f8741e32ec38->enter($__internal_7764cdfa619d6a46daa5a7b9515831a255a414673d542de98120f8741e32ec38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle::Default/form/addNewPost.html.twig"));

        // line 1
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    Add a new post
";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_7764cdfa619d6a46daa5a7b9515831a255a414673d542de98120f8741e32ec38->leave($__internal_7764cdfa619d6a46daa5a7b9515831a255a414673d542de98120f8741e32ec38_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle::Default/form/addNewPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  27 => 3,  22 => 1,);
    }
}
/* {{ form_start(form) }}*/
/*     Add a new post*/
/* {{ form_rest(form) }}*/
/* {{ form_end(form) }}*/
