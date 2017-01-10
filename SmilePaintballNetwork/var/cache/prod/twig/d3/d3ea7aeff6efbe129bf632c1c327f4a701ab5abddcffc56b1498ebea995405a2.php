<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_2c03852d7d3b6632ca65c049065928505edbf754a354bd7bcd820a4569e0d84a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a18c7a2a458e83d629bff3c89ae11ad4f22ce6065c7624f0e904bf3228237294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18c7a2a458e83d629bff3c89ae11ad4f22ce6065c7624f0e904bf3228237294->enter($__internal_a18c7a2a458e83d629bff3c89ae11ad4f22ce6065c7624f0e904bf3228237294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 10
        echo "        </div>
    </body>
</html>
";
        
        $__internal_a18c7a2a458e83d629bff3c89ae11ad4f22ce6065c7624f0e904bf3228237294->leave($__internal_a18c7a2a458e83d629bff3c89ae11ad4f22ce6065c7624f0e904bf3228237294_prof);

    }

    // line 8
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_3f7e60f200d122c0c85e0a6978155d845a8065778cd66b9b5cf7c4ff94b4c0d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7e60f200d122c0c85e0a6978155d845a8065778cd66b9b5cf7c4ff94b4c0d4->enter($__internal_3f7e60f200d122c0c85e0a6978155d845a8065778cd66b9b5cf7c4ff94b4c0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 9
        echo "            ";
        
        $__internal_3f7e60f200d122c0c85e0a6978155d845a8065778cd66b9b5cf7c4ff94b4c0d4->leave($__internal_3f7e60f200d122c0c85e0a6978155d845a8065778cd66b9b5cf7c4ff94b4c0d4_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  44 => 8,  34 => 10,  32 => 8,  23 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            {% block hwi_oauth_content %}
            {% endblock hwi_oauth_content %}
        </div>
    </body>
</html>
";
    }
}
