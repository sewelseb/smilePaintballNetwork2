<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_78d311d8c4d8b01cf790738556fe18dfa5417ad00a4e2f1b7a3563e1e9e4049c extends Twig_Template
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
        $__internal_9b3751e0409130a075d353ce06bdd8274de8cbf5a56735ac08e58504e4414934 = $this->env->getExtension("native_profiler");
        $__internal_9b3751e0409130a075d353ce06bdd8274de8cbf5a56735ac08e58504e4414934->enter($__internal_9b3751e0409130a075d353ce06bdd8274de8cbf5a56735ac08e58504e4414934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9b3751e0409130a075d353ce06bdd8274de8cbf5a56735ac08e58504e4414934->leave($__internal_9b3751e0409130a075d353ce06bdd8274de8cbf5a56735ac08e58504e4414934_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
