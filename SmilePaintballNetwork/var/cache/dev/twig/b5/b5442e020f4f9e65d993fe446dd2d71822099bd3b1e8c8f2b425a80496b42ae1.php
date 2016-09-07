<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_00fdae232d96028941d568fc0ca97ce0690ee1f45b659fddaa7c431a221fed58 extends Twig_Template
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
        $__internal_3b39e4a2ddeb67cb0b753df3d3f7f3cf3c58e31f59233a4264e879aa650158f1 = $this->env->getExtension("native_profiler");
        $__internal_3b39e4a2ddeb67cb0b753df3d3f7f3cf3c58e31f59233a4264e879aa650158f1->enter($__internal_3b39e4a2ddeb67cb0b753df3d3f7f3cf3c58e31f59233a4264e879aa650158f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_3b39e4a2ddeb67cb0b753df3d3f7f3cf3c58e31f59233a4264e879aa650158f1->leave($__internal_3b39e4a2ddeb67cb0b753df3d3f7f3cf3c58e31f59233a4264e879aa650158f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
