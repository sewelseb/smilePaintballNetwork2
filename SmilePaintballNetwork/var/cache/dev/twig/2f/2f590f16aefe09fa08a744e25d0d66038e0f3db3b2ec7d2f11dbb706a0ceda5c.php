<?php

/* SmilePlatformBundle:Default:contact.html.twig */
class __TwigTemplate_91780ca983e4f38240dfd9b266b594e9d362d79736537bccf5813d78ea0807d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmilePlatformBundle::Default/layout.html.twig", "SmilePlatformBundle:Default:contact.html.twig", 1);
        $this->blocks = array(
            'pageHeader' => array($this, 'block_pageHeader'),
            'leftCollumn' => array($this, 'block_leftCollumn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SmilePlatformBundle::Default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30e11d6820b30a08c6a05da28bd97c2e29b42593cee20051e0b8b19c6463b023 = $this->env->getExtension("native_profiler");
        $__internal_30e11d6820b30a08c6a05da28bd97c2e29b42593cee20051e0b8b19c6463b023->enter($__internal_30e11d6820b30a08c6a05da28bd97c2e29b42593cee20051e0b8b19c6463b023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SmilePlatformBundle:Default:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30e11d6820b30a08c6a05da28bd97c2e29b42593cee20051e0b8b19c6463b023->leave($__internal_30e11d6820b30a08c6a05da28bd97c2e29b42593cee20051e0b8b19c6463b023_prof);

    }

    // line 3
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_3b093537fa2181abf3346b69fb12bd2461e87ca70fa0098b2b21854d552ca639 = $this->env->getExtension("native_profiler");
        $__internal_3b093537fa2181abf3346b69fb12bd2461e87ca70fa0098b2b21854d552ca639->enter($__internal_3b093537fa2181abf3346b69fb12bd2461e87ca70fa0098b2b21854d552ca639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 4
        echo "
";
        
        $__internal_3b093537fa2181abf3346b69fb12bd2461e87ca70fa0098b2b21854d552ca639->leave($__internal_3b093537fa2181abf3346b69fb12bd2461e87ca70fa0098b2b21854d552ca639_prof);

    }

    // line 7
    public function block_leftCollumn($context, array $blocks = array())
    {
        $__internal_c10cb12e7cf1bfede3231b5d91e474f51b79899ce2ac52c8f8af3174218a5cf4 = $this->env->getExtension("native_profiler");
        $__internal_c10cb12e7cf1bfede3231b5d91e474f51b79899ce2ac52c8f8af3174218a5cf4->enter($__internal_c10cb12e7cf1bfede3231b5d91e474f51b79899ce2ac52c8f8af3174218a5cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftCollumn"));

        // line 8
        echo "    <div class=\"row\" >
        <h1>Smile Paintball Network</h1>
        <hr/>
        <H2>Contact details</H2>
        <p>
            <a href=\"https://www.facebook.com/smilepaintball\">
                You can contact us by our facebook page: https://www.facebook.com/smilepaintball
            </a>
            <div data-width=\"460px\" class=\"fb-post\" data-href=\"https://www.facebook.com/smilepaintball/photos/a.1552861911596624.1073741827.1552858474930301/1733315486884598/?type=1&theater\"></div>
        </p>

    </div>
";
        
        $__internal_c10cb12e7cf1bfede3231b5d91e474f51b79899ce2ac52c8f8af3174218a5cf4->leave($__internal_c10cb12e7cf1bfede3231b5d91e474f51b79899ce2ac52c8f8af3174218a5cf4_prof);

    }

    public function getTemplateName()
    {
        return "SmilePlatformBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "SmilePlatformBundle::Default/layout.html.twig" %}*/
/* */
/* {% block pageHeader %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block leftCollumn %}*/
/*     <div class="row" >*/
/*         <h1>Smile Paintball Network</h1>*/
/*         <hr/>*/
/*         <H2>Contact details</H2>*/
/*         <p>*/
/*             <a href="https://www.facebook.com/smilepaintball">*/
/*                 You can contact us by our facebook page: https://www.facebook.com/smilepaintball*/
/*             </a>*/
/*             <div data-width="460px" class="fb-post" data-href="https://www.facebook.com/smilepaintball/photos/a.1552861911596624.1073741827.1552858474930301/1733315486884598/?type=1&theater"></div>*/
/*         </p>*/
/* */
/*     </div>*/
/* {% endblock %}*/
