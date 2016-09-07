<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_56aafde284b490505239f08f06408a1bb247f3855a115f916ea72cc722e8ccc3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_a79b480b137bdf2a6218549dd828fd5663e7ab58f2245e2c62efc8dac1027af2 = $this->env->getExtension("native_profiler");
        $__internal_a79b480b137bdf2a6218549dd828fd5663e7ab58f2245e2c62efc8dac1027af2->enter($__internal_a79b480b137bdf2a6218549dd828fd5663e7ab58f2245e2c62efc8dac1027af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a79b480b137bdf2a6218549dd828fd5663e7ab58f2245e2c62efc8dac1027af2->leave($__internal_a79b480b137bdf2a6218549dd828fd5663e7ab58f2245e2c62efc8dac1027af2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a14da0baec4629ad0a41574798f507ad45f2ce6a26fc3636c936df80b594df30 = $this->env->getExtension("native_profiler");
        $__internal_a14da0baec4629ad0a41574798f507ad45f2ce6a26fc3636c936df80b594df30->enter($__internal_a14da0baec4629ad0a41574798f507ad45f2ce6a26fc3636c936df80b594df30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a14da0baec4629ad0a41574798f507ad45f2ce6a26fc3636c936df80b594df30->leave($__internal_a14da0baec4629ad0a41574798f507ad45f2ce6a26fc3636c936df80b594df30_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8e8f8e3782349803aa18adc2c926fe21b85af721f27ca53d7e46e40a9621777 = $this->env->getExtension("native_profiler");
        $__internal_f8e8f8e3782349803aa18adc2c926fe21b85af721f27ca53d7e46e40a9621777->enter($__internal_f8e8f8e3782349803aa18adc2c926fe21b85af721f27ca53d7e46e40a9621777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f8e8f8e3782349803aa18adc2c926fe21b85af721f27ca53d7e46e40a9621777->leave($__internal_f8e8f8e3782349803aa18adc2c926fe21b85af721f27ca53d7e46e40a9621777_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
