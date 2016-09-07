<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_2a186ed524b28e7470cef31b9ee6e791f56208ace2d8e964ffa6c93b5f74ff1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4b122d6b026056ed29565d057f2ccd15d05a20cb691697c7047b9553e98d9e3 = $this->env->getExtension("native_profiler");
        $__internal_f4b122d6b026056ed29565d057f2ccd15d05a20cb691697c7047b9553e98d9e3->enter($__internal_f4b122d6b026056ed29565d057f2ccd15d05a20cb691697c7047b9553e98d9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4b122d6b026056ed29565d057f2ccd15d05a20cb691697c7047b9553e98d9e3->leave($__internal_f4b122d6b026056ed29565d057f2ccd15d05a20cb691697c7047b9553e98d9e3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34f14eaf156672ea46505c5abd4dd3db0d64c7c5c8d7e476f1c614c5fab94325 = $this->env->getExtension("native_profiler");
        $__internal_34f14eaf156672ea46505c5abd4dd3db0d64c7c5c8d7e476f1c614c5fab94325->enter($__internal_34f14eaf156672ea46505c5abd4dd3db0d64c7c5c8d7e476f1c614c5fab94325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_34f14eaf156672ea46505c5abd4dd3db0d64c7c5c8d7e476f1c614c5fab94325->leave($__internal_34f14eaf156672ea46505c5abd4dd3db0d64c7c5c8d7e476f1c614c5fab94325_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
