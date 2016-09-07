<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2246fba5909a0111bc7394749a703d95fff3009ebf5f23c825795c4d8cdac48e extends Twig_Template
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
        $__internal_70a5b4357755e5e777c8b5f11878db0fc386119d38531098689b0972c187035c = $this->env->getExtension("native_profiler");
        $__internal_70a5b4357755e5e777c8b5f11878db0fc386119d38531098689b0972c187035c->enter($__internal_70a5b4357755e5e777c8b5f11878db0fc386119d38531098689b0972c187035c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_70a5b4357755e5e777c8b5f11878db0fc386119d38531098689b0972c187035c->leave($__internal_70a5b4357755e5e777c8b5f11878db0fc386119d38531098689b0972c187035c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
