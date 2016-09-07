<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_88221febb9343aa7af5736acbd9225d5f59301fbe1e2e779cee9f1bd70525090 extends Twig_Template
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
        $__internal_0e23444fd7568e654b5825e7a371358c906a3ed9fa612b03a343c252467037d7 = $this->env->getExtension("native_profiler");
        $__internal_0e23444fd7568e654b5825e7a371358c906a3ed9fa612b03a343c252467037d7->enter($__internal_0e23444fd7568e654b5825e7a371358c906a3ed9fa612b03a343c252467037d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0e23444fd7568e654b5825e7a371358c906a3ed9fa612b03a343c252467037d7->leave($__internal_0e23444fd7568e654b5825e7a371358c906a3ed9fa612b03a343c252467037d7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
