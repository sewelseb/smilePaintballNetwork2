<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8388a3e92127ed8ae09b3ad1ce482213d784b2095312fe63e74053824da7c9e0 extends Twig_Template
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
        $__internal_8f54aa4cc5fa13d652a1da8bbdd137e41c73d716a2abf67ea2f1bfc56c629fd3 = $this->env->getExtension("native_profiler");
        $__internal_8f54aa4cc5fa13d652a1da8bbdd137e41c73d716a2abf67ea2f1bfc56c629fd3->enter($__internal_8f54aa4cc5fa13d652a1da8bbdd137e41c73d716a2abf67ea2f1bfc56c629fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8f54aa4cc5fa13d652a1da8bbdd137e41c73d716a2abf67ea2f1bfc56c629fd3->leave($__internal_8f54aa4cc5fa13d652a1da8bbdd137e41c73d716a2abf67ea2f1bfc56c629fd3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
