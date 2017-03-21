<?php

/* @SmileUser/Default/form/editProfile.html.twig */
class __TwigTemplate_0012527585d9da62d09544d80828d490220dad08481fd1e1422f489ece06a08d extends Twig_Template
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
        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formEditProfile"] ?? null), 'form_start', array("attr" => array("class" => "formEditProfile")));
        echo "
    ";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formEditProfile"] ?? null), 'errors');
        echo "
        <div class=\"form-group text-center\">
            ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formEditProfile"] ?? null), "firstName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Firstname", "maxlength" => "255")));
        echo "
        </div>
        <div class=\"form-group text-center\">
            ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formEditProfile"] ?? null), "lastName", array()), 'widget', array("attr" => array("class" => "form-control input-lg", "placeholder" => "Lastname", "maxlength" => "255")));
        echo "
        </div>
        <div class=\"form-group text-center\">
            ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formEditProfile"] ?? null), "picture", array()), 'label', array("label_attr" => array("class" => "pull-left"), "label" => "Profile picture:"));
        echo "<br/>
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"3000000\" />
            ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["formEditProfile"] ?? null), "picture", array()), "file", array()), 'widget', array("attr" => array("class" => "", "accept" => "image/*")));
        echo "
        </div>

        <div class=\"form-group\">
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["formEditProfile"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-lg btn-primary pull-right", "onclick" => "submitEditProfile()")));
        echo "
        </div>

    ";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["formEditProfile"] ?? null), 'rest');
        echo "
";
        // line 20
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["formEditProfile"] ?? null), 'form_end');
    }

    public function getTemplateName()
    {
        return "@SmileUser/Default/form/editProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 20,  58 => 19,  52 => 16,  45 => 12,  40 => 10,  34 => 7,  28 => 4,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@SmileUser/Default/form/editProfile.html.twig", "D:\\wamp64\\www\\smilePaintballNetwork2\\SmilePaintballNetwork\\src\\Smile\\UserBundle\\Resources\\views\\Default\\form\\editProfile.html.twig");
    }
}
