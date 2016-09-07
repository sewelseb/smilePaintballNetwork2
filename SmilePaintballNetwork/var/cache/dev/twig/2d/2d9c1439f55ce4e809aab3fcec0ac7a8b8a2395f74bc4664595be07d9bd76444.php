<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_213316289c2b56f56935974c4f5b19d6ddc3d0a0de3fa1fd1ac65cda242bfc39 extends Twig_Template
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
        $__internal_b2e9cc26cef157ea0ae4a4fc884dcd9c241c3f227f1c1f3a31d548bcd04e445e = $this->env->getExtension("native_profiler");
        $__internal_b2e9cc26cef157ea0ae4a4fc884dcd9c241c3f227f1c1f3a31d548bcd04e445e->enter($__internal_b2e9cc26cef157ea0ae4a4fc884dcd9c241c3f227f1c1f3a31d548bcd04e445e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b2e9cc26cef157ea0ae4a4fc884dcd9c241c3f227f1c1f3a31d548bcd04e445e->leave($__internal_b2e9cc26cef157ea0ae4a4fc884dcd9c241c3f227f1c1f3a31d548bcd04e445e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
