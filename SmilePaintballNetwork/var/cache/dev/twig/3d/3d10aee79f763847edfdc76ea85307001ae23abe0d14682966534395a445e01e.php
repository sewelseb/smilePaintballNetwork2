<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_b575cb6e20c8f935753ac2b612e7b52808373b50c764e73617232d3858c2a6d2 extends Twig_Template
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
        $__internal_d92b6b26e7170cad2c8f0780b2970aafa8a004d88df35bea539b88234769e29c = $this->env->getExtension("native_profiler");
        $__internal_d92b6b26e7170cad2c8f0780b2970aafa8a004d88df35bea539b88234769e29c->enter($__internal_d92b6b26e7170cad2c8f0780b2970aafa8a004d88df35bea539b88234769e29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d92b6b26e7170cad2c8f0780b2970aafa8a004d88df35bea539b88234769e29c->leave($__internal_d92b6b26e7170cad2c8f0780b2970aafa8a004d88df35bea539b88234769e29c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
