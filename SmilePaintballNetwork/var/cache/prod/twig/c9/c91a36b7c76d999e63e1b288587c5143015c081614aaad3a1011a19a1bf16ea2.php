<?php

/* @HWIOAuth/layout.html.twig */
class __TwigTemplate_7984a32e02aafaa846d7057b64910516400627769518b98de466e8409ac687aa extends Twig_Template
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
    }

    // line 8
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        // line 9
        echo "            ";
    }

    public function getTemplateName()
    {
        return "@HWIOAuth/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  38 => 8,  31 => 10,  29 => 8,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@HWIOAuth/layout.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\vendor\\hwi\\oauth-bundle\\Resources\\views\\layout.html.twig");
    }
}
