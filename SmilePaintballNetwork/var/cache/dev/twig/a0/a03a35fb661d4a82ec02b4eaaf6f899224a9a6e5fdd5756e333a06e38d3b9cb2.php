<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9be411bc474b9badf396a825ab6cc3760dd74b4cd269cefc634638497ab5e833 extends Twig_Template
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
        $__internal_fc16d7098b7dfeacbcdfecc172436a9f3a7f99394e6a0fa1acf4308d5bf0f756 = $this->env->getExtension("native_profiler");
        $__internal_fc16d7098b7dfeacbcdfecc172436a9f3a7f99394e6a0fa1acf4308d5bf0f756->enter($__internal_fc16d7098b7dfeacbcdfecc172436a9f3a7f99394e6a0fa1acf4308d5bf0f756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fc16d7098b7dfeacbcdfecc172436a9f3a7f99394e6a0fa1acf4308d5bf0f756->leave($__internal_fc16d7098b7dfeacbcdfecc172436a9f3a7f99394e6a0fa1acf4308d5bf0f756_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
