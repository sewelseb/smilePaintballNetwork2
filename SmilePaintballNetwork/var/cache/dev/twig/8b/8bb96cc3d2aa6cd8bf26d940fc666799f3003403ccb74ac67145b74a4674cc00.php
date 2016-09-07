<?php

/* base.html.twig */
class __TwigTemplate_9c0786db440392a790b7b947e16750a36231bc773cd33a90994b4028d4a2c1ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c498f559a5fa105dc51ddf080350c4f0fbcf59800e650f9898453869988813e = $this->env->getExtension("native_profiler");
        $__internal_0c498f559a5fa105dc51ddf080350c4f0fbcf59800e650f9898453869988813e->enter($__internal_0c498f559a5fa105dc51ddf080350c4f0fbcf59800e650f9898453869988813e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0c498f559a5fa105dc51ddf080350c4f0fbcf59800e650f9898453869988813e->leave($__internal_0c498f559a5fa105dc51ddf080350c4f0fbcf59800e650f9898453869988813e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6232986df8a35ba3ac73c209184a901b829d53d34df387cbdb39a15352ac721b = $this->env->getExtension("native_profiler");
        $__internal_6232986df8a35ba3ac73c209184a901b829d53d34df387cbdb39a15352ac721b->enter($__internal_6232986df8a35ba3ac73c209184a901b829d53d34df387cbdb39a15352ac721b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6232986df8a35ba3ac73c209184a901b829d53d34df387cbdb39a15352ac721b->leave($__internal_6232986df8a35ba3ac73c209184a901b829d53d34df387cbdb39a15352ac721b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9ba044891bd4f790018efa38831f442d653369ce5d7ba31fd5195518db2b98b7 = $this->env->getExtension("native_profiler");
        $__internal_9ba044891bd4f790018efa38831f442d653369ce5d7ba31fd5195518db2b98b7->enter($__internal_9ba044891bd4f790018efa38831f442d653369ce5d7ba31fd5195518db2b98b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9ba044891bd4f790018efa38831f442d653369ce5d7ba31fd5195518db2b98b7->leave($__internal_9ba044891bd4f790018efa38831f442d653369ce5d7ba31fd5195518db2b98b7_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bce932123f7699d4a9df3ffa9970fc0b81c85bfccc984d84963c5a3224dffeb = $this->env->getExtension("native_profiler");
        $__internal_3bce932123f7699d4a9df3ffa9970fc0b81c85bfccc984d84963c5a3224dffeb->enter($__internal_3bce932123f7699d4a9df3ffa9970fc0b81c85bfccc984d84963c5a3224dffeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3bce932123f7699d4a9df3ffa9970fc0b81c85bfccc984d84963c5a3224dffeb->leave($__internal_3bce932123f7699d4a9df3ffa9970fc0b81c85bfccc984d84963c5a3224dffeb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b404bef6dc4fefe4be37001a9f6eb02385f195423918ddc41b04ba1ca86fa8d5 = $this->env->getExtension("native_profiler");
        $__internal_b404bef6dc4fefe4be37001a9f6eb02385f195423918ddc41b04ba1ca86fa8d5->enter($__internal_b404bef6dc4fefe4be37001a9f6eb02385f195423918ddc41b04ba1ca86fa8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b404bef6dc4fefe4be37001a9f6eb02385f195423918ddc41b04ba1ca86fa8d5->leave($__internal_b404bef6dc4fefe4be37001a9f6eb02385f195423918ddc41b04ba1ca86fa8d5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
