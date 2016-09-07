<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_84ca9fcfa8b2bd829fbed3270dcf3744c352eb45e7ecc6ef70501b5f5d5d62c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_0207f72136fdc164c8b9917823ab2a26e02b21efb9c3f6dddbeda7d0db2358c7 = $this->env->getExtension("native_profiler");
        $__internal_0207f72136fdc164c8b9917823ab2a26e02b21efb9c3f6dddbeda7d0db2358c7->enter($__internal_0207f72136fdc164c8b9917823ab2a26e02b21efb9c3f6dddbeda7d0db2358c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0207f72136fdc164c8b9917823ab2a26e02b21efb9c3f6dddbeda7d0db2358c7->leave($__internal_0207f72136fdc164c8b9917823ab2a26e02b21efb9c3f6dddbeda7d0db2358c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_37ee7bd89edce1a68e82525e6050d1e76410b1932c981c60b9a41ff9a20f5d91 = $this->env->getExtension("native_profiler");
        $__internal_37ee7bd89edce1a68e82525e6050d1e76410b1932c981c60b9a41ff9a20f5d91->enter($__internal_37ee7bd89edce1a68e82525e6050d1e76410b1932c981c60b9a41ff9a20f5d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_37ee7bd89edce1a68e82525e6050d1e76410b1932c981c60b9a41ff9a20f5d91->leave($__internal_37ee7bd89edce1a68e82525e6050d1e76410b1932c981c60b9a41ff9a20f5d91_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a0f1c8aa8dfa4665453c96c10ed2ed6f0bd157a15ccda331ba764e64aab53ab = $this->env->getExtension("native_profiler");
        $__internal_2a0f1c8aa8dfa4665453c96c10ed2ed6f0bd157a15ccda331ba764e64aab53ab->enter($__internal_2a0f1c8aa8dfa4665453c96c10ed2ed6f0bd157a15ccda331ba764e64aab53ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2a0f1c8aa8dfa4665453c96c10ed2ed6f0bd157a15ccda331ba764e64aab53ab->leave($__internal_2a0f1c8aa8dfa4665453c96c10ed2ed6f0bd157a15ccda331ba764e64aab53ab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
